<?php

echo '<div class="post">';
if($row['post_public'] == 'Y') {
    echo '<p class="public">';
    echo 'Public';
}else {
    echo '<p class="public">';
    echo 'Private';
}
echo '<br>';
echo '<span class="postedtime">' . $row['post_time'] . '</span>';
echo '</p>';
echo '<div>';
include 'profile_picture.php';
echo '<a class="profilelink" href="profile.php?id=' . $row['user_id'] .'">' . $row['user_firstname'] . ' ' . $row['user_lastname'] . '<a>';
echo'</div>';
echo '<br>';
echo '<p class="caption">' . $row['post_caption'] . '</p>';
echo '<center>'; 
$target = glob("data/images/posts/" . $row['post_id'] . ".*");
if($target) {
    echo '<img src="' . $target[0] . '" style="max-width:580px">'; 
    echo '<br><br>';
}/*
$sql2 ="SELECT media.media_post,users.user_id,media.media_url,posts.post_time, posts.post_public from
media 
join posts
on media.media_post = posts.post_id
JOIN users
ON posts.post_by = users.user_id
WHERE posts.post_public = 'Y' OR users.user_id = {$_SESSION['user_id']}
union
SELECT media.media_post,users.user_id,media.media_url,posts.post_time, posts.post_public from
media 
join posts
on media.media_post = posts.post_id
JOIN users
ON posts.post_by = users.user_id
JOIN (
                    SELECT friendship.user1_id AS user_id
                    FROM friendship
                    WHERE friendship.user2_id = {$_SESSION['user_id']} AND friendship.friendship_status = 1
                    UNION
                    SELECT friendship.user2_id AS user_id
                    FROM friendship
                    WHERE friendship.user1_id = {$_SESSION['user_id']} AND friendship.friendship_status = 1
                ) userfriends
                ON userfriends.user_id = posts.post_by
                WHERE posts.post_public = 'N'
;";
$query2 = mysqli_query($conn, $sql2);
while($row2 = mysqli_fetch_assoc($query2)){}
echo '<img src="' . $target[0] . '" style="max-width:580px">';
echo '<br><br>';*/
echo '</center>';
echo '</div>';

?>