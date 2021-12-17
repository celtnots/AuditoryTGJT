# ReactionTimeTester


This assumes that you have:
- an html host that can run php scripting
- a MySql host  
- a database called "globalsmalltalk" with a table called "errorrecognition" with fields: `UserName`,`sentenceID`,`answer`,`elapsedTime`,`status`,`Confidence`,`score` 

CreateTable syntax:
CREATE TABLE `errorrecognition` (
  `errorrecognitionID` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(50) NOT NULL,
  `sentenceID` text NOT NULL,
  `answer` varchar(5) NOT NULL,
  `elapsedTime` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL,
  `Confidence` double DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  PRIMARY KEY (`errorrecognitionID`),
  UNIQUE KEY `errorrecognitionID` (`errorrecognitionID`)
) ENGINE=MyISAM AUTO_INCREMENT=21103 DEFAULT CHARSET=latin1;

1) Edit the file "response.php" at Line 31: $link = mysqli_connect("server", "username", "password") with YOUR server, username, password.

2) Edit the file "playlistL1.json" items:

 "ID": 1,
        "path": "[foldername]/example 1.mp3",                                                                         <-- here you put the server path to YOUR recordings; 
        "text": "(Example 1) My father he works in a bank.",                                                          <-- here you put the transcription of the item;
        "correct": 0,                                                                                                 <-- here you put whether the item is grammatical or not;
        "explanation": "This sentence has two subjects: my father and he. It should be: My father works in a bank."   <-- here you put an explantion
    },

3) Edit lines 329-356 of "L1.html" to reflect the number of items in "playlistL1.json". (My test had 27 items, so you might need to add or remove lines.)
4) Edit "welcome.html" to reflect what you want the introduction page to say; remove lines 1-5; add html headers, etc and put the remaining text inside <body> tags.
5) Upload all items to your server (you don't need "L2.html" or "playlistL1.json").
  
