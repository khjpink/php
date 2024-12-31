CREATE TABLE boards (
  idx INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  pw VARCHAR(100) NOT NULL,
  title VARCHAR(100) NOT NULL,
  content TEXT NOT NULL,
  date DATETIME NOT NULL,
  hit INT NOT NULL,
  PRIMARY KEY (idx)
);


INSERT INTO boards (name, pw, title, content, date, hit)
VALUES
('John Doe', 'password123', 'First Post', 'This is the content of the first post.', NOW(), 0);
INSERT INTO boards (name, pw, title, content, date, hit)
VALUES
('Jane Smith', 'securepw', 'Second Post', 'Content for the second post goes here.', NOW(), 0);
INSERT INTO boards (name, pw, title, content, date, hit)
VALUES
('Alice Brown', 'alicepass', 'Third Post', 'Here is the third post content.', NOW(), 0);
INSERT INTO boards (name, pw, title, content, date, hit)
VALUES
('Michael Johnson', 'michaelpw', 'Fourth Post', 'This is the content of the fourth post.', NOW(), 0);
INSERT INTO boards (name, pw, title, content, date, hit)
VALUES
('Emily Davis', 'emilypw', 'Fifth Post', 'This is the content of the fifth post.', NOW(), 0);
INSERT INTO boards (name, pw, title, content, date, hit)
VALUES
('David Wilson', 'davidpw', 'Sixth Post', 'This is the content of the sixth post.', NOW(), 0);

SELECT * FROM bbs.boards ORDER BY idx DESC;




