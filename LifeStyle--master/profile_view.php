<?php
class FindFriend;
{
    private $FName;
    private $LName;

    public function __construct($FName, $LName)
    {
        $this->FirstName = $FName;
        $this->LastName = $LName;
    }

    public function getFirstAndLastName()
    {
        return $this->FirstName . ' ' . $this->LastName;
    }
}

class FindFriendFactory
{
    public static function create($FName, $LName)
    {
        return new FindFriend($FName, $LName);
    }
}

$veyron = FindFriendFactory::create('FName', 'LName');

print_r($veyron->getFNameAndLName());
?>
<!doctype html>
<html>
<link href="profile.css" rel="stylesheet" type="text/css">
<script src="profile_scripts.js"></script>
<header>

	<div class="container">

		<div class="profile">

		  <div class="profile_picture">

				<img src="https://pbs.twimg.com/profile_images/1185714853287268352/sdDnndlE_400x400.jpg" onclick="onClick(this)" alt="ME">

			</div>

			<div class="profile-user-settings">

				<h1 class="profile-user-name">Shojib Miah</h1>

			  <button class="btn profile-edit-btn">Edit Profile</button>
				<button class="btn give-life-btn">Give Life</button>

				<button class="btn profile-settings-btn" aria-label="profile settings"><i class="fas fa-cog" aria-hidden="true"></i></button>

			</div>

			<div class="profile-stats">

				<ul>
					<li><span class="profile-stat-count">854</span> posts</li>
					<li><span class="profile-stat-count">751</span> followers</li>
					<li><span class="profile-stat-count">15</span> following</li>
					
				</ul>

			</div>

			<div class="profile-bio">

				<p><span class="profile-real-name">Shojib Miah</span> This is my profile. Lets be friends.</p>

			</div>

		</div>
		<!-- profilee nd  -->

	</div>
	

</header>

<main>
	<!--Modal for LightboxView-->
<div id="modal01" class="modal" onclick="this.style.display='none'">
  <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
  <div class="modal-content">
    <img id="img01" style="max-width:100%">
  </div>
</div>
	<!--feed container-->
	<div class="container">

		<div class="feed">

			<div class="feed-item" tabindex="0">

			  <img src="https://previews.123rf.com/images/alphaspirit/alphaspirit1509/alphaspirit150900005/44612269-road-that-says-success-in-the-asphalt.jpg" onclick="onClick(this)" class="feed-image" alt="">

				<div class="feed-item-info" onclick="onClick(this)">

					<ul>
						<li class="feed-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 56</li>
						<li class="feed-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 2</li>
					</ul>

				</div>

			</div>

			<div class="feed-item" tabindex="0">

			  <img src="https://previews.123rf.com/images/auremar/auremar1204/auremar120400040/13343791-individual-fruit-tart.jpg" onclick="onClick(this)" class="feed-image" alt="" >

				<div class="feed-item-info">

					<ul>
						<li class="feed-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 89</li>
						<li class="feed-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 5</li>
					</ul>

				</div>

			</div>

			<div class="feed-item" tabindex="0">

			  <img src="https://previews.123rf.com/images/siberian180762/siberian1807621303/siberian180762130300004/18335919-individual-fruits-of-red-grapes-closeup-on-a-light-background.jpg" onclick="onClick(this)"  class="feed-image" alt="">

				<div class="feed-item-type">

					<span class="visually-hidden">feed</span><i class="fas fa-clone" aria-hidden="true"></i>

				</div>

				<div class="feed-item-info">

					<ul>
						<li class="feed-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 54</li>
						<li class="feed-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 1</li>
					</ul>

				</div>

			</div>

			<div class="feed-item" tabindex="0">

			  <img src="https://previews.123rf.com/images/alphaspirit/alphaspirit1310/alphaspirit131000052/22670122-concept-of-growing-company-with-sketch-of-a-plant-with-business-symbol.jpg" class="feed-image" alt="" onclick="onClick(this)">

				<div class="feed-item-type">

					<span class="visually-hidden">Video</span><i class="fas fa-video" aria-hidden="true"></i>

				</div>

				<div class="feed-item-info">

					<ul>
						<li class="feed-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 3</li>
						<li class="feed-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 0</li>
					</ul>

				</div>

			</div>

			<div class="feed-item" tabindex="0">

			  <img src="https://previews.123rf.com/images/studiostoks/studiostoks1509/studiostoks150900077/45630592-business-breakthrough-success-businessman-hero-breaks-through-the-wall-retro-style-pop-art.jpg"  onclick="onClick(this)"class="feed-image" alt="">

				<div class="feed-item-type">

					<span class="visually-hidden">feed</span><i class="fas fa-clone" aria-hidden="true"></i>

				</div>

				<div class="feed-item-info">

					<ul>
						<li class="feed-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 81</li>
						<li class="feed-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 1</li>
					</ul>

				</div>

			</div>

			<div class="feed-item" tabindex="0">

			  <img src="https://previews.123rf.com/images/rido/rido1411/rido141100006/33309549-portrait-of-smiling-successful-businessman-with-successful-investment.jpg" class="feed-image" alt="" onclick="onClick(this)">

				

			</div>

			<div class="feed-item" tabindex="0">

			  <img src="https://previews.123rf.com/images/nexusplexus/nexusplexus1401/nexusplexus140106210/25087220-background-image-of-ladder-of-success-drawn-on-wall.jpg" onclick="onClick(this)" class="feed-image" alt="">

				<div class="feed-item-type">

					<span class="visually-hidden">feed</span><i class="fas fa-clone" aria-hidden="true"></i>

				</div>

				<div class="feed-item-info">

					<ul>
						<li class="feed-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 16</li>
						<li class="feed-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 0</li>
					</ul>

				</div>

			</div>

			<div class="feed-item" tabindex="0">

			  <img src="https://previews.123rf.com/images/torwai/torwai1810/torwai181000021/114060326-business-woman-she-is-going-to-work-in-her-morning-at-the-subway-and-she-is-eating-coffee.jpg" class="feed-image" onclick="onClick(this)" alt="">

				<div class="feed-item-info">

					<ul>
						<li class="feed-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 34</li>
						<li class="feed-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 1</li>
					</ul>

				</div>

			</div>

			<div class="feed-item" tabindex="0">

			  <img src="https://previews.123rf.com/images/yarruta/yarruta1310/yarruta131000028/22736763-happy-kid-playing-with-wooden-toy-airplane-in-autumn.jpg" onclick="onClick(this)" class="feed-image" alt="">

				<div class="feed-item-info">

					<ul>
						<li class="feed-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 57</li>
						<li class="feed-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 0</li>
					</ul>

				</div>

			</div>

			<div class="feed-item" tabindex="0">

			  <img src="https://previews.123rf.com/images/peshkov/peshkov1710/peshkov171000195/87771513-abstract-glowing-digital-currency-button-ico-initial-coin-offering-on-virtual-digital-electronic-use.jpg" onclick="onClick(this)" class="feed-image" alt="">

				<div class="feed-item-type">

					<span class="visually-hidden">Video</span><i class="fas fa-video" aria-hidden="true"></i>

				</div>

				<div class="feed-item-info">

					<ul>
						<li class="feed-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 20</li>
						<li class="feed-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 2</li>
					</ul>

				</div>

			</div>

		</div>
		<!-- End of feed -->

		<div class="loader"></div>

	</div>
	<!-- End of container -->

</main>
</html>