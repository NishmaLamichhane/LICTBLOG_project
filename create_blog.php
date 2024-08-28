<?php include 'header.php' ?>
<h2 class="text-3xl font-bold">Create Blog</h2>
<hr class="h-1 bg-blue-600">
<form action="actionblog.php" method="POST" enctype="multipart/form-data">

    <input type="date" class="p-2 rounded block my-4 border w-full" name="date">

    <input type="text" class="p-2 rounded block my-4 border w-full" placeholder="Title" name="title">

    <textarea name="description" id="" class="p-2 rounded block my-4 border w-full"
        placeholder="Enter Description"></textarea>

    <input type="file" class="p-2 rounded block my-4 border w-full" name="photopath">

    <div class="flex justify-center mt-5 gap-5">

        <button type="Submit" class="bg-blue-600 px-10 py-2 rounded text-white" name="create">Save</button>

        <a href="blogs.php" class="bg-red-600 px-10 py-2 rounded text-white">Cancel</a>


    </div>
</form>
<?php include 'footer.php' ?>