<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Web Page</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1 class="mt-5">Welcome to My Pande Agency</h1>
    
    <form action="checkbill.php" method="post">
        <div class="form-group mt-3">
            <label for="inputText">Enter Token Number</label>
            <input type="number" class="form-control" id="inputText" name="inputText" placeholder="Type Token number">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>

<!-- Add Bootstrap JS and jQuery scripts -->
<script>
    function goBack() {
        window.history.back();
    }
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
