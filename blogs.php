<?php 
include 'header.php';
$qry="SELECT * FROM blogs";
include'../dbconnection.php';
$result=mysqli_query($conn,$qry);
include'../closeconnection.php';
?>
<h2 class="text-3xl font-bold">Blogs</h2>
<hr class="h-1 bg-blue-600 ">
<div class="text-right mt-5">
    <a href="create_blog.php" class="bg-blue-600 px-5 py-2 rounded text-white">Add Blog</a>
</div>
<table class="w-full mt-10">
    <tr>
        <th class="border p-2">Date</th>
        <th class="border p-2">Title</th>
        <th class="border p-2">Image</th>
        <th class="border p-2">Description</th>
        <th class="border p-2">Action</th>
    </tr>
    <?php
    while ($row=mysqli_fetch_array($result))
     {
    ?>
 
    <tr>
        <td class="border p-2"><?php echo $row['blog_date'];?></td>
        <td class="border p-2 "><?php echo $row['title'];?></td>
        <td class="border p-2"><img src="../uploads/<?php echo $row['photopath']; ?>" alt="" class="w-20 mx-auto h-20 object-cover rounded">
        </td>
        <td class="border p-2"><?php echo $row['description'];?></td>
        <td class="border p-2 text-center">
            <a href="editblog.php?id=<?php echo $row['id'];?>" class="bg-blue-600 px-3 py-1 rounded text-white">Edit</a>
            <!-- delete the blogs -->
            <a href="actionblog.php?deleteid=<?php echo $row['id'] ?>" class="bg-red-600 px-3 py-1 rounded text-white" onclick="return confirm('Are You sure to delete?')">Delete</a>
        </td>
    </tr>
    <?php
     }?>
    <!-- <tr>
        <td class="border p-2">2021-01-10</td>
        <td class="border p-2">Blog 2</td>
        <td class="border p-2"><img src="https://picsum.photos/300/300" alt="" class="w-20 mx-auto h-20 object-cover rounded">
        </td>
        <td class="border p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, mollitia.</td>
        <td class="border p-2 text-center">
            <a href="" class="bg-blue-600 px-3 py-1 rounded text-white">Edit</a>
            <a href="" class="bg-red-600 px-3 py-1 rounded text-white">Delete</a>
        </td> -->
    <!-- </tr> -->
</table>
<?php include 'footer.php' ?>