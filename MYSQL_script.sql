/* 1. DISPLAY TOTAL NUMBER OF ALBUMS SOLD PER ARTIST */
SELECT count(Album) AS total_albums
FROM album_sales 
GROUP BY Artist;

/*2. DISPLAY COMBINED ALBUM SALES PER ARTIST*/
SELECT SUM(`2022 Sales`) as combined_sales
FROM album_sales
GROUP BY Artist;

/* 3. DISPLAY THE TOP 1 ARTIST WHO SOLD MOST COMBINED ALBUM SALES */
SELECT Artist
FROM album_sales
GROUP BY Artist
ORDER BY SUM(`2022 Sales`) DESC
LIMIT 1;

/* 4. DISPLAY THE TOP 10 ALBUMS PER YEAR BASED ON THEIR NUMBER OF SALES*/        
SELECT Album
FROM album_sales AS tbl1
WHERE (SELECT COUNT(*)
       FROM album_sales AS tbl2
       WHERE LEFT(tbl1.`Date Released`, 2) = LEFT(tbl2.`Date Released`, 2)
             AND tbl1.`2022 Sales` <= tbl2.`2022 Sales`
      ) <= 10
ORDER BY LEFT(`Date Released`, 2) DESC, `2022 Sales` DESC;

/* 5. DISPLAY LIST OF ALBUMS BASED ON THE SEARCHED ARTIST */
SELECT Album
FROM album_sales
WHERE Artist = 'Stray Kids';



