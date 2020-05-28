<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>

<!-- now using a function url_for(), 
    it points to the public folder so you will 
    just continue from the public folder going -->
    <link rel="stylesheet" href="<?php echo url_for('/css/bootstrap.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo url_for('/css/fontawesome/css/all.css')?>"  type="text/css">
    <link rel="stylesheet" href="<?php echo url_for('/styles/budget.css')?>">
    <link rel="stylesheet" href="<?php echo url_for('/styles/budgetapproval.css') ?>">
    <link rel="stylesheet" href="<?php echo url_for('/styles/index.css')?>">
     <link rel="stylesheet" href="<?php echo url_for('/styles/style.css')?>">
   

</head>

<body>