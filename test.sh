#!/bin/bash
bin/behat
res=$?
echo $1
if [ $res -eq 0 ] 
then
    git add features/searcher.feature
    git add src/Searcher/Searcher.php
    git commit -m '$1'
fi;
