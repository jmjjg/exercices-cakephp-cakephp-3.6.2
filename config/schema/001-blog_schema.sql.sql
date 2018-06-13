SET client_encoding = 'UTF8';
SET standard_conforming_strings = off;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET escape_string_warning = off;
SET search_path = public, pg_catalog;
SET default_tablespace = '';
SET default_with_oids = false;

-- *****************************************************************************
BEGIN;
-- *****************************************************************************

CREATE TABLE IF NOT EXISTS groups (
	id				SERIAL NOT NULL PRIMARY KEY,
	name            VARCHAR(250) NOT NULL,
	created			TIMESTAMP WITHOUT TIME ZONE,
	modified		TIMESTAMP WITHOUT TIME ZONE
);

CREATE UNIQUE INDEX groups_name_idx ON groups (name);

-- *****************************************************************************
COMMIT;
-- *****************************************************************************