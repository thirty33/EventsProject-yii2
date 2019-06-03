DROP TABLE IF EXISTS assistant CASCADE;
DROP TABLE IF EXISTS event CASCADE;
DROP TABLE IF EXISTS assistants_events CASCADE;
DROP TABLE IF EXISTS tipo CASCADE;

CREATE TABLE assistant (
    id SERIAL PRIMARY KEY,
    firts_name VARCHAR (50) UNIQUE NOT NULL,
    last_name VARCHAR (50)  NOT NULL,
    tlf_number VARCHAR (12) UNIQUE NOT NULL
);

CREATE TABLE event (
    id SERIAL PRIMARY KEY,
    event_date TIMESTAMP NOT NULL,
    event_name VARCHAR (50) NOT NULL, 
    event_description VARCHAR (500) NOT NULL,
    city VARCHAR (20) NOT NULL
    
);

CREATE TABLE tipo (
    id SERIAL PRIMARY KEY,
    type_name VARCHAR (30) UNIQUE NOT NULL,
    type_description VARCHAR (30) UNIQUE NOT NULL
);

CREATE TABLE assistants_events (
    event_id int NOT NULL,
    assistant_id int NOT NULL,
    type_event int NOT NULL,
    PRIMARY KEY (event_id, assistant_id),
    FOREIGN KEY (assistant_id)  REFERENCES assistant (id) ON UPDATE CASCADE,
    FOREIGN KEY (event_id)  REFERENCES event (id) ON UPDATE CASCADE,
    FOREIGN KEY (type_event)  REFERENCES tipo (id) ON UPDATE CASCADE,
    UNIQUE (event_id, assistant_id, type_event)
);

-- INSERT INTO assistant (id, firts_name, last_name, tlf_number) VALUES
--     (1,'joel', 'gutierrez', '3227632472'),
--     (2,'gustavo', 'Yojimbo', '3227632473'),
--     (3,'andres', 'Yojimbo', '3227632474');

-- INSERT INTO event (id, event_date, event_name, event_description, city) VALUES
--     (1,'2011-05-16 15:36:38', 'evento1', 'evento_description', 'Bogota'),
--     (2,'2011-05-16 15:36:38', 'evento2', 'evento_description', 'Caldas'),
--     (3,'2011-05-16 15:36:38', 'evento3', 'evento_description', 'Cundinamarca');

    
-- INSERT INTO tipo (id, type_name, type_description) VALUES
--     (1,'one', 'type_event_one'),
--     (2,'two', 'type_event_two'),
--     (3,'three', 'type_event_three');

-- INSERT INTO assistants_events (event_id, assistant_id, type_event) VALUES
--     (1, 1, 1),
--     (1, 2, 1),
--     (1, 3, 1),
--     (2, 1, 1),
--     (2, 2, 1),
--     (2, 3, 1);




