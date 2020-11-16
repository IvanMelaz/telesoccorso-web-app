FILES=/app/*.sh
for f in $FILES
do
  mysql -u admin -pMidara01$ -h database-telesoccorso.chhghtiwj1vw.us-east-2.rds.amazonaws.com -e $f
  echo "Processing $f file..."
  # take action on each file. $f store current file name
  cat $f
done

