use nsm4;

CREATE TABLE naukrisamachaar_user (
	user_id INT NOT NULL AUTO_INCREMENT,
    user_name VARCHAR(100) NOT NULL,
    user_password VARCHAR(100) NOT NULL,
    PRIMARY KEY (user_id)    
);

CREATE TABLE naukrisamachaar_jobentry (
	user_id INT NOT NULL,
    job_id INT NOT NULL,  
    FOREIGN KEY fk_user(user_id) 
    REFERENCES naukrisamachaar_user(user_id)
    ON UPDATE CASCADE
    ON DELETE RESTRICT
);


CREATE TABLE naukrisamachaar_userroles (
	user_id INT NOT NULL,
    user_role ENUM('USER', 'ADMIN'),
    FOREIGN KEY fk_userroles(user_id) 
    REFERENCES naukrisamachaar_user(user_id)
    ON UPDATE CASCADE
    ON DELETE RESTRICT
);

ALTER TABLE naukrisamachaar_user
ADD COLUMN user_emain varchar(100) NOT NULL;

INSERT INTO naukrisamachaar_user (user_name,user_password,user_emain) VALUES ('Shivam Srivastava','ROCKON!!','xshivam@xgarbagelab.com');
INSERT INTO naukrisamachaar_user (user_name,user_password,user_emain) VALUES ('Madhusudan Das','xgarbagelab@123','xmaddy@xgarbagelab.com');
INSERT INTO naukrisamachaar_user (user_name,user_password,user_emain) VALUES ('Nishant Dubey','xgarbagelab@456','xnishant@xgarbagelab.com');
INSERT INTO naukrisamachaar_user (user_name,user_password,user_emain) VALUES ('Gurmandeep Kaur','xgarbagelab@789','xgurmandeep@xgarbagelab.com');

INSERT INTO naukrisamachaar_userroles VALUE(1, 'ADMIN');
INSERT INTO naukrisamachaar_userroles VALUE(2, 'ADMIN');
INSERT INTO naukrisamachaar_userroles VALUE(3, 'ADMIN');
INSERT INTO naukrisamachaar_userroles VALUE(4, 'ADMIN');

ALTER TABLE naukrisamachaar_user ADD CONSTRAINT unique_key UNIQUE (user_emain);