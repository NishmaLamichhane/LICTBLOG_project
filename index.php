<?php
$qry="SELECT * FROM blogs ORDER BY blog_date desc LIMIT 7";
include 'dbconnection.php';
$result = mysqli_query($conn, $qry);
include 'closeconnection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LICT BLOG</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"
/>
</head>

<body>
    <!-- color range started from 100 to 900 -->
    <!-- px=pading x-axis -->
    <nav class="flex justify-between items-center bg-blue-900 text-white px-10">
        <!-- height,padding,margin,width started from 1 to 16, but 13 and 15 is not included 16 paxadi 4 ko multiple 64 samma 72,80 and 96 -->
        <img src="https://lict.edu.np/wp-content/uploads/2021/01/final.png" alt="lict" class="h-16">
        <div class="flex gap-10">
            <a href="" class=" hover:text-amber-500">Home</a>
            <a href="" class=" hover:text-amber-500">About</a>
            <a href="" class=" hover:text-amber-500">Contact</a>
            <a href="" class=" hover:text-amber-500">Login</a>
        </div>
    </nav>
    <!-- <h2 class="font-bold text-center mt-5 text-white bg-blue-500">Our Blogs</h2> -->
    <h2 class="font-bold text-center mt-5 text-purple-900 text-5xl">Our Blogs</h2>
    <div class="text-center mt-10">
        <a href=""
            class="bg-red-700 text-white px-5 py-2 rounded-full hover:shadow-xl hover:bg-black hover:shadow-blue-400 duration-500">Read
            More...</a>
    </div>
    <div class="grid grid-cols-3 gap-10 px-24 mt-10">
        <?php
while ($row = mysqli_fetch_assoc($result))
{
        ?>
        <div class="bg-gray-100 p-2 rounded shadow-md">
            <img src="uploads/<?php echo $row['photopath'] ?>" alt="" class="w-full h-40 object-cover rounded">
            <h3 class="font-bold text-lg text-center"><?php echo $row['title'];?></h3>
            <p class="text-sm mt-3 line-clamp-1"><?php echo $row['description'] ?></p>
            <a class="bg-blue-900 text-white px-3 py-1 mt-5 inline-block" href="">Read More</a>
        </div>
        <?php
}
?>

        <!-- <div class="bg-gray-100 p-2 rounded shadow-md">
            <img src="https://picsum.photos/500/400" alt="" class="w-full h-40 object-cover rounded">
            <h3 class="font-bold text-lg text-center">Blog 2</h3>
            <p class="text-sm mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, voluptate.</p>
            <a class="bg-blue-900 text-white px-3 py-1 mt-5 inline-block" href="">Read More</a>
        </div>

        <div class="bg-gray-100 p-2 rounded shadow-md">
            <img src="https://picsum.photos/500/300" alt="" class="w-full h-40 object-cover rounded">
            <h3 class="font-bold text-lg text-center">Blog 3</h3>
            <p class="text-sm mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, voluptate.</p>
            <a class="bg-blue-900 text-white px-3 py-1 mt-5 inline-block" href="">Read More</a>
        </div> -->
    </div>

    <footer class="bg-blue-900 text-white pt-5 mt-10">
        <div class="grid grid-cols-3 px-24 gap-10">
            <div>
                <h3 class="font-bold text-lg">About Us</h3>
                <p class="text-sm mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis reiciendis
                    quas illum ullam, voluptatem necessitatibus molestias eligendi</p>
            </div>
            <div>
                <h3 class="font-bold text-lg">Contact Us</h3>
                <p class="text-sm mt-3"><i class="ri-phone-fill"></i> 9865162745</p>
                <p class="text-sm mt-3"><i class="ri-mail-fill"></i> info@lict.edu.np</p>
                <p class="text-sm mt-3"><i class="ri-map-pin-fill"></i> Nawalpur, Nepal</p>
            </div>
            <div>
                <h3 class="font-bold text-lg">Follow Us</h3>
                <div class="flex gap-5 mt-3">
                    <a href=""><i class="ri-facebook-circle-fill text-2xl"></i></a>
                    <a href=""><i class="ri-twitter-x-line text-2xl"></i></a>
                    <a href=""><i class="ri-instagram-line text-2xl"></i></a>
                </div>
            </div>
        </div>
        <div class="text-center mt-5 bg-blue-950 p-5">
            <p>&copy; 2024 LICT, All Rights Reserved</p>
        </div>
    </footer>
</body>

</html>