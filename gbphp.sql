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
-- Name: id; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE id
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE id OWNER TO postgres;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: blog; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE blog (
    id integer DEFAULT nextval('id'::regclass) NOT NULL,
    name character varying,
    text text
);


ALTER TABLE blog OWNER TO postgres;

--
-- Name: comments; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE comments (
    id integer DEFAULT nextval('id'::regclass) NOT NULL,
    text text,
    blog_id integer,
    author character(255)
);


ALTER TABLE comments OWNER TO postgres;

--
-- Name: priv2roles; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE priv2roles (
    id_role integer,
    id_priv integer
);


ALTER TABLE priv2roles OWNER TO postgres;

--
-- Name: privs; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE privs (
    id_priv integer NOT NULL,
    name character varying(255),
    description character varying(512)
);


ALTER TABLE privs OWNER TO postgres;

--
-- Name: privs_id_priv_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE privs_id_priv_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE privs_id_priv_seq OWNER TO postgres;

--
-- Name: privs_id_priv_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE privs_id_priv_seq OWNED BY privs.id_priv;


--
-- Name: roles; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE roles (
    id_role integer NOT NULL,
    name character varying(255),
    description character varying(512)
);


ALTER TABLE roles OWNER TO postgres;

--
-- Name: sessions; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE sessions (
    id_session integer NOT NULL,
    id_user integer,
    sid character varying(10),
    time_start timestamp without time zone,
    time_last timestamp without time zone
);


ALTER TABLE sessions OWNER TO postgres;

--
-- Name: sessions_id_session_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE sessions_id_session_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE sessions_id_session_seq OWNER TO postgres;

--
-- Name: sessions_id_session_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE sessions_id_session_seq OWNED BY sessions.id_session;


--
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE users (
    id integer NOT NULL,
    login character varying(255),
    password character varying(255),
    id_role integer
);


ALTER TABLE users OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE users_id_seq OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE users_id_seq OWNED BY users.id;


--
-- Name: id_priv; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY privs ALTER COLUMN id_priv SET DEFAULT nextval('privs_id_priv_seq'::regclass);


--
-- Name: id_session; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY sessions ALTER COLUMN id_session SET DEFAULT nextval('sessions_id_session_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);


--
-- Data for Name: blog; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY blog (id, name, text) FROM stdin;
\.


--
-- Data for Name: comments; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY comments (id, text, blog_id, author) FROM stdin;
\.


--
-- Name: id; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('id', 23, true);


--
-- Data for Name: priv2roles; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY priv2roles (id_role, id_priv) FROM stdin;
2	3
3	2
3	3
3	1
2	1
\.


--
-- Data for Name: privs; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY privs (id_priv, name, description) FROM stdin;
1	admin_section	show admin section
2	add_article	\N
3	del_article	\N
\.


--
-- Name: privs_id_priv_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('privs_id_priv_seq', 1, false);


--
-- Data for Name: roles; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY roles (id_role, name, description) FROM stdin;
1	Пользователь	\N
2	Модеротор	\N
3	Администратор	\N
\.


--
-- Data for Name: sessions; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY sessions (id_session, id_user, sid, time_start, time_last) FROM stdin;
5	3	hlDhpaZotA	2016-07-12 22:50:52	2016-07-12 22:50:52
6	3	XmUqN1m9VS	2016-07-12 22:50:55	2016-07-12 22:50:55
7	3	yl6SwXjJpT	2016-07-12 22:50:55	2016-07-12 22:50:55
8	3	LeGr2yRCWq	2016-07-12 22:51:24	2016-07-12 22:51:24
9	3	TsITlIh18Y	2016-07-12 22:51:42	2016-07-12 22:51:42
10	3	nytdDuGYCN	2016-07-12 22:52:12	2016-07-12 22:52:12
11	3	h2jH0VAxX7	2016-07-12 22:52:22	2016-07-12 22:52:22
12	3	XuITGLHkna	2016-07-12 22:52:37	2016-07-12 22:52:37
13	3	NLUZSbxSvt	2016-07-12 22:52:44	2016-07-12 22:52:44
14	3	awhLYs9JXf	2016-07-12 22:59:30	2016-07-12 22:59:30
15	3	KhIlqB293V	2016-07-12 23:00:20	2016-07-12 23:00:20
16	3	5b2HfHQvQe	2016-07-12 23:00:21	2016-07-12 23:00:21
17	3	iADAwUdd32	2016-07-12 23:00:24	2016-07-12 23:00:24
18	3	TtuIX66E1G	2016-07-12 23:00:24	2016-07-12 23:00:24
19	3	3Sk72qHwwg	2016-07-12 23:00:45	2016-07-12 23:00:45
20	3	IleZRdXPjv	2016-07-12 23:00:53	2016-07-12 23:00:53
21	3	PmTdQPwduf	2016-07-12 23:01:03	2016-07-12 23:01:03
22	3	a4micBKCGr	2016-07-12 23:01:17	2016-07-12 23:01:17
23	3	jFJsYZncSH	2016-07-12 23:01:28	2016-07-12 23:01:28
24	3	4IBIPVL1Rt	2016-07-12 23:01:29	2016-07-12 23:01:29
25	3	q4qXmy6t1i	2016-07-12 23:01:30	2016-07-12 23:01:30
26	3	PHTILVFkq7	2016-07-12 23:01:31	2016-07-12 23:01:31
27	3	w6jbHCot9y	2016-07-12 23:01:31	2016-07-12 23:01:31
28	3	wawELXjrxg	2016-07-12 23:01:32	2016-07-12 23:01:32
29	3	Fc1Zit77wa	2016-07-12 23:01:32	2016-07-12 23:01:32
\.


--
-- Name: sessions_id_session_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('sessions_id_session_seq', 29, true);


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY users (id, login, password, id_role) FROM stdin;
3	admin	21232f297a57a5a743894a0e4a801fc3	3
\.


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('users_id_seq', 3, true);


--
-- Name: privs_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY privs
    ADD CONSTRAINT privs_pkey PRIMARY KEY (id_priv);


--
-- Name: roles_id_role_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY roles
    ADD CONSTRAINT roles_id_role_pk PRIMARY KEY (id_role);


--
-- Name: sessions_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY sessions
    ADD CONSTRAINT sessions_pkey PRIMARY KEY (id_session);


--
-- Name: unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY blog
    ADD CONSTRAINT "unique" UNIQUE (id);


--
-- Name: users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: privs_id_priv_uindex; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX privs_id_priv_uindex ON privs USING btree (id_priv);


--
-- Name: roles_id_role_uindex; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX roles_id_role_uindex ON roles USING btree (id_role);


--
-- Name: sessions_id_session_uindex; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX sessions_id_session_uindex ON sessions USING btree (id_session);


--
-- Name: users_id_uindex; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX users_id_uindex ON users USING btree (id);


--
-- Name: blog_id; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY comments
    ADD CONSTRAINT blog_id FOREIGN KEY (blog_id) REFERENCES blog(id) MATCH FULL;


--
-- Name: priv2roles_privs_id_priv_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY priv2roles
    ADD CONSTRAINT priv2roles_privs_id_priv_fk FOREIGN KEY (id_priv) REFERENCES privs(id_priv);


--
-- Name: priv2roles_roles_id_role_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY priv2roles
    ADD CONSTRAINT priv2roles_roles_id_role_fk FOREIGN KEY (id_role) REFERENCES roles(id_role);


--
-- Name: users_roles_id_role_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_roles_id_role_fk FOREIGN KEY (id) REFERENCES roles(id_role);


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

