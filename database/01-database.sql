-- -----------------------------------------------------
-- Schema pp_project_manager
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Table users
-- -----------------------------------------------------
CREATE TABLE users
(
  id serial NOT NULL PRIMARY KEY,
  name VARCHAR(45) NOT NULL,
  email VARCHAR(250) NOT NULL,
  password VARCHAR(100) NOT NULL,
  created DATE NULL,
  modified DATE NULL
);


-- -----------------------------------------------------
-- Table projects
-- -----------------------------------------------------
CREATE TABLE projects
(
  id serial NOT NULL primary key,
  title VARCHAR(45) NOT NULL,
  description TEXT NULL,
  user_id serial NOT NULL,
  due_date DATE NULL,
  done INT NOT NULL DEFAULT 0,
  created DATE NULL,
  modified DATE NULL,
  CONSTRAINT fk_projects_users
    FOREIGN KEY (user_id)
    REFERENCES users (id)
    ON DELETE CASCADE
    ON UPDATE NO ACTION
);

CREATE INDEX fk_projects_users_idx on projects(user_id);


-- -----------------------------------------------------
-- Table sections
-- -----------------------------------------------------
CREATE TABLE sections
(
  id serial NOT NULL primary key,
  title VARCHAR(45) NOT NULL,
  description TEXT NULL,
  project_id serial NOT NULL,
  created DATE NULL,
  modified DATE NULL,
  user_id serial NOT NULL,
  CONSTRAINT fk_sections_projects1
    FOREIGN KEY (project_id)
    REFERENCES projects (id)
    ON DELETE CASCADE
    ON UPDATE NO ACTION
);

CREATE INDEX fk_sections_projects1_idx on sections(project_id);


-- -----------------------------------------------------
-- Table tasks
-- -----------------------------------------------------
CREATE TABLE tasks (
  id serial NOT NULL primary key,
  title VARCHAR(45) NOT NULL,
  description VARCHAR(45) NULL,
  done INT NOT NULL DEFAULT 0,
  due_date DATE NULL,
  assigned_to serial NOT NULL,
  section_id serial NOT NULL,
  created DATE NULL,
  modified DATE NULL,
  user_id serial NOT NULL,
  CONSTRAINT fk_tasks_sections1
    FOREIGN KEY (section_id)
    REFERENCES sections (id)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT fk_tasks_users1
    FOREIGN KEY (assigned_to)
    REFERENCES users (id)
    ON DELETE CASCADE
    ON UPDATE NO ACTION
);
CREATE INDEX fk_tasks_sections1_idx on tasks(section_id);
CREATE INDEX fk_tasks_users1_idx on tasks(assigned_to);

-- -----------------------------------------------------
-- Table subtasks
-- -----------------------------------------------------
CREATE TABLE subtasks (
  id serial NOT NULL primary key,
  title VARCHAR(45) NULL,
  done INT NULL DEFAULT 0,
  task_id serial NOT NULL,
  user_id serial NOT NULL,
  CONSTRAINT fk_subtasks_tasks1
    FOREIGN KEY (task_id)
    REFERENCES tasks (id)
    ON DELETE CASCADE
    ON UPDATE NO ACTION
);

CREATE INDEX fk_subtasks_tasks1_idx on subtasks(task_id);
-- -----------------------------------------------------
-- Table messages
-- -----------------------------------------------------
CREATE TABLE messages (
  id serial NOT NULL primary key,
  message TEXT NOT NULL,
  user_id serial NOT NULL,
  project_id serial NOT NULL,
  created DATE NULL,
  modified DATE NULL,
  CONSTRAINT fk_messages_projects1
    FOREIGN KEY (project_id)
    REFERENCES projects (id)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT fk_messages_users1
    FOREIGN KEY (user_id)
    REFERENCES users (id)
    ON DELETE CASCADE
    ON UPDATE NO ACTION
);
CREATE INDEX fk_messages_projects1_idx on messages(project_id);
CREATE INDEX fk_messages_users1_idx on messages(user_id);

-- -----------------------------------------------------
-- Table notes
-- -----------------------------------------------------
CREATE TABLE notes (
  id serial NOT NULL,
  title VARCHAR(45) NOT NULL,
  description TEXT NOT NULL,
  project_id serial NOT NULL,
  created DATE NULL,
  modified DATE NULL,
  user_id serial NOT NULL,
  PRIMARY KEY (id),
  CONSTRAINT fk_notes_projects1
    FOREIGN KEY (project_id)
    REFERENCES projects (id)
    ON DELETE CASCADE
    ON UPDATE NO ACTION
);

CREATE INDEX fk_notes_projects1_idx on notes(project_id);
-- -----------------------------------------------------
-- Table files
-- -----------------------------------------------------
CREATE TABLE files (
  id INT NOT NULL,
  title VARCHAR(45) NOT NULL,
  url TEXT NOT NULL,
  project_id serial NOT NULL,
  created DATE NULL,
  modified DATE NULL,
  user_id serial NOT NULL,
  PRIMARY KEY (id),
  CONSTRAINT fk_files_projects1
    FOREIGN KEY (project_id)
    REFERENCES projects (id)
    ON DELETE CASCADE
    ON UPDATE NO ACTION
);

CREATE INDEX fk_files_projects1_idx on files(project_id);
-- -----------------------------------------------------
-- Table schedules
-- -----------------------------------------------------
CREATE TABLE schedules (
  id serial NOT NULL,
  description TEXT NOT NULL,
  due_date DATE NOT NULL,
  user_id serial NOT NULL,
  created DATE NULL,
  modified DATE NULL,
  PRIMARY KEY (id),
  CONSTRAINT fk_schedules_projects1
    FOREIGN KEY (user_id)
    REFERENCES projects (id)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
;

CREATE INDEX fk_schedules_projects1_idx on schedules(user_id);

