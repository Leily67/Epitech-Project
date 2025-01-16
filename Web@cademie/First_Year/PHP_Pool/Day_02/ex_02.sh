#!/bin/bash
if [[ -z "$1" ]]; then
  awk -F',' 'NR > 1 {total++} END {print total}' students.csv
else
  awk -F',' -v city="$1" 'NR > 1 && $2 == city {count++} END {print count}' students.csv
fi
