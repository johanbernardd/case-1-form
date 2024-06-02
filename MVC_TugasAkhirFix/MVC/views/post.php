<a href="?c=Post&m=create_form">Create Post</a><br>

<?php if (empty($posts)) { // Check if the array is empty
    echo 'No posts.';
} else {
    foreach ($posts as $post) { // Iterate over the array
        echo "<h3>{$post['title']}</h3>";
        echo "<a href=\"?c=Post&m=edit&id={$post['id']}\">Edit</a>";
        printf('<form action="?c=Post&m=delete" method="post"><input type="hidden" name="id" value="%d"><input type="submit" value="Delete"></form>', $post['id']);
        echo "<p align=\"justify\">{$post['content']}</p>";
    }
}
?>