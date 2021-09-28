<?php
print"<pre>";

print "GET";
print_r($_GET);

print "POST";
print_r($_POST);

print "REQUEST";
print_r($_REQUEST);

// ?nm=raj&age=23 - Query String

// $_GET
// advantage: it creates url dependant page, so is usefull for future refrence, bookmarking and sharing
// disadvantage: it create complex url,
                // it expose the passing data (not secure), 
                // it has limit of passing data

// $_POST
// disadvantage: it doesn't create url dependant page, not usefull for future refrence, bookmarking and sharing
// advantage: it creates clean url,
                // it doesn't expose the passing data (secure), 
                // it has no limit of passing data