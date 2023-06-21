--
-- PostgreSQL database dump
--

-- Dumped from database version 15.3
-- Dumped by pg_dump version 15.3

-- Started on 2023-06-20 23:28:17

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
-- TOC entry 215 (class 1259 OID 16400)
-- Name: doutores; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.doutores (
    id integer NOT NULL,
    nome character varying(200),
    cpf character varying(11),
    figura character varying(200)
);


ALTER TABLE public.doutores OWNER TO postgres;

--
-- TOC entry 214 (class 1259 OID 16399)
-- Name: doutores_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.doutores_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.doutores_id_seq OWNER TO postgres;

--
-- TOC entry 3331 (class 0 OID 0)
-- Dependencies: 214
-- Name: doutores_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.doutores_id_seq OWNED BY public.doutores.id;


--
-- TOC entry 217 (class 1259 OID 16407)
-- Name: pacientes; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.pacientes (
    id integer NOT NULL,
    nome character varying(200),
    cpf character varying(11),
    data_nascimento date,
    figura character varying(200)
);


ALTER TABLE public.pacientes OWNER TO postgres;

--
-- TOC entry 216 (class 1259 OID 16406)
-- Name: pacientes_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.pacientes_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.pacientes_id_seq OWNER TO postgres;

--
-- TOC entry 3332 (class 0 OID 0)
-- Dependencies: 216
-- Name: pacientes_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.pacientes_id_seq OWNED BY public.pacientes.id;


--
-- TOC entry 3178 (class 2604 OID 16403)
-- Name: doutores id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.doutores ALTER COLUMN id SET DEFAULT nextval('public.doutores_id_seq'::regclass);


--
-- TOC entry 3179 (class 2604 OID 16410)
-- Name: pacientes id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.pacientes ALTER COLUMN id SET DEFAULT nextval('public.pacientes_id_seq'::regclass);


--
-- TOC entry 3181 (class 2606 OID 16405)
-- Name: doutores doutores_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.doutores
    ADD CONSTRAINT doutores_pkey PRIMARY KEY (id);


--
-- TOC entry 3183 (class 2606 OID 16412)
-- Name: pacientes pacientes_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.pacientes
    ADD CONSTRAINT pacientes_pkey PRIMARY KEY (id);


-- Completed on 2023-06-20 23:28:17

--
-- PostgreSQL database dump complete
--

