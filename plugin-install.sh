#!/bin/bash

list=`cat /Users/moose/_sh/plugin-list`

for plugin in $list 
do

wp plugin install $plugin
wp plugin activate $plugin

done 
