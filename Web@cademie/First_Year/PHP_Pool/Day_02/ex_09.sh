#!/bin/bash
cat passwd | awk "NR >= ${MY_LINE1} && NR <= ${MY_LINE2}" | awk 'NR % 2 == 0 {print $1}' | rev | sort -r | tr '\n' ',' | sed 's/,$/./'
