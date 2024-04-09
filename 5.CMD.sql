CREATE TABLE countries (
    country_id INT PRIMARY KEY,
    country_name VARCHAR(255),
    region_id INT,
    UNIQUE (country_id)
);
