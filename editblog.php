
<?php include 'header.php';
$id = $_GET['id'];
$qry = "SELECT * FROM blogs WHERE id=$id";
include '../dbconnection.php';
$result = mysqli_query($conn, $qry);
$row = mysqli_fetch_assoc($result);
include '../closeconnection.php';
?>
<h2 class="text-3xl font-bold">Edit Blog</h2>
<hr class="h-1 bg-blue-600">
<form action="actionblog.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    <input type="date" class="p-2 rounded block my-4 border w-full" name="date" value="<?php echo $row['blog_date']; ?>">

    <input type="text" class="p-2 rounded block my-4 border w-full" placeholder="Title" name="title" value="<?php echo $row['title']; ?>">

    <textarea name="description" id="" class="p-2 rounded block my-4 border w-full" placeholder="Enter Description"><?php echo $row['description']; ?></textarea>

    <p>Current Picture</p>
    <img src="../uploads/<?php echo $row['photopath']; ?>" alt="" class="w-20 h-20 object-cover rounded">
    <input type="hidden" name="oldpath" value="<?php echo $row['photopath']; ?>">

    <input type="file" class="p-2 rounded block my-4 border w-full" name="photopath">


    <div class="flex justify-center mt-5 gap-5">
        <button type="Submit" class="bg-blue-600 px-10 py-2 rounded text-white" name="update">Save</button>
        <a href="blogs.php" class="bg-red-600 px-10 py-2 rounded text-white">Cancel</a>
    </div>
</form>
<?php include 'footer.php' ?>
