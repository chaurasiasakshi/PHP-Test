CREATE TABLE job_history (
    employee_id INT NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    job_id VARCHAR(10),
    department_id INT,
    PRIMARY KEY (employee_id),
    FOREIGN KEY (job_id) REFERENCES jobs(JOB_ID)
);


CREATE TABLE jobs (
    JOB_ID VARCHAR(10) NOT NULL PRIMARY KEY,
    JOB_TITLE VARCHAR(35) NOT NULL,
    MIN_SALARY DECIMAL(6,0),
    MAX_SALARY DECIMAL(6,0)
);

Write a SQL statement to drop the index indx_job_id from job_history table. 