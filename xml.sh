#! /bin/bash

find '/home/pt/Pulpit/GDruk/' -type f -iname "*.xml" -exec bash -c 'FILE="$1"; php /home/pt/Pulpit/GDruk/c.php "${FILE}"' _ '{}' \;
mv /home/pt/Pulpit/GDruk/*.xml /home/pt/Pulpit/tu/
