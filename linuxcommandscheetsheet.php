# Rsync
rsync -avz /www user@ip:/www

#Ein tar.gz-Archiv erstellen:
tar cfvz archiv.tar.gz inhalt1 inhalt2

#Die Datei test.tar.gz (mit gzip komprimiert) entpacken
tar xfvz test.tar.gz

#Backup Datenbank
mysqldump -u username -p database_name > backup_file.sql

#Import Datenbank Backup
mysql -u username -p database_name < backup_file.sql

# SCP     // alter server               // neuer server
scp  miguel@10.1.2.2:/home/miguel/ miguel@10.1.2.3:/home/miguel/
scp datei1 datei2 user@server:/zielverzeichnis/
