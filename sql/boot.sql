CREATE TABLE languages(
    id INT NOT NULL AUTO_INCREMENT,
    iso VARCHAR(255) NOT NULL,
    abbreviation VARCHAR(10) NOT NULL,
    NAME VARCHAR(255) NOT NULL,
    PRIMARY KEY(id)
) ENGINE = INNODB; CREATE TABLE companies(
    id INT NOT NULL AUTO_INCREMENT,
    NAME VARCHAR(255) NOT NULL,
    PRIMARY KEY(id)
) ENGINE = INNODB; CREATE TABLE generes(
    id INT NOT NULL AUTO_INCREMENT,
    NAME VARCHAR(255) NOT NULL,
    PRIMARY KEY(id)
) ENGINE = INNODB; CREATE TABLE keywords(
    id INT NOT NULL AUTO_INCREMENT,
    NAME VARCHAR(255) NOT NULL,
    PRIMARY KEY(id)
) ENGINE = INNODB; CREATE TABLE ratings(
    id INT NOT NULL AUTO_INCREMENT,
    NAME VARCHAR(255) NOT NULL,
    PRIMARY KEY(id)
) ENGINE = INNODB; CREATE TABLE `cast`(
    id INT NOT NULL AUTO_INCREMENT,
    `character` VARCHAR(255) DEFAULT "unassigned" NOT NULL,
    NAME VARCHAR(255) NOT NULL,
    `order` INT,
    movie_id INT NOT NULL,
    PRIMARY KEY(id),
    INDEX(movie_id),
    FOREIGN KEY(movie_id) REFERENCES movies(id) ON DELETE CASCADE
) ENGINE = INNODB; CREATE TABLE crew(
    id INT NOT NULL AUTO_INCREMENT,
    department VARCHAR(255) DEFAULT "unassigned",
    NAME VARCHAR(255) NOT NULL,
    job VARCHAR(255) DEFAULT "unassigned",
    movie_id INT NOT NULL,
    PRIMARY KEY(id),
    INDEX(movie_id),
    FOREIGN KEY(movie_id) REFERENCES movies(id) ON DELETE CASCADE
) ENGINE = INNODB; CREATE TABLE movies(
    id INT NOT NULL AUTO_INCREMENT,
    rating_id INT NOT NULL,
    budget INT,
    homepage VARCHAR(255) DEFAULT "",
    original_language VARCHAR(255) DEFAULT "",
    original_title VARCHAR(255) DEFAULT "",
    overview VARCHAR(255) DEFAULT "",
    popularity FLOAT,
    release_date DATETIME,
    revenue FLOAT,
    runtime FLOAT,
    STATUS VARCHAR
        (255),
        tagline VARCHAR(255),
        title VARCHAR(255),
        vote_average FLOAT,
        vote_count INT,
        PRIMARY KEY(id),
        INDEX(rating_id),
        FOREIGN KEY(rating_id) REFERENCES ratings(id) ON DELETE SET NULL
) ENGINE = INNODB;
CREATE TABLE movie_keyword(
    movie_id INT NOT NULL,
    keyword_id INT NOT NULL,
    INDEX(movie_id),
    INDEX(keyword_id),
    FOREIGN KEY(movie_id) REFERENCES movies(id) ON DELETE CASCADE,
    FOREIGN KEY(keyword_id) REFERENCES keywords(id) ON DELETE CASCADE
) ENGINE = INNODB; CREATE TABLE movie_genere(
    movie_id INT NOT NULL,
    genere_id INT NOT NULL,
    INDEX(movie_id),
    INDEX(genere_id),
    FOREIGN KEY(movie_id) REFERENCES movies(id) ON DELETE CASCADE,
    FOREIGN KEY(genere_id) REFERENCES generes(id) ON DELETE CASCADE
) ENGINE = INNODB; CREATE TABLE movie_company(
    movie_id INT NOT NULL,
    company_id INT NOT NULL,
    INDEX(movie_id),
    INDEX(company_id),
    FOREIGN KEY(movie_id) REFERENCES movies(id) ON DELETE CASCADE,
    FOREIGN KEY(company_id) REFERENCES companies(id) ON DELETE CASCADE
) ENGINE = INNODB; CREATE TABLE movie_language(
    movie_id INT NOT NULL,
    language_id INT NOT NULL,
    INDEX(movie_id),
    INDEX(language_id),
    FOREIGN KEY(movie_id) REFERENCES movies(id) ON DELETE CASCADE,
    FOREIGN KEY(language_id) REFERENCES languages(id) ON DELETE CASCADE
) ENGINE = INNODB;
