FILE="./init.sql"

if [ -f "$FILE" ]; then
	mysql -u root < $PMA_SQL
	mysql -u root < $FILE
	rm $FILE
fi
