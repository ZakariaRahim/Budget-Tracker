 <?php
    include_once '../private/init.php';
    $title = 'Budget Expenses';
    include_once SHARED_PATH .'/header.php';
    include_once SHARED_PATH. "/header_nav.php";

      if(!isset($_SESSION['user'])){
        header('location: index.php');
    }


    if($_GET['id'] != ''){
        $data = Budget::findBudget(trim($_GET['id']));
        // var_dump($data);
    }else{
        redirect_to(url_for('/dashboard.php'));
    }

    if(isset($_POST['add'])){
        $decription = $_POST['title'] ?? '';
        $cost = $_POST['cost'] ?? '';
        $author = $_SESSION['user']['user_id'];
        $id = $_POST['id'] ;

        // an expense cost should be negative

        if(substr($cost, 0,1) != '-')
            $cost = -$cost;

        if(Budget::updateExpense($id, $decription, $cost, $author))
            echo "<script>confirm('Data updated...')</script>";
        else 
            echo "<script>confirm('Data not updated...')</script>"; 
    }



    ?>

    <div class="container">
        <div class="expence-area">
        <p class="expence-title">Update Expense</p>
            <form action="updateExpense.php" method="post">
                <input type="text" name= 'id' hidden="" value="<?= $data['id'] ?>">
                <div class="form-group">
                    <label for="title">Expense Description</label>
                    <input type="text" id="title" class="form-control" name="title" required value="<?php echo $desc =  $data['description'] ?? '' ?>">
                </div>

                <div class="form-group">
                    <label for="cost">Expense Cost</label>
                    <input type="number" id="cost" class="form-control" name="cost" required value="<?php echo $cost =  -$data['cost'] ?? '' ?>"> 
                </div>

                <div class="form-group">
                <button class="btn btn-outline-danger btn-block" name="add">Submit Expense</button>
                </div>
            </form>
        </div>
    </div>
    <?php
    include_once SHARED_PATH .'/footer.php';
    
    ?>
