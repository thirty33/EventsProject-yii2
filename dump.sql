DROP TABLE IF EXISTS assistant;
DROP TABLE IF EXISTS event;
DROP TABLE IF EXISTS assistants_events;
DROP TABLE IF EXISTS event_type;


CREATE TABLE assistant (
    id SERIAL,
    firts_name VARCHAR (50) UNIQUE NOT NULL,
    tlf_number VARCHAR (12) UNIQUE NOT NULL,
    PRIMARY KEY (id, firts_name), 
    last_name VARCHAR (50) UNIQUE NOT NULL,
    event_time TIMESTAMP NOT NULL
);

CREATE TABLE event (
    id SERIAL PRIMARY KEY,
    event_date TIMESTAMP NOT NULL,
    event_name VARCHAR (50) NOT NULL, 
    event_description VARCHAR (500) NOT NULL,
    city VARCHAR (20) NOT NULL
);

CREATE TABLE event_type (
    id SERIAL PRIMARY KEY,
    event_type_name VARCHAR (30) UNIQUE NOT NULL
);

CREATE TABLE assistants_events (
    event_id int NOT NULL,
    assistant_id int NOT NULL,
    type_event VARCHAR (30) NOT NULL,
    PRIMARY KEY (event_id, assistant_id),
    FOREIGN KEY (assitant_id)  REFERENCES assistant (id) ON UPDATE CASCADE,
    FOREIGN KEY (event_id)  REFERENCES event (id) ON UPDATE CASCADE,
    FOREIGN KEY (type_event)  REFERENCES event_type (event_type_name) ON UPDATE CASCADE
);


