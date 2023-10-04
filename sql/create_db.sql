--
-- PostgreSQL database dump
--

-- Dumped from database version 15.3 (Debian 15.3-1.pgdg120+1)
-- Dumped by pg_dump version 15.3 (Debian 15.3-1.pgdg120+1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: tblUsers; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."tblUsers" (
    user_id integer NOT NULL,
    "user_strName" character varying(50) NOT NULL,
    "user_strPassword" character varying(255) NOT NULL,
    "user_strEmail" character varying(255) NOT NULL,
    "user_dtmCreatedAt" timestamp without time zone NOT NULL
);


ALTER TABLE public."tblUsers" OWNER TO postgres;

--
-- Name: tblUsers_user_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."tblUsers_user_id_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."tblUsers_user_id_seq" OWNER TO postgres;

--
-- Name: tblUsers_user_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."tblUsers_user_id_seq" OWNED BY public."tblUsers".user_id;


--
-- Name: tblUsers user_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."tblUsers" ALTER COLUMN user_id SET DEFAULT nextval('public."tblUsers_user_id_seq"'::regclass);


--
-- Data for Name: tblUsers; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."tblUsers" (user_id, "user_strName", "user_strPassword", "user_strEmail", "user_dtmCreatedAt") FROM stdin;
1	luis	$2y$10$.v8NzXyWeIKPcmhHjMv.I.IbZ5K6nJEsuZvu0tKGgCBdqmfRwLv.S	luis@gmail.com	2023-10-04 12:02:56.692547
\.


--
-- Name: tblUsers_user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."tblUsers_user_id_seq"', 1, true);


--
-- Name: tblUsers tblUsers_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."tblUsers"
    ADD CONSTRAINT "tblUsers_pkey" PRIMARY KEY (user_id);


--
-- Name: tblUsers tblUsers_user_strEmail_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."tblUsers"
    ADD CONSTRAINT "tblUsers_user_strEmail_key" UNIQUE ("user_strEmail");


--
-- Name: tblUsers tblUsers_user_strName_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."tblUsers"
    ADD CONSTRAINT "tblUsers_user_strName_key" UNIQUE ("user_strName");


--
-- PostgreSQL database dump complete
--

