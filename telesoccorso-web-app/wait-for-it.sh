#!/bin/bash

echo "Positional Parameters"
echo 'Database name ' $MYSQL_DATABASE
echo 'Database port ' $MYSQL_PORT
echo 'App name ' $APP_NAME

echo 'Launching ' $MYSQL_DATABASE ' on port ' $MYSQL_PORT

while ! nc -vz $MYSQL_DATABASE $MYSQL_PORT; do   
  sleep 3
done

echo 'Launching java program' $JAVA_APP
$JAVA_APP