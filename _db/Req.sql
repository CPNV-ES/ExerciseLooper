

INSERT INTO exercices
VALUES(NULL,'TITLE',types);

# exemple : INSERT into exercises VALUES(NULL,'Exercice2',1);


INSERT INTO questions
VALUES(NULL,'TITLE',types,idExercice)

#exemple : INSERT into exercices VALUES(NULL,'Questions1',1 ,1);



DELETE FROM exercices
WHERE exercices.title = "";


UPDATE maTable SET xxxxx = "xxxxx" 
WHERE maTable.id = id;

#exemple : UPDATE exercises SET title = "hello world" WHERE exercises.idExercise = id;



SELECT * 
FROM maTable 
INNER JOIN monAutreTable ON monAutreTable.FK_idMaTable = maTable.id 
WHERE maTable.id  = 1

#exemple SELECT * FROM exercises INNER JOIN questions ON questions.FK_idExercises = exercises.idExercises WHERE exercises.idExercises = 1




 

