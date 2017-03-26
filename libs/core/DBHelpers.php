<?php

class DBHelpers {

    public function __construct() {
        echo "DBHelpers class initialized";
    }

    public function safe_query($query, $count_results = false) {

        global $RESULT_COUNT, $LAST_INSERT_ID;
        $statement = false;
        $result_rows = array();
        if (NO_DB) {
            return $result_rows;
        }
        $connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($connection->connect_error) {
            return admin_error("Connection error: " . $connection->connect_error);
        }
        $query = stripslashes($connection->escape_string($query));
        if (!($results = $connection->query($query))) {
            return admin_error("Query error: " . $connection->error);
        } else if ($results === true) {
            $LAST_INSERT_ID = $connection->insert_id;
          $connection->close();
          return true;
        }
        if ($count_results) {
            $RESULT_COUNT = $connection->query("SELECT FOUND_ROWS()")->fetch_assoc();
            $RESULT_COUNT = $RESULT_COUNT['FOUND_ROWS()'];
        }
        while ($row = $results->fetch_assoc()) {
            $result_rows[] = $row;
        }
        $results->close();
        $connection->close();
        return $result_rows;
    }
}