--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.3
-- Dumped by pg_dump version 9.5.3

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

--
-- Name: blog_iq_ai; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE blog_iq_ai
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 999999999999
    CACHE 1;


ALTER TABLE blog_iq_ai OWNER TO postgres;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: blog; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE blog (
    id integer DEFAULT nextval('blog_iq_ai'::regclass) NOT NULL,
    name character(255),
    code character(255)
);


ALTER TABLE blog OWNER TO postgres;

--
-- Data for Name: blog; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY blog (id, name, code) FROM stdin;
15	zapis_insert_1                                                                                                                                                                                                                                                 	code_zapis_insert_1                                                                                                                                                                                                                                            
16	zapis_insert_1                                                                                                                                                                                                                                                 	code_zapis_insert_1                                                                                                                                                                                                                                            
17	zapis_insert_1                                                                                                                                                                                                                                                 	code_zapis_insert_1                                                                                                                                                                                                                                            
18	zapis_insert_1                                                                                                                                                                                                                                                 	code_zapis_insert_1                                                                                                                                                                                                                                            
19	zapis_insert_1                                                                                                                                                                                                                                                 	code_zapis_insert_1                                                                                                                                                                                                                                            
14	zapis_update                                                                                                                                                                                                                                                   	zapis_update                                                                                                                                                                                                                                                   
\.


--
-- Name: blog_iq_ai; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('blog_iq_ai', 19, true);


--
-- Name: id; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY blog
    ADD CONSTRAINT id PRIMARY KEY (id);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

