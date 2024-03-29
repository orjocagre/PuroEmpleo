PGDMP         ,                {            Puro_Empleo    15.2    15.2 �               0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                       1262    16398    Puro_Empleo    DATABASE     �   CREATE DATABASE "Puro_Empleo" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Spanish_Mexico.1252';
    DROP DATABASE "Puro_Empleo";
                postgres    false                       1259    16687    calificacion    TABLE     �   CREATE TABLE public.calificacion (
    id integer NOT NULL,
    id_empleado integer,
    id_fabrica integer,
    puntuacion integer,
    comentario character varying
);
     DROP TABLE public.calificacion;
       public         heap    postgres    false                        1259    16686    calificacion_id_seq    SEQUENCE     �   CREATE SEQUENCE public.calificacion_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.calificacion_id_seq;
       public          postgres    false    257                       0    0    calificacion_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.calificacion_id_seq OWNED BY public.calificacion.id;
          public          postgres    false    256            �            1259    16441    correo    TABLE     d   CREATE TABLE public.correo (
    id integer NOT NULL,
    descripcion character varying NOT NULL
);
    DROP TABLE public.correo;
       public         heap    postgres    false            �            1259    16440    correo_id_seq    SEQUENCE     �   CREATE SEQUENCE public.correo_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.correo_id_seq;
       public          postgres    false    221                       0    0    correo_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.correo_id_seq OWNED BY public.correo.id;
          public          postgres    false    220            �            1259    16450 
   curriculum    TABLE     h   CREATE TABLE public.curriculum (
    id integer NOT NULL,
    descripcion character varying NOT NULL
);
    DROP TABLE public.curriculum;
       public         heap    postgres    false            �            1259    16675    curriculum_fabrica    TABLE     w   CREATE TABLE public.curriculum_fabrica (
    id integer NOT NULL,
    id_fabrica integer,
    id_curriculum integer
);
 &   DROP TABLE public.curriculum_fabrica;
       public         heap    postgres    false            �            1259    16674    curriculum_fabrica_id_seq    SEQUENCE     �   CREATE SEQUENCE public.curriculum_fabrica_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public.curriculum_fabrica_id_seq;
       public          postgres    false    255                       0    0    curriculum_fabrica_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public.curriculum_fabrica_id_seq OWNED BY public.curriculum_fabrica.id;
          public          postgres    false    254            �            1259    16449    curriculum_id_seq    SEQUENCE     �   CREATE SEQUENCE public.curriculum_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.curriculum_id_seq;
       public          postgres    false    223                       0    0    curriculum_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.curriculum_id_seq OWNED BY public.curriculum.id;
          public          postgres    false    222            �            1259    16432    departamento    TABLE     e   CREATE TABLE public.departamento (
    id integer NOT NULL,
    nombre character varying NOT NULL
);
     DROP TABLE public.departamento;
       public         heap    postgres    false            �            1259    16431    departamento_id_seq    SEQUENCE     �   CREATE SEQUENCE public.departamento_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.departamento_id_seq;
       public          postgres    false    219                       0    0    departamento_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.departamento_id_seq OWNED BY public.departamento.id;
          public          postgres    false    218            �            1259    16570 	   direccion    TABLE     �   CREATE TABLE public.direccion (
    id integer NOT NULL,
    descripcion character varying NOT NULL,
    id_departamento integer
);
    DROP TABLE public.direccion;
       public         heap    postgres    false            �            1259    16569    direccion_id_seq    SEQUENCE     �   CREATE SEQUENCE public.direccion_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.direccion_id_seq;
       public          postgres    false    241                       0    0    direccion_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.direccion_id_seq OWNED BY public.direccion.id;
          public          postgres    false    240            �            1259    16601    empleado    TABLE     �   CREATE TABLE public.empleado (
    id integer NOT NULL,
    id_persona integer,
    id_curiculum integer,
    id_usuario integer
);
    DROP TABLE public.empleado;
       public         heap    postgres    false            �            1259    16600    empleado_id_seq    SEQUENCE     �   CREATE SEQUENCE public.empleado_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.empleado_id_seq;
       public          postgres    false    245                       0    0    empleado_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.empleado_id_seq OWNED BY public.empleado.id;
          public          postgres    false    244            �            1259    16477    estado_solicitud_empleo    TABLE     �   CREATE TABLE public.estado_solicitud_empleo (
    id integer NOT NULL,
    descricion character varying NOT NULL,
    comentario character varying
);
 +   DROP TABLE public.estado_solicitud_empleo;
       public         heap    postgres    false            �            1259    16476    estado_solicitud_empleo_id_seq    SEQUENCE     �   CREATE SEQUENCE public.estado_solicitud_empleo_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 5   DROP SEQUENCE public.estado_solicitud_empleo_id_seq;
       public          postgres    false    229                       0    0    estado_solicitud_empleo_id_seq    SEQUENCE OWNED BY     a   ALTER SEQUENCE public.estado_solicitud_empleo_id_seq OWNED BY public.estado_solicitud_empleo.id;
          public          postgres    false    228            �            1259    16547    estado_usuario    TABLE     g   CREATE TABLE public.estado_usuario (
    id integer NOT NULL,
    estado character varying NOT NULL
);
 "   DROP TABLE public.estado_usuario;
       public         heap    postgres    false            �            1259    16546    estado_usuario_id_seq    SEQUENCE     �   CREATE SEQUENCE public.estado_usuario_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.estado_usuario_id_seq;
       public          postgres    false    237                        0    0    estado_usuario_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.estado_usuario_id_seq OWNED BY public.estado_usuario.id;
          public          postgres    false    236            �            1259    16468    estado_vacante    TABLE     l   CREATE TABLE public.estado_vacante (
    id integer NOT NULL,
    descripcion character varying NOT NULL
);
 "   DROP TABLE public.estado_vacante;
       public         heap    postgres    false            �            1259    16467    estado_vacante_id_seq    SEQUENCE     �   CREATE SEQUENCE public.estado_vacante_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.estado_vacante_id_seq;
       public          postgres    false    227            !           0    0    estado_vacante_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.estado_vacante_id_seq OWNED BY public.estado_vacante.id;
          public          postgres    false    226            �            1259    16623    experiencia    TABLE     �   CREATE TABLE public.experiencia (
    id integer NOT NULL,
    id_empleado integer,
    fecha_inicio date NOT NULL,
    fecha_final date NOT NULL,
    id_puesto integer,
    descripcion character varying NOT NULL
);
    DROP TABLE public.experiencia;
       public         heap    postgres    false            �            1259    16622    experiencia_id_seq    SEQUENCE     �   CREATE SEQUENCE public.experiencia_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.experiencia_id_seq;
       public          postgres    false    247            "           0    0    experiencia_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.experiencia_id_seq OWNED BY public.experiencia.id;
          public          postgres    false    246            �            1259    16642    fabrica    TABLE     �   CREATE TABLE public.fabrica (
    id integer NOT NULL,
    nombre character varying NOT NULL,
    promedio_califiacione double precision
);
    DROP TABLE public.fabrica;
       public         heap    postgres    false            �            1259    16651    fabrica_correo    TABLE     o   CREATE TABLE public.fabrica_correo (
    id integer NOT NULL,
    id_correo integer,
    id_fabrica integer
);
 "   DROP TABLE public.fabrica_correo;
       public         heap    postgres    false            �            1259    16650    fabrica_correo_id_seq    SEQUENCE     �   CREATE SEQUENCE public.fabrica_correo_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.fabrica_correo_id_seq;
       public          postgres    false    251            #           0    0    fabrica_correo_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.fabrica_correo_id_seq OWNED BY public.fabrica_correo.id;
          public          postgres    false    250            �            1259    16663    fabrica_direccion    TABLE     u   CREATE TABLE public.fabrica_direccion (
    id integer NOT NULL,
    id_direccion integer,
    id_fabrica integer
);
 %   DROP TABLE public.fabrica_direccion;
       public         heap    postgres    false            �            1259    16662    fabrica_direccion_id_seq    SEQUENCE     �   CREATE SEQUENCE public.fabrica_direccion_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.fabrica_direccion_id_seq;
       public          postgres    false    253            $           0    0    fabrica_direccion_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.fabrica_direccion_id_seq OWNED BY public.fabrica_direccion.id;
          public          postgres    false    252            �            1259    16641    fabrica_id_seq    SEQUENCE     �   CREATE SEQUENCE public.fabrica_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.fabrica_id_seq;
       public          postgres    false    249            %           0    0    fabrica_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.fabrica_id_seq OWNED BY public.fabrica.id;
          public          postgres    false    248                       1259    16849    fabrica_telefono    TABLE     s   CREATE TABLE public.fabrica_telefono (
    id integer NOT NULL,
    id_fabrica integer,
    id_telefono integer
);
 $   DROP TABLE public.fabrica_telefono;
       public         heap    postgres    false                       1259    16848    fabrica_telefono_id_seq    SEQUENCE     �   CREATE SEQUENCE public.fabrica_telefono_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.fabrica_telefono_id_seq;
       public          postgres    false    262            &           0    0    fabrica_telefono_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.fabrica_telefono_id_seq OWNED BY public.fabrica_telefono.id;
          public          postgres    false    261            �            1259    16409    persona    TABLE     #  CREATE TABLE public.persona (
    id_persona integer NOT NULL,
    nombre character varying NOT NULL,
    id_sexo integer,
    apellido_nombre character varying NOT NULL,
    segundo_apellido character varying NOT NULL,
    edad integer NOT NULL,
    identitad character varying NOT NULL
);
    DROP TABLE public.persona;
       public         heap    postgres    false            �            1259    16510    persona_correo    TABLE     o   CREATE TABLE public.persona_correo (
    id integer NOT NULL,
    id_persona integer,
    id_correo integer
);
 "   DROP TABLE public.persona_correo;
       public         heap    postgres    false            �            1259    16509    persona_correo_id_seq    SEQUENCE     �   CREATE SEQUENCE public.persona_correo_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.persona_correo_id_seq;
       public          postgres    false    233            '           0    0    persona_correo_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.persona_correo_id_seq OWNED BY public.persona_correo.id;
          public          postgres    false    232            �            1259    16584    persona_direccion    TABLE     u   CREATE TABLE public.persona_direccion (
    id integer NOT NULL,
    id_persona integer,
    id_direccion integer
);
 %   DROP TABLE public.persona_direccion;
       public         heap    postgres    false            �            1259    16583    persona_direccion_id_seq    SEQUENCE     �   CREATE SEQUENCE public.persona_direccion_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.persona_direccion_id_seq;
       public          postgres    false    243            (           0    0    persona_direccion_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.persona_direccion_id_seq OWNED BY public.persona_direccion.id;
          public          postgres    false    242            �            1259    16408    persona_id_persona_seq    SEQUENCE     �   CREATE SEQUENCE public.persona_id_persona_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.persona_id_persona_seq;
       public          postgres    false    215            )           0    0    persona_id_persona_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.persona_id_persona_seq OWNED BY public.persona.id_persona;
          public          postgres    false    214            �            1259    16488    persona_telefono    TABLE     s   CREATE TABLE public.persona_telefono (
    id integer NOT NULL,
    id_persona integer,
    id_telefono integer
);
 $   DROP TABLE public.persona_telefono;
       public         heap    postgres    false            �            1259    16487    persona_telefono_id_seq    SEQUENCE     �   CREATE SEQUENCE public.persona_telefono_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.persona_telefono_id_seq;
       public          postgres    false    231            *           0    0    persona_telefono_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.persona_telefono_id_seq OWNED BY public.persona_telefono.id;
          public          postgres    false    230            �            1259    16459    puesto    TABLE     V   CREATE TABLE public.puesto (
    id integer NOT NULL,
    nombre character varying
);
    DROP TABLE public.puesto;
       public         heap    postgres    false            �            1259    16458    puesto_id_seq    SEQUENCE     �   CREATE SEQUENCE public.puesto_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.puesto_id_seq;
       public          postgres    false    225            +           0    0    puesto_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.puesto_id_seq OWNED BY public.puesto.id;
          public          postgres    false    224            �            1259    16532    sexo    TABLE     b   CREATE TABLE public.sexo (
    id integer NOT NULL,
    descripcion character varying NOT NULL
);
    DROP TABLE public.sexo;
       public         heap    postgres    false            �            1259    16531    sexo_id_seq    SEQUENCE     �   CREATE SEQUENCE public.sexo_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.sexo_id_seq;
       public          postgres    false    235            ,           0    0    sexo_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.sexo_id_seq OWNED BY public.sexo.id;
          public          postgres    false    234                       1259    16866    solicitud_empleo    TABLE     �   CREATE TABLE public.solicitud_empleo (
    id integer NOT NULL,
    id_empleado integer,
    id_vacante integer,
    fecha_solicitud date,
    fecha_aprobado date,
    id_estado_solicitud_empleo integer,
    id_usuario_fabrica integer
);
 $   DROP TABLE public.solicitud_empleo;
       public         heap    postgres    false                       1259    16865    solicitud_empleo_id_seq    SEQUENCE     �   CREATE SEQUENCE public.solicitud_empleo_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.solicitud_empleo_id_seq;
       public          postgres    false    264            -           0    0    solicitud_empleo_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.solicitud_empleo_id_seq OWNED BY public.solicitud_empleo.id;
          public          postgres    false    263            �            1259    16425    telefono    TABLE     W   CREATE TABLE public.telefono (
    id integer NOT NULL,
    numero integer NOT NULL
);
    DROP TABLE public.telefono;
       public         heap    postgres    false            �            1259    16424    telefono_id_seq    SEQUENCE     �   CREATE SEQUENCE public.telefono_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.telefono_id_seq;
       public          postgres    false    217            .           0    0    telefono_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.telefono_id_seq OWNED BY public.telefono.id;
          public          postgres    false    216            �            1259    16556    usuario    TABLE     �   CREATE TABLE public.usuario (
    id integer NOT NULL,
    nombre_usuario character varying NOT NULL,
    contrasegna character varying NOT NULL,
    id_estado_usuario integer,
    fecha_creacion date NOT NULL
);
    DROP TABLE public.usuario;
       public         heap    postgres    false                       1259    16713    usuario_fabrica    TABLE     �   CREATE TABLE public.usuario_fabrica (
    id integer NOT NULL,
    id_fabrica integer,
    nombre character varying NOT NULL,
    clave character varying NOT NULL,
    id_usuario integer
);
 #   DROP TABLE public.usuario_fabrica;
       public         heap    postgres    false                       1259    16712    usuario_fabrica_id_seq    SEQUENCE     �   CREATE SEQUENCE public.usuario_fabrica_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.usuario_fabrica_id_seq;
       public          postgres    false    259            /           0    0    usuario_fabrica_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.usuario_fabrica_id_seq OWNED BY public.usuario_fabrica.id;
          public          postgres    false    258            �            1259    16555    usuario_id_seq    SEQUENCE     �   CREATE SEQUENCE public.usuario_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.usuario_id_seq;
       public          postgres    false    239            0           0    0    usuario_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.usuario_id_seq OWNED BY public.usuario.id;
          public          postgres    false    238                       1259    16767    vacante    TABLE     s  CREATE TABLE public.vacante (
    id integer DEFAULT nextval('public.calificacion_id_seq'::regclass) NOT NULL,
    id_puesto integer,
    id_fabrica integer,
    id_estado_vacante integer,
    fecha date,
    salario double precision,
    horario character varying,
    prestaciones character varying,
    id_usuario_fabrica integer,
    descripcion character varying
);
    DROP TABLE public.vacante;
       public         heap    postgres    false    256            �           2604    16892    calificacion id    DEFAULT     r   ALTER TABLE ONLY public.calificacion ALTER COLUMN id SET DEFAULT nextval('public.calificacion_id_seq'::regclass);
 >   ALTER TABLE public.calificacion ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    257    256    257            �           2604    16893 	   correo id    DEFAULT     f   ALTER TABLE ONLY public.correo ALTER COLUMN id SET DEFAULT nextval('public.correo_id_seq'::regclass);
 8   ALTER TABLE public.correo ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    220    221    221            �           2604    16894    curriculum id    DEFAULT     n   ALTER TABLE ONLY public.curriculum ALTER COLUMN id SET DEFAULT nextval('public.curriculum_id_seq'::regclass);
 <   ALTER TABLE public.curriculum ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    223    222    223            �           2604    16895    curriculum_fabrica id    DEFAULT     ~   ALTER TABLE ONLY public.curriculum_fabrica ALTER COLUMN id SET DEFAULT nextval('public.curriculum_fabrica_id_seq'::regclass);
 D   ALTER TABLE public.curriculum_fabrica ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    254    255    255            �           2604    16896    departamento id    DEFAULT     r   ALTER TABLE ONLY public.departamento ALTER COLUMN id SET DEFAULT nextval('public.departamento_id_seq'::regclass);
 >   ALTER TABLE public.departamento ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    218    219    219            �           2604    16897    direccion id    DEFAULT     l   ALTER TABLE ONLY public.direccion ALTER COLUMN id SET DEFAULT nextval('public.direccion_id_seq'::regclass);
 ;   ALTER TABLE public.direccion ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    241    240    241            �           2604    16898    empleado id    DEFAULT     j   ALTER TABLE ONLY public.empleado ALTER COLUMN id SET DEFAULT nextval('public.empleado_id_seq'::regclass);
 :   ALTER TABLE public.empleado ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    245    244    245            �           2604    16899    estado_solicitud_empleo id    DEFAULT     �   ALTER TABLE ONLY public.estado_solicitud_empleo ALTER COLUMN id SET DEFAULT nextval('public.estado_solicitud_empleo_id_seq'::regclass);
 I   ALTER TABLE public.estado_solicitud_empleo ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    229    228    229            �           2604    16900    estado_usuario id    DEFAULT     v   ALTER TABLE ONLY public.estado_usuario ALTER COLUMN id SET DEFAULT nextval('public.estado_usuario_id_seq'::regclass);
 @   ALTER TABLE public.estado_usuario ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    236    237    237            �           2604    16901    estado_vacante id    DEFAULT     v   ALTER TABLE ONLY public.estado_vacante ALTER COLUMN id SET DEFAULT nextval('public.estado_vacante_id_seq'::regclass);
 @   ALTER TABLE public.estado_vacante ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    227    226    227            �           2604    16902    experiencia id    DEFAULT     p   ALTER TABLE ONLY public.experiencia ALTER COLUMN id SET DEFAULT nextval('public.experiencia_id_seq'::regclass);
 =   ALTER TABLE public.experiencia ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    246    247    247            �           2604    16903 
   fabrica id    DEFAULT     h   ALTER TABLE ONLY public.fabrica ALTER COLUMN id SET DEFAULT nextval('public.fabrica_id_seq'::regclass);
 9   ALTER TABLE public.fabrica ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    248    249    249            �           2604    16904    fabrica_correo id    DEFAULT     v   ALTER TABLE ONLY public.fabrica_correo ALTER COLUMN id SET DEFAULT nextval('public.fabrica_correo_id_seq'::regclass);
 @   ALTER TABLE public.fabrica_correo ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    250    251    251            �           2604    16905    fabrica_direccion id    DEFAULT     |   ALTER TABLE ONLY public.fabrica_direccion ALTER COLUMN id SET DEFAULT nextval('public.fabrica_direccion_id_seq'::regclass);
 C   ALTER TABLE public.fabrica_direccion ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    252    253    253            �           2604    16906    fabrica_telefono id    DEFAULT     z   ALTER TABLE ONLY public.fabrica_telefono ALTER COLUMN id SET DEFAULT nextval('public.fabrica_telefono_id_seq'::regclass);
 B   ALTER TABLE public.fabrica_telefono ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    262    261    262            �           2604    16907    persona id_persona    DEFAULT     x   ALTER TABLE ONLY public.persona ALTER COLUMN id_persona SET DEFAULT nextval('public.persona_id_persona_seq'::regclass);
 A   ALTER TABLE public.persona ALTER COLUMN id_persona DROP DEFAULT;
       public          postgres    false    215    214    215            �           2604    16908    persona_correo id    DEFAULT     v   ALTER TABLE ONLY public.persona_correo ALTER COLUMN id SET DEFAULT nextval('public.persona_correo_id_seq'::regclass);
 @   ALTER TABLE public.persona_correo ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    232    233    233            �           2604    16909    persona_direccion id    DEFAULT     |   ALTER TABLE ONLY public.persona_direccion ALTER COLUMN id SET DEFAULT nextval('public.persona_direccion_id_seq'::regclass);
 C   ALTER TABLE public.persona_direccion ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    242    243    243            �           2604    16910    persona_telefono id    DEFAULT     z   ALTER TABLE ONLY public.persona_telefono ALTER COLUMN id SET DEFAULT nextval('public.persona_telefono_id_seq'::regclass);
 B   ALTER TABLE public.persona_telefono ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    231    230    231            �           2604    16911 	   puesto id    DEFAULT     f   ALTER TABLE ONLY public.puesto ALTER COLUMN id SET DEFAULT nextval('public.puesto_id_seq'::regclass);
 8   ALTER TABLE public.puesto ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    224    225    225            �           2604    16912    sexo id    DEFAULT     b   ALTER TABLE ONLY public.sexo ALTER COLUMN id SET DEFAULT nextval('public.sexo_id_seq'::regclass);
 6   ALTER TABLE public.sexo ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    235    234    235            �           2604    16913    solicitud_empleo id    DEFAULT     z   ALTER TABLE ONLY public.solicitud_empleo ALTER COLUMN id SET DEFAULT nextval('public.solicitud_empleo_id_seq'::regclass);
 B   ALTER TABLE public.solicitud_empleo ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    264    263    264            �           2604    16914    telefono id    DEFAULT     j   ALTER TABLE ONLY public.telefono ALTER COLUMN id SET DEFAULT nextval('public.telefono_id_seq'::regclass);
 :   ALTER TABLE public.telefono ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    216    217    217            �           2604    16915 
   usuario id    DEFAULT     h   ALTER TABLE ONLY public.usuario ALTER COLUMN id SET DEFAULT nextval('public.usuario_id_seq'::regclass);
 9   ALTER TABLE public.usuario ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    239    238    239            �           2604    16916    usuario_fabrica id    DEFAULT     x   ALTER TABLE ONLY public.usuario_fabrica ALTER COLUMN id SET DEFAULT nextval('public.usuario_fabrica_id_seq'::regclass);
 A   ALTER TABLE public.usuario_fabrica ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    259    258    259            
          0    16687    calificacion 
   TABLE DATA           [   COPY public.calificacion (id, id_empleado, id_fabrica, puntuacion, comentario) FROM stdin;
    public          postgres    false    257   ��       �          0    16441    correo 
   TABLE DATA           1   COPY public.correo (id, descripcion) FROM stdin;
    public          postgres    false    221           �          0    16450 
   curriculum 
   TABLE DATA           5   COPY public.curriculum (id, descripcion) FROM stdin;
    public          postgres    false    223                    0    16675    curriculum_fabrica 
   TABLE DATA           K   COPY public.curriculum_fabrica (id, id_fabrica, id_curriculum) FROM stdin;
    public          postgres    false    255   :       �          0    16432    departamento 
   TABLE DATA           2   COPY public.departamento (id, nombre) FROM stdin;
    public          postgres    false    219   W       �          0    16570 	   direccion 
   TABLE DATA           E   COPY public.direccion (id, descripcion, id_departamento) FROM stdin;
    public          postgres    false    241   t       �          0    16601    empleado 
   TABLE DATA           L   COPY public.empleado (id, id_persona, id_curiculum, id_usuario) FROM stdin;
    public          postgres    false    245   �       �          0    16477    estado_solicitud_empleo 
   TABLE DATA           M   COPY public.estado_solicitud_empleo (id, descricion, comentario) FROM stdin;
    public          postgres    false    229   �       �          0    16547    estado_usuario 
   TABLE DATA           4   COPY public.estado_usuario (id, estado) FROM stdin;
    public          postgres    false    237   �       �          0    16468    estado_vacante 
   TABLE DATA           9   COPY public.estado_vacante (id, descripcion) FROM stdin;
    public          postgres    false    227   �                  0    16623    experiencia 
   TABLE DATA           i   COPY public.experiencia (id, id_empleado, fecha_inicio, fecha_final, id_puesto, descripcion) FROM stdin;
    public          postgres    false    247                   0    16642    fabrica 
   TABLE DATA           D   COPY public.fabrica (id, nombre, promedio_califiacione) FROM stdin;
    public          postgres    false    249   "                0    16651    fabrica_correo 
   TABLE DATA           C   COPY public.fabrica_correo (id, id_correo, id_fabrica) FROM stdin;
    public          postgres    false    251   ?                0    16663    fabrica_direccion 
   TABLE DATA           I   COPY public.fabrica_direccion (id, id_direccion, id_fabrica) FROM stdin;
    public          postgres    false    253   \                0    16849    fabrica_telefono 
   TABLE DATA           G   COPY public.fabrica_telefono (id, id_fabrica, id_telefono) FROM stdin;
    public          postgres    false    262   y      �          0    16409    persona 
   TABLE DATA           r   COPY public.persona (id_persona, nombre, id_sexo, apellido_nombre, segundo_apellido, edad, identitad) FROM stdin;
    public          postgres    false    215   �      �          0    16510    persona_correo 
   TABLE DATA           C   COPY public.persona_correo (id, id_persona, id_correo) FROM stdin;
    public          postgres    false    233   �      �          0    16584    persona_direccion 
   TABLE DATA           I   COPY public.persona_direccion (id, id_persona, id_direccion) FROM stdin;
    public          postgres    false    243   �      �          0    16488    persona_telefono 
   TABLE DATA           G   COPY public.persona_telefono (id, id_persona, id_telefono) FROM stdin;
    public          postgres    false    231   �      �          0    16459    puesto 
   TABLE DATA           ,   COPY public.puesto (id, nombre) FROM stdin;
    public          postgres    false    225   
      �          0    16532    sexo 
   TABLE DATA           /   COPY public.sexo (id, descripcion) FROM stdin;
    public          postgres    false    235   '                0    16866    solicitud_empleo 
   TABLE DATA           �   COPY public.solicitud_empleo (id, id_empleado, id_vacante, fecha_solicitud, fecha_aprobado, id_estado_solicitud_empleo, id_usuario_fabrica) FROM stdin;
    public          postgres    false    264   D      �          0    16425    telefono 
   TABLE DATA           .   COPY public.telefono (id, numero) FROM stdin;
    public          postgres    false    217   a      �          0    16556    usuario 
   TABLE DATA           e   COPY public.usuario (id, nombre_usuario, contrasegna, id_estado_usuario, fecha_creacion) FROM stdin;
    public          postgres    false    239   ~                0    16713    usuario_fabrica 
   TABLE DATA           T   COPY public.usuario_fabrica (id, id_fabrica, nombre, clave, id_usuario) FROM stdin;
    public          postgres    false    259   �                0    16767    vacante 
   TABLE DATA           �   COPY public.vacante (id, id_puesto, id_fabrica, id_estado_vacante, fecha, salario, horario, prestaciones, id_usuario_fabrica, descripcion) FROM stdin;
    public          postgres    false    260   �      1           0    0    calificacion_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.calificacion_id_seq', 1, false);
          public          postgres    false    256            2           0    0    correo_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.correo_id_seq', 1, false);
          public          postgres    false    220            3           0    0    curriculum_fabrica_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.curriculum_fabrica_id_seq', 1, false);
          public          postgres    false    254            4           0    0    curriculum_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.curriculum_id_seq', 1, false);
          public          postgres    false    222            5           0    0    departamento_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.departamento_id_seq', 1, false);
          public          postgres    false    218            6           0    0    direccion_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.direccion_id_seq', 1, false);
          public          postgres    false    240            7           0    0    empleado_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.empleado_id_seq', 1, false);
          public          postgres    false    244            8           0    0    estado_solicitud_empleo_id_seq    SEQUENCE SET     M   SELECT pg_catalog.setval('public.estado_solicitud_empleo_id_seq', 1, false);
          public          postgres    false    228            9           0    0    estado_usuario_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.estado_usuario_id_seq', 1, false);
          public          postgres    false    236            :           0    0    estado_vacante_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.estado_vacante_id_seq', 1, false);
          public          postgres    false    226            ;           0    0    experiencia_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.experiencia_id_seq', 1, false);
          public          postgres    false    246            <           0    0    fabrica_correo_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.fabrica_correo_id_seq', 1, false);
          public          postgres    false    250            =           0    0    fabrica_direccion_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.fabrica_direccion_id_seq', 1, false);
          public          postgres    false    252            >           0    0    fabrica_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.fabrica_id_seq', 1, false);
          public          postgres    false    248            ?           0    0    fabrica_telefono_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.fabrica_telefono_id_seq', 1, false);
          public          postgres    false    261            @           0    0    persona_correo_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.persona_correo_id_seq', 1, false);
          public          postgres    false    232            A           0    0    persona_direccion_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.persona_direccion_id_seq', 1, false);
          public          postgres    false    242            B           0    0    persona_id_persona_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.persona_id_persona_seq', 1, false);
          public          postgres    false    214            C           0    0    persona_telefono_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.persona_telefono_id_seq', 1, false);
          public          postgres    false    230            D           0    0    puesto_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.puesto_id_seq', 1, false);
          public          postgres    false    224            E           0    0    sexo_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.sexo_id_seq', 1, false);
          public          postgres    false    234            F           0    0    solicitud_empleo_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.solicitud_empleo_id_seq', 1, false);
          public          postgres    false    263            G           0    0    telefono_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.telefono_id_seq', 1, false);
          public          postgres    false    216            H           0    0    usuario_fabrica_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.usuario_fabrica_id_seq', 1, false);
          public          postgres    false    258            I           0    0    usuario_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.usuario_id_seq', 1, false);
          public          postgres    false    238            (           2606    16837 %   usuario_fabrica fk_id_usuario_fabrica 
   CONSTRAINT     c   ALTER TABLE ONLY public.usuario_fabrica
    ADD CONSTRAINT fk_id_usuario_fabrica PRIMARY KEY (id);
 O   ALTER TABLE ONLY public.usuario_fabrica DROP CONSTRAINT fk_id_usuario_fabrica;
       public            postgres    false    259            $           2606    16806 (   curriculum_fabrica pk_curriculum_fabrica 
   CONSTRAINT     f   ALTER TABLE ONLY public.curriculum_fabrica
    ADD CONSTRAINT pk_curriculum_fabrica PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.curriculum_fabrica DROP CONSTRAINT pk_curriculum_fabrica;
       public            postgres    false    255                       2606    16606    empleado pk_empleado 
   CONSTRAINT     R   ALTER TABLE ONLY public.empleado
    ADD CONSTRAINT pk_empleado PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.empleado DROP CONSTRAINT pk_empleado;
       public            postgres    false    245                        2606    16818 #   fabrica_correo pk_fabrica_correo_id 
   CONSTRAINT     a   ALTER TABLE ONLY public.fabrica_correo
    ADD CONSTRAINT pk_fabrica_correo_id PRIMARY KEY (id);
 M   ALTER TABLE ONLY public.fabrica_correo DROP CONSTRAINT pk_fabrica_correo_id;
       public            postgres    false    251            "           2606    16825 )   fabrica_direccion pk_fabrica_direccion_id 
   CONSTRAINT     g   ALTER TABLE ONLY public.fabrica_direccion
    ADD CONSTRAINT pk_fabrica_direccion_id PRIMARY KEY (id);
 S   ALTER TABLE ONLY public.fabrica_direccion DROP CONSTRAINT pk_fabrica_direccion_id;
       public            postgres    false    253            &           2606    16694    calificacion pk_id_calificacion 
   CONSTRAINT     ]   ALTER TABLE ONLY public.calificacion
    ADD CONSTRAINT pk_id_calificacion PRIMARY KEY (id);
 I   ALTER TABLE ONLY public.calificacion DROP CONSTRAINT pk_id_calificacion;
       public            postgres    false    257                       2606    16448    correo pk_id_correo 
   CONSTRAINT     Q   ALTER TABLE ONLY public.correo
    ADD CONSTRAINT pk_id_correo PRIMARY KEY (id);
 =   ALTER TABLE ONLY public.correo DROP CONSTRAINT pk_id_correo;
       public            postgres    false    221                       2606    16457    curriculum pk_id_curriculum 
   CONSTRAINT     Y   ALTER TABLE ONLY public.curriculum
    ADD CONSTRAINT pk_id_curriculum PRIMARY KEY (id);
 E   ALTER TABLE ONLY public.curriculum DROP CONSTRAINT pk_id_curriculum;
       public            postgres    false    223                        2606    16439    departamento pk_id_departamento 
   CONSTRAINT     ]   ALTER TABLE ONLY public.departamento
    ADD CONSTRAINT pk_id_departamento PRIMARY KEY (id);
 I   ALTER TABLE ONLY public.departamento DROP CONSTRAINT pk_id_departamento;
       public            postgres    false    219                       2606    16577    direccion pk_id_direccion 
   CONSTRAINT     W   ALTER TABLE ONLY public.direccion
    ADD CONSTRAINT pk_id_direccion PRIMARY KEY (id);
 C   ALTER TABLE ONLY public.direccion DROP CONSTRAINT pk_id_direccion;
       public            postgres    false    241            
           2606    16484 5   estado_solicitud_empleo pk_id_estado_solicitud_empleo 
   CONSTRAINT     s   ALTER TABLE ONLY public.estado_solicitud_empleo
    ADD CONSTRAINT pk_id_estado_solicitud_empleo PRIMARY KEY (id);
 _   ALTER TABLE ONLY public.estado_solicitud_empleo DROP CONSTRAINT pk_id_estado_solicitud_empleo;
       public            postgres    false    229                       2606    16554 #   estado_usuario pk_id_estado_usuario 
   CONSTRAINT     a   ALTER TABLE ONLY public.estado_usuario
    ADD CONSTRAINT pk_id_estado_usuario PRIMARY KEY (id);
 M   ALTER TABLE ONLY public.estado_usuario DROP CONSTRAINT pk_id_estado_usuario;
       public            postgres    false    237                       2606    16475 #   estado_vacante pk_id_estado_vacante 
   CONSTRAINT     a   ALTER TABLE ONLY public.estado_vacante
    ADD CONSTRAINT pk_id_estado_vacante PRIMARY KEY (id);
 M   ALTER TABLE ONLY public.estado_vacante DROP CONSTRAINT pk_id_estado_vacante;
       public            postgres    false    227                       2606    16630    experiencia pk_id_experiencia 
   CONSTRAINT     [   ALTER TABLE ONLY public.experiencia
    ADD CONSTRAINT pk_id_experiencia PRIMARY KEY (id);
 G   ALTER TABLE ONLY public.experiencia DROP CONSTRAINT pk_id_experiencia;
       public            postgres    false    247                       2606    16649    fabrica pk_id_fabrica 
   CONSTRAINT     S   ALTER TABLE ONLY public.fabrica
    ADD CONSTRAINT pk_id_fabrica PRIMARY KEY (id);
 ?   ALTER TABLE ONLY public.fabrica DROP CONSTRAINT pk_id_fabrica;
       public            postgres    false    249            ,           2606    16854 '   fabrica_telefono pk_id_fabrica_telefono 
   CONSTRAINT     e   ALTER TABLE ONLY public.fabrica_telefono
    ADD CONSTRAINT pk_id_fabrica_telefono PRIMARY KEY (id);
 Q   ALTER TABLE ONLY public.fabrica_telefono DROP CONSTRAINT pk_id_fabrica_telefono;
       public            postgres    false    262            �           2606    16418    persona pk_id_persona 
   CONSTRAINT     [   ALTER TABLE ONLY public.persona
    ADD CONSTRAINT pk_id_persona PRIMARY KEY (id_persona);
 ?   ALTER TABLE ONLY public.persona DROP CONSTRAINT pk_id_persona;
       public            postgres    false    215                       2606    16589 )   persona_direccion pk_id_persona_direccion 
   CONSTRAINT     g   ALTER TABLE ONLY public.persona_direccion
    ADD CONSTRAINT pk_id_persona_direccion PRIMARY KEY (id);
 S   ALTER TABLE ONLY public.persona_direccion DROP CONSTRAINT pk_id_persona_direccion;
       public            postgres    false    243                       2606    16493 '   persona_telefono pk_id_persona_telefono 
   CONSTRAINT     e   ALTER TABLE ONLY public.persona_telefono
    ADD CONSTRAINT pk_id_persona_telefono PRIMARY KEY (id);
 Q   ALTER TABLE ONLY public.persona_telefono DROP CONSTRAINT pk_id_persona_telefono;
       public            postgres    false    231                       2606    16466    puesto pk_id_puesto 
   CONSTRAINT     Q   ALTER TABLE ONLY public.puesto
    ADD CONSTRAINT pk_id_puesto PRIMARY KEY (id);
 =   ALTER TABLE ONLY public.puesto DROP CONSTRAINT pk_id_puesto;
       public            postgres    false    225                       2606    16539    sexo pk_id_sexo 
   CONSTRAINT     M   ALTER TABLE ONLY public.sexo
    ADD CONSTRAINT pk_id_sexo PRIMARY KEY (id);
 9   ALTER TABLE ONLY public.sexo DROP CONSTRAINT pk_id_sexo;
       public            postgres    false    235            .           2606    16871 '   solicitud_empleo pk_id_solicitud_empleo 
   CONSTRAINT     e   ALTER TABLE ONLY public.solicitud_empleo
    ADD CONSTRAINT pk_id_solicitud_empleo PRIMARY KEY (id);
 Q   ALTER TABLE ONLY public.solicitud_empleo DROP CONSTRAINT pk_id_solicitud_empleo;
       public            postgres    false    264            �           2606    16430    telefono pk_id_telefono 
   CONSTRAINT     U   ALTER TABLE ONLY public.telefono
    ADD CONSTRAINT pk_id_telefono PRIMARY KEY (id);
 A   ALTER TABLE ONLY public.telefono DROP CONSTRAINT pk_id_telefono;
       public            postgres    false    217                       2606    16563    usuario pk_id_usuario 
   CONSTRAINT     S   ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT pk_id_usuario PRIMARY KEY (id);
 ?   ALTER TABLE ONLY public.usuario DROP CONSTRAINT pk_id_usuario;
       public            postgres    false    239            *           2606    16795    vacante pk_id_vacante 
   CONSTRAINT     S   ALTER TABLE ONLY public.vacante
    ADD CONSTRAINT pk_id_vacante PRIMARY KEY (id);
 ?   ALTER TABLE ONLY public.vacante DROP CONSTRAINT pk_id_vacante;
       public            postgres    false    260                       2606    16515     persona_correo pk_persona_correo 
   CONSTRAINT     ^   ALTER TABLE ONLY public.persona_correo
    ADD CONSTRAINT pk_persona_correo PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.persona_correo DROP CONSTRAINT pk_persona_correo;
       public            postgres    false    233            C           2606    16695 (   calificacion fk_calificacion_id_empleado    FK CONSTRAINT     �   ALTER TABLE ONLY public.calificacion
    ADD CONSTRAINT fk_calificacion_id_empleado FOREIGN KEY (id_empleado) REFERENCES public.empleado(id);
 R   ALTER TABLE ONLY public.calificacion DROP CONSTRAINT fk_calificacion_id_empleado;
       public          postgres    false    245    257    3354            D           2606    16700 '   calificacion fk_calificacion_id_fabrica    FK CONSTRAINT     �   ALTER TABLE ONLY public.calificacion
    ADD CONSTRAINT fk_calificacion_id_fabrica FOREIGN KEY (id_fabrica) REFERENCES public.fabrica(id);
 Q   ALTER TABLE ONLY public.calificacion DROP CONSTRAINT fk_calificacion_id_fabrica;
       public          postgres    false    249    257    3358            A           2606    16812 +   curriculum_fabrica fk_curr_fab_id_curiricum    FK CONSTRAINT     �   ALTER TABLE ONLY public.curriculum_fabrica
    ADD CONSTRAINT fk_curr_fab_id_curiricum FOREIGN KEY (id_curriculum) REFERENCES public.curriculum(id);
 U   ALTER TABLE ONLY public.curriculum_fabrica DROP CONSTRAINT fk_curr_fab_id_curiricum;
       public          postgres    false    223    255    3332            B           2606    16807 )   curriculum_fabrica fk_curr_fab_id_fabrica    FK CONSTRAINT     �   ALTER TABLE ONLY public.curriculum_fabrica
    ADD CONSTRAINT fk_curr_fab_id_fabrica FOREIGN KEY (id_fabrica) REFERENCES public.fabrica(id);
 S   ALTER TABLE ONLY public.curriculum_fabrica DROP CONSTRAINT fk_curr_fab_id_fabrica;
       public          postgres    false    255    249    3358            5           2606    16578 &   direccion fk_direccion_id_departamento    FK CONSTRAINT     �   ALTER TABLE ONLY public.direccion
    ADD CONSTRAINT fk_direccion_id_departamento FOREIGN KEY (id_departamento) REFERENCES public.departamento(id);
 P   ALTER TABLE ONLY public.direccion DROP CONSTRAINT fk_direccion_id_departamento;
       public          postgres    false    3328    219    241            8           2606    16612 "   empleado fk_empleado_id_curriculum    FK CONSTRAINT     �   ALTER TABLE ONLY public.empleado
    ADD CONSTRAINT fk_empleado_id_curriculum FOREIGN KEY (id_curiculum) REFERENCES public.curriculum(id);
 L   ALTER TABLE ONLY public.empleado DROP CONSTRAINT fk_empleado_id_curriculum;
       public          postgres    false    3332    245    223            9           2606    16607    empleado fk_empleado_id_persona    FK CONSTRAINT     �   ALTER TABLE ONLY public.empleado
    ADD CONSTRAINT fk_empleado_id_persona FOREIGN KEY (id_persona) REFERENCES public.persona(id_persona);
 I   ALTER TABLE ONLY public.empleado DROP CONSTRAINT fk_empleado_id_persona;
       public          postgres    false    215    3324    245            :           2606    16617    empleado fk_empleado_id_usuario    FK CONSTRAINT     �   ALTER TABLE ONLY public.empleado
    ADD CONSTRAINT fk_empleado_id_usuario FOREIGN KEY (id_usuario) REFERENCES public.usuario(id);
 I   ALTER TABLE ONLY public.empleado DROP CONSTRAINT fk_empleado_id_usuario;
       public          postgres    false    245    3348    239            ;           2606    16631 &   experiencia fk_experiencia_id_empleado    FK CONSTRAINT     �   ALTER TABLE ONLY public.experiencia
    ADD CONSTRAINT fk_experiencia_id_empleado FOREIGN KEY (id_empleado) REFERENCES public.empleado(id);
 P   ALTER TABLE ONLY public.experiencia DROP CONSTRAINT fk_experiencia_id_empleado;
       public          postgres    false    245    247    3354            <           2606    16636 $   experiencia fk_experiencia_id_puesto    FK CONSTRAINT     �   ALTER TABLE ONLY public.experiencia
    ADD CONSTRAINT fk_experiencia_id_puesto FOREIGN KEY (id_puesto) REFERENCES public.puesto(id);
 N   ALTER TABLE ONLY public.experiencia DROP CONSTRAINT fk_experiencia_id_puesto;
       public          postgres    false    247    225    3334            =           2606    16657 $   fabrica_correo fk_fab_corr_id_correo    FK CONSTRAINT     �   ALTER TABLE ONLY public.fabrica_correo
    ADD CONSTRAINT fk_fab_corr_id_correo FOREIGN KEY (id_correo) REFERENCES public.correo(id);
 N   ALTER TABLE ONLY public.fabrica_correo DROP CONSTRAINT fk_fab_corr_id_correo;
       public          postgres    false    221    3330    251            >           2606    16819 %   fabrica_correo fk_fab_corr_id_fabrica    FK CONSTRAINT     �   ALTER TABLE ONLY public.fabrica_correo
    ADD CONSTRAINT fk_fab_corr_id_fabrica FOREIGN KEY (id_fabrica) REFERENCES public.fabrica(id);
 O   ALTER TABLE ONLY public.fabrica_correo DROP CONSTRAINT fk_fab_corr_id_fabrica;
       public          postgres    false    249    251    3358            ?           2606    16826 (   fabrica_direccion fk_fab_di_id_direccion    FK CONSTRAINT     �   ALTER TABLE ONLY public.fabrica_direccion
    ADD CONSTRAINT fk_fab_di_id_direccion FOREIGN KEY (id_direccion) REFERENCES public.direccion(id);
 R   ALTER TABLE ONLY public.fabrica_direccion DROP CONSTRAINT fk_fab_di_id_direccion;
       public          postgres    false    3350    253    241            @           2606    16831 &   fabrica_direccion fk_fab_di_id_fabrica    FK CONSTRAINT     �   ALTER TABLE ONLY public.fabrica_direccion
    ADD CONSTRAINT fk_fab_di_id_fabrica FOREIGN KEY (id_fabrica) REFERENCES public.fabrica(id);
 P   ALTER TABLE ONLY public.fabrica_direccion DROP CONSTRAINT fk_fab_di_id_fabrica;
       public          postgres    false    249    3358    253            6           2606    16595 %   persona_direccion fk_p_d_id_direccion    FK CONSTRAINT     �   ALTER TABLE ONLY public.persona_direccion
    ADD CONSTRAINT fk_p_d_id_direccion FOREIGN KEY (id_direccion) REFERENCES public.direccion(id);
 O   ALTER TABLE ONLY public.persona_direccion DROP CONSTRAINT fk_p_d_id_direccion;
       public          postgres    false    243    241    3350            7           2606    16590 $   persona_direccion fk_p_d_id_dpersona    FK CONSTRAINT     �   ALTER TABLE ONLY public.persona_direccion
    ADD CONSTRAINT fk_p_d_id_dpersona FOREIGN KEY (id_persona) REFERENCES public.persona(id_persona);
 N   ALTER TABLE ONLY public.persona_direccion DROP CONSTRAINT fk_p_d_id_dpersona;
       public          postgres    false    243    215    3324            0           2606    16499 "   persona_telefono fk_p_t_id_persona    FK CONSTRAINT     �   ALTER TABLE ONLY public.persona_telefono
    ADD CONSTRAINT fk_p_t_id_persona FOREIGN KEY (id_persona) REFERENCES public.persona(id_persona);
 L   ALTER TABLE ONLY public.persona_telefono DROP CONSTRAINT fk_p_t_id_persona;
       public          postgres    false    215    3324    231            1           2606    16494 #   persona_telefono fk_p_t_id_telefono    FK CONSTRAINT     �   ALTER TABLE ONLY public.persona_telefono
    ADD CONSTRAINT fk_p_t_id_telefono FOREIGN KEY (id_telefono) REFERENCES public.telefono(id);
 M   ALTER TABLE ONLY public.persona_telefono DROP CONSTRAINT fk_p_t_id_telefono;
       public          postgres    false    231    217    3326            2           2606    16521 (   persona_correo fk_persona_coreo_idcorreo    FK CONSTRAINT     �   ALTER TABLE ONLY public.persona_correo
    ADD CONSTRAINT fk_persona_coreo_idcorreo FOREIGN KEY (id_correo) REFERENCES public.correo(id);
 R   ALTER TABLE ONLY public.persona_correo DROP CONSTRAINT fk_persona_coreo_idcorreo;
       public          postgres    false    3330    233    221            3           2606    16516 )   persona_correo fk_persona_corr_id_persona    FK CONSTRAINT     �   ALTER TABLE ONLY public.persona_correo
    ADD CONSTRAINT fk_persona_corr_id_persona FOREIGN KEY (id_persona) REFERENCES public.persona(id_persona);
 S   ALTER TABLE ONLY public.persona_correo DROP CONSTRAINT fk_persona_corr_id_persona;
       public          postgres    false    233    215    3324            /           2606    16541    persona fk_persona_id_sexo    FK CONSTRAINT     x   ALTER TABLE ONLY public.persona
    ADD CONSTRAINT fk_persona_id_sexo FOREIGN KEY (id_sexo) REFERENCES public.sexo(id);
 D   ALTER TABLE ONLY public.persona DROP CONSTRAINT fk_persona_id_sexo;
       public          postgres    false    215    3344    235            M           2606    16882 0   solicitud_empleo fk_soli_empl_id_esta_soli_emple    FK CONSTRAINT     �   ALTER TABLE ONLY public.solicitud_empleo
    ADD CONSTRAINT fk_soli_empl_id_esta_soli_emple FOREIGN KEY (id_estado_solicitud_empleo) REFERENCES public.estado_solicitud_empleo(id);
 Z   ALTER TABLE ONLY public.solicitud_empleo DROP CONSTRAINT fk_soli_empl_id_esta_soli_emple;
       public          postgres    false    229    264    3338            N           2606    16872 *   solicitud_empleo fk_soli_emple_id_empleado    FK CONSTRAINT     �   ALTER TABLE ONLY public.solicitud_empleo
    ADD CONSTRAINT fk_soli_emple_id_empleado FOREIGN KEY (id_empleado) REFERENCES public.empleado(id);
 T   ALTER TABLE ONLY public.solicitud_empleo DROP CONSTRAINT fk_soli_emple_id_empleado;
       public          postgres    false    264    3354    245            O           2606    16887 1   solicitud_empleo fk_soli_emple_id_usuario_fabrica    FK CONSTRAINT     �   ALTER TABLE ONLY public.solicitud_empleo
    ADD CONSTRAINT fk_soli_emple_id_usuario_fabrica FOREIGN KEY (id_usuario_fabrica) REFERENCES public.usuario_fabrica(id);
 [   ALTER TABLE ONLY public.solicitud_empleo DROP CONSTRAINT fk_soli_emple_id_usuario_fabrica;
       public          postgres    false    259    264    3368            P           2606    16877 )   solicitud_empleo fk_soli_emple_id_vacante    FK CONSTRAINT     �   ALTER TABLE ONLY public.solicitud_empleo
    ADD CONSTRAINT fk_soli_emple_id_vacante FOREIGN KEY (id_vacante) REFERENCES public.vacante(id);
 S   ALTER TABLE ONLY public.solicitud_empleo DROP CONSTRAINT fk_soli_emple_id_vacante;
       public          postgres    false    260    264    3370            E           2606    16721 %   usuario_fabrica fk_usr_fab_id_fabrica    FK CONSTRAINT     �   ALTER TABLE ONLY public.usuario_fabrica
    ADD CONSTRAINT fk_usr_fab_id_fabrica FOREIGN KEY (id_fabrica) REFERENCES public.fabrica(id);
 O   ALTER TABLE ONLY public.usuario_fabrica DROP CONSTRAINT fk_usr_fab_id_fabrica;
       public          postgres    false    3358    259    249            F           2606    16838 )   usuario_fabrica fk_usr_fabrica_id_usuario    FK CONSTRAINT     �   ALTER TABLE ONLY public.usuario_fabrica
    ADD CONSTRAINT fk_usr_fabrica_id_usuario FOREIGN KEY (id_usuario) REFERENCES public.usuario(id);
 S   ALTER TABLE ONLY public.usuario_fabrica DROP CONSTRAINT fk_usr_fabrica_id_usuario;
       public          postgres    false    239    3348    259            4           2606    16564     usuario fk_usr_id_estado_usuario    FK CONSTRAINT     �   ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT fk_usr_id_estado_usuario FOREIGN KEY (id_estado_usuario) REFERENCES public.estado_usuario(id);
 J   ALTER TABLE ONLY public.usuario DROP CONSTRAINT fk_usr_id_estado_usuario;
       public          postgres    false    239    3346    237            G           2606    16773 $   vacante fk_vacante_id_estado_vacante    FK CONSTRAINT     �   ALTER TABLE ONLY public.vacante
    ADD CONSTRAINT fk_vacante_id_estado_vacante FOREIGN KEY (id_estado_vacante) REFERENCES public.estado_vacante(id);
 N   ALTER TABLE ONLY public.vacante DROP CONSTRAINT fk_vacante_id_estado_vacante;
       public          postgres    false    260    3336    227            H           2606    16778    vacante fk_vacante_id_fabrica    FK CONSTRAINT     �   ALTER TABLE ONLY public.vacante
    ADD CONSTRAINT fk_vacante_id_fabrica FOREIGN KEY (id_fabrica) REFERENCES public.fabrica(id);
 G   ALTER TABLE ONLY public.vacante DROP CONSTRAINT fk_vacante_id_fabrica;
       public          postgres    false    3358    249    260            I           2606    16783    vacante fk_vacante_id_puesto    FK CONSTRAINT     ~   ALTER TABLE ONLY public.vacante
    ADD CONSTRAINT fk_vacante_id_puesto FOREIGN KEY (id_puesto) REFERENCES public.puesto(id);
 F   ALTER TABLE ONLY public.vacante DROP CONSTRAINT fk_vacante_id_puesto;
       public          postgres    false    3334    260    225            J           2606    16843 %   vacante fk_vacante_id_usuario_fabrica    FK CONSTRAINT     �   ALTER TABLE ONLY public.vacante
    ADD CONSTRAINT fk_vacante_id_usuario_fabrica FOREIGN KEY (id_usuario_fabrica) REFERENCES public.usuario_fabrica(id) NOT VALID;
 O   ALTER TABLE ONLY public.vacante DROP CONSTRAINT fk_vacante_id_usuario_fabrica;
       public          postgres    false    3368    259    260            K           2606    16860 *   fabrica_telefono pk_fabri_telef_id_fabrica    FK CONSTRAINT     �   ALTER TABLE ONLY public.fabrica_telefono
    ADD CONSTRAINT pk_fabri_telef_id_fabrica FOREIGN KEY (id_fabrica) REFERENCES public.fabrica(id);
 T   ALTER TABLE ONLY public.fabrica_telefono DROP CONSTRAINT pk_fabri_telef_id_fabrica;
       public          postgres    false    3358    262    249            L           2606    16855 +   fabrica_telefono pk_fabri_telef_id_telefono    FK CONSTRAINT     �   ALTER TABLE ONLY public.fabrica_telefono
    ADD CONSTRAINT pk_fabri_telef_id_telefono FOREIGN KEY (id_telefono) REFERENCES public.telefono(id);
 U   ALTER TABLE ONLY public.fabrica_telefono DROP CONSTRAINT pk_fabri_telef_id_telefono;
       public          postgres    false    262    3326    217            
      x������ � �      �      x������ � �      �      x������ � �            x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �             x������ � �            x������ � �            x������ � �            x������ � �            x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �            x������ � �      �      x������ � �      �      x������ � �            x������ � �            x������ � �     