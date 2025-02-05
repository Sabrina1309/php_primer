<?php include __DIR__ . "/header.php"; ?>
<form>
    <div class="mb-3">
    <label for="name" type="text">Name: </label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
    </div>
    <div class="mb-3">
    <label for="email" type="email">Email: </label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
    </div>

    <div class="mb-3">

    <label for="message" class="form-label">Message:</label>
    <textarea class="form-control" id="message" name="message" rows="4" placeholder="write your message"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php include __DIR__ . "/footer.php"; ?>