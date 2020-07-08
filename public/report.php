<?php
include_once '../private/init.php';

$title = "Get Report";

include_once  SHARED_PATH . "/header.php";
include_once  SHARED_PATH . "/header_nav.php";

if (isset($_GET['error'])) {
    echo "<script>alert('No results found')</script>";
}



?>



<div id="form1_container">
    <form action="report.ajax.php" method="post">
        <h2 class="form-title">generate report</h2>
        <div class="container">
            <div class="row">
                <div class="form-group">
                    <input type="date" class="form-control" name="dateFrom" placeholder="date from" id="dateFrom" required>
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" name="dateTo" placeholder="date to" id="dateTo" required>
                </div>
                <div class="form-group">
                    <select name="type" class="form-control" id="type" required>
                        <option value="" disabled selected>Budget type</option>
                        <option value="1">All</option>
                        <option value="expense">Expense</option>
                        <option value="revenue">Revenue</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" id="submit" class="btn btn-outline-primary btn-block" name="submit">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="display-area" id="display">

</div>

</div>


<?php
include_once SHARED_PATH . "/footer.php"; ?>