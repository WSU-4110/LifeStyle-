use socialnetwork;
INSERT INTO users(user_firstname, user_lastname, user_nickname, user_password, user_email, user_gender, user_birthdate, user_status, user_about, user_hometown)
       VALUES ("Paul", "James", "Pynch", "pass", "paul@gmail.com", "M", "1998-12-19", "S", "This is about me", "Detroit");
INSERT INTO users(user_firstname, user_lastname, user_nickname, user_password, user_email, user_gender, user_birthdate, user_status, user_about, user_hometown)
       VALUES ("Paul", "James", "Pynch", "pass", "paul@gmail.com", "M", "1998-12-19", "S", "This is about me", "Detroit");
INSERT INTO users(user_firstname, user_lastname, user_nickname, user_password, user_email, user_gender, user_birthdate, user_status, user_about, user_hometown)
       VALUES ("Paul", "James", "Pynch", "pass", "paul@gmail.com", "M", "1998-12-19", "S", "This is about me", "Detroit");
INSERT INTO users(user_firstname, user_lastname, user_nickname, user_password, user_email, user_gender, user_birthdate, user_status, user_about, user_hometown)
       VALUES ("Paul", "James", "Pynch", "pass", "paul@gmail.com", "M", "1998-12-19", "S", "This is about me", "Detroit");
INSERT INTO users(user_firstname, user_lastname, user_nickname, user_password, user_email, user_gender, user_birthdate, user_status, user_about, user_hometown)
       VALUES ("Paul", "James", "Pynch", "pass", "paul@gmail.com", "M", "1998-12-19", "S", "This is about me", "Detroit");

INSERT INTO posts(post_caption, post_time, post_public, post_by) VALUES ("Hello there!", "2017-12-23 00:50:06", "Y", 1);
INSERT INTO posts(post_caption, post_time, post_public, post_by) VALUES ("Paul James has changed his profile picture.", "2017-12-23 00:50:06", "N", 2);
INSERT INTO posts(post_caption, post_time, post_public, post_by) VALUES ("A new artwork from the upcoming content.", "2017-12-23 00:50:06", "Y", 3);
INSERT INTO posts(post_caption, post_time, post_public, post_by) VALUES ("New Year Eve Fireworks", "2017-12-23 00:50:06", "Y", 4);
INSERT INTO posts(post_caption, post_time, post_public, post_by) VALUES ("Visit our profile to check out the upcoming transfers and rumors for January 2018", "2017-12-23 00:50:06", "N", 5);
INSERT INTO posts(post_caption, post_time, post_public, post_by) VALUES ("Happy new year!", "2017-12-23 00:50:06", "N", 5);

INSERT INTO friendship(user1_id, user2_id, friendship_status) VALUES (2,1,1);
INSERT INTO friendship(user1_id, user2_id, friendship_status) VALUES (2,3,1);
INSERT INTO friendship(user1_id, user2_id, friendship_status) VALUES (2,4,1);

INSERT INTO friendship(user1_id, user2_id, friendship_status) VALUES (1,5,1);
INSERT INTO friendship(user1_id, user2_id, friendship_status) VALUES (3,5,1);
INSERT INTO friendship(user1_id, user2_id, friendship_status) VALUES (4,5,1);
SELECT * from users
