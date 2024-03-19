PGDMP                          |            rbprev_instituto    15.5    15.5 H   <           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            =           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            >           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            ?           1262    25986    rbprev_instituto    DATABASE     �   CREATE DATABASE rbprev_instituto WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Portuguese_Brazil.1252';
     DROP DATABASE rbprev_instituto;
                postgres    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
                postgres    false            @           0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                   postgres    false    5            �            1259    25987    address    TABLE     �  CREATE TABLE public.address (
    id integer NOT NULL,
    nm_rua character varying(150),
    nr_casa character varying(15),
    complemento character varying(150),
    state_id integer NOT NULL,
    city_id integer NOT NULL,
    serve_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    status boolean DEFAULT true NOT NULL,
    bairro character varying(300)
);
    DROP TABLE public.address;
       public         heap    postgres    false    5            �            1259    25993    address_id_seq    SEQUENCE        CREATE SEQUENCE public.address_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;
 %   DROP SEQUENCE public.address_id_seq;
       public          postgres    false    214    5            A           0    0    address_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.address_id_seq OWNED BY public.address.id;
          public          postgres    false    215            �            1259    25994    almoxarifado    TABLE     �  CREATE TABLE public.almoxarifado (
    id integer NOT NULL,
    nm_patrimonio character varying(250),
    descricao character varying(300),
    observacao character varying(250),
    almoxarifado_tipo_id integer NOT NULL,
    almoxarifado_condicao_id integer NOT NULL,
    almoxarifado_localizacao_dpto_id integer NOT NULL,
    almoxarifado_responsavel_id integer NOT NULL,
    almoxarifado_contrato_id integer NOT NULL,
    almoxarifado_marca_id integer NOT NULL,
    almoxarifado_cedido_id integer NOT NULL,
    status boolean DEFAULT true NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    cedido_localizacao character varying(300),
    imagem character varying(500)
);
     DROP TABLE public.almoxarifado;
       public         heap    postgres    false    5            �            1259    26000    almoxarifado_cedido    TABLE     �   CREATE TABLE public.almoxarifado_cedido (
    id integer NOT NULL,
    nm_cedido character varying(300),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    status boolean DEFAULT true NOT NULL
);
 '   DROP TABLE public.almoxarifado_cedido;
       public         heap    postgres    false    5            �            1259    26004    almoxarifado_cedido_id_seq    SEQUENCE     �   CREATE SEQUENCE public.almoxarifado_cedido_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.almoxarifado_cedido_id_seq;
       public          postgres    false    217    5            B           0    0    almoxarifado_cedido_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.almoxarifado_cedido_id_seq OWNED BY public.almoxarifado_cedido.id;
          public          postgres    false    218            �            1259    26005    almoxarifado_condicao    TABLE     �   CREATE TABLE public.almoxarifado_condicao (
    id integer NOT NULL,
    nm_condicao character varying(250),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    status boolean DEFAULT true NOT NULL
);
 )   DROP TABLE public.almoxarifado_condicao;
       public         heap    postgres    false    5            �            1259    26009    almoxarifado_condicao_id_seq    SEQUENCE     �   CREATE SEQUENCE public.almoxarifado_condicao_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 3   DROP SEQUENCE public.almoxarifado_condicao_id_seq;
       public          postgres    false    219    5            C           0    0    almoxarifado_condicao_id_seq    SEQUENCE OWNED BY     ]   ALTER SEQUENCE public.almoxarifado_condicao_id_seq OWNED BY public.almoxarifado_condicao.id;
          public          postgres    false    220            �            1259    26010    almoxarifado_contrato    TABLE       CREATE TABLE public.almoxarifado_contrato (
    id integer NOT NULL,
    nr_contrato character varying(300),
    ano_contrato character varying(20),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    status boolean DEFAULT true NOT NULL
);
 )   DROP TABLE public.almoxarifado_contrato;
       public         heap    postgres    false    5            �            1259    26014    almoxarifado_contrato_id_seq    SEQUENCE     �   CREATE SEQUENCE public.almoxarifado_contrato_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 3   DROP SEQUENCE public.almoxarifado_contrato_id_seq;
       public          postgres    false    5    221            D           0    0    almoxarifado_contrato_id_seq    SEQUENCE OWNED BY     ]   ALTER SEQUENCE public.almoxarifado_contrato_id_seq OWNED BY public.almoxarifado_contrato.id;
          public          postgres    false    222            �            1259    26015    almoxarifado_id_seq    SEQUENCE     �   CREATE SEQUENCE public.almoxarifado_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.almoxarifado_id_seq;
       public          postgres    false    5    216            E           0    0    almoxarifado_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.almoxarifado_id_seq OWNED BY public.almoxarifado.id;
          public          postgres    false    223            �            1259    26016    almoxarifado_localizacao_dpto    TABLE       CREATE TABLE public.almoxarifado_localizacao_dpto (
    id integer NOT NULL,
    nm_departamento character varying(300),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    status boolean DEFAULT true NOT NULL
);
 1   DROP TABLE public.almoxarifado_localizacao_dpto;
       public         heap    postgres    false    5            �            1259    26020 $   almoxarifado_localizacao_dpto_id_seq    SEQUENCE     �   CREATE SEQUENCE public.almoxarifado_localizacao_dpto_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ;   DROP SEQUENCE public.almoxarifado_localizacao_dpto_id_seq;
       public          postgres    false    224    5            F           0    0 $   almoxarifado_localizacao_dpto_id_seq    SEQUENCE OWNED BY     m   ALTER SEQUENCE public.almoxarifado_localizacao_dpto_id_seq OWNED BY public.almoxarifado_localizacao_dpto.id;
          public          postgres    false    225            �            1259    26021    almoxarifado_marca    TABLE     �   CREATE TABLE public.almoxarifado_marca (
    id integer NOT NULL,
    nm_marca character varying(300),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    status boolean DEFAULT true NOT NULL
);
 &   DROP TABLE public.almoxarifado_marca;
       public         heap    postgres    false    5            �            1259    26025    almoxarifado_marca_id_seq    SEQUENCE     �   CREATE SEQUENCE public.almoxarifado_marca_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public.almoxarifado_marca_id_seq;
       public          postgres    false    226    5            G           0    0    almoxarifado_marca_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public.almoxarifado_marca_id_seq OWNED BY public.almoxarifado_marca.id;
          public          postgres    false    227            �            1259    26026    almoxarifado_responsavel    TABLE     �   CREATE TABLE public.almoxarifado_responsavel (
    id integer NOT NULL,
    nm_responsavel character varying(300),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    status boolean DEFAULT true NOT NULL
);
 ,   DROP TABLE public.almoxarifado_responsavel;
       public         heap    postgres    false    5            �            1259    26030    almoxarifado_responsavel_id_seq    SEQUENCE     �   CREATE SEQUENCE public.almoxarifado_responsavel_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 6   DROP SEQUENCE public.almoxarifado_responsavel_id_seq;
       public          postgres    false    228    5            H           0    0    almoxarifado_responsavel_id_seq    SEQUENCE OWNED BY     c   ALTER SEQUENCE public.almoxarifado_responsavel_id_seq OWNED BY public.almoxarifado_responsavel.id;
          public          postgres    false    229            �            1259    26031    almoxarifado_tipo    TABLE     �   CREATE TABLE public.almoxarifado_tipo (
    id integer NOT NULL,
    nm_tipo character varying(500),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    status boolean DEFAULT true NOT NULL
);
 %   DROP TABLE public.almoxarifado_tipo;
       public         heap    postgres    false    5            �            1259    26037    almoxarifado_tipo_id_seq    SEQUENCE     �   CREATE SEQUENCE public.almoxarifado_tipo_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.almoxarifado_tipo_id_seq;
       public          postgres    false    230    5            I           0    0    almoxarifado_tipo_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.almoxarifado_tipo_id_seq OWNED BY public.almoxarifado_tipo.id;
          public          postgres    false    231            �            1259    26038    almoxarifado_virtual_categoria    TABLE     �   CREATE TABLE public.almoxarifado_virtual_categoria (
    id integer NOT NULL,
    nm_categoria character varying(300),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 2   DROP TABLE public.almoxarifado_virtual_categoria;
       public         heap    postgres    false    5            �            1259    26041 %   almoxarifado_virtual_categoria_id_seq    SEQUENCE     �   CREATE SEQUENCE public.almoxarifado_virtual_categoria_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 <   DROP SEQUENCE public.almoxarifado_virtual_categoria_id_seq;
       public          postgres    false    232    5            J           0    0 %   almoxarifado_virtual_categoria_id_seq    SEQUENCE OWNED BY     o   ALTER SEQUENCE public.almoxarifado_virtual_categoria_id_seq OWNED BY public.almoxarifado_virtual_categoria.id;
          public          postgres    false    233            �            1259    26042 %   almoxarifado_virtual_contrato_empenho    TABLE     �  CREATE TABLE public.almoxarifado_virtual_contrato_empenho (
    id integer NOT NULL,
    cod_grp character varying(200),
    descricao character varying(500),
    nr_contrato character varying(50),
    prazo_entrega_contrato character varying(50),
    data_assinatura date,
    hora_assinatura time without time zone,
    saldo_total numeric(10,2),
    saldo_usado numeric(10,2),
    saldo_restante numeric(10,2),
    fonte_despesa_id integer NOT NULL,
    elemento_despesa_id integer NOT NULL,
    programa_trabalho_id integer NOT NULL,
    users_id integer,
    almoxarifado_virtual_empresa_contratada_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    nr_sei character varying(30)
);
 9   DROP TABLE public.almoxarifado_virtual_contrato_empenho;
       public         heap    postgres    false    5            �            1259    26047 ,   almoxarifado_virtual_contrato_empenho_id_seq    SEQUENCE     �   CREATE SEQUENCE public.almoxarifado_virtual_contrato_empenho_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 C   DROP SEQUENCE public.almoxarifado_virtual_contrato_empenho_id_seq;
       public          postgres    false    234    5            K           0    0 ,   almoxarifado_virtual_contrato_empenho_id_seq    SEQUENCE OWNED BY     }   ALTER SEQUENCE public.almoxarifado_virtual_contrato_empenho_id_seq OWNED BY public.almoxarifado_virtual_contrato_empenho.id;
          public          postgres    false    235            �            1259    26048    almoxarifado_virtual_cx_uni    TABLE     �   CREATE TABLE public.almoxarifado_virtual_cx_uni (
    id integer NOT NULL,
    nm_caixa_unidade character varying(20),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 /   DROP TABLE public.almoxarifado_virtual_cx_uni;
       public         heap    postgres    false    5            �            1259    26051 "   almoxarifado_virtual_cx_uni_id_seq    SEQUENCE     �   CREATE SEQUENCE public.almoxarifado_virtual_cx_uni_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 9   DROP SEQUENCE public.almoxarifado_virtual_cx_uni_id_seq;
       public          postgres    false    5    236            L           0    0 "   almoxarifado_virtual_cx_uni_id_seq    SEQUENCE OWNED BY     i   ALTER SEQUENCE public.almoxarifado_virtual_cx_uni_id_seq OWNED BY public.almoxarifado_virtual_cx_uni.id;
          public          postgres    false    237            �            1259    26052 '   almoxarifado_virtual_empresa_contratada    TABLE     S  CREATE TABLE public.almoxarifado_virtual_empresa_contratada (
    id integer NOT NULL,
    nome_fantasia text,
    razao_social character varying(300),
    cnpj character varying(50),
    status character varying(300),
    cnae_principal_descricao character varying(300),
    cnae_principal_codigo character varying(300),
    cep character varying(300),
    data_abertura character varying(300),
    ddd character varying(4),
    telefone character varying(300),
    email character varying(300),
    tipo_logradouro character varying(300),
    logradouro character varying(300),
    numero character varying(5),
    complemento character varying(300),
    bairro character varying(300),
    municipio character varying(150),
    uf character varying(4),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 ;   DROP TABLE public.almoxarifado_virtual_empresa_contratada;
       public         heap    postgres    false    5            �            1259    26057 .   almoxarifado_virtual_empresa_contratada_id_seq    SEQUENCE     �   CREATE SEQUENCE public.almoxarifado_virtual_empresa_contratada_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 E   DROP SEQUENCE public.almoxarifado_virtual_empresa_contratada_id_seq;
       public          postgres    false    5    238            M           0    0 .   almoxarifado_virtual_empresa_contratada_id_seq    SEQUENCE OWNED BY     �   ALTER SEQUENCE public.almoxarifado_virtual_empresa_contratada_id_seq OWNED BY public.almoxarifado_virtual_empresa_contratada.id;
          public          postgres    false    239            �            1259    26058    almoxarifado_virtual_item    TABLE     �  CREATE TABLE public.almoxarifado_virtual_item (
    id integer NOT NULL,
    cod_item character varying(20),
    marca character varying(150),
    descricao character varying(300),
    valor_uni numeric(10,2),
    valor_total numeric(10,2),
    quantidade character varying(4),
    almoxarifado_virtual_contrato_empenho_id integer NOT NULL,
    almoxarifado_virtual_categoria_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 -   DROP TABLE public.almoxarifado_virtual_item;
       public         heap    postgres    false    5            �            1259    26061     almoxarifado_virtual_item_id_seq    SEQUENCE     �   CREATE SEQUENCE public.almoxarifado_virtual_item_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 7   DROP SEQUENCE public.almoxarifado_virtual_item_id_seq;
       public          postgres    false    5    240            N           0    0     almoxarifado_virtual_item_id_seq    SEQUENCE OWNED BY     e   ALTER SEQUENCE public.almoxarifado_virtual_item_id_seq OWNED BY public.almoxarifado_virtual_item.id;
          public          postgres    false    241            �            1259    26062    almoxarifado_virtual_pedido    TABLE     �  CREATE TABLE public.almoxarifado_virtual_pedido (
    id integer NOT NULL,
    nr_pedido character varying(10),
    quantidade_pedido integer,
    valor_uni numeric(10,2),
    valor_pedido numeric(10,2),
    almoxarifado_virtual_cx_uni_id integer NOT NULL,
    almoxarifado_virtual_item_id integer NOT NULL,
    almoxarifado_virtual_contrato_empenho_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 /   DROP TABLE public.almoxarifado_virtual_pedido;
       public         heap    postgres    false    5            �            1259    26065 "   almoxarifado_virtual_pedido_id_seq    SEQUENCE     �   CREATE SEQUENCE public.almoxarifado_virtual_pedido_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 9   DROP SEQUENCE public.almoxarifado_virtual_pedido_id_seq;
       public          postgres    false    5    242            O           0    0 "   almoxarifado_virtual_pedido_id_seq    SEQUENCE OWNED BY     i   ALTER SEQUENCE public.almoxarifado_virtual_pedido_id_seq OWNED BY public.almoxarifado_virtual_pedido.id;
          public          postgres    false    243            �            1259    26066 #   almoxarifado_virtual_registro_preco    TABLE     =  CREATE TABLE public.almoxarifado_virtual_registro_preco (
    id integer NOT NULL,
    nr_pedido character varying(10),
    valor_total_pedido numeric(10,2),
    almoxarifado_virtual_contrato_empenho_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 7   DROP TABLE public.almoxarifado_virtual_registro_preco;
       public         heap    postgres    false    5            �            1259    26069 *   almoxarifado_virtual_registro_preco_id_seq    SEQUENCE     �   CREATE SEQUENCE public.almoxarifado_virtual_registro_preco_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 A   DROP SEQUENCE public.almoxarifado_virtual_registro_preco_id_seq;
       public          postgres    false    244    5            P           0    0 *   almoxarifado_virtual_registro_preco_id_seq    SEQUENCE OWNED BY     y   ALTER SEQUENCE public.almoxarifado_virtual_registro_preco_id_seq OWNED BY public.almoxarifado_virtual_registro_preco.id;
          public          postgres    false    245            �            1259    26070    aposentadoria    TABLE     �   CREATE TABLE public.aposentadoria (
    id integer NOT NULL,
    nm_aposentadoria character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 !   DROP TABLE public.aposentadoria;
       public         heap    postgres    false    5            �            1259    26073    aposentadoria_id_seq    SEQUENCE     �   CREATE SEQUENCE public.aposentadoria_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;
 +   DROP SEQUENCE public.aposentadoria_id_seq;
       public          postgres    false    5    246            Q           0    0    aposentadoria_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.aposentadoria_id_seq OWNED BY public.aposentadoria.id;
          public          postgres    false    247            �            1259    26074    atendimento    TABLE     �  CREATE TABLE public.atendimento (
    id integer NOT NULL,
    nm_assegurado character varying(300) NOT NULL,
    numero_telefone character varying(15),
    email character varying(150),
    cpf character varying(15),
    descricao character varying(400),
    atendimento_assunto_id integer NOT NULL,
    city_id integer NOT NULL,
    state_id integer NOT NULL,
    almoxarifado_localizacao_dpto_id integer NOT NULL,
    atendimento_status_id integer DEFAULT 1 NOT NULL,
    status boolean DEFAULT true NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    matricula character varying(10),
    atendimento_tipo_servidor_id integer
);
    DROP TABLE public.atendimento;
       public         heap    postgres    false    5            �            1259    26081    atendimento_assunto    TABLE     �   CREATE TABLE public.atendimento_assunto (
    id integer NOT NULL,
    nm_assunto character varying(300),
    status boolean DEFAULT true NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 '   DROP TABLE public.atendimento_assunto;
       public         heap    postgres    false    5            �            1259    26085    atendimento_assunto_id_seq    SEQUENCE     �   CREATE SEQUENCE public.atendimento_assunto_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.atendimento_assunto_id_seq;
       public          postgres    false    5    249            R           0    0    atendimento_assunto_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.atendimento_assunto_id_seq OWNED BY public.atendimento_assunto.id;
          public          postgres    false    250            �            1259    26086    atendimento_id_seq    SEQUENCE     �   CREATE SEQUENCE public.atendimento_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.atendimento_id_seq;
       public          postgres    false    5    248            S           0    0    atendimento_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.atendimento_id_seq OWNED BY public.atendimento.id;
          public          postgres    false    251            �            1259    26087    atendimento_status    TABLE     �   CREATE TABLE public.atendimento_status (
    id integer NOT NULL,
    "statusAtendimento" character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 &   DROP TABLE public.atendimento_status;
       public         heap    postgres    false    5            �            1259    26090    atendimento_status_id_seq    SEQUENCE     �   CREATE SEQUENCE public.atendimento_status_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;
 0   DROP SEQUENCE public.atendimento_status_id_seq;
       public          postgres    false    5    252            T           0    0    atendimento_status_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public.atendimento_status_id_seq OWNED BY public.atendimento_status.id;
          public          postgres    false    253            �            1259    26091    atendimento_tipo_servidor    TABLE        CREATE TABLE public.atendimento_tipo_servidor (
    id integer NOT NULL,
    nm_tipo_servidor character varying(300),
    status boolean DEFAULT true NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 -   DROP TABLE public.atendimento_tipo_servidor;
       public         heap    postgres    false    5            �            1259    26095     atendimento_tipo_servidor_id_seq    SEQUENCE     �   CREATE SEQUENCE public.atendimento_tipo_servidor_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 7   DROP SEQUENCE public.atendimento_tipo_servidor_id_seq;
       public          postgres    false    254    5            U           0    0     atendimento_tipo_servidor_id_seq    SEQUENCE OWNED BY     e   ALTER SEQUENCE public.atendimento_tipo_servidor_id_seq OWNED BY public.atendimento_tipo_servidor.id;
          public          postgres    false    255                        1259    26096    bol_dap    TABLE     �   CREATE TABLE public.bol_dap (
    id bigint NOT NULL,
    numero json NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.bol_dap;
       public         heap    postgres    false    5                       1259    26101    bol_dap_id_seq    SEQUENCE     w   CREATE SEQUENCE public.bol_dap_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.bol_dap_id_seq;
       public          postgres    false    5    256            V           0    0    bol_dap_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.bol_dap_id_seq OWNED BY public.bol_dap.id;
          public          postgres    false    257            f           1259    26928    cedula_c    TABLE     X  CREATE TABLE public.cedula_c (
    id integer NOT NULL,
    cpf character varying(200),
    nome character varying(200),
    "anoExercicio" character varying(200),
    caminhodoarquivo character varying(200),
    id_usuario character varying(200),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.cedula_c;
       public         heap    postgres    false    5            e           1259    26927    cedula_c_id_seq    SEQUENCE     �   CREATE SEQUENCE public.cedula_c_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.cedula_c_id_seq;
       public          postgres    false    358    5            W           0    0    cedula_c_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.cedula_c_id_seq OWNED BY public.cedula_c.id;
          public          postgres    false    357                       1259    26102    certidao_tempo    TABLE       CREATE TABLE public.certidao_tempo (
    id integer NOT NULL,
    nm_empregador character varying(255),
    cpf_cnpj character varying(255),
    nm_cid character varying(255),
    "tpProfessor_id" integer,
    data_ingresso timestamp(0) without time zone,
    data_termino timestamp(0) without time zone,
    "tpAposentadoriaEspecial_id" integer,
    "tpServicoMilitar_id" integer,
    "tpPCCR_id" integer,
    "tpServicoPublico_id" integer,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 "   DROP TABLE public.certidao_tempo;
       public         heap    postgres    false    5                       1259    26107    certidao_tempo_id_seq    SEQUENCE     �   CREATE SEQUENCE public.certidao_tempo_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;
 ,   DROP SEQUENCE public.certidao_tempo_id_seq;
       public          postgres    false    5    258            X           0    0    certidao_tempo_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.certidao_tempo_id_seq OWNED BY public.certidao_tempo.id;
          public          postgres    false    259                       1259    26108    city    TABLE     �   CREATE TABLE public.city (
    id integer NOT NULL,
    nm_cidade character varying(150),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.city;
       public         heap    postgres    false    5                       1259    26111    city_id_seq    SEQUENCE     |   CREATE SEQUENCE public.city_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;
 "   DROP SEQUENCE public.city_id_seq;
       public          postgres    false    5    260            Y           0    0    city_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.city_id_seq OWNED BY public.city.id;
          public          postgres    false    261                       1259    26112    contract    TABLE     b  CREATE TABLE public.contract (
    id integer NOT NULL,
    nr_contrato integer NOT NULL,
    origin_id integer NOT NULL,
    orgao_id integer NOT NULL,
    funcao_id integer NOT NULL,
    serve_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    status boolean DEFAULT true NOT NULL
);
    DROP TABLE public.contract;
       public         heap    postgres    false    5                       1259    26116    contract_id_seq    SEQUENCE     �   CREATE SEQUENCE public.contract_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;
 &   DROP SEQUENCE public.contract_id_seq;
       public          postgres    false    5    262            Z           0    0    contract_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.contract_id_seq OWNED BY public.contract.id;
          public          postgres    false    263                       1259    26117    ctc_certidao    TABLE       CREATE TABLE public.ctc_certidao (
    id integer NOT NULL,
    ctc_numero character varying(250),
    serve_id integer NOT NULL,
    origin_id integer,
    orgao_id integer,
    funcao_id integer,
    tipo_certidao_id integer,
    nr_processo character varying(250),
    data_pedido date,
    data_admissao date,
    data_exoneracao date,
    start_date date NOT NULL,
    end_date date NOT NULL,
    fonte_info character varying(300),
    local_destino character varying(300),
    destinacao character varying(300),
    tempo_total character varying(300),
    status boolean DEFAULT true NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    contract_id integer,
    address_id integer,
    identificacao_servidor character varying(2)
);
     DROP TABLE public.ctc_certidao;
       public         heap    postgres    false    5            	           1259    26123    ctc_certidao_deducao    TABLE     �  CREATE TABLE public.ctc_certidao_deducao (
    id integer NOT NULL,
    ctc_certidao_id integer NOT NULL,
    ano integer,
    tempo_bruto integer,
    faltas integer,
    licencas integer,
    licencas_sem_vencimento integer,
    suspensoes integer,
    disponibilidade integer,
    outras integer,
    tempo_liquido integer,
    status boolean DEFAULT true NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 (   DROP TABLE public.ctc_certidao_deducao;
       public         heap    postgres    false    5            
           1259    26127    ctc_certidao_deducao_id_seq    SEQUENCE     �   CREATE SEQUENCE public.ctc_certidao_deducao_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 2   DROP SEQUENCE public.ctc_certidao_deducao_id_seq;
       public          postgres    false    265    5            [           0    0    ctc_certidao_deducao_id_seq    SEQUENCE OWNED BY     [   ALTER SEQUENCE public.ctc_certidao_deducao_id_seq OWNED BY public.ctc_certidao_deducao.id;
          public          postgres    false    266                       1259    26128    ctc_certidao_id_seq    SEQUENCE     �   CREATE SEQUENCE public.ctc_certidao_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.ctc_certidao_id_seq;
       public          postgres    false    264    5            \           0    0    ctc_certidao_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.ctc_certidao_id_seq OWNED BY public.ctc_certidao.id;
          public          postgres    false    267                       1259    26129 	   ctc_verso    TABLE     >  CREATE TABLE public.ctc_verso (
    id integer NOT NULL,
    ctc_certidao_id integer,
    tempo_bruto_inicio_1 date,
    tempo_bruto_fim_1 date,
    tempo_bruto_dias_1 integer,
    id_ocorrencia_1 character varying(200),
    tempo_bruto_inicio_2 date,
    tempo_bruto_fim_2 date,
    tempo_bruto_dias_2 integer,
    id_ocorrencia_2 character varying(200),
    tempo_bruto_inicio_3 date,
    tempo_bruto_fim_3 date,
    tempo_bruto_dias_3 integer,
    id_ocorrencia_3 character varying(200),
    tempo_bruto_inicio_4 date,
    tempo_bruto_fim_4 date,
    tempo_bruto_dias_4 integer,
    id_ocorrencia_4 character varying(200),
    tempo_bruto_inicio_5 date,
    tempo_bruto_fim_5 date,
    tempo_bruto_dias_5 integer,
    id_ocorrencia_5 character varying(200),
    tempo_bruto_inicio_6 date,
    tempo_bruto_fim_6 date,
    tempo_bruto_dias_6 integer,
    id_ocorrencia_6 character varying(200),
    tempo_especial_inicio_1 date,
    tempo_especial_fim_1 date,
    tempo_especial_dias_1 integer,
    tempo_especial_inicio_2 date,
    tempo_especial_fim_2 date,
    tempo_especial_dias_2 integer,
    tempo_especial_inicio_3 date,
    tempo_especial_fim_3 date,
    tempo_especial_dias_3 integer,
    tempo_especial_inicio_4 date,
    tempo_especial_fim_4 date,
    tempo_especial_dias_4 integer,
    tempo_magisterio_incio_1 date,
    tempo_magisterio_fim_1 date,
    tempo_magisterio_dias_1 integer,
    tempo_magisterio_incio_2 date,
    tempo_magisterio_fim_2 date,
    tempo_magisterio_dias_2 integer,
    tempo_magisterio_incio_3 date,
    tempo_magisterio_fim_3 date,
    tempo_magisterio_dias_3 integer,
    tempo_magisterio_incio_4 date,
    tempo_magisterio_fim_4 date,
    tempo_magisterio_dias_4 integer,
    status boolean DEFAULT true NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.ctc_verso;
       public         heap    postgres    false    5                       1259    26135    ctc_verso_id_seq    SEQUENCE     �   CREATE SEQUENCE public.ctc_verso_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.ctc_verso_id_seq;
       public          postgres    false    268    5            ]           0    0    ctc_verso_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.ctc_verso_id_seq OWNED BY public.ctc_verso.id;
          public          postgres    false    269                       1259    26136    documento_cedula_teste    TABLE     �   CREATE TABLE public.documento_cedula_teste (
    id integer NOT NULL,
    matricula character varying(10),
    nome character varying(50),
    cpf character varying(15)
);
 *   DROP TABLE public.documento_cedula_teste;
       public         heap    postgres    false    5                       1259    26139    documento_cedula_teste_restante    TABLE     �   CREATE TABLE public.documento_cedula_teste_restante (
    id integer NOT NULL,
    nome character varying(51) NOT NULL,
    cpf character varying(14) NOT NULL,
    matricula character varying(10)
);
 3   DROP TABLE public.documento_cedula_teste_restante;
       public         heap    postgres    false    5                       1259    26142    documentos_cedula_c    TABLE     H  CREATE TABLE public.documentos_cedula_c (
    id integer NOT NULL,
    cpf character varying(15),
    pdf_path character varying(255),
    path character varying(255),
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
 '   DROP TABLE public.documentos_cedula_c;
       public         heap    postgres    false    5                       1259    26149    documentos_cedula_c_pmrb    TABLE     3  CREATE TABLE public.documentos_cedula_c_pmrb (
    id integer NOT NULL,
    cpf character varying(200),
    nome character varying(200),
    pdf_path character varying(200),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    matricula character varying(10)
);
 ,   DROP TABLE public.documentos_cedula_c_pmrb;
       public         heap    postgres    false    5                       1259    26154    documentos_cedula_c_pmrb_id_seq    SEQUENCE     �   CREATE SEQUENCE public.documentos_cedula_c_pmrb_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 6   DROP SEQUENCE public.documentos_cedula_c_pmrb_id_seq;
       public          postgres    false    5    273            ^           0    0    documentos_cedula_c_pmrb_id_seq    SEQUENCE OWNED BY     c   ALTER SEQUENCE public.documentos_cedula_c_pmrb_id_seq OWNED BY public.documentos_cedula_c_pmrb.id;
          public          postgres    false    274                       1259    26155    documentos_id_seq    SEQUENCE     �   CREATE SEQUENCE public.documentos_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.documentos_id_seq;
       public          postgres    false    5    272            _           0    0    documentos_id_seq    SEQUENCE OWNED BY     P   ALTER SEQUENCE public.documentos_id_seq OWNED BY public.documentos_cedula_c.id;
          public          postgres    false    275                       1259    26156    elemento_despesa    TABLE     �   CREATE TABLE public.elemento_despesa (
    id integer NOT NULL,
    nm_elemento character varying(300),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 $   DROP TABLE public.elemento_despesa;
       public         heap    postgres    false    5                       1259    26159    elemento_despesa_id_seq    SEQUENCE     �   CREATE SEQUENCE public.elemento_despesa_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.elemento_despesa_id_seq;
       public          postgres    false    5    276            `           0    0    elemento_despesa_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.elemento_despesa_id_seq OWNED BY public.elemento_despesa.id;
          public          postgres    false    277                       1259    26160 
   folhapagto    TABLE     S  CREATE TABLE public.folhapagto (
    id integer NOT NULL,
    ano integer,
    mes integer,
    "qtdAposentadoFffin" integer,
    "qtdAposentadoFprev" integer,
    "qtdPensionistaFfin" integer,
    "qtdPensionistaFprev" integer,
    "qtdTotalFfin" integer,
    "qtdTotalFprev" integer,
    "valorAposFfin" numeric(12,2),
    "valorAposFprev" numeric(12,2),
    "valorPenFfin" numeric(12,2),
    "valorPenFprev" numeric(12,2),
    "valorTotalFfin" numeric(12,2),
    "valorTotalFprev" numeric(12,2),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.folhapagto;
       public         heap    postgres    false    5                       1259    26163    folhapagto_id_seq    SEQUENCE     �   CREATE SEQUENCE public.folhapagto_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;
 (   DROP SEQUENCE public.folhapagto_id_seq;
       public          postgres    false    5    278            a           0    0    folhapagto_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.folhapagto_id_seq OWNED BY public.folhapagto.id;
          public          postgres    false    279                       1259    26164    fonte_despesa    TABLE     �   CREATE TABLE public.fonte_despesa (
    id integer NOT NULL,
    nm_fonte character varying(300),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 !   DROP TABLE public.fonte_despesa;
       public         heap    postgres    false    5                       1259    26167    fonte_despesa_id_seq    SEQUENCE     �   CREATE SEQUENCE public.fonte_despesa_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.fonte_despesa_id_seq;
       public          postgres    false    280    5            b           0    0    fonte_despesa_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.fonte_despesa_id_seq OWNED BY public.fonte_despesa.id;
          public          postgres    false    281                       1259    26168    funcao    TABLE     �   CREATE TABLE public.funcao (
    id integer NOT NULL,
    nm_funcao character varying(45),
    orgao_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.funcao;
       public         heap    postgres    false    5                       1259    26171    funcao_id_seq    SEQUENCE     ~   CREATE SEQUENCE public.funcao_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;
 $   DROP SEQUENCE public.funcao_id_seq;
       public          postgres    false    5    282            c           0    0    funcao_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.funcao_id_seq OWNED BY public.funcao.id;
          public          postgres    false    283                       1259    26172    marital_status    TABLE     �   CREATE TABLE public.marital_status (
    id integer NOT NULL,
    status_civil character varying(45),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 "   DROP TABLE public.marital_status;
       public         heap    postgres    false    5                       1259    26175    marital_status_id_seq    SEQUENCE     �   CREATE SEQUENCE public.marital_status_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;
 ,   DROP SEQUENCE public.marital_status_id_seq;
       public          postgres    false    5    284            d           0    0    marital_status_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.marital_status_id_seq OWNED BY public.marital_status.id;
          public          postgres    false    285                       1259    26176 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         heap    postgres    false    5                       1259    26179    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.migrations_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public          postgres    false    5    286            e           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
          public          postgres    false    287                        1259    26180    model_has_permissions    TABLE     �   CREATE TABLE public.model_has_permissions (
    permission_id bigint NOT NULL,
    model_type character varying(255) NOT NULL,
    model_id bigint NOT NULL
);
 )   DROP TABLE public.model_has_permissions;
       public         heap    postgres    false    5            !           1259    26183    model_has_roles    TABLE     �   CREATE TABLE public.model_has_roles (
    role_id bigint NOT NULL,
    model_type character varying(255) NOT NULL,
    model_id bigint NOT NULL
);
 #   DROP TABLE public.model_has_roles;
       public         heap    postgres    false    5            "           1259    26186    obito    TABLE     �   CREATE TABLE public.obito (
    id integer NOT NULL,
    nm_obito character varying(20),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.obito;
       public         heap    postgres    false    5            #           1259    26189    obito_id_seq    SEQUENCE     }   CREATE SEQUENCE public.obito_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;
 #   DROP SEQUENCE public.obito_id_seq;
       public          postgres    false    290    5            f           0    0    obito_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.obito_id_seq OWNED BY public.obito.id;
          public          postgres    false    291            $           1259    26190    orgao    TABLE     �   CREATE TABLE public.orgao (
    id integer NOT NULL,
    nm_orgao character varying(45),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.orgao;
       public         heap    postgres    false    5            %           1259    26193    orgao_expedidor    TABLE     �   CREATE TABLE public.orgao_expedidor (
    id integer NOT NULL,
    nm_orgao character varying(30),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 #   DROP TABLE public.orgao_expedidor;
       public         heap    postgres    false    5            &           1259    26196    orgao_expedidor_id_seq    SEQUENCE     �   CREATE SEQUENCE public.orgao_expedidor_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;
 -   DROP SEQUENCE public.orgao_expedidor_id_seq;
       public          postgres    false    293    5            g           0    0    orgao_expedidor_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.orgao_expedidor_id_seq OWNED BY public.orgao_expedidor.id;
          public          postgres    false    294            '           1259    26197    orgao_id_seq    SEQUENCE     }   CREATE SEQUENCE public.orgao_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;
 #   DROP SEQUENCE public.orgao_id_seq;
       public          postgres    false    5    292            h           0    0    orgao_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.orgao_id_seq OWNED BY public.orgao.id;
          public          postgres    false    295            (           1259    26198    origin    TABLE     �   CREATE TABLE public.origin (
    id integer NOT NULL,
    nm_origem character varying(45),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.origin;
       public         heap    postgres    false    5            )           1259    26201    origin_id_seq    SEQUENCE     ~   CREATE SEQUENCE public.origin_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;
 $   DROP SEQUENCE public.origin_id_seq;
       public          postgres    false    5    296            i           0    0    origin_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.origin_id_seq OWNED BY public.origin.id;
          public          postgres    false    297            *           1259    26202    password_resets    TABLE     �   CREATE TABLE public.password_resets (
    email character varying(50) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 #   DROP TABLE public.password_resets;
       public         heap    postgres    false    5            +           1259    26205    pedido    TABLE     y  CREATE TABLE public.pedido (
    id integer NOT NULL,
    serve_id integer,
    contrato integer NOT NULL,
    ing_serv_publico timestamp(0) without time zone,
    ing_cargo timestamp(0) without time zone,
    licenca_gozada integer,
    data_pedido timestamp(0) without time zone,
    aposentadoria_id integer,
    cod_cid integer,
    nm_cid character varying(255),
    cid integer,
    ato_concessao character varying(255),
    ato_data timestamp(0) without time zone,
    publicacao character varying(255),
    data_publicacao timestamp(0) without time zone,
    processo_org character varying(255),
    processo_org_data timestamp(0) without time zone,
    processo_adm character varying(255),
    processo_adm_data timestamp(0) without time zone,
    processo_tce character varying(255),
    processo_tce_data timestamp(0) without time zone,
    invalidez_data timestamp(0) without time zone,
    grupo character varying(255),
    protocolo character varying(255),
    faltas integer,
    certidao_tempo_id integer,
    pedido_status integer,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.pedido;
       public         heap    postgres    false    5            ,           1259    26210    pedido_id_seq    SEQUENCE     ~   CREATE SEQUENCE public.pedido_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;
 $   DROP SEQUENCE public.pedido_id_seq;
       public          postgres    false    299    5            j           0    0    pedido_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.pedido_id_seq OWNED BY public.pedido.id;
          public          postgres    false    300            -           1259    26211    permissions    TABLE     �   CREATE TABLE public.permissions (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    guard_name character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.permissions;
       public         heap    postgres    false    5            .           1259    26216    permissions_id_seq    SEQUENCE     {   CREATE SEQUENCE public.permissions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.permissions_id_seq;
       public          postgres    false    301    5            k           0    0    permissions_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.permissions_id_seq OWNED BY public.permissions.id;
          public          postgres    false    302            /           1259    26217    programa_trabalho    TABLE     �   CREATE TABLE public.programa_trabalho (
    id integer NOT NULL,
    nm_programa character varying(300),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 %   DROP TABLE public.programa_trabalho;
       public         heap    postgres    false    5            0           1259    26220    programa_trabalho_id_seq    SEQUENCE     �   CREATE SEQUENCE public.programa_trabalho_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.programa_trabalho_id_seq;
       public          postgres    false    303    5            l           0    0    programa_trabalho_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.programa_trabalho_id_seq OWNED BY public.programa_trabalho.id;
          public          postgres    false    304            1           1259    26221    prova_de_vida    TABLE     �  CREATE TABLE public.prova_de_vida (
    id integer NOT NULL,
    matricula character varying(50),
    cpf character varying(14),
    data_nascimento date,
    nr_telefone character varying(16),
    nm_rua character varying(250),
    nr_casa character varying(16),
    complemento character varying(250),
    bairro character varying(250),
    cidade character varying(250),
    estado character varying(250),
    cep character varying(15),
    foto_doc_frente character varying(250),
    foto_doc_verso character varying(250),
    foto_doc_facial character varying(250),
    prova_de_vida_status_id integer,
    prova_de_vida_ano character varying(15),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 !   DROP TABLE public.prova_de_vida;
       public         heap    postgres    false    5            2           1259    26226    prova_de_vida_id_seq    SEQUENCE     �   CREATE SEQUENCE public.prova_de_vida_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.prova_de_vida_id_seq;
       public          postgres    false    305    5            m           0    0    prova_de_vida_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.prova_de_vida_id_seq OWNED BY public.prova_de_vida.id;
          public          postgres    false    306            3           1259    26227    prova_de_vida_status    TABLE     �   CREATE TABLE public.prova_de_vida_status (
    id integer NOT NULL,
    nm_prova_vida_status character varying(200),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 (   DROP TABLE public.prova_de_vida_status;
       public         heap    postgres    false    5            4           1259    26230    prova_de_vida_status_id_seq    SEQUENCE     �   CREATE SEQUENCE public.prova_de_vida_status_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 2   DROP SEQUENCE public.prova_de_vida_status_id_seq;
       public          postgres    false    5    307            n           0    0    prova_de_vida_status_id_seq    SEQUENCE OWNED BY     [   ALTER SEQUENCE public.prova_de_vida_status_id_seq OWNED BY public.prova_de_vida_status.id;
          public          postgres    false    308            5           1259    26231    rbprev_numeros    TABLE     3  CREATE TABLE public.rbprev_numeros (
    id integer NOT NULL,
    rbprev_numeros_ano_id integer,
    rbprev_numeros_mes_id integer,
    path_pdf character varying(200),
    status boolean DEFAULT true NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 "   DROP TABLE public.rbprev_numeros;
       public         heap    postgres    false    5            6           1259    26235    rbprev_numeros_ano    TABLE     �   CREATE TABLE public.rbprev_numeros_ano (
    id integer NOT NULL,
    nm_ano integer,
    status boolean DEFAULT true NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 &   DROP TABLE public.rbprev_numeros_ano;
       public         heap    postgres    false    5            7           1259    26239    rbprev_numeros_ano_id_seq    SEQUENCE     �   CREATE SEQUENCE public.rbprev_numeros_ano_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public.rbprev_numeros_ano_id_seq;
       public          postgres    false    310    5            o           0    0    rbprev_numeros_ano_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public.rbprev_numeros_ano_id_seq OWNED BY public.rbprev_numeros_ano.id;
          public          postgres    false    311            8           1259    26240    rbprev_numeros_id_seq    SEQUENCE     �   CREATE SEQUENCE public.rbprev_numeros_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.rbprev_numeros_id_seq;
       public          postgres    false    309    5            p           0    0    rbprev_numeros_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.rbprev_numeros_id_seq OWNED BY public.rbprev_numeros.id;
          public          postgres    false    312            9           1259    26241    rbprev_numeros_mes    TABLE     �   CREATE TABLE public.rbprev_numeros_mes (
    id integer NOT NULL,
    nm_mes character varying(100),
    status boolean DEFAULT true NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 &   DROP TABLE public.rbprev_numeros_mes;
       public         heap    postgres    false    5            :           1259    26245    rbprev_numeros_mes_id_seq    SEQUENCE     �   CREATE SEQUENCE public.rbprev_numeros_mes_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public.rbprev_numeros_mes_id_seq;
       public          postgres    false    5    313            q           0    0    rbprev_numeros_mes_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public.rbprev_numeros_mes_id_seq OWNED BY public.rbprev_numeros_mes.id;
          public          postgres    false    314            ;           1259    26246 )   requerimento_aposentadoria_acumulo_cargos    TABLE     M  CREATE TABLE public.requerimento_aposentadoria_acumulo_cargos (
    id integer NOT NULL,
    nm_requerente character varying(500),
    requerimento_aposentadoria_compulsoria_id integer NOT NULL,
    status boolean DEFAULT true NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 =   DROP TABLE public.requerimento_aposentadoria_acumulo_cargos;
       public         heap    postgres    false    5            <           1259    26252 0   requerimento_aposentadoria_acumulo_cargos_id_seq    SEQUENCE     �   CREATE SEQUENCE public.requerimento_aposentadoria_acumulo_cargos_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 G   DROP SEQUENCE public.requerimento_aposentadoria_acumulo_cargos_id_seq;
       public          postgres    false    315    5            r           0    0 0   requerimento_aposentadoria_acumulo_cargos_id_seq    SEQUENCE OWNED BY     �   ALTER SEQUENCE public.requerimento_aposentadoria_acumulo_cargos_id_seq OWNED BY public.requerimento_aposentadoria_acumulo_cargos.id;
          public          postgres    false    316            =           1259    26253 &   requerimento_aposentadoria_compulsoria    TABLE     
  CREATE TABLE public.requerimento_aposentadoria_compulsoria (
    id integer NOT NULL,
    nm_requerente character varying(300),
    status boolean DEFAULT true NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 :   DROP TABLE public.requerimento_aposentadoria_compulsoria;
       public         heap    postgres    false    5            >           1259    26257 -   requerimento_aposentadoria_compulsoria_id_seq    SEQUENCE     �   CREATE SEQUENCE public.requerimento_aposentadoria_compulsoria_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 D   DROP SEQUENCE public.requerimento_aposentadoria_compulsoria_id_seq;
       public          postgres    false    5    317            s           0    0 -   requerimento_aposentadoria_compulsoria_id_seq    SEQUENCE OWNED BY        ALTER SEQUENCE public.requerimento_aposentadoria_compulsoria_id_seq OWNED BY public.requerimento_aposentadoria_compulsoria.id;
          public          postgres    false    318            ?           1259    26258 &   requerimento_aposentadoria_dependentes    TABLE     A  CREATE TABLE public.requerimento_aposentadoria_dependentes (
    id integer NOT NULL,
    nm_dependente character varying(500),
    requerimento_aposentadoria_compulsoria_id integer,
    status boolean DEFAULT true NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 :   DROP TABLE public.requerimento_aposentadoria_dependentes;
       public         heap    postgres    false    5            @           1259    26264 -   requerimento_aposentadoria_dependentes_id_seq    SEQUENCE     �   CREATE SEQUENCE public.requerimento_aposentadoria_dependentes_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 D   DROP SEQUENCE public.requerimento_aposentadoria_dependentes_id_seq;
       public          postgres    false    5    319            t           0    0 -   requerimento_aposentadoria_dependentes_id_seq    SEQUENCE OWNED BY        ALTER SEQUENCE public.requerimento_aposentadoria_dependentes_id_seq OWNED BY public.requerimento_aposentadoria_dependentes.id;
          public          postgres    false    320            A           1259    26265 %   requerimento_aposentadoria_voluntaria    TABLE       CREATE TABLE public.requerimento_aposentadoria_voluntaria (
    id integer NOT NULL,
    nm_requerente character varying(250),
    matricula character varying(10),
    cpf character varying(16),
    data_nascimento date,
    pis_pasep character varying(30),
    rg character varying(16),
    nm_rua character varying(40),
    numero_casa character varying(16),
    complemento character varying(30),
    cep character varying(16),
    nm_bairro character varying(30),
    nm_uf character varying(2),
    nr_telefone character varying(16),
    nm_lotacao character varying(200),
    data_solicitacao date,
    nm_local character varying(100),
    sexo_id integer,
    status_civil_id integer,
    termos_aposentadoria_id integer,
    termos_aposentadoria_responsavel_id integer,
    vinculo_municipio_id integer,
    orgao_id integer,
    funcao_id integer,
    city_id integer,
    status boolean DEFAULT true NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    nm_cargo character varying(45)
);
 9   DROP TABLE public.requerimento_aposentadoria_voluntaria;
       public         heap    postgres    false    5            B           1259    26271 ,   requerimento_aposentadoria_voluntaria_id_seq    SEQUENCE     �   CREATE SEQUENCE public.requerimento_aposentadoria_voluntaria_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 C   DROP SEQUENCE public.requerimento_aposentadoria_voluntaria_id_seq;
       public          postgres    false    321    5            u           0    0 ,   requerimento_aposentadoria_voluntaria_id_seq    SEQUENCE OWNED BY     }   ALTER SEQUENCE public.requerimento_aposentadoria_voluntaria_id_seq OWNED BY public.requerimento_aposentadoria_voluntaria.id;
          public          postgres    false    322            C           1259    26272    role_has_permissions    TABLE     m   CREATE TABLE public.role_has_permissions (
    permission_id bigint NOT NULL,
    role_id bigint NOT NULL
);
 (   DROP TABLE public.role_has_permissions;
       public         heap    postgres    false    5            D           1259    26275    roles    TABLE     �   CREATE TABLE public.roles (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    guard_name character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.roles;
       public         heap    postgres    false    5            E           1259    26280    roles_id_seq    SEQUENCE     u   CREATE SEQUENCE public.roles_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.roles_id_seq;
       public          postgres    false    324    5            v           0    0    roles_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.roles_id_seq OWNED BY public.roles.id;
          public          postgres    false    325            F           1259    26281    serve    TABLE     �  CREATE TABLE public.serve (
    id integer NOT NULL,
    matricula integer NOT NULL,
    nm_servidor character varying(150),
    data_nascimento date,
    sexo_id integer NOT NULL,
    rg character varying(10),
    orgao_expedidor_id integer NOT NULL,
    cpf character varying(15),
    pis_pasep character varying(20),
    nm_pai character varying(100),
    nm_mae character varying(100),
    obito_id integer NOT NULL,
    origin_id integer NOT NULL,
    type_serve_id integer NOT NULL,
    marital_status_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    tp_servidor_id integer,
    status boolean DEFAULT true NOT NULL
);
    DROP TABLE public.serve;
       public         heap    postgres    false    5            G           1259    26285    serve_id_seq    SEQUENCE     }   CREATE SEQUENCE public.serve_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;
 #   DROP SEQUENCE public.serve_id_seq;
       public          postgres    false    326    5            w           0    0    serve_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.serve_id_seq OWNED BY public.serve.id;
          public          postgres    false    327            H           1259    26286    sexo    TABLE     �   CREATE TABLE public.sexo (
    id integer NOT NULL,
    nm_sexo character varying(20),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.sexo;
       public         heap    postgres    false    5            I           1259    26289    sexo_id_seq    SEQUENCE     |   CREATE SEQUENCE public.sexo_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;
 "   DROP SEQUENCE public.sexo_id_seq;
       public          postgres    false    5    328            x           0    0    sexo_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.sexo_id_seq OWNED BY public.sexo.id;
          public          postgres    false    329            J           1259    26290    state    TABLE     �   CREATE TABLE public.state (
    id integer NOT NULL,
    nm_estado character varying(150),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.state;
       public         heap    postgres    false    5            K           1259    26293    state_id_seq    SEQUENCE     }   CREATE SEQUENCE public.state_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;
 #   DROP SEQUENCE public.state_id_seq;
       public          postgres    false    5    330            y           0    0    state_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.state_id_seq OWNED BY public.state.id;
          public          postgres    false    331            L           1259    26294    termos_aposentadoria    TABLE     �   CREATE TABLE public.termos_aposentadoria (
    id integer NOT NULL,
    nm_termos character varying(500),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 (   DROP TABLE public.termos_aposentadoria;
       public         heap    postgres    false    5            M           1259    26299    termos_aposentadoria_id_seq    SEQUENCE     �   CREATE SEQUENCE public.termos_aposentadoria_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 2   DROP SEQUENCE public.termos_aposentadoria_id_seq;
       public          postgres    false    5    332            z           0    0    termos_aposentadoria_id_seq    SEQUENCE OWNED BY     [   ALTER SEQUENCE public.termos_aposentadoria_id_seq OWNED BY public.termos_aposentadoria.id;
          public          postgres    false    333            N           1259    26300     termos_aposentadoria_responsavel    TABLE     �   CREATE TABLE public.termos_aposentadoria_responsavel (
    id integer NOT NULL,
    nm_responsavel character varying(250),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 4   DROP TABLE public.termos_aposentadoria_responsavel;
       public         heap    postgres    false    5            O           1259    26303 '   termos_aposentadoria_responsavel_id_seq    SEQUENCE     �   CREATE SEQUENCE public.termos_aposentadoria_responsavel_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 >   DROP SEQUENCE public.termos_aposentadoria_responsavel_id_seq;
       public          postgres    false    5    334            {           0    0 '   termos_aposentadoria_responsavel_id_seq    SEQUENCE OWNED BY     s   ALTER SEQUENCE public.termos_aposentadoria_responsavel_id_seq OWNED BY public.termos_aposentadoria_responsavel.id;
          public          postgres    false    335            P           1259    26304 !   termos_aposentadoria_responsável    TABLE       CREATE TABLE public."termos_aposentadoria_responsável" (
    id integer NOT NULL,
    nm_local character varying(250),
    data_solicitacao date,
    nm_reponsavel character varying(250),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 7   DROP TABLE public."termos_aposentadoria_responsável";
       public         heap    postgres    false    5            Q           1259    26309 (   termos_aposentadoria_responsável_id_seq    SEQUENCE     �   CREATE SEQUENCE public."termos_aposentadoria_responsável_id_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 A   DROP SEQUENCE public."termos_aposentadoria_responsável_id_seq";
       public          postgres    false    336    5            |           0    0 (   termos_aposentadoria_responsável_id_seq    SEQUENCE OWNED BY     y   ALTER SEQUENCE public."termos_aposentadoria_responsável_id_seq" OWNED BY public."termos_aposentadoria_responsável".id;
          public          postgres    false    337            R           1259    26310    tipo_certidao    TABLE     �   CREATE TABLE public.tipo_certidao (
    id integer NOT NULL,
    nm_tipocertidao character varying(300),
    status boolean DEFAULT true NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 !   DROP TABLE public.tipo_certidao;
       public         heap    postgres    false    5            S           1259    26314    tipo_certidao_id_seq    SEQUENCE     �   CREATE SEQUENCE public.tipo_certidao_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.tipo_certidao_id_seq;
       public          postgres    false    338    5            }           0    0    tipo_certidao_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.tipo_certidao_id_seq OWNED BY public.tipo_certidao.id;
          public          postgres    false    339            T           1259    26315    tpAposentadoriaEspecial    TABLE     �   CREATE TABLE public."tpAposentadoriaEspecial" (
    id integer NOT NULL,
    "sts_aposentadoriaEspecial" character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 -   DROP TABLE public."tpAposentadoriaEspecial";
       public         heap    postgres    false    5            U           1259    26318    tpAposentadoriaEspecial_id_seq    SEQUENCE     �   CREATE SEQUENCE public."tpAposentadoriaEspecial_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;
 7   DROP SEQUENCE public."tpAposentadoriaEspecial_id_seq";
       public          postgres    false    5    340            ~           0    0    tpAposentadoriaEspecial_id_seq    SEQUENCE OWNED BY     e   ALTER SEQUENCE public."tpAposentadoriaEspecial_id_seq" OWNED BY public."tpAposentadoriaEspecial".id;
          public          postgres    false    341            V           1259    26319    tpPCCR    TABLE     �   CREATE TABLE public."tpPCCR" (
    id integer NOT NULL,
    "sts_PCCR" character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public."tpPCCR";
       public         heap    postgres    false    5            W           1259    26322    tpPCCR_id_seq    SEQUENCE     �   CREATE SEQUENCE public."tpPCCR_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;
 &   DROP SEQUENCE public."tpPCCR_id_seq";
       public          postgres    false    342    5                       0    0    tpPCCR_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public."tpPCCR_id_seq" OWNED BY public."tpPCCR".id;
          public          postgres    false    343            X           1259    26323    tpProfessor    TABLE     �   CREATE TABLE public."tpProfessor" (
    id integer NOT NULL,
    sts_professor character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 !   DROP TABLE public."tpProfessor";
       public         heap    postgres    false    5            Y           1259    26326    tpProfessor_id_seq    SEQUENCE     �   CREATE SEQUENCE public."tpProfessor_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;
 +   DROP SEQUENCE public."tpProfessor_id_seq";
       public          postgres    false    5    344            �           0    0    tpProfessor_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public."tpProfessor_id_seq" OWNED BY public."tpProfessor".id;
          public          postgres    false    345            Z           1259    26327    tpServicoMilitar    TABLE     �   CREATE TABLE public."tpServicoMilitar" (
    id integer NOT NULL,
    "sts_Servico_Mili" character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 &   DROP TABLE public."tpServicoMilitar";
       public         heap    postgres    false    5            [           1259    26330    tpServicoMilitar_id_seq    SEQUENCE     �   CREATE SEQUENCE public."tpServicoMilitar_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;
 0   DROP SEQUENCE public."tpServicoMilitar_id_seq";
       public          postgres    false    5    346            �           0    0    tpServicoMilitar_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public."tpServicoMilitar_id_seq" OWNED BY public."tpServicoMilitar".id;
          public          postgres    false    347            \           1259    26331    tpServicoPublico    TABLE     �   CREATE TABLE public."tpServicoPublico" (
    id integer NOT NULL,
    sts_servico character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 &   DROP TABLE public."tpServicoPublico";
       public         heap    postgres    false    5            ]           1259    26334    tpServicoPublico_id_seq    SEQUENCE     �   CREATE SEQUENCE public."tpServicoPublico_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;
 0   DROP SEQUENCE public."tpServicoPublico_id_seq";
       public          postgres    false    348    5            �           0    0    tpServicoPublico_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public."tpServicoPublico_id_seq" OWNED BY public."tpServicoPublico".id;
          public          postgres    false    349            ^           1259    26335 
   tpservidor    TABLE     e   CREATE TABLE public.tpservidor (
    id integer NOT NULL,
    nm_tpservidor character varying(40)
);
    DROP TABLE public.tpservidor;
       public         heap    postgres    false    5            _           1259    26338 
   type_serve    TABLE     �   CREATE TABLE public.type_serve (
    id integer NOT NULL,
    status_servidor character varying(45),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.type_serve;
       public         heap    postgres    false    5            `           1259    26341    type_serve_id_seq    SEQUENCE     �   CREATE SEQUENCE public.type_serve_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;
 (   DROP SEQUENCE public.type_serve_id_seq;
       public          postgres    false    5    351            �           0    0    type_serve_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.type_serve_id_seq OWNED BY public.type_serve.id;
          public          postgres    false    352            a           1259    26342    users    TABLE     �  CREATE TABLE public.users (
    id integer NOT NULL,
    name character varying(40) NOT NULL,
    email character varying(50) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    status boolean DEFAULT true NOT NULL
);
    DROP TABLE public.users;
       public         heap    postgres    false    5            b           1259    26346    users_id_seq    SEQUENCE     }   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    5    353            �           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    354            c           1259    26347    vinculo_municipio    TABLE     �   CREATE TABLE public.vinculo_municipio (
    id integer NOT NULL,
    nm_vinculo character varying(250),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 %   DROP TABLE public.vinculo_municipio;
       public         heap    postgres    false    5            d           1259    26350    vinculo_municipio_id_seq    SEQUENCE     �   CREATE SEQUENCE public.vinculo_municipio_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.vinculo_municipio_id_seq;
       public          postgres    false    355    5            �           0    0    vinculo_municipio_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.vinculo_municipio_id_seq OWNED BY public.vinculo_municipio.id;
          public          postgres    false    356            �           2604    26351 
   address id    DEFAULT     h   ALTER TABLE ONLY public.address ALTER COLUMN id SET DEFAULT nextval('public.address_id_seq'::regclass);
 9   ALTER TABLE public.address ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    215    214            �           2604    26352    almoxarifado id    DEFAULT     r   ALTER TABLE ONLY public.almoxarifado ALTER COLUMN id SET DEFAULT nextval('public.almoxarifado_id_seq'::regclass);
 >   ALTER TABLE public.almoxarifado ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    223    216            �           2604    26353    almoxarifado_cedido id    DEFAULT     �   ALTER TABLE ONLY public.almoxarifado_cedido ALTER COLUMN id SET DEFAULT nextval('public.almoxarifado_cedido_id_seq'::regclass);
 E   ALTER TABLE public.almoxarifado_cedido ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    218    217            �           2604    26354    almoxarifado_condicao id    DEFAULT     �   ALTER TABLE ONLY public.almoxarifado_condicao ALTER COLUMN id SET DEFAULT nextval('public.almoxarifado_condicao_id_seq'::regclass);
 G   ALTER TABLE public.almoxarifado_condicao ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    220    219            �           2604    26355    almoxarifado_contrato id    DEFAULT     �   ALTER TABLE ONLY public.almoxarifado_contrato ALTER COLUMN id SET DEFAULT nextval('public.almoxarifado_contrato_id_seq'::regclass);
 G   ALTER TABLE public.almoxarifado_contrato ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    222    221            �           2604    26356     almoxarifado_localizacao_dpto id    DEFAULT     �   ALTER TABLE ONLY public.almoxarifado_localizacao_dpto ALTER COLUMN id SET DEFAULT nextval('public.almoxarifado_localizacao_dpto_id_seq'::regclass);
 O   ALTER TABLE public.almoxarifado_localizacao_dpto ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    225    224            �           2604    26357    almoxarifado_marca id    DEFAULT     ~   ALTER TABLE ONLY public.almoxarifado_marca ALTER COLUMN id SET DEFAULT nextval('public.almoxarifado_marca_id_seq'::regclass);
 D   ALTER TABLE public.almoxarifado_marca ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    227    226            �           2604    26358    almoxarifado_responsavel id    DEFAULT     �   ALTER TABLE ONLY public.almoxarifado_responsavel ALTER COLUMN id SET DEFAULT nextval('public.almoxarifado_responsavel_id_seq'::regclass);
 J   ALTER TABLE public.almoxarifado_responsavel ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    229    228            �           2604    26359    almoxarifado_tipo id    DEFAULT     |   ALTER TABLE ONLY public.almoxarifado_tipo ALTER COLUMN id SET DEFAULT nextval('public.almoxarifado_tipo_id_seq'::regclass);
 C   ALTER TABLE public.almoxarifado_tipo ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    231    230            �           2604    26360 !   almoxarifado_virtual_categoria id    DEFAULT     �   ALTER TABLE ONLY public.almoxarifado_virtual_categoria ALTER COLUMN id SET DEFAULT nextval('public.almoxarifado_virtual_categoria_id_seq'::regclass);
 P   ALTER TABLE public.almoxarifado_virtual_categoria ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    233    232            �           2604    26361 (   almoxarifado_virtual_contrato_empenho id    DEFAULT     �   ALTER TABLE ONLY public.almoxarifado_virtual_contrato_empenho ALTER COLUMN id SET DEFAULT nextval('public.almoxarifado_virtual_contrato_empenho_id_seq'::regclass);
 W   ALTER TABLE public.almoxarifado_virtual_contrato_empenho ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    235    234            �           2604    26362    almoxarifado_virtual_cx_uni id    DEFAULT     �   ALTER TABLE ONLY public.almoxarifado_virtual_cx_uni ALTER COLUMN id SET DEFAULT nextval('public.almoxarifado_virtual_cx_uni_id_seq'::regclass);
 M   ALTER TABLE public.almoxarifado_virtual_cx_uni ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    237    236            �           2604    26363 *   almoxarifado_virtual_empresa_contratada id    DEFAULT     �   ALTER TABLE ONLY public.almoxarifado_virtual_empresa_contratada ALTER COLUMN id SET DEFAULT nextval('public.almoxarifado_virtual_empresa_contratada_id_seq'::regclass);
 Y   ALTER TABLE public.almoxarifado_virtual_empresa_contratada ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    239    238            �           2604    26364    almoxarifado_virtual_item id    DEFAULT     �   ALTER TABLE ONLY public.almoxarifado_virtual_item ALTER COLUMN id SET DEFAULT nextval('public.almoxarifado_virtual_item_id_seq'::regclass);
 K   ALTER TABLE public.almoxarifado_virtual_item ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    241    240            �           2604    26365    almoxarifado_virtual_pedido id    DEFAULT     �   ALTER TABLE ONLY public.almoxarifado_virtual_pedido ALTER COLUMN id SET DEFAULT nextval('public.almoxarifado_virtual_pedido_id_seq'::regclass);
 M   ALTER TABLE public.almoxarifado_virtual_pedido ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    243    242            �           2604    26366 &   almoxarifado_virtual_registro_preco id    DEFAULT     �   ALTER TABLE ONLY public.almoxarifado_virtual_registro_preco ALTER COLUMN id SET DEFAULT nextval('public.almoxarifado_virtual_registro_preco_id_seq'::regclass);
 U   ALTER TABLE public.almoxarifado_virtual_registro_preco ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    245    244            �           2604    26367    aposentadoria id    DEFAULT     t   ALTER TABLE ONLY public.aposentadoria ALTER COLUMN id SET DEFAULT nextval('public.aposentadoria_id_seq'::regclass);
 ?   ALTER TABLE public.aposentadoria ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    247    246            �           2604    26368    atendimento id    DEFAULT     p   ALTER TABLE ONLY public.atendimento ALTER COLUMN id SET DEFAULT nextval('public.atendimento_id_seq'::regclass);
 =   ALTER TABLE public.atendimento ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    251    248            �           2604    26369    atendimento_assunto id    DEFAULT     �   ALTER TABLE ONLY public.atendimento_assunto ALTER COLUMN id SET DEFAULT nextval('public.atendimento_assunto_id_seq'::regclass);
 E   ALTER TABLE public.atendimento_assunto ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    250    249            �           2604    26370    atendimento_status id    DEFAULT     ~   ALTER TABLE ONLY public.atendimento_status ALTER COLUMN id SET DEFAULT nextval('public.atendimento_status_id_seq'::regclass);
 D   ALTER TABLE public.atendimento_status ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    253    252            �           2604    26371    atendimento_tipo_servidor id    DEFAULT     �   ALTER TABLE ONLY public.atendimento_tipo_servidor ALTER COLUMN id SET DEFAULT nextval('public.atendimento_tipo_servidor_id_seq'::regclass);
 K   ALTER TABLE public.atendimento_tipo_servidor ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    255    254            �           2604    26372 
   bol_dap id    DEFAULT     h   ALTER TABLE ONLY public.bol_dap ALTER COLUMN id SET DEFAULT nextval('public.bol_dap_id_seq'::regclass);
 9   ALTER TABLE public.bol_dap ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    257    256            6           2604    26931    cedula_c id    DEFAULT     j   ALTER TABLE ONLY public.cedula_c ALTER COLUMN id SET DEFAULT nextval('public.cedula_c_id_seq'::regclass);
 :   ALTER TABLE public.cedula_c ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    357    358    358            �           2604    26373    certidao_tempo id    DEFAULT     v   ALTER TABLE ONLY public.certidao_tempo ALTER COLUMN id SET DEFAULT nextval('public.certidao_tempo_id_seq'::regclass);
 @   ALTER TABLE public.certidao_tempo ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    259    258            �           2604    26374    city id    DEFAULT     b   ALTER TABLE ONLY public.city ALTER COLUMN id SET DEFAULT nextval('public.city_id_seq'::regclass);
 6   ALTER TABLE public.city ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    261    260            �           2604    26375    contract id    DEFAULT     j   ALTER TABLE ONLY public.contract ALTER COLUMN id SET DEFAULT nextval('public.contract_id_seq'::regclass);
 :   ALTER TABLE public.contract ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    263    262            �           2604    26376    ctc_certidao id    DEFAULT     r   ALTER TABLE ONLY public.ctc_certidao ALTER COLUMN id SET DEFAULT nextval('public.ctc_certidao_id_seq'::regclass);
 >   ALTER TABLE public.ctc_certidao ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    267    264            �           2604    26377    ctc_certidao_deducao id    DEFAULT     �   ALTER TABLE ONLY public.ctc_certidao_deducao ALTER COLUMN id SET DEFAULT nextval('public.ctc_certidao_deducao_id_seq'::regclass);
 F   ALTER TABLE public.ctc_certidao_deducao ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    266    265                        2604    26378    ctc_verso id    DEFAULT     l   ALTER TABLE ONLY public.ctc_verso ALTER COLUMN id SET DEFAULT nextval('public.ctc_verso_id_seq'::regclass);
 ;   ALTER TABLE public.ctc_verso ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    269    268                       2604    26379    documentos_cedula_c id    DEFAULT     w   ALTER TABLE ONLY public.documentos_cedula_c ALTER COLUMN id SET DEFAULT nextval('public.documentos_id_seq'::regclass);
 E   ALTER TABLE public.documentos_cedula_c ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    275    272                       2604    26380    documentos_cedula_c_pmrb id    DEFAULT     �   ALTER TABLE ONLY public.documentos_cedula_c_pmrb ALTER COLUMN id SET DEFAULT nextval('public.documentos_cedula_c_pmrb_id_seq'::regclass);
 J   ALTER TABLE public.documentos_cedula_c_pmrb ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    274    273                       2604    26381    elemento_despesa id    DEFAULT     z   ALTER TABLE ONLY public.elemento_despesa ALTER COLUMN id SET DEFAULT nextval('public.elemento_despesa_id_seq'::regclass);
 B   ALTER TABLE public.elemento_despesa ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    277    276                       2604    26382    folhapagto id    DEFAULT     n   ALTER TABLE ONLY public.folhapagto ALTER COLUMN id SET DEFAULT nextval('public.folhapagto_id_seq'::regclass);
 <   ALTER TABLE public.folhapagto ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    279    278                       2604    26383    fonte_despesa id    DEFAULT     t   ALTER TABLE ONLY public.fonte_despesa ALTER COLUMN id SET DEFAULT nextval('public.fonte_despesa_id_seq'::regclass);
 ?   ALTER TABLE public.fonte_despesa ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    281    280            	           2604    26384 	   funcao id    DEFAULT     f   ALTER TABLE ONLY public.funcao ALTER COLUMN id SET DEFAULT nextval('public.funcao_id_seq'::regclass);
 8   ALTER TABLE public.funcao ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    283    282            
           2604    26385    marital_status id    DEFAULT     v   ALTER TABLE ONLY public.marital_status ALTER COLUMN id SET DEFAULT nextval('public.marital_status_id_seq'::regclass);
 @   ALTER TABLE public.marital_status ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    285    284                       2604    26386    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    287    286                       2604    26387    obito id    DEFAULT     d   ALTER TABLE ONLY public.obito ALTER COLUMN id SET DEFAULT nextval('public.obito_id_seq'::regclass);
 7   ALTER TABLE public.obito ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    291    290                       2604    26388    orgao id    DEFAULT     d   ALTER TABLE ONLY public.orgao ALTER COLUMN id SET DEFAULT nextval('public.orgao_id_seq'::regclass);
 7   ALTER TABLE public.orgao ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    295    292                       2604    26389    orgao_expedidor id    DEFAULT     x   ALTER TABLE ONLY public.orgao_expedidor ALTER COLUMN id SET DEFAULT nextval('public.orgao_expedidor_id_seq'::regclass);
 A   ALTER TABLE public.orgao_expedidor ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    294    293                       2604    26390 	   origin id    DEFAULT     f   ALTER TABLE ONLY public.origin ALTER COLUMN id SET DEFAULT nextval('public.origin_id_seq'::regclass);
 8   ALTER TABLE public.origin ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    297    296                       2604    26391 	   pedido id    DEFAULT     f   ALTER TABLE ONLY public.pedido ALTER COLUMN id SET DEFAULT nextval('public.pedido_id_seq'::regclass);
 8   ALTER TABLE public.pedido ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    300    299                       2604    26392    permissions id    DEFAULT     p   ALTER TABLE ONLY public.permissions ALTER COLUMN id SET DEFAULT nextval('public.permissions_id_seq'::regclass);
 =   ALTER TABLE public.permissions ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    302    301                       2604    26393    programa_trabalho id    DEFAULT     |   ALTER TABLE ONLY public.programa_trabalho ALTER COLUMN id SET DEFAULT nextval('public.programa_trabalho_id_seq'::regclass);
 C   ALTER TABLE public.programa_trabalho ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    304    303                       2604    26394    prova_de_vida id    DEFAULT     t   ALTER TABLE ONLY public.prova_de_vida ALTER COLUMN id SET DEFAULT nextval('public.prova_de_vida_id_seq'::regclass);
 ?   ALTER TABLE public.prova_de_vida ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    306    305                       2604    26395    prova_de_vida_status id    DEFAULT     �   ALTER TABLE ONLY public.prova_de_vida_status ALTER COLUMN id SET DEFAULT nextval('public.prova_de_vida_status_id_seq'::regclass);
 F   ALTER TABLE public.prova_de_vida_status ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    308    307                       2604    26396    rbprev_numeros id    DEFAULT     v   ALTER TABLE ONLY public.rbprev_numeros ALTER COLUMN id SET DEFAULT nextval('public.rbprev_numeros_id_seq'::regclass);
 @   ALTER TABLE public.rbprev_numeros ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    312    309                       2604    26397    rbprev_numeros_ano id    DEFAULT     ~   ALTER TABLE ONLY public.rbprev_numeros_ano ALTER COLUMN id SET DEFAULT nextval('public.rbprev_numeros_ano_id_seq'::regclass);
 D   ALTER TABLE public.rbprev_numeros_ano ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    311    310                       2604    26398    rbprev_numeros_mes id    DEFAULT     ~   ALTER TABLE ONLY public.rbprev_numeros_mes ALTER COLUMN id SET DEFAULT nextval('public.rbprev_numeros_mes_id_seq'::regclass);
 D   ALTER TABLE public.rbprev_numeros_mes ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    314    313                       2604    26399 ,   requerimento_aposentadoria_acumulo_cargos id    DEFAULT     �   ALTER TABLE ONLY public.requerimento_aposentadoria_acumulo_cargos ALTER COLUMN id SET DEFAULT nextval('public.requerimento_aposentadoria_acumulo_cargos_id_seq'::regclass);
 [   ALTER TABLE public.requerimento_aposentadoria_acumulo_cargos ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    316    315                       2604    26400 )   requerimento_aposentadoria_compulsoria id    DEFAULT     �   ALTER TABLE ONLY public.requerimento_aposentadoria_compulsoria ALTER COLUMN id SET DEFAULT nextval('public.requerimento_aposentadoria_compulsoria_id_seq'::regclass);
 X   ALTER TABLE public.requerimento_aposentadoria_compulsoria ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    318    317                       2604    26401 )   requerimento_aposentadoria_dependentes id    DEFAULT     �   ALTER TABLE ONLY public.requerimento_aposentadoria_dependentes ALTER COLUMN id SET DEFAULT nextval('public.requerimento_aposentadoria_dependentes_id_seq'::regclass);
 X   ALTER TABLE public.requerimento_aposentadoria_dependentes ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    320    319            !           2604    26402 (   requerimento_aposentadoria_voluntaria id    DEFAULT     �   ALTER TABLE ONLY public.requerimento_aposentadoria_voluntaria ALTER COLUMN id SET DEFAULT nextval('public.requerimento_aposentadoria_voluntaria_id_seq'::regclass);
 W   ALTER TABLE public.requerimento_aposentadoria_voluntaria ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    322    321            #           2604    26403    roles id    DEFAULT     d   ALTER TABLE ONLY public.roles ALTER COLUMN id SET DEFAULT nextval('public.roles_id_seq'::regclass);
 7   ALTER TABLE public.roles ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    325    324            $           2604    26404    serve id    DEFAULT     d   ALTER TABLE ONLY public.serve ALTER COLUMN id SET DEFAULT nextval('public.serve_id_seq'::regclass);
 7   ALTER TABLE public.serve ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    327    326            &           2604    26405    sexo id    DEFAULT     b   ALTER TABLE ONLY public.sexo ALTER COLUMN id SET DEFAULT nextval('public.sexo_id_seq'::regclass);
 6   ALTER TABLE public.sexo ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    329    328            '           2604    26406    state id    DEFAULT     d   ALTER TABLE ONLY public.state ALTER COLUMN id SET DEFAULT nextval('public.state_id_seq'::regclass);
 7   ALTER TABLE public.state ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    331    330            (           2604    26407    termos_aposentadoria id    DEFAULT     �   ALTER TABLE ONLY public.termos_aposentadoria ALTER COLUMN id SET DEFAULT nextval('public.termos_aposentadoria_id_seq'::regclass);
 F   ALTER TABLE public.termos_aposentadoria ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    333    332            )           2604    26408 #   termos_aposentadoria_responsavel id    DEFAULT     �   ALTER TABLE ONLY public.termos_aposentadoria_responsavel ALTER COLUMN id SET DEFAULT nextval('public.termos_aposentadoria_responsavel_id_seq'::regclass);
 R   ALTER TABLE public.termos_aposentadoria_responsavel ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    335    334            *           2604    26409 $   termos_aposentadoria_responsável id    DEFAULT     �   ALTER TABLE ONLY public."termos_aposentadoria_responsável" ALTER COLUMN id SET DEFAULT nextval('public."termos_aposentadoria_responsável_id_seq"'::regclass);
 U   ALTER TABLE public."termos_aposentadoria_responsável" ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    337    336            +           2604    26410    tipo_certidao id    DEFAULT     t   ALTER TABLE ONLY public.tipo_certidao ALTER COLUMN id SET DEFAULT nextval('public.tipo_certidao_id_seq'::regclass);
 ?   ALTER TABLE public.tipo_certidao ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    339    338            -           2604    26411    tpAposentadoriaEspecial id    DEFAULT     �   ALTER TABLE ONLY public."tpAposentadoriaEspecial" ALTER COLUMN id SET DEFAULT nextval('public."tpAposentadoriaEspecial_id_seq"'::regclass);
 K   ALTER TABLE public."tpAposentadoriaEspecial" ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    341    340            .           2604    26412 	   tpPCCR id    DEFAULT     j   ALTER TABLE ONLY public."tpPCCR" ALTER COLUMN id SET DEFAULT nextval('public."tpPCCR_id_seq"'::regclass);
 :   ALTER TABLE public."tpPCCR" ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    343    342            /           2604    26413    tpProfessor id    DEFAULT     t   ALTER TABLE ONLY public."tpProfessor" ALTER COLUMN id SET DEFAULT nextval('public."tpProfessor_id_seq"'::regclass);
 ?   ALTER TABLE public."tpProfessor" ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    345    344            0           2604    26414    tpServicoMilitar id    DEFAULT     ~   ALTER TABLE ONLY public."tpServicoMilitar" ALTER COLUMN id SET DEFAULT nextval('public."tpServicoMilitar_id_seq"'::regclass);
 D   ALTER TABLE public."tpServicoMilitar" ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    347    346            1           2604    26415    tpServicoPublico id    DEFAULT     ~   ALTER TABLE ONLY public."tpServicoPublico" ALTER COLUMN id SET DEFAULT nextval('public."tpServicoPublico_id_seq"'::regclass);
 D   ALTER TABLE public."tpServicoPublico" ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    349    348            2           2604    26416    type_serve id    DEFAULT     n   ALTER TABLE ONLY public.type_serve ALTER COLUMN id SET DEFAULT nextval('public.type_serve_id_seq'::regclass);
 <   ALTER TABLE public.type_serve ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    352    351            3           2604    26417    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    354    353            5           2604    26418    vinculo_municipio id    DEFAULT     |   ALTER TABLE ONLY public.vinculo_municipio ALTER COLUMN id SET DEFAULT nextval('public.vinculo_municipio_id_seq'::regclass);
 C   ALTER TABLE public.vinculo_municipio ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    356    355            �          0    25987    address 
   TABLE DATA           �   COPY public.address (id, nm_rua, nr_casa, complemento, state_id, city_id, serve_id, created_at, updated_at, status, bairro) FROM stdin;
    public          postgres    false    214   �.      �          0    25994    almoxarifado 
   TABLE DATA           D  COPY public.almoxarifado (id, nm_patrimonio, descricao, observacao, almoxarifado_tipo_id, almoxarifado_condicao_id, almoxarifado_localizacao_dpto_id, almoxarifado_responsavel_id, almoxarifado_contrato_id, almoxarifado_marca_id, almoxarifado_cedido_id, status, created_at, updated_at, cedido_localizacao, imagem) FROM stdin;
    public          postgres    false    216   �/      �          0    26000    almoxarifado_cedido 
   TABLE DATA           \   COPY public.almoxarifado_cedido (id, nm_cedido, created_at, updated_at, status) FROM stdin;
    public          postgres    false    217   �;      �          0    26005    almoxarifado_condicao 
   TABLE DATA           `   COPY public.almoxarifado_condicao (id, nm_condicao, created_at, updated_at, status) FROM stdin;
    public          postgres    false    219   �;      �          0    26010    almoxarifado_contrato 
   TABLE DATA           n   COPY public.almoxarifado_contrato (id, nr_contrato, ano_contrato, created_at, updated_at, status) FROM stdin;
    public          postgres    false    221   E<      �          0    26016    almoxarifado_localizacao_dpto 
   TABLE DATA           l   COPY public.almoxarifado_localizacao_dpto (id, nm_departamento, created_at, updated_at, status) FROM stdin;
    public          postgres    false    224   �<      �          0    26021    almoxarifado_marca 
   TABLE DATA           Z   COPY public.almoxarifado_marca (id, nm_marca, created_at, updated_at, status) FROM stdin;
    public          postgres    false    226   >      �          0    26026    almoxarifado_responsavel 
   TABLE DATA           f   COPY public.almoxarifado_responsavel (id, nm_responsavel, created_at, updated_at, status) FROM stdin;
    public          postgres    false    228   �>      �          0    26031    almoxarifado_tipo 
   TABLE DATA           X   COPY public.almoxarifado_tipo (id, nm_tipo, created_at, updated_at, status) FROM stdin;
    public          postgres    false    230   >A      �          0    26038    almoxarifado_virtual_categoria 
   TABLE DATA           b   COPY public.almoxarifado_virtual_categoria (id, nm_categoria, created_at, updated_at) FROM stdin;
    public          postgres    false    232   �A      �          0    26042 %   almoxarifado_virtual_contrato_empenho 
   TABLE DATA           [  COPY public.almoxarifado_virtual_contrato_empenho (id, cod_grp, descricao, nr_contrato, prazo_entrega_contrato, data_assinatura, hora_assinatura, saldo_total, saldo_usado, saldo_restante, fonte_despesa_id, elemento_despesa_id, programa_trabalho_id, users_id, almoxarifado_virtual_empresa_contratada_id, created_at, updated_at, nr_sei) FROM stdin;
    public          postgres    false    234   �A      �          0    26048    almoxarifado_virtual_cx_uni 
   TABLE DATA           c   COPY public.almoxarifado_virtual_cx_uni (id, nm_caixa_unidade, created_at, updated_at) FROM stdin;
    public          postgres    false    236   LC      �          0    26052 '   almoxarifado_virtual_empresa_contratada 
   TABLE DATA           ,  COPY public.almoxarifado_virtual_empresa_contratada (id, nome_fantasia, razao_social, cnpj, status, cnae_principal_descricao, cnae_principal_codigo, cep, data_abertura, ddd, telefone, email, tipo_logradouro, logradouro, numero, complemento, bairro, municipio, uf, created_at, updated_at) FROM stdin;
    public          postgres    false    238   yC      �          0    26058    almoxarifado_virtual_item 
   TABLE DATA           �   COPY public.almoxarifado_virtual_item (id, cod_item, marca, descricao, valor_uni, valor_total, quantidade, almoxarifado_virtual_contrato_empenho_id, almoxarifado_virtual_categoria_id, created_at, updated_at) FROM stdin;
    public          postgres    false    240   �F      �          0    26062    almoxarifado_virtual_pedido 
   TABLE DATA           �   COPY public.almoxarifado_virtual_pedido (id, nr_pedido, quantidade_pedido, valor_uni, valor_pedido, almoxarifado_virtual_cx_uni_id, almoxarifado_virtual_item_id, almoxarifado_virtual_contrato_empenho_id, created_at, updated_at) FROM stdin;
    public          postgres    false    242   EG      �          0    26066 #   almoxarifado_virtual_registro_preco 
   TABLE DATA           �   COPY public.almoxarifado_virtual_registro_preco (id, nr_pedido, valor_total_pedido, almoxarifado_virtual_contrato_empenho_id, created_at, updated_at) FROM stdin;
    public          postgres    false    244   ^H      �          0    26070    aposentadoria 
   TABLE DATA           U   COPY public.aposentadoria (id, nm_aposentadoria, created_at, updated_at) FROM stdin;
    public          postgres    false    246   -I      �          0    26074    atendimento 
   TABLE DATA             COPY public.atendimento (id, nm_assegurado, numero_telefone, email, cpf, descricao, atendimento_assunto_id, city_id, state_id, almoxarifado_localizacao_dpto_id, atendimento_status_id, status, created_at, updated_at, matricula, atendimento_tipo_servidor_id) FROM stdin;
    public          postgres    false    248   JI      �          0    26081    atendimento_assunto 
   TABLE DATA           ]   COPY public.atendimento_assunto (id, nm_assunto, status, created_at, updated_at) FROM stdin;
    public          postgres    false    249   �L      �          0    26087    atendimento_status 
   TABLE DATA           ]   COPY public.atendimento_status (id, "statusAtendimento", created_at, updated_at) FROM stdin;
    public          postgres    false    252   �M      �          0    26091    atendimento_tipo_servidor 
   TABLE DATA           i   COPY public.atendimento_tipo_servidor (id, nm_tipo_servidor, status, created_at, updated_at) FROM stdin;
    public          postgres    false    254   �M      �          0    26096    bol_dap 
   TABLE DATA           E   COPY public.bol_dap (id, numero, created_at, updated_at) FROM stdin;
    public          postgres    false    256   N      9          0    26928    cedula_c 
   TABLE DATA           w   COPY public.cedula_c (id, cpf, nome, "anoExercicio", caminhodoarquivo, id_usuario, created_at, updated_at) FROM stdin;
    public          postgres    false    358   �N      �          0    26102    certidao_tempo 
   TABLE DATA           �   COPY public.certidao_tempo (id, nm_empregador, cpf_cnpj, nm_cid, "tpProfessor_id", data_ingresso, data_termino, "tpAposentadoriaEspecial_id", "tpServicoMilitar_id", "tpPCCR_id", "tpServicoPublico_id", created_at, updated_at) FROM stdin;
    public          postgres    false    258   �Q      �          0    26108    city 
   TABLE DATA           E   COPY public.city (id, nm_cidade, created_at, updated_at) FROM stdin;
    public          postgres    false    260   �Q      �          0    26112    contract 
   TABLE DATA           }   COPY public.contract (id, nr_contrato, origin_id, orgao_id, funcao_id, serve_id, created_at, updated_at, status) FROM stdin;
    public          postgres    false    262   S      �          0    26117    ctc_certidao 
   TABLE DATA           G  COPY public.ctc_certidao (id, ctc_numero, serve_id, origin_id, orgao_id, funcao_id, tipo_certidao_id, nr_processo, data_pedido, data_admissao, data_exoneracao, start_date, end_date, fonte_info, local_destino, destinacao, tempo_total, status, created_at, updated_at, contract_id, address_id, identificacao_servidor) FROM stdin;
    public          postgres    false    264   qS      �          0    26123    ctc_certidao_deducao 
   TABLE DATA           �   COPY public.ctc_certidao_deducao (id, ctc_certidao_id, ano, tempo_bruto, faltas, licencas, licencas_sem_vencimento, suspensoes, disponibilidade, outras, tempo_liquido, status, created_at, updated_at) FROM stdin;
    public          postgres    false    265   �S      �          0    26129 	   ctc_verso 
   TABLE DATA           p  COPY public.ctc_verso (id, ctc_certidao_id, tempo_bruto_inicio_1, tempo_bruto_fim_1, tempo_bruto_dias_1, id_ocorrencia_1, tempo_bruto_inicio_2, tempo_bruto_fim_2, tempo_bruto_dias_2, id_ocorrencia_2, tempo_bruto_inicio_3, tempo_bruto_fim_3, tempo_bruto_dias_3, id_ocorrencia_3, tempo_bruto_inicio_4, tempo_bruto_fim_4, tempo_bruto_dias_4, id_ocorrencia_4, tempo_bruto_inicio_5, tempo_bruto_fim_5, tempo_bruto_dias_5, id_ocorrencia_5, tempo_bruto_inicio_6, tempo_bruto_fim_6, tempo_bruto_dias_6, id_ocorrencia_6, tempo_especial_inicio_1, tempo_especial_fim_1, tempo_especial_dias_1, tempo_especial_inicio_2, tempo_especial_fim_2, tempo_especial_dias_2, tempo_especial_inicio_3, tempo_especial_fim_3, tempo_especial_dias_3, tempo_especial_inicio_4, tempo_especial_fim_4, tempo_especial_dias_4, tempo_magisterio_incio_1, tempo_magisterio_fim_1, tempo_magisterio_dias_1, tempo_magisterio_incio_2, tempo_magisterio_fim_2, tempo_magisterio_dias_2, tempo_magisterio_incio_3, tempo_magisterio_fim_3, tempo_magisterio_dias_3, tempo_magisterio_incio_4, tempo_magisterio_fim_4, tempo_magisterio_dias_4, status, created_at, updated_at) FROM stdin;
    public          postgres    false    268   yT      �          0    26136    documento_cedula_teste 
   TABLE DATA           J   COPY public.documento_cedula_teste (id, matricula, nome, cpf) FROM stdin;
    public          postgres    false    270   �T      �          0    26139    documento_cedula_teste_restante 
   TABLE DATA           S   COPY public.documento_cedula_teste_restante (id, nome, cpf, matricula) FROM stdin;
    public          postgres    false    271   ?      �          0    26142    documentos_cedula_c 
   TABLE DATA           ^   COPY public.documentos_cedula_c (id, cpf, pdf_path, path, created_at, updated_at) FROM stdin;
    public          postgres    false    272   �I      �          0    26149    documentos_cedula_c_pmrb 
   TABLE DATA           n   COPY public.documentos_cedula_c_pmrb (id, cpf, nome, pdf_path, created_at, updated_at, matricula) FROM stdin;
    public          postgres    false    273   �T      �          0    26156    elemento_despesa 
   TABLE DATA           S   COPY public.elemento_despesa (id, nm_elemento, created_at, updated_at) FROM stdin;
    public          postgres    false    276   ��
      �          0    26160 
   folhapagto 
   TABLE DATA           -  COPY public.folhapagto (id, ano, mes, "qtdAposentadoFffin", "qtdAposentadoFprev", "qtdPensionistaFfin", "qtdPensionistaFprev", "qtdTotalFfin", "qtdTotalFprev", "valorAposFfin", "valorAposFprev", "valorPenFfin", "valorPenFprev", "valorTotalFfin", "valorTotalFprev", created_at, updated_at) FROM stdin;
    public          postgres    false    278   �
      �          0    26164    fonte_despesa 
   TABLE DATA           M   COPY public.fonte_despesa (id, nm_fonte, created_at, updated_at) FROM stdin;
    public          postgres    false    280   '�
      �          0    26168    funcao 
   TABLE DATA           Q   COPY public.funcao (id, nm_funcao, orgao_id, created_at, updated_at) FROM stdin;
    public          postgres    false    282   Z�
      �          0    26172    marital_status 
   TABLE DATA           R   COPY public.marital_status (id, status_civil, created_at, updated_at) FROM stdin;
    public          postgres    false    284   ��
      �          0    26176 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public          postgres    false    286   �
      �          0    26180    model_has_permissions 
   TABLE DATA           T   COPY public.model_has_permissions (permission_id, model_type, model_id) FROM stdin;
    public          postgres    false    288   �
      �          0    26183    model_has_roles 
   TABLE DATA           H   COPY public.model_has_roles (role_id, model_type, model_id) FROM stdin;
    public          postgres    false    289   0�
      �          0    26186    obito 
   TABLE DATA           E   COPY public.obito (id, nm_obito, created_at, updated_at) FROM stdin;
    public          postgres    false    290   f�
      �          0    26190    orgao 
   TABLE DATA           E   COPY public.orgao (id, nm_orgao, created_at, updated_at) FROM stdin;
    public          postgres    false    292   ��
      �          0    26193    orgao_expedidor 
   TABLE DATA           O   COPY public.orgao_expedidor (id, nm_orgao, created_at, updated_at) FROM stdin;
    public          postgres    false    293   ��
      �          0    26198    origin 
   TABLE DATA           G   COPY public.origin (id, nm_origem, created_at, updated_at) FROM stdin;
    public          postgres    false    296   �
      �          0    26202    password_resets 
   TABLE DATA           C   COPY public.password_resets (email, token, created_at) FROM stdin;
    public          postgres    false    298   y�
      �          0    26205    pedido 
   TABLE DATA           �  COPY public.pedido (id, serve_id, contrato, ing_serv_publico, ing_cargo, licenca_gozada, data_pedido, aposentadoria_id, cod_cid, nm_cid, cid, ato_concessao, ato_data, publicacao, data_publicacao, processo_org, processo_org_data, processo_adm, processo_adm_data, processo_tce, processo_tce_data, invalidez_data, grupo, protocolo, faltas, certidao_tempo_id, pedido_status, created_at, updated_at) FROM stdin;
    public          postgres    false    299   ��
                 0    26211    permissions 
   TABLE DATA           S   COPY public.permissions (id, name, guard_name, created_at, updated_at) FROM stdin;
    public          postgres    false    301   ��
                0    26217    programa_trabalho 
   TABLE DATA           T   COPY public.programa_trabalho (id, nm_programa, created_at, updated_at) FROM stdin;
    public          postgres    false    303   7�
                0    26221    prova_de_vida 
   TABLE DATA           
  COPY public.prova_de_vida (id, matricula, cpf, data_nascimento, nr_telefone, nm_rua, nr_casa, complemento, bairro, cidade, estado, cep, foto_doc_frente, foto_doc_verso, foto_doc_facial, prova_de_vida_status_id, prova_de_vida_ano, created_at, updated_at) FROM stdin;
    public          postgres    false    305   d�
                0    26227    prova_de_vida_status 
   TABLE DATA           `   COPY public.prova_de_vida_status (id, nm_prova_vida_status, created_at, updated_at) FROM stdin;
    public          postgres    false    307   ��
                0    26231    rbprev_numeros 
   TABLE DATA           �   COPY public.rbprev_numeros (id, rbprev_numeros_ano_id, rbprev_numeros_mes_id, path_pdf, status, created_at, updated_at) FROM stdin;
    public          postgres    false    309   ��
      	          0    26235    rbprev_numeros_ano 
   TABLE DATA           X   COPY public.rbprev_numeros_ano (id, nm_ano, status, created_at, updated_at) FROM stdin;
    public          postgres    false    310   }�
                0    26241    rbprev_numeros_mes 
   TABLE DATA           X   COPY public.rbprev_numeros_mes (id, nm_mes, status, created_at, updated_at) FROM stdin;
    public          postgres    false    313   ��
                0    26246 )   requerimento_aposentadoria_acumulo_cargos 
   TABLE DATA           �   COPY public.requerimento_aposentadoria_acumulo_cargos (id, nm_requerente, requerimento_aposentadoria_compulsoria_id, status, created_at, updated_at) FROM stdin;
    public          postgres    false    315   -�
                0    26253 &   requerimento_aposentadoria_compulsoria 
   TABLE DATA           s   COPY public.requerimento_aposentadoria_compulsoria (id, nm_requerente, status, created_at, updated_at) FROM stdin;
    public          postgres    false    317   J�
                0    26258 &   requerimento_aposentadoria_dependentes 
   TABLE DATA           �   COPY public.requerimento_aposentadoria_dependentes (id, nm_dependente, requerimento_aposentadoria_compulsoria_id, status, created_at, updated_at) FROM stdin;
    public          postgres    false    319   ��
                0    26265 %   requerimento_aposentadoria_voluntaria 
   TABLE DATA           �  COPY public.requerimento_aposentadoria_voluntaria (id, nm_requerente, matricula, cpf, data_nascimento, pis_pasep, rg, nm_rua, numero_casa, complemento, cep, nm_bairro, nm_uf, nr_telefone, nm_lotacao, data_solicitacao, nm_local, sexo_id, status_civil_id, termos_aposentadoria_id, termos_aposentadoria_responsavel_id, vinculo_municipio_id, orgao_id, funcao_id, city_id, status, created_at, updated_at, nm_cargo) FROM stdin;
    public          postgres    false    321   ��
                0    26272    role_has_permissions 
   TABLE DATA           F   COPY public.role_has_permissions (permission_id, role_id) FROM stdin;
    public          postgres    false    323   ��
                0    26275    roles 
   TABLE DATA           M   COPY public.roles (id, name, guard_name, created_at, updated_at) FROM stdin;
    public          postgres    false    324   �
                0    26281    serve 
   TABLE DATA           �   COPY public.serve (id, matricula, nm_servidor, data_nascimento, sexo_id, rg, orgao_expedidor_id, cpf, pis_pasep, nm_pai, nm_mae, obito_id, origin_id, type_serve_id, marital_status_id, created_at, updated_at, tp_servidor_id, status) FROM stdin;
    public          postgres    false    326   d�
                0    26286    sexo 
   TABLE DATA           C   COPY public.sexo (id, nm_sexo, created_at, updated_at) FROM stdin;
    public          postgres    false    328   _�
                0    26290    state 
   TABLE DATA           F   COPY public.state (id, nm_estado, created_at, updated_at) FROM stdin;
    public          postgres    false    330   ��
                0    26294    termos_aposentadoria 
   TABLE DATA           U   COPY public.termos_aposentadoria (id, nm_termos, created_at, updated_at) FROM stdin;
    public          postgres    false    332   ��
      !          0    26300     termos_aposentadoria_responsavel 
   TABLE DATA           f   COPY public.termos_aposentadoria_responsavel (id, nm_responsavel, created_at, updated_at) FROM stdin;
    public          postgres    false    334   ��
      #          0    26304 !   termos_aposentadoria_responsável 
   TABLE DATA           �   COPY public."termos_aposentadoria_responsável" (id, nm_local, data_solicitacao, nm_reponsavel, created_at, updated_at) FROM stdin;
    public          postgres    false    336   ��
      %          0    26310    tipo_certidao 
   TABLE DATA           \   COPY public.tipo_certidao (id, nm_tipocertidao, status, created_at, updated_at) FROM stdin;
    public          postgres    false    338   �
      '          0    26315    tpAposentadoriaEspecial 
   TABLE DATA           l   COPY public."tpAposentadoriaEspecial" (id, "sts_aposentadoriaEspecial", created_at, updated_at) FROM stdin;
    public          postgres    false    340   K�
      )          0    26319    tpPCCR 
   TABLE DATA           J   COPY public."tpPCCR" (id, "sts_PCCR", created_at, updated_at) FROM stdin;
    public          postgres    false    342   h�
      +          0    26323    tpProfessor 
   TABLE DATA           R   COPY public."tpProfessor" (id, sts_professor, created_at, updated_at) FROM stdin;
    public          postgres    false    344   ��
      -          0    26327    tpServicoMilitar 
   TABLE DATA           \   COPY public."tpServicoMilitar" (id, "sts_Servico_Mili", created_at, updated_at) FROM stdin;
    public          postgres    false    346   ��
      /          0    26331    tpServicoPublico 
   TABLE DATA           U   COPY public."tpServicoPublico" (id, sts_servico, created_at, updated_at) FROM stdin;
    public          postgres    false    348   ��
      1          0    26335 
   tpservidor 
   TABLE DATA           7   COPY public.tpservidor (id, nm_tpservidor) FROM stdin;
    public          postgres    false    350   ��
      2          0    26338 
   type_serve 
   TABLE DATA           Q   COPY public.type_serve (id, status_servidor, created_at, updated_at) FROM stdin;
    public          postgres    false    351   6�
      4          0    26342    users 
   TABLE DATA           }   COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at, status) FROM stdin;
    public          postgres    false    353   k�
      6          0    26347    vinculo_municipio 
   TABLE DATA           S   COPY public.vinculo_municipio (id, nm_vinculo, created_at, updated_at) FROM stdin;
    public          postgres    false    355   ��
      �           0    0    address_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.address_id_seq', 10, true);
          public          postgres    false    215            �           0    0    almoxarifado_cedido_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.almoxarifado_cedido_id_seq', 1, false);
          public          postgres    false    218            �           0    0    almoxarifado_condicao_id_seq    SEQUENCE SET     J   SELECT pg_catalog.setval('public.almoxarifado_condicao_id_seq', 5, true);
          public          postgres    false    220            �           0    0    almoxarifado_contrato_id_seq    SEQUENCE SET     J   SELECT pg_catalog.setval('public.almoxarifado_contrato_id_seq', 3, true);
          public          postgres    false    222            �           0    0    almoxarifado_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.almoxarifado_id_seq', 141, true);
          public          postgres    false    223            �           0    0 $   almoxarifado_localizacao_dpto_id_seq    SEQUENCE SET     S   SELECT pg_catalog.setval('public.almoxarifado_localizacao_dpto_id_seq', 14, true);
          public          postgres    false    225            �           0    0    almoxarifado_marca_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.almoxarifado_marca_id_seq', 8, true);
          public          postgres    false    227            �           0    0    almoxarifado_responsavel_id_seq    SEQUENCE SET     N   SELECT pg_catalog.setval('public.almoxarifado_responsavel_id_seq', 25, true);
          public          postgres    false    229            �           0    0    almoxarifado_tipo_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.almoxarifado_tipo_id_seq', 1, true);
          public          postgres    false    231            �           0    0 %   almoxarifado_virtual_categoria_id_seq    SEQUENCE SET     S   SELECT pg_catalog.setval('public.almoxarifado_virtual_categoria_id_seq', 3, true);
          public          postgres    false    233            �           0    0 ,   almoxarifado_virtual_contrato_empenho_id_seq    SEQUENCE SET     [   SELECT pg_catalog.setval('public.almoxarifado_virtual_contrato_empenho_id_seq', 21, true);
          public          postgres    false    235            �           0    0 "   almoxarifado_virtual_cx_uni_id_seq    SEQUENCE SET     P   SELECT pg_catalog.setval('public.almoxarifado_virtual_cx_uni_id_seq', 2, true);
          public          postgres    false    237            �           0    0 .   almoxarifado_virtual_empresa_contratada_id_seq    SEQUENCE SET     \   SELECT pg_catalog.setval('public.almoxarifado_virtual_empresa_contratada_id_seq', 9, true);
          public          postgres    false    239            �           0    0     almoxarifado_virtual_item_id_seq    SEQUENCE SET     N   SELECT pg_catalog.setval('public.almoxarifado_virtual_item_id_seq', 3, true);
          public          postgres    false    241            �           0    0 "   almoxarifado_virtual_pedido_id_seq    SEQUENCE SET     Q   SELECT pg_catalog.setval('public.almoxarifado_virtual_pedido_id_seq', 23, true);
          public          postgres    false    243            �           0    0 *   almoxarifado_virtual_registro_preco_id_seq    SEQUENCE SET     Y   SELECT pg_catalog.setval('public.almoxarifado_virtual_registro_preco_id_seq', 11, true);
          public          postgres    false    245            �           0    0    aposentadoria_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.aposentadoria_id_seq', 1, false);
          public          postgres    false    247            �           0    0    atendimento_assunto_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.atendimento_assunto_id_seq', 1, true);
          public          postgres    false    250            �           0    0    atendimento_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.atendimento_id_seq', 27, true);
          public          postgres    false    251            �           0    0    atendimento_status_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.atendimento_status_id_seq', 1, true);
          public          postgres    false    253            �           0    0     atendimento_tipo_servidor_id_seq    SEQUENCE SET     N   SELECT pg_catalog.setval('public.atendimento_tipo_servidor_id_seq', 2, true);
          public          postgres    false    255            �           0    0    bol_dap_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.bol_dap_id_seq', 10, true);
          public          postgres    false    257            �           0    0    cedula_c_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.cedula_c_id_seq', 1209, true);
          public          postgres    false    357            �           0    0    certidao_tempo_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.certidao_tempo_id_seq', 1, false);
          public          postgres    false    259            �           0    0    city_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.city_id_seq', 1, false);
          public          postgres    false    261            �           0    0    contract_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.contract_id_seq', 3, true);
          public          postgres    false    263            �           0    0    ctc_certidao_deducao_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.ctc_certidao_deducao_id_seq', 108, true);
          public          postgres    false    266            �           0    0    ctc_certidao_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.ctc_certidao_id_seq', 46, true);
          public          postgres    false    267            �           0    0    ctc_verso_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.ctc_verso_id_seq', 6, true);
          public          postgres    false    269            �           0    0    documentos_cedula_c_pmrb_id_seq    SEQUENCE SET     P   SELECT pg_catalog.setval('public.documentos_cedula_c_pmrb_id_seq', 7004, true);
          public          postgres    false    274            �           0    0    documentos_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.documentos_id_seq', 257, true);
          public          postgres    false    275            �           0    0    elemento_despesa_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.elemento_despesa_id_seq', 1, true);
          public          postgres    false    277            �           0    0    folhapagto_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.folhapagto_id_seq', 27, true);
          public          postgres    false    279            �           0    0    fonte_despesa_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.fonte_despesa_id_seq', 1, true);
          public          postgres    false    281            �           0    0    funcao_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.funcao_id_seq', 3, true);
          public          postgres    false    283            �           0    0    marital_status_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.marital_status_id_seq', 1, false);
          public          postgres    false    285            �           0    0    migrations_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.migrations_id_seq', 61, true);
          public          postgres    false    287            �           0    0    obito_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.obito_id_seq', 1, false);
          public          postgres    false    291            �           0    0    orgao_expedidor_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.orgao_expedidor_id_seq', 1, false);
          public          postgres    false    294            �           0    0    orgao_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.orgao_id_seq', 2, true);
          public          postgres    false    295            �           0    0    origin_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.origin_id_seq', 1, true);
          public          postgres    false    297            �           0    0    pedido_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.pedido_id_seq', 1, false);
          public          postgres    false    300            �           0    0    permissions_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.permissions_id_seq', 4, true);
          public          postgres    false    302            �           0    0    programa_trabalho_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.programa_trabalho_id_seq', 1, true);
          public          postgres    false    304            �           0    0    prova_de_vida_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.prova_de_vida_id_seq', 1, false);
          public          postgres    false    306            �           0    0    prova_de_vida_status_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.prova_de_vida_status_id_seq', 3, true);
          public          postgres    false    308            �           0    0    rbprev_numeros_ano_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.rbprev_numeros_ano_id_seq', 1, true);
          public          postgres    false    311            �           0    0    rbprev_numeros_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.rbprev_numeros_id_seq', 14, true);
          public          postgres    false    312            �           0    0    rbprev_numeros_mes_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.rbprev_numeros_mes_id_seq', 12, true);
          public          postgres    false    314            �           0    0 0   requerimento_aposentadoria_acumulo_cargos_id_seq    SEQUENCE SET     _   SELECT pg_catalog.setval('public.requerimento_aposentadoria_acumulo_cargos_id_seq', 1, false);
          public          postgres    false    316            �           0    0 -   requerimento_aposentadoria_compulsoria_id_seq    SEQUENCE SET     \   SELECT pg_catalog.setval('public.requerimento_aposentadoria_compulsoria_id_seq', 51, true);
          public          postgres    false    318            �           0    0 -   requerimento_aposentadoria_dependentes_id_seq    SEQUENCE SET     \   SELECT pg_catalog.setval('public.requerimento_aposentadoria_dependentes_id_seq', 32, true);
          public          postgres    false    320            �           0    0 ,   requerimento_aposentadoria_voluntaria_id_seq    SEQUENCE SET     [   SELECT pg_catalog.setval('public.requerimento_aposentadoria_voluntaria_id_seq', 11, true);
          public          postgres    false    322            �           0    0    roles_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.roles_id_seq', 3, true);
          public          postgres    false    325            �           0    0    serve_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.serve_id_seq', 5, true);
          public          postgres    false    327            �           0    0    sexo_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.sexo_id_seq', 1, false);
          public          postgres    false    329            �           0    0    state_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.state_id_seq', 1, false);
          public          postgres    false    331            �           0    0    termos_aposentadoria_id_seq    SEQUENCE SET     J   SELECT pg_catalog.setval('public.termos_aposentadoria_id_seq', 1, false);
          public          postgres    false    333            �           0    0 '   termos_aposentadoria_responsavel_id_seq    SEQUENCE SET     V   SELECT pg_catalog.setval('public.termos_aposentadoria_responsavel_id_seq', 1, false);
          public          postgres    false    335            �           0    0 (   termos_aposentadoria_responsável_id_seq    SEQUENCE SET     Y   SELECT pg_catalog.setval('public."termos_aposentadoria_responsável_id_seq"', 1, false);
          public          postgres    false    337            �           0    0    tipo_certidao_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.tipo_certidao_id_seq', 2, true);
          public          postgres    false    339            �           0    0    tpAposentadoriaEspecial_id_seq    SEQUENCE SET     O   SELECT pg_catalog.setval('public."tpAposentadoriaEspecial_id_seq"', 1, false);
          public          postgres    false    341            �           0    0    tpPCCR_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public."tpPCCR_id_seq"', 1, false);
          public          postgres    false    343            �           0    0    tpProfessor_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public."tpProfessor_id_seq"', 1, false);
          public          postgres    false    345            �           0    0    tpServicoMilitar_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public."tpServicoMilitar_id_seq"', 1, false);
          public          postgres    false    347            �           0    0    tpServicoPublico_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public."tpServicoPublico_id_seq"', 1, false);
          public          postgres    false    349            �           0    0    type_serve_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.type_serve_id_seq', 1, false);
          public          postgres    false    352            �           0    0    users_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.users_id_seq', 19, true);
          public          postgres    false    354            �           0    0    vinculo_municipio_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.vinculo_municipio_id_seq', 1, false);
          public          postgres    false    356            8           2606    26420    address address_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.address
    ADD CONSTRAINT address_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.address DROP CONSTRAINT address_pkey;
       public            postgres    false    214            <           2606    26422 ,   almoxarifado_cedido almoxarifado_cedido_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.almoxarifado_cedido
    ADD CONSTRAINT almoxarifado_cedido_pkey PRIMARY KEY (id);
 V   ALTER TABLE ONLY public.almoxarifado_cedido DROP CONSTRAINT almoxarifado_cedido_pkey;
       public            postgres    false    217            >           2606    26424 0   almoxarifado_condicao almoxarifado_condicao_pkey 
   CONSTRAINT     n   ALTER TABLE ONLY public.almoxarifado_condicao
    ADD CONSTRAINT almoxarifado_condicao_pkey PRIMARY KEY (id);
 Z   ALTER TABLE ONLY public.almoxarifado_condicao DROP CONSTRAINT almoxarifado_condicao_pkey;
       public            postgres    false    219            @           2606    26426 0   almoxarifado_contrato almoxarifado_contrato_pkey 
   CONSTRAINT     n   ALTER TABLE ONLY public.almoxarifado_contrato
    ADD CONSTRAINT almoxarifado_contrato_pkey PRIMARY KEY (id);
 Z   ALTER TABLE ONLY public.almoxarifado_contrato DROP CONSTRAINT almoxarifado_contrato_pkey;
       public            postgres    false    221            B           2606    26428 @   almoxarifado_localizacao_dpto almoxarifado_localizacao_dpto_pkey 
   CONSTRAINT     ~   ALTER TABLE ONLY public.almoxarifado_localizacao_dpto
    ADD CONSTRAINT almoxarifado_localizacao_dpto_pkey PRIMARY KEY (id);
 j   ALTER TABLE ONLY public.almoxarifado_localizacao_dpto DROP CONSTRAINT almoxarifado_localizacao_dpto_pkey;
       public            postgres    false    224            D           2606    26430 *   almoxarifado_marca almoxarifado_marca_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public.almoxarifado_marca
    ADD CONSTRAINT almoxarifado_marca_pkey PRIMARY KEY (id);
 T   ALTER TABLE ONLY public.almoxarifado_marca DROP CONSTRAINT almoxarifado_marca_pkey;
       public            postgres    false    226            :           2606    26432    almoxarifado almoxarifado_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.almoxarifado
    ADD CONSTRAINT almoxarifado_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.almoxarifado DROP CONSTRAINT almoxarifado_pkey;
       public            postgres    false    216            F           2606    26434 6   almoxarifado_responsavel almoxarifado_responsavel_pkey 
   CONSTRAINT     t   ALTER TABLE ONLY public.almoxarifado_responsavel
    ADD CONSTRAINT almoxarifado_responsavel_pkey PRIMARY KEY (id);
 `   ALTER TABLE ONLY public.almoxarifado_responsavel DROP CONSTRAINT almoxarifado_responsavel_pkey;
       public            postgres    false    228            H           2606    26436 (   almoxarifado_tipo almoxarifado_tipo_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.almoxarifado_tipo
    ADD CONSTRAINT almoxarifado_tipo_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.almoxarifado_tipo DROP CONSTRAINT almoxarifado_tipo_pkey;
       public            postgres    false    230            J           2606    26438 B   almoxarifado_virtual_categoria almoxarifado_virtual_categoria_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.almoxarifado_virtual_categoria
    ADD CONSTRAINT almoxarifado_virtual_categoria_pkey PRIMARY KEY (id);
 l   ALTER TABLE ONLY public.almoxarifado_virtual_categoria DROP CONSTRAINT almoxarifado_virtual_categoria_pkey;
       public            postgres    false    232            L           2606    26440 P   almoxarifado_virtual_contrato_empenho almoxarifado_virtual_contrato_empenho_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.almoxarifado_virtual_contrato_empenho
    ADD CONSTRAINT almoxarifado_virtual_contrato_empenho_pkey PRIMARY KEY (id);
 z   ALTER TABLE ONLY public.almoxarifado_virtual_contrato_empenho DROP CONSTRAINT almoxarifado_virtual_contrato_empenho_pkey;
       public            postgres    false    234            N           2606    26442 <   almoxarifado_virtual_cx_uni almoxarifado_virtual_cx_uni_pkey 
   CONSTRAINT     z   ALTER TABLE ONLY public.almoxarifado_virtual_cx_uni
    ADD CONSTRAINT almoxarifado_virtual_cx_uni_pkey PRIMARY KEY (id);
 f   ALTER TABLE ONLY public.almoxarifado_virtual_cx_uni DROP CONSTRAINT almoxarifado_virtual_cx_uni_pkey;
       public            postgres    false    236            P           2606    26444 T   almoxarifado_virtual_empresa_contratada almoxarifado_virtual_empresa_contratada_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.almoxarifado_virtual_empresa_contratada
    ADD CONSTRAINT almoxarifado_virtual_empresa_contratada_pkey PRIMARY KEY (id);
 ~   ALTER TABLE ONLY public.almoxarifado_virtual_empresa_contratada DROP CONSTRAINT almoxarifado_virtual_empresa_contratada_pkey;
       public            postgres    false    238            R           2606    26446 8   almoxarifado_virtual_item almoxarifado_virtual_item_pkey 
   CONSTRAINT     v   ALTER TABLE ONLY public.almoxarifado_virtual_item
    ADD CONSTRAINT almoxarifado_virtual_item_pkey PRIMARY KEY (id);
 b   ALTER TABLE ONLY public.almoxarifado_virtual_item DROP CONSTRAINT almoxarifado_virtual_item_pkey;
       public            postgres    false    240            T           2606    26448 <   almoxarifado_virtual_pedido almoxarifado_virtual_pedido_pkey 
   CONSTRAINT     z   ALTER TABLE ONLY public.almoxarifado_virtual_pedido
    ADD CONSTRAINT almoxarifado_virtual_pedido_pkey PRIMARY KEY (id);
 f   ALTER TABLE ONLY public.almoxarifado_virtual_pedido DROP CONSTRAINT almoxarifado_virtual_pedido_pkey;
       public            postgres    false    242            V           2606    26450 L   almoxarifado_virtual_registro_preco almoxarifado_virtual_registro_preco_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.almoxarifado_virtual_registro_preco
    ADD CONSTRAINT almoxarifado_virtual_registro_preco_pkey PRIMARY KEY (id);
 v   ALTER TABLE ONLY public.almoxarifado_virtual_registro_preco DROP CONSTRAINT almoxarifado_virtual_registro_preco_pkey;
       public            postgres    false    244            X           2606    26452     aposentadoria aposentadoria_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.aposentadoria
    ADD CONSTRAINT aposentadoria_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.aposentadoria DROP CONSTRAINT aposentadoria_pkey;
       public            postgres    false    246            \           2606    26454 ,   atendimento_assunto atendimento_assunto_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.atendimento_assunto
    ADD CONSTRAINT atendimento_assunto_pkey PRIMARY KEY (id);
 V   ALTER TABLE ONLY public.atendimento_assunto DROP CONSTRAINT atendimento_assunto_pkey;
       public            postgres    false    249            Z           2606    26456    atendimento atendimento_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.atendimento
    ADD CONSTRAINT atendimento_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.atendimento DROP CONSTRAINT atendimento_pkey;
       public            postgres    false    248            ^           2606    26458 *   atendimento_status atendimento_status_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public.atendimento_status
    ADD CONSTRAINT atendimento_status_pkey PRIMARY KEY (id);
 T   ALTER TABLE ONLY public.atendimento_status DROP CONSTRAINT atendimento_status_pkey;
       public            postgres    false    252            `           2606    26460 8   atendimento_tipo_servidor atendimento_tipo_servidor_pkey 
   CONSTRAINT     v   ALTER TABLE ONLY public.atendimento_tipo_servidor
    ADD CONSTRAINT atendimento_tipo_servidor_pkey PRIMARY KEY (id);
 b   ALTER TABLE ONLY public.atendimento_tipo_servidor DROP CONSTRAINT atendimento_tipo_servidor_pkey;
       public            postgres    false    254            b           2606    26462    bol_dap bol_dap_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.bol_dap
    ADD CONSTRAINT bol_dap_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.bol_dap DROP CONSTRAINT bol_dap_pkey;
       public            postgres    false    256            �           2606    26935    cedula_c cedula_c_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.cedula_c
    ADD CONSTRAINT cedula_c_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.cedula_c DROP CONSTRAINT cedula_c_pkey;
       public            postgres    false    358            d           2606    26464 "   certidao_tempo certidao_tempo_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.certidao_tempo
    ADD CONSTRAINT certidao_tempo_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.certidao_tempo DROP CONSTRAINT certidao_tempo_pkey;
       public            postgres    false    258            f           2606    26466    city city_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.city
    ADD CONSTRAINT city_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.city DROP CONSTRAINT city_pkey;
       public            postgres    false    260            h           2606    26468    contract contract_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.contract
    ADD CONSTRAINT contract_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.contract DROP CONSTRAINT contract_pkey;
       public            postgres    false    262            l           2606    26470 .   ctc_certidao_deducao ctc_certidao_deducao_pkey 
   CONSTRAINT     l   ALTER TABLE ONLY public.ctc_certidao_deducao
    ADD CONSTRAINT ctc_certidao_deducao_pkey PRIMARY KEY (id);
 X   ALTER TABLE ONLY public.ctc_certidao_deducao DROP CONSTRAINT ctc_certidao_deducao_pkey;
       public            postgres    false    265            j           2606    26472    ctc_certidao ctc_certidao_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.ctc_certidao
    ADD CONSTRAINT ctc_certidao_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.ctc_certidao DROP CONSTRAINT ctc_certidao_pkey;
       public            postgres    false    264            n           2606    26474    ctc_verso ctc_verso_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.ctc_verso
    ADD CONSTRAINT ctc_verso_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.ctc_verso DROP CONSTRAINT ctc_verso_pkey;
       public            postgres    false    268            p           2606    26476 2   documento_cedula_teste documento_cedula_teste_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.documento_cedula_teste
    ADD CONSTRAINT documento_cedula_teste_pkey PRIMARY KEY (id);
 \   ALTER TABLE ONLY public.documento_cedula_teste DROP CONSTRAINT documento_cedula_teste_pkey;
       public            postgres    false    270            r           2606    26478 D   documento_cedula_teste_restante documento_cedula_teste_restante_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.documento_cedula_teste_restante
    ADD CONSTRAINT documento_cedula_teste_restante_pkey PRIMARY KEY (id);
 n   ALTER TABLE ONLY public.documento_cedula_teste_restante DROP CONSTRAINT documento_cedula_teste_restante_pkey;
       public            postgres    false    271            v           2606    26480 6   documentos_cedula_c_pmrb documentos_cedula_c_pmrb_pkey 
   CONSTRAINT     t   ALTER TABLE ONLY public.documentos_cedula_c_pmrb
    ADD CONSTRAINT documentos_cedula_c_pmrb_pkey PRIMARY KEY (id);
 `   ALTER TABLE ONLY public.documentos_cedula_c_pmrb DROP CONSTRAINT documentos_cedula_c_pmrb_pkey;
       public            postgres    false    273            t           2606    26482 #   documentos_cedula_c documentos_pkey 
   CONSTRAINT     a   ALTER TABLE ONLY public.documentos_cedula_c
    ADD CONSTRAINT documentos_pkey PRIMARY KEY (id);
 M   ALTER TABLE ONLY public.documentos_cedula_c DROP CONSTRAINT documentos_pkey;
       public            postgres    false    272            x           2606    26484 &   elemento_despesa elemento_despesa_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.elemento_despesa
    ADD CONSTRAINT elemento_despesa_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.elemento_despesa DROP CONSTRAINT elemento_despesa_pkey;
       public            postgres    false    276            z           2606    26486    folhapagto folhapagto_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.folhapagto
    ADD CONSTRAINT folhapagto_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.folhapagto DROP CONSTRAINT folhapagto_pkey;
       public            postgres    false    278            |           2606    26488     fonte_despesa fonte_despesa_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.fonte_despesa
    ADD CONSTRAINT fonte_despesa_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.fonte_despesa DROP CONSTRAINT fonte_despesa_pkey;
       public            postgres    false    280            ~           2606    26490    funcao funcao_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.funcao
    ADD CONSTRAINT funcao_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.funcao DROP CONSTRAINT funcao_pkey;
       public            postgres    false    282            �           2606    26492 "   marital_status marital_status_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.marital_status
    ADD CONSTRAINT marital_status_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.marital_status DROP CONSTRAINT marital_status_pkey;
       public            postgres    false    284            �           2606    26494    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public            postgres    false    286            �           2606    26496 0   model_has_permissions model_has_permissions_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.model_has_permissions
    ADD CONSTRAINT model_has_permissions_pkey PRIMARY KEY (permission_id, model_id, model_type);
 Z   ALTER TABLE ONLY public.model_has_permissions DROP CONSTRAINT model_has_permissions_pkey;
       public            postgres    false    288    288    288            �           2606    26498 $   model_has_roles model_has_roles_pkey 
   CONSTRAINT     }   ALTER TABLE ONLY public.model_has_roles
    ADD CONSTRAINT model_has_roles_pkey PRIMARY KEY (role_id, model_id, model_type);
 N   ALTER TABLE ONLY public.model_has_roles DROP CONSTRAINT model_has_roles_pkey;
       public            postgres    false    289    289    289            �           2606    26500    obito obito_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.obito
    ADD CONSTRAINT obito_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.obito DROP CONSTRAINT obito_pkey;
       public            postgres    false    290            �           2606    26502 $   orgao_expedidor orgao_expedidor_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.orgao_expedidor
    ADD CONSTRAINT orgao_expedidor_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.orgao_expedidor DROP CONSTRAINT orgao_expedidor_pkey;
       public            postgres    false    293            �           2606    26504    orgao orgao_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.orgao
    ADD CONSTRAINT orgao_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.orgao DROP CONSTRAINT orgao_pkey;
       public            postgres    false    292            �           2606    26506    origin origin_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.origin
    ADD CONSTRAINT origin_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.origin DROP CONSTRAINT origin_pkey;
       public            postgres    false    296            �           2606    26508    pedido pedido_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.pedido
    ADD CONSTRAINT pedido_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.pedido DROP CONSTRAINT pedido_pkey;
       public            postgres    false    299            �           2606    26510 .   permissions permissions_name_guard_name_unique 
   CONSTRAINT     u   ALTER TABLE ONLY public.permissions
    ADD CONSTRAINT permissions_name_guard_name_unique UNIQUE (name, guard_name);
 X   ALTER TABLE ONLY public.permissions DROP CONSTRAINT permissions_name_guard_name_unique;
       public            postgres    false    301    301            �           2606    26512    permissions permissions_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.permissions
    ADD CONSTRAINT permissions_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.permissions DROP CONSTRAINT permissions_pkey;
       public            postgres    false    301            �           2606    26514 (   programa_trabalho programa_trabalho_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.programa_trabalho
    ADD CONSTRAINT programa_trabalho_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.programa_trabalho DROP CONSTRAINT programa_trabalho_pkey;
       public            postgres    false    303            �           2606    26516     prova_de_vida prova_de_vida_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.prova_de_vida
    ADD CONSTRAINT prova_de_vida_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.prova_de_vida DROP CONSTRAINT prova_de_vida_pkey;
       public            postgres    false    305            �           2606    26518 .   prova_de_vida_status prova_de_vida_status_pkey 
   CONSTRAINT     l   ALTER TABLE ONLY public.prova_de_vida_status
    ADD CONSTRAINT prova_de_vida_status_pkey PRIMARY KEY (id);
 X   ALTER TABLE ONLY public.prova_de_vida_status DROP CONSTRAINT prova_de_vida_status_pkey;
       public            postgres    false    307            �           2606    26520 *   rbprev_numeros_ano rbprev_numeros_ano_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public.rbprev_numeros_ano
    ADD CONSTRAINT rbprev_numeros_ano_pkey PRIMARY KEY (id);
 T   ALTER TABLE ONLY public.rbprev_numeros_ano DROP CONSTRAINT rbprev_numeros_ano_pkey;
       public            postgres    false    310            �           2606    26522 *   rbprev_numeros_mes rbprev_numeros_mes_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public.rbprev_numeros_mes
    ADD CONSTRAINT rbprev_numeros_mes_pkey PRIMARY KEY (id);
 T   ALTER TABLE ONLY public.rbprev_numeros_mes DROP CONSTRAINT rbprev_numeros_mes_pkey;
       public            postgres    false    313            �           2606    26524 "   rbprev_numeros rbprev_numeros_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.rbprev_numeros
    ADD CONSTRAINT rbprev_numeros_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.rbprev_numeros DROP CONSTRAINT rbprev_numeros_pkey;
       public            postgres    false    309            �           2606    26526 X   requerimento_aposentadoria_acumulo_cargos requerimento_aposentadoria_acumulo_cargos_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.requerimento_aposentadoria_acumulo_cargos
    ADD CONSTRAINT requerimento_aposentadoria_acumulo_cargos_pkey PRIMARY KEY (id);
 �   ALTER TABLE ONLY public.requerimento_aposentadoria_acumulo_cargos DROP CONSTRAINT requerimento_aposentadoria_acumulo_cargos_pkey;
       public            postgres    false    315            �           2606    26528 R   requerimento_aposentadoria_compulsoria requerimento_aposentadoria_compulsoria_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.requerimento_aposentadoria_compulsoria
    ADD CONSTRAINT requerimento_aposentadoria_compulsoria_pkey PRIMARY KEY (id);
 |   ALTER TABLE ONLY public.requerimento_aposentadoria_compulsoria DROP CONSTRAINT requerimento_aposentadoria_compulsoria_pkey;
       public            postgres    false    317            �           2606    26530 R   requerimento_aposentadoria_dependentes requerimento_aposentadoria_dependentes_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.requerimento_aposentadoria_dependentes
    ADD CONSTRAINT requerimento_aposentadoria_dependentes_pkey PRIMARY KEY (id);
 |   ALTER TABLE ONLY public.requerimento_aposentadoria_dependentes DROP CONSTRAINT requerimento_aposentadoria_dependentes_pkey;
       public            postgres    false    319            �           2606    26532 P   requerimento_aposentadoria_voluntaria requerimento_aposentadoria_voluntaria_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.requerimento_aposentadoria_voluntaria
    ADD CONSTRAINT requerimento_aposentadoria_voluntaria_pkey PRIMARY KEY (id);
 z   ALTER TABLE ONLY public.requerimento_aposentadoria_voluntaria DROP CONSTRAINT requerimento_aposentadoria_voluntaria_pkey;
       public            postgres    false    321            �           2606    26534 .   role_has_permissions role_has_permissions_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.role_has_permissions
    ADD CONSTRAINT role_has_permissions_pkey PRIMARY KEY (permission_id, role_id);
 X   ALTER TABLE ONLY public.role_has_permissions DROP CONSTRAINT role_has_permissions_pkey;
       public            postgres    false    323    323            �           2606    26536 "   roles roles_name_guard_name_unique 
   CONSTRAINT     i   ALTER TABLE ONLY public.roles
    ADD CONSTRAINT roles_name_guard_name_unique UNIQUE (name, guard_name);
 L   ALTER TABLE ONLY public.roles DROP CONSTRAINT roles_name_guard_name_unique;
       public            postgres    false    324    324            �           2606    26538    roles roles_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.roles
    ADD CONSTRAINT roles_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.roles DROP CONSTRAINT roles_pkey;
       public            postgres    false    324            �           2606    26540    serve serve_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.serve
    ADD CONSTRAINT serve_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.serve DROP CONSTRAINT serve_pkey;
       public            postgres    false    326            �           2606    26542    sexo sexo_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.sexo
    ADD CONSTRAINT sexo_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.sexo DROP CONSTRAINT sexo_pkey;
       public            postgres    false    328            �           2606    26544    state state_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.state
    ADD CONSTRAINT state_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.state DROP CONSTRAINT state_pkey;
       public            postgres    false    330            �           2606    26546 .   termos_aposentadoria termos_aposentadoria_pkey 
   CONSTRAINT     l   ALTER TABLE ONLY public.termos_aposentadoria
    ADD CONSTRAINT termos_aposentadoria_pkey PRIMARY KEY (id);
 X   ALTER TABLE ONLY public.termos_aposentadoria DROP CONSTRAINT termos_aposentadoria_pkey;
       public            postgres    false    332            �           2606    26548 F   termos_aposentadoria_responsavel termos_aposentadoria_responsavel_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.termos_aposentadoria_responsavel
    ADD CONSTRAINT termos_aposentadoria_responsavel_pkey PRIMARY KEY (id);
 p   ALTER TABLE ONLY public.termos_aposentadoria_responsavel DROP CONSTRAINT termos_aposentadoria_responsavel_pkey;
       public            postgres    false    334            �           2606    26550 H   termos_aposentadoria_responsável termos_aposentadoria_responsável_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public."termos_aposentadoria_responsável"
    ADD CONSTRAINT "termos_aposentadoria_responsável_pkey" PRIMARY KEY (id);
 v   ALTER TABLE ONLY public."termos_aposentadoria_responsável" DROP CONSTRAINT "termos_aposentadoria_responsável_pkey";
       public            postgres    false    336            �           2606    26552     tipo_certidao tipo_certidao_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.tipo_certidao
    ADD CONSTRAINT tipo_certidao_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.tipo_certidao DROP CONSTRAINT tipo_certidao_pkey;
       public            postgres    false    338            �           2606    26554 4   tpAposentadoriaEspecial tpAposentadoriaEspecial_pkey 
   CONSTRAINT     v   ALTER TABLE ONLY public."tpAposentadoriaEspecial"
    ADD CONSTRAINT "tpAposentadoriaEspecial_pkey" PRIMARY KEY (id);
 b   ALTER TABLE ONLY public."tpAposentadoriaEspecial" DROP CONSTRAINT "tpAposentadoriaEspecial_pkey";
       public            postgres    false    340            �           2606    26556    tpPCCR tpPCCR_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public."tpPCCR"
    ADD CONSTRAINT "tpPCCR_pkey" PRIMARY KEY (id);
 @   ALTER TABLE ONLY public."tpPCCR" DROP CONSTRAINT "tpPCCR_pkey";
       public            postgres    false    342            �           2606    26558    tpProfessor tpProfessor_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public."tpProfessor"
    ADD CONSTRAINT "tpProfessor_pkey" PRIMARY KEY (id);
 J   ALTER TABLE ONLY public."tpProfessor" DROP CONSTRAINT "tpProfessor_pkey";
       public            postgres    false    344            �           2606    26560 &   tpServicoMilitar tpServicoMilitar_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public."tpServicoMilitar"
    ADD CONSTRAINT "tpServicoMilitar_pkey" PRIMARY KEY (id);
 T   ALTER TABLE ONLY public."tpServicoMilitar" DROP CONSTRAINT "tpServicoMilitar_pkey";
       public            postgres    false    346            �           2606    26562 &   tpServicoPublico tpServicoPublico_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public."tpServicoPublico"
    ADD CONSTRAINT "tpServicoPublico_pkey" PRIMARY KEY (id);
 T   ALTER TABLE ONLY public."tpServicoPublico" DROP CONSTRAINT "tpServicoPublico_pkey";
       public            postgres    false    348            �           2606    26564    tpservidor tpservidor_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.tpservidor
    ADD CONSTRAINT tpservidor_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.tpservidor DROP CONSTRAINT tpservidor_pkey;
       public            postgres    false    350            �           2606    26566    type_serve type_serve_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.type_serve
    ADD CONSTRAINT type_serve_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.type_serve DROP CONSTRAINT type_serve_pkey;
       public            postgres    false    351            �           2606    26568    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public            postgres    false    353            �           2606    26570    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    353            �           2606    26572 (   vinculo_municipio vinculo_municipio_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.vinculo_municipio
    ADD CONSTRAINT vinculo_municipio_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.vinculo_municipio DROP CONSTRAINT vinculo_municipio_pkey;
       public            postgres    false    355            �           1259    26573 /   model_has_permissions_model_id_model_type_index    INDEX     �   CREATE INDEX model_has_permissions_model_id_model_type_index ON public.model_has_permissions USING btree (model_id, model_type) WITH (fillfactor='90');
 C   DROP INDEX public.model_has_permissions_model_id_model_type_index;
       public            postgres    false    288    288            �           1259    26574 )   model_has_roles_model_id_model_type_index    INDEX     �   CREATE INDEX model_has_roles_model_id_model_type_index ON public.model_has_roles USING btree (model_id, model_type) WITH (fillfactor='90');
 =   DROP INDEX public.model_has_roles_model_id_model_type_index;
       public            postgres    false    289    289            �           1259    26575    password_resets_email_index    INDEX     o   CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email) WITH (fillfactor='90');
 /   DROP INDEX public.password_resets_email_index;
       public            postgres    false    298            �           2606    26576    address address_city_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.address
    ADD CONSTRAINT address_city_id_foreign FOREIGN KEY (city_id) REFERENCES public.city(id) ON DELETE CASCADE;
 I   ALTER TABLE ONLY public.address DROP CONSTRAINT address_city_id_foreign;
       public          postgres    false    260    3686    214            �           2606    26581     address address_serve_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.address
    ADD CONSTRAINT address_serve_id_foreign FOREIGN KEY (serve_id) REFERENCES public.serve(id) ON DELETE CASCADE;
 J   ALTER TABLE ONLY public.address DROP CONSTRAINT address_serve_id_foreign;
       public          postgres    false    3763    214    326            �           2606    26586     address address_state_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.address
    ADD CONSTRAINT address_state_id_foreign FOREIGN KEY (state_id) REFERENCES public.state(id) ON DELETE CASCADE;
 J   ALTER TABLE ONLY public.address DROP CONSTRAINT address_state_id_foreign;
       public          postgres    false    214    3767    330            �           2606    26591 5   almoxarifado almoxarifado_almoxarifado_cedido_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.almoxarifado
    ADD CONSTRAINT almoxarifado_almoxarifado_cedido_id_fkey FOREIGN KEY (almoxarifado_cedido_id) REFERENCES public.almoxarifado_cedido(id);
 _   ALTER TABLE ONLY public.almoxarifado DROP CONSTRAINT almoxarifado_almoxarifado_cedido_id_fkey;
       public          postgres    false    217    3644    216            �           2606    26596 7   almoxarifado almoxarifado_almoxarifado_condicao_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.almoxarifado
    ADD CONSTRAINT almoxarifado_almoxarifado_condicao_id_fkey FOREIGN KEY (almoxarifado_condicao_id) REFERENCES public.almoxarifado_condicao(id);
 a   ALTER TABLE ONLY public.almoxarifado DROP CONSTRAINT almoxarifado_almoxarifado_condicao_id_fkey;
       public          postgres    false    219    3646    216            �           2606    26601 7   almoxarifado almoxarifado_almoxarifado_contrato_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.almoxarifado
    ADD CONSTRAINT almoxarifado_almoxarifado_contrato_id_fkey FOREIGN KEY (almoxarifado_contrato_id) REFERENCES public.almoxarifado_contrato(id);
 a   ALTER TABLE ONLY public.almoxarifado DROP CONSTRAINT almoxarifado_almoxarifado_contrato_id_fkey;
       public          postgres    false    3648    216    221            �           2606    26606 ?   almoxarifado almoxarifado_almoxarifado_localizacao_dpto_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.almoxarifado
    ADD CONSTRAINT almoxarifado_almoxarifado_localizacao_dpto_id_fkey FOREIGN KEY (almoxarifado_localizacao_dpto_id) REFERENCES public.almoxarifado_localizacao_dpto(id);
 i   ALTER TABLE ONLY public.almoxarifado DROP CONSTRAINT almoxarifado_almoxarifado_localizacao_dpto_id_fkey;
       public          postgres    false    224    3650    216            �           2606    26611 4   almoxarifado almoxarifado_almoxarifado_marca_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.almoxarifado
    ADD CONSTRAINT almoxarifado_almoxarifado_marca_id_fkey FOREIGN KEY (almoxarifado_marca_id) REFERENCES public.almoxarifado_marca(id);
 ^   ALTER TABLE ONLY public.almoxarifado DROP CONSTRAINT almoxarifado_almoxarifado_marca_id_fkey;
       public          postgres    false    226    3652    216            �           2606    26616 :   almoxarifado almoxarifado_almoxarifado_responsavel_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.almoxarifado
    ADD CONSTRAINT almoxarifado_almoxarifado_responsavel_id_fkey FOREIGN KEY (almoxarifado_responsavel_id) REFERENCES public.almoxarifado_responsavel(id);
 d   ALTER TABLE ONLY public.almoxarifado DROP CONSTRAINT almoxarifado_almoxarifado_responsavel_id_fkey;
       public          postgres    false    216    3654    228            �           2606    26621 3   almoxarifado almoxarifado_almoxarifado_tipo_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.almoxarifado
    ADD CONSTRAINT almoxarifado_almoxarifado_tipo_id_fkey FOREIGN KEY (almoxarifado_tipo_id) REFERENCES public.almoxarifado_tipo(id);
 ]   ALTER TABLE ONLY public.almoxarifado DROP CONSTRAINT almoxarifado_almoxarifado_tipo_id_fkey;
       public          postgres    false    3656    216    230            �           2606    26626 e   almoxarifado_virtual_contrato_empenho almoxarifado_virtual_contrato_almoxarifado_virtual_empresa_fkey    FK CONSTRAINT     	  ALTER TABLE ONLY public.almoxarifado_virtual_contrato_empenho
    ADD CONSTRAINT almoxarifado_virtual_contrato_almoxarifado_virtual_empresa_fkey FOREIGN KEY (almoxarifado_virtual_empresa_contratada_id) REFERENCES public.almoxarifado_virtual_empresa_contratada(id);
 �   ALTER TABLE ONLY public.almoxarifado_virtual_contrato_empenho DROP CONSTRAINT almoxarifado_virtual_contrato_almoxarifado_virtual_empresa_fkey;
       public          postgres    false    238    234    3664            �           2606    26631 d   almoxarifado_virtual_contrato_empenho almoxarifado_virtual_contrato_empenho_elemento_despesa_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.almoxarifado_virtual_contrato_empenho
    ADD CONSTRAINT almoxarifado_virtual_contrato_empenho_elemento_despesa_id_fkey FOREIGN KEY (elemento_despesa_id) REFERENCES public.elemento_despesa(id);
 �   ALTER TABLE ONLY public.almoxarifado_virtual_contrato_empenho DROP CONSTRAINT almoxarifado_virtual_contrato_empenho_elemento_despesa_id_fkey;
       public          postgres    false    276    234    3704            �           2606    26636 a   almoxarifado_virtual_contrato_empenho almoxarifado_virtual_contrato_empenho_fonte_despesa_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.almoxarifado_virtual_contrato_empenho
    ADD CONSTRAINT almoxarifado_virtual_contrato_empenho_fonte_despesa_id_fkey FOREIGN KEY (fonte_despesa_id) REFERENCES public.fonte_despesa(id);
 �   ALTER TABLE ONLY public.almoxarifado_virtual_contrato_empenho DROP CONSTRAINT almoxarifado_virtual_contrato_empenho_fonte_despesa_id_fkey;
       public          postgres    false    3708    234    280            �           2606    26641 e   almoxarifado_virtual_contrato_empenho almoxarifado_virtual_contrato_empenho_programa_trabalho_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.almoxarifado_virtual_contrato_empenho
    ADD CONSTRAINT almoxarifado_virtual_contrato_empenho_programa_trabalho_id_fkey FOREIGN KEY (programa_trabalho_id) REFERENCES public.programa_trabalho(id);
 �   ALTER TABLE ONLY public.almoxarifado_virtual_contrato_empenho DROP CONSTRAINT almoxarifado_virtual_contrato_empenho_programa_trabalho_id_fkey;
       public          postgres    false    3737    234    303            �           2606    26646 Y   almoxarifado_virtual_contrato_empenho almoxarifado_virtual_contrato_empenho_users_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.almoxarifado_virtual_contrato_empenho
    ADD CONSTRAINT almoxarifado_virtual_contrato_empenho_users_id_fkey FOREIGN KEY (users_id) REFERENCES public.users(id);
 �   ALTER TABLE ONLY public.almoxarifado_virtual_contrato_empenho DROP CONSTRAINT almoxarifado_virtual_contrato_empenho_users_id_fkey;
       public          postgres    false    3793    353    234            �           2606    26651 Y   almoxarifado_virtual_item almoxarifado_virtual_item_almoxarifado_virtual_categoria_i_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.almoxarifado_virtual_item
    ADD CONSTRAINT almoxarifado_virtual_item_almoxarifado_virtual_categoria_i_fkey FOREIGN KEY (almoxarifado_virtual_categoria_id) REFERENCES public.almoxarifado_virtual_categoria(id);
 �   ALTER TABLE ONLY public.almoxarifado_virtual_item DROP CONSTRAINT almoxarifado_virtual_item_almoxarifado_virtual_categoria_i_fkey;
       public          postgres    false    240    3658    232            �           2606    26656 Y   almoxarifado_virtual_item almoxarifado_virtual_item_almoxarifado_virtual_contrato_em_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.almoxarifado_virtual_item
    ADD CONSTRAINT almoxarifado_virtual_item_almoxarifado_virtual_contrato_em_fkey FOREIGN KEY (almoxarifado_virtual_contrato_empenho_id) REFERENCES public.almoxarifado_virtual_contrato_empenho(id);
 �   ALTER TABLE ONLY public.almoxarifado_virtual_item DROP CONSTRAINT almoxarifado_virtual_item_almoxarifado_virtual_contrato_em_fkey;
       public          postgres    false    3660    234    240            �           2606    26661 [   almoxarifado_virtual_pedido almoxarifado_virtual_pedido_almoxarifado_virtual_contrato__fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.almoxarifado_virtual_pedido
    ADD CONSTRAINT almoxarifado_virtual_pedido_almoxarifado_virtual_contrato__fkey FOREIGN KEY (almoxarifado_virtual_contrato_empenho_id) REFERENCES public.almoxarifado_virtual_contrato_empenho(id);
 �   ALTER TABLE ONLY public.almoxarifado_virtual_pedido DROP CONSTRAINT almoxarifado_virtual_pedido_almoxarifado_virtual_contrato__fkey;
       public          postgres    false    242    234    3660            �           2606    26666 [   almoxarifado_virtual_pedido almoxarifado_virtual_pedido_almoxarifado_virtual_cx_uni_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.almoxarifado_virtual_pedido
    ADD CONSTRAINT almoxarifado_virtual_pedido_almoxarifado_virtual_cx_uni_id_fkey FOREIGN KEY (almoxarifado_virtual_cx_uni_id) REFERENCES public.almoxarifado_virtual_cx_uni(id);
 �   ALTER TABLE ONLY public.almoxarifado_virtual_pedido DROP CONSTRAINT almoxarifado_virtual_pedido_almoxarifado_virtual_cx_uni_id_fkey;
       public          postgres    false    3662    236    242            �           2606    26671 Y   almoxarifado_virtual_pedido almoxarifado_virtual_pedido_almoxarifado_virtual_item_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.almoxarifado_virtual_pedido
    ADD CONSTRAINT almoxarifado_virtual_pedido_almoxarifado_virtual_item_id_fkey FOREIGN KEY (almoxarifado_virtual_item_id) REFERENCES public.almoxarifado_virtual_item(id);
 �   ALTER TABLE ONLY public.almoxarifado_virtual_pedido DROP CONSTRAINT almoxarifado_virtual_pedido_almoxarifado_virtual_item_id_fkey;
       public          postgres    false    240    242    3666            �           2606    26676 c   almoxarifado_virtual_registro_preco almoxarifado_virtual_registro_almoxarifado_virtual_contrat_fkey    FK CONSTRAINT       ALTER TABLE ONLY public.almoxarifado_virtual_registro_preco
    ADD CONSTRAINT almoxarifado_virtual_registro_almoxarifado_virtual_contrat_fkey FOREIGN KEY (almoxarifado_virtual_contrato_empenho_id) REFERENCES public.almoxarifado_virtual_contrato_empenho(id);
 �   ALTER TABLE ONLY public.almoxarifado_virtual_registro_preco DROP CONSTRAINT almoxarifado_virtual_registro_almoxarifado_virtual_contrat_fkey;
       public          postgres    false    244    3660    234            �           2606    26681 9   atendimento atendimento_atendimento_tipo_servidor_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.atendimento
    ADD CONSTRAINT atendimento_atendimento_tipo_servidor_id_fkey FOREIGN KEY (atendimento_tipo_servidor_id) REFERENCES public.atendimento_tipo_servidor(id);
 c   ALTER TABLE ONLY public.atendimento DROP CONSTRAINT atendimento_atendimento_tipo_servidor_id_fkey;
       public          postgres    false    254    248    3680            �           2606    26686 @   certidao_tempo certidao_tempo_tpaposentadoriaespecial_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.certidao_tempo
    ADD CONSTRAINT certidao_tempo_tpaposentadoriaespecial_id_foreign FOREIGN KEY ("tpAposentadoriaEspecial_id") REFERENCES public."tpAposentadoriaEspecial"(id) ON DELETE CASCADE;
 j   ALTER TABLE ONLY public.certidao_tempo DROP CONSTRAINT certidao_tempo_tpaposentadoriaespecial_id_foreign;
       public          postgres    false    340    3777    258            �           2606    26691 /   certidao_tempo certidao_tempo_tppccr_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.certidao_tempo
    ADD CONSTRAINT certidao_tempo_tppccr_id_foreign FOREIGN KEY ("tpPCCR_id") REFERENCES public."tpPCCR"(id) ON DELETE CASCADE;
 Y   ALTER TABLE ONLY public.certidao_tempo DROP CONSTRAINT certidao_tempo_tppccr_id_foreign;
       public          postgres    false    3779    258    342            �           2606    26696 4   certidao_tempo certidao_tempo_tpprofessor_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.certidao_tempo
    ADD CONSTRAINT certidao_tempo_tpprofessor_id_foreign FOREIGN KEY ("tpProfessor_id") REFERENCES public."tpProfessor"(id) ON DELETE CASCADE;
 ^   ALTER TABLE ONLY public.certidao_tempo DROP CONSTRAINT certidao_tempo_tpprofessor_id_foreign;
       public          postgres    false    3781    258    344            �           2606    26701 9   certidao_tempo certidao_tempo_tpservicomilitar_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.certidao_tempo
    ADD CONSTRAINT certidao_tempo_tpservicomilitar_id_foreign FOREIGN KEY ("tpServicoMilitar_id") REFERENCES public."tpServicoMilitar"(id) ON DELETE CASCADE;
 c   ALTER TABLE ONLY public.certidao_tempo DROP CONSTRAINT certidao_tempo_tpservicomilitar_id_foreign;
       public          postgres    false    3783    258    346            �           2606    26706 9   certidao_tempo certidao_tempo_tpservicopublico_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.certidao_tempo
    ADD CONSTRAINT certidao_tempo_tpservicopublico_id_foreign FOREIGN KEY ("tpServicoPublico_id") REFERENCES public."tpServicoPublico"(id) ON DELETE CASCADE;
 c   ALTER TABLE ONLY public.certidao_tempo DROP CONSTRAINT certidao_tempo_tpservicopublico_id_foreign;
       public          postgres    false    258    3785    348            �           2606    26711 #   contract contract_funcao_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.contract
    ADD CONSTRAINT contract_funcao_id_foreign FOREIGN KEY (funcao_id) REFERENCES public.funcao(id) ON DELETE CASCADE;
 M   ALTER TABLE ONLY public.contract DROP CONSTRAINT contract_funcao_id_foreign;
       public          postgres    false    3710    282    262            �           2606    26716 "   contract contract_orgao_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.contract
    ADD CONSTRAINT contract_orgao_id_foreign FOREIGN KEY (orgao_id) REFERENCES public.orgao(id) ON DELETE CASCADE;
 L   ALTER TABLE ONLY public.contract DROP CONSTRAINT contract_orgao_id_foreign;
       public          postgres    false    292    262    3724            �           2606    26721 #   contract contract_origin_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.contract
    ADD CONSTRAINT contract_origin_id_foreign FOREIGN KEY (origin_id) REFERENCES public.origin(id) ON DELETE CASCADE;
 M   ALTER TABLE ONLY public.contract DROP CONSTRAINT contract_origin_id_foreign;
       public          postgres    false    262    296    3728            �           2606    26726 "   contract contract_serve_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.contract
    ADD CONSTRAINT contract_serve_id_foreign FOREIGN KEY (serve_id) REFERENCES public.serve(id) ON DELETE CASCADE;
 L   ALTER TABLE ONLY public.contract DROP CONSTRAINT contract_serve_id_foreign;
       public          postgres    false    3763    262    326            �           2606    26731 )   ctc_certidao ctc_certidao_address_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.ctc_certidao
    ADD CONSTRAINT ctc_certidao_address_id_fkey FOREIGN KEY (address_id) REFERENCES public.address(id);
 S   ALTER TABLE ONLY public.ctc_certidao DROP CONSTRAINT ctc_certidao_address_id_fkey;
       public          postgres    false    3640    264    214            �           2606    26736 *   ctc_certidao ctc_certidao_contract_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.ctc_certidao
    ADD CONSTRAINT ctc_certidao_contract_id_fkey FOREIGN KEY (contract_id) REFERENCES public.contract(id);
 T   ALTER TABLE ONLY public.ctc_certidao DROP CONSTRAINT ctc_certidao_contract_id_fkey;
       public          postgres    false    3688    264    262            �           2606    26741 >   ctc_certidao_deducao ctc_certidao_deducao_ctc_certidao_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.ctc_certidao_deducao
    ADD CONSTRAINT ctc_certidao_deducao_ctc_certidao_id_fkey FOREIGN KEY (ctc_certidao_id) REFERENCES public.ctc_certidao(id);
 h   ALTER TABLE ONLY public.ctc_certidao_deducao DROP CONSTRAINT ctc_certidao_deducao_ctc_certidao_id_fkey;
       public          postgres    false    264    3690    265            �           2606    26746 (   ctc_certidao ctc_certidao_funcao_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.ctc_certidao
    ADD CONSTRAINT ctc_certidao_funcao_id_fkey FOREIGN KEY (funcao_id) REFERENCES public.funcao(id);
 R   ALTER TABLE ONLY public.ctc_certidao DROP CONSTRAINT ctc_certidao_funcao_id_fkey;
       public          postgres    false    264    282    3710            �           2606    26751 )   ctc_certidao ctc_certidao_funcao_id_fkey1    FK CONSTRAINT     �   ALTER TABLE ONLY public.ctc_certidao
    ADD CONSTRAINT ctc_certidao_funcao_id_fkey1 FOREIGN KEY (funcao_id) REFERENCES public.funcao(id);
 S   ALTER TABLE ONLY public.ctc_certidao DROP CONSTRAINT ctc_certidao_funcao_id_fkey1;
       public          postgres    false    3710    282    264            �           2606    26756 '   ctc_certidao ctc_certidao_orgao_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.ctc_certidao
    ADD CONSTRAINT ctc_certidao_orgao_id_fkey FOREIGN KEY (orgao_id) REFERENCES public.orgao(id);
 Q   ALTER TABLE ONLY public.ctc_certidao DROP CONSTRAINT ctc_certidao_orgao_id_fkey;
       public          postgres    false    264    292    3724            �           2606    26761 (   ctc_certidao ctc_certidao_origin_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.ctc_certidao
    ADD CONSTRAINT ctc_certidao_origin_id_fkey FOREIGN KEY (origin_id) REFERENCES public.origin(id);
 R   ALTER TABLE ONLY public.ctc_certidao DROP CONSTRAINT ctc_certidao_origin_id_fkey;
       public          postgres    false    3728    264    296            �           2606    26766 '   ctc_certidao ctc_certidao_serve_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.ctc_certidao
    ADD CONSTRAINT ctc_certidao_serve_id_fkey FOREIGN KEY (serve_id) REFERENCES public.serve(id);
 Q   ALTER TABLE ONLY public.ctc_certidao DROP CONSTRAINT ctc_certidao_serve_id_fkey;
       public          postgres    false    326    3763    264            �           2606    26771 /   ctc_certidao ctc_certidao_tipo_certidao_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.ctc_certidao
    ADD CONSTRAINT ctc_certidao_tipo_certidao_id_fkey FOREIGN KEY (tipo_certidao_id) REFERENCES public.tipo_certidao(id);
 Y   ALTER TABLE ONLY public.ctc_certidao DROP CONSTRAINT ctc_certidao_tipo_certidao_id_fkey;
       public          postgres    false    338    3775    264            �           2606    26776 (   ctc_verso ctc_verso_ctc_certidao_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.ctc_verso
    ADD CONSTRAINT ctc_verso_ctc_certidao_id_fkey FOREIGN KEY (ctc_certidao_id) REFERENCES public.ctc_certidao(id);
 R   ALTER TABLE ONLY public.ctc_verso DROP CONSTRAINT ctc_verso_ctc_certidao_id_fkey;
       public          postgres    false    268    264    3690            �           2606    26781    funcao funcao_orgao_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.funcao
    ADD CONSTRAINT funcao_orgao_id_foreign FOREIGN KEY (orgao_id) REFERENCES public.orgao(id) ON DELETE CASCADE;
 H   ALTER TABLE ONLY public.funcao DROP CONSTRAINT funcao_orgao_id_foreign;
       public          postgres    false    3724    282    292                        2606    26786 A   model_has_permissions model_has_permissions_permission_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.model_has_permissions
    ADD CONSTRAINT model_has_permissions_permission_id_foreign FOREIGN KEY (permission_id) REFERENCES public.permissions(id) ON DELETE CASCADE;
 k   ALTER TABLE ONLY public.model_has_permissions DROP CONSTRAINT model_has_permissions_permission_id_foreign;
       public          postgres    false    301    3735    288                       2606    26791 /   model_has_roles model_has_roles_role_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.model_has_roles
    ADD CONSTRAINT model_has_roles_role_id_foreign FOREIGN KEY (role_id) REFERENCES public.roles(id) ON DELETE CASCADE;
 Y   ALTER TABLE ONLY public.model_has_roles DROP CONSTRAINT model_has_roles_role_id_foreign;
       public          postgres    false    3761    289    324                       2606    26796 &   pedido pedido_aposentadoria_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.pedido
    ADD CONSTRAINT pedido_aposentadoria_id_foreign FOREIGN KEY (aposentadoria_id) REFERENCES public.aposentadoria(id) ON DELETE CASCADE;
 P   ALTER TABLE ONLY public.pedido DROP CONSTRAINT pedido_aposentadoria_id_foreign;
       public          postgres    false    3672    299    246                       2606    26801 '   pedido pedido_certidao_tempo_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.pedido
    ADD CONSTRAINT pedido_certidao_tempo_id_foreign FOREIGN KEY (certidao_tempo_id) REFERENCES public.certidao_tempo(id) ON DELETE CASCADE;
 Q   ALTER TABLE ONLY public.pedido DROP CONSTRAINT pedido_certidao_tempo_id_foreign;
       public          postgres    false    258    3684    299                       2606    26806    pedido pedido_serve_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.pedido
    ADD CONSTRAINT pedido_serve_id_foreign FOREIGN KEY (serve_id) REFERENCES public.serve(id) ON DELETE CASCADE;
 H   ALTER TABLE ONLY public.pedido DROP CONSTRAINT pedido_serve_id_foreign;
       public          postgres    false    3763    299    326                       2606    26811 8   prova_de_vida prova_de_vida_prova_de_vida_status_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.prova_de_vida
    ADD CONSTRAINT prova_de_vida_prova_de_vida_status_id_fkey FOREIGN KEY (prova_de_vida_status_id) REFERENCES public.prova_de_vida_status(id);
 b   ALTER TABLE ONLY public.prova_de_vida DROP CONSTRAINT prova_de_vida_prova_de_vida_status_id_fkey;
       public          postgres    false    305    3741    307                       2606    26816 8   rbprev_numeros rbprev_numeros_rbprev_numeros_ano_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.rbprev_numeros
    ADD CONSTRAINT rbprev_numeros_rbprev_numeros_ano_id_fkey FOREIGN KEY (rbprev_numeros_ano_id) REFERENCES public.rbprev_numeros_ano(id);
 b   ALTER TABLE ONLY public.rbprev_numeros DROP CONSTRAINT rbprev_numeros_rbprev_numeros_ano_id_fkey;
       public          postgres    false    309    3745    310                       2606    26821 8   rbprev_numeros rbprev_numeros_rbprev_numeros_mes_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.rbprev_numeros
    ADD CONSTRAINT rbprev_numeros_rbprev_numeros_mes_id_fkey FOREIGN KEY (rbprev_numeros_mes_id) REFERENCES public.rbprev_numeros_mes(id);
 b   ALTER TABLE ONLY public.rbprev_numeros DROP CONSTRAINT rbprev_numeros_rbprev_numeros_mes_id_fkey;
       public          postgres    false    313    309    3747                       2606    26826 i   requerimento_aposentadoria_acumulo_cargos requerimento_aposentadoria_ac_requerimento_aposentadoria_c_fkey    FK CONSTRAINT       ALTER TABLE ONLY public.requerimento_aposentadoria_acumulo_cargos
    ADD CONSTRAINT requerimento_aposentadoria_ac_requerimento_aposentadoria_c_fkey FOREIGN KEY (requerimento_aposentadoria_compulsoria_id) REFERENCES public.requerimento_aposentadoria_compulsoria(id);
 �   ALTER TABLE ONLY public.requerimento_aposentadoria_acumulo_cargos DROP CONSTRAINT requerimento_aposentadoria_ac_requerimento_aposentadoria_c_fkey;
       public          postgres    false    3751    317    315            	           2606    26831 a   requerimento_aposentadoria_dependentes requerimento_aposentadoria_dependentes_compulsoria_id_fkey    FK CONSTRAINT       ALTER TABLE ONLY public.requerimento_aposentadoria_dependentes
    ADD CONSTRAINT requerimento_aposentadoria_dependentes_compulsoria_id_fkey FOREIGN KEY (requerimento_aposentadoria_compulsoria_id) REFERENCES public.requerimento_aposentadoria_compulsoria(id);
 �   ALTER TABLE ONLY public.requerimento_aposentadoria_dependentes DROP CONSTRAINT requerimento_aposentadoria_dependentes_compulsoria_id_fkey;
       public          postgres    false    317    3751    319            
           2606    26836 e   requerimento_aposentadoria_voluntaria requerimento_aposentadoria_vo_termos_aposentadoria_respons_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.requerimento_aposentadoria_voluntaria
    ADD CONSTRAINT requerimento_aposentadoria_vo_termos_aposentadoria_respons_fkey FOREIGN KEY (termos_aposentadoria_responsavel_id) REFERENCES public.termos_aposentadoria_responsavel(id);
 �   ALTER TABLE ONLY public.requerimento_aposentadoria_voluntaria DROP CONSTRAINT requerimento_aposentadoria_vo_termos_aposentadoria_respons_fkey;
       public          postgres    false    321    334    3771                       2606    26841 e   requerimento_aposentadoria_voluntaria requerimento_aposentadoria_volunta_termos_aposentadoria_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.requerimento_aposentadoria_voluntaria
    ADD CONSTRAINT requerimento_aposentadoria_volunta_termos_aposentadoria_id_fkey FOREIGN KEY (termos_aposentadoria_id) REFERENCES public.termos_aposentadoria(id);
 �   ALTER TABLE ONLY public.requerimento_aposentadoria_voluntaria DROP CONSTRAINT requerimento_aposentadoria_volunta_termos_aposentadoria_id_fkey;
       public          postgres    false    3769    321    332                       2606    26846 X   requerimento_aposentadoria_voluntaria requerimento_aposentadoria_voluntaria_city_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.requerimento_aposentadoria_voluntaria
    ADD CONSTRAINT requerimento_aposentadoria_voluntaria_city_id_fkey FOREIGN KEY (city_id) REFERENCES public.city(id);
 �   ALTER TABLE ONLY public.requerimento_aposentadoria_voluntaria DROP CONSTRAINT requerimento_aposentadoria_voluntaria_city_id_fkey;
       public          postgres    false    260    3686    321                       2606    26851 Z   requerimento_aposentadoria_voluntaria requerimento_aposentadoria_voluntaria_funcao_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.requerimento_aposentadoria_voluntaria
    ADD CONSTRAINT requerimento_aposentadoria_voluntaria_funcao_id_fkey FOREIGN KEY (funcao_id) REFERENCES public.funcao(id);
 �   ALTER TABLE ONLY public.requerimento_aposentadoria_voluntaria DROP CONSTRAINT requerimento_aposentadoria_voluntaria_funcao_id_fkey;
       public          postgres    false    282    321    3710                       2606    26856 Y   requerimento_aposentadoria_voluntaria requerimento_aposentadoria_voluntaria_orgao_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.requerimento_aposentadoria_voluntaria
    ADD CONSTRAINT requerimento_aposentadoria_voluntaria_orgao_id_fkey FOREIGN KEY (orgao_id) REFERENCES public.orgao(id);
 �   ALTER TABLE ONLY public.requerimento_aposentadoria_voluntaria DROP CONSTRAINT requerimento_aposentadoria_voluntaria_orgao_id_fkey;
       public          postgres    false    321    292    3724                       2606    26861 X   requerimento_aposentadoria_voluntaria requerimento_aposentadoria_voluntaria_sexo_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.requerimento_aposentadoria_voluntaria
    ADD CONSTRAINT requerimento_aposentadoria_voluntaria_sexo_id_fkey FOREIGN KEY (sexo_id) REFERENCES public.sexo(id);
 �   ALTER TABLE ONLY public.requerimento_aposentadoria_voluntaria DROP CONSTRAINT requerimento_aposentadoria_voluntaria_sexo_id_fkey;
       public          postgres    false    3765    328    321                       2606    26866 `   requerimento_aposentadoria_voluntaria requerimento_aposentadoria_voluntaria_status_civil_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.requerimento_aposentadoria_voluntaria
    ADD CONSTRAINT requerimento_aposentadoria_voluntaria_status_civil_id_fkey FOREIGN KEY (status_civil_id) REFERENCES public.marital_status(id);
 �   ALTER TABLE ONLY public.requerimento_aposentadoria_voluntaria DROP CONSTRAINT requerimento_aposentadoria_voluntaria_status_civil_id_fkey;
       public          postgres    false    321    284    3712                       2606    26871 e   requerimento_aposentadoria_voluntaria requerimento_aposentadoria_voluntaria_vinculo_municipio_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.requerimento_aposentadoria_voluntaria
    ADD CONSTRAINT requerimento_aposentadoria_voluntaria_vinculo_municipio_id_fkey FOREIGN KEY (vinculo_municipio_id) REFERENCES public.vinculo_municipio(id);
 �   ALTER TABLE ONLY public.requerimento_aposentadoria_voluntaria DROP CONSTRAINT requerimento_aposentadoria_voluntaria_vinculo_municipio_id_fkey;
       public          postgres    false    3795    355    321                       2606    26876 ?   role_has_permissions role_has_permissions_permission_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.role_has_permissions
    ADD CONSTRAINT role_has_permissions_permission_id_foreign FOREIGN KEY (permission_id) REFERENCES public.permissions(id) ON DELETE CASCADE;
 i   ALTER TABLE ONLY public.role_has_permissions DROP CONSTRAINT role_has_permissions_permission_id_foreign;
       public          postgres    false    3735    301    323                       2606    26881 9   role_has_permissions role_has_permissions_role_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.role_has_permissions
    ADD CONSTRAINT role_has_permissions_role_id_foreign FOREIGN KEY (role_id) REFERENCES public.roles(id) ON DELETE CASCADE;
 c   ALTER TABLE ONLY public.role_has_permissions DROP CONSTRAINT role_has_permissions_role_id_foreign;
       public          postgres    false    323    3761    324                       2606    26886 %   serve serve_marital_status_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.serve
    ADD CONSTRAINT serve_marital_status_id_foreign FOREIGN KEY (marital_status_id) REFERENCES public.marital_status(id) ON DELETE CASCADE;
 O   ALTER TABLE ONLY public.serve DROP CONSTRAINT serve_marital_status_id_foreign;
       public          postgres    false    284    3712    326                       2606    26891    serve serve_obito_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.serve
    ADD CONSTRAINT serve_obito_id_foreign FOREIGN KEY (obito_id) REFERENCES public.obito(id) ON DELETE CASCADE;
 F   ALTER TABLE ONLY public.serve DROP CONSTRAINT serve_obito_id_foreign;
       public          postgres    false    290    326    3722                       2606    26896 &   serve serve_orgao_expedidor_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.serve
    ADD CONSTRAINT serve_orgao_expedidor_id_foreign FOREIGN KEY (orgao_expedidor_id) REFERENCES public.orgao_expedidor(id) ON DELETE CASCADE;
 P   ALTER TABLE ONLY public.serve DROP CONSTRAINT serve_orgao_expedidor_id_foreign;
       public          postgres    false    3726    326    293                       2606    26901    serve serve_origin_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.serve
    ADD CONSTRAINT serve_origin_id_foreign FOREIGN KEY (origin_id) REFERENCES public.origin(id) ON DELETE CASCADE;
 G   ALTER TABLE ONLY public.serve DROP CONSTRAINT serve_origin_id_foreign;
       public          postgres    false    326    296    3728                       2606    26906    serve serve_sexo_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.serve
    ADD CONSTRAINT serve_sexo_id_foreign FOREIGN KEY (sexo_id) REFERENCES public.sexo(id) ON DELETE CASCADE;
 E   ALTER TABLE ONLY public.serve DROP CONSTRAINT serve_sexo_id_foreign;
       public          postgres    false    328    3765    326                       2606    26911 "   serve serve_tp_servidor_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.serve
    ADD CONSTRAINT serve_tp_servidor_id_foreign FOREIGN KEY (tp_servidor_id) REFERENCES public.tpservidor(id) ON DELETE CASCADE;
 L   ALTER TABLE ONLY public.serve DROP CONSTRAINT serve_tp_servidor_id_foreign;
       public          postgres    false    350    326    3787                       2606    26916 !   serve serve_type_serve_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.serve
    ADD CONSTRAINT serve_type_serve_id_foreign FOREIGN KEY (type_serve_id) REFERENCES public.type_serve(id) ON DELETE CASCADE;
 K   ALTER TABLE ONLY public.serve DROP CONSTRAINT serve_type_serve_id_foreign;
       public          postgres    false    351    3789    326            �   �   x���=�0��=E/��7�ͨq����j#h	_�q� \��d�1%y�~��8Q�.��d�S� ��4s@ ���)[�� "�
ӟ���H��LH���os?���J��6ݗ��!gF�M�V�*�x3s�?�kL����Px�+���u�6��}6�'dH$Q��H�Υ-4J�UW�|7���'�=��      �     x��[K���>�~�sV�'��g���1;qf
��K��(2#r3rrv~���?��nr�O�Z!� �~󫪮�W7ɪ[����/�����kڬڝڌd��;U�l�*��7_W�sW��<����o�mu������Wr��"3�K�J��ط{����t��e�pO�S�?����>VY}��<�|E�ix�5y�QO���f�|u��mv�a�)e��x�����6U���f�jM�
��p����%C%>FJ*{5]n��WW�j[7]���_��_���6�}��@��'53�i��)H�h�Z ����w���$0��,��6���W��3,�Y�5_	�+����,fiiNsX�_hX�v_-dʇc��H��[���T��L��Xע$<�Y�ض2af�v���ɡ���}�/$�%�.�Y�d��ƘJ���m���]�m����L�ܮ�.�+딿�7�jKq�=���H�a�(fIB�%?��V���o������{�f[�7M�[f�Ծ�a�%�bN�@c����rv�c�#C�A��V�Q�ΜU��U�?�k�m����6yHKx�y3������d����ʊ'0��z�K\�luz�vwS)dW�U۩]Fb,J��o�Y&.<}�l}�U}E��²���1�q�\j�M��	e�/�R�������1��H�J�u׵*So����B"�}AK6	1 ] WF�r����γ~O��捝ÎP+����l�L��O��}Y2�F׀0d��|��b�+�B-�[U�TN��u1�EF-2,�U������"#�p�)VMoxf�[.w����ʠ}�D�	7�$L��i�z��	��gQ���j�X�ZjC)?S�g-�r�ڽV�9��4����D�.	�����2 <3p}��M�""�"�ڗ���P�>�{�Pg��X�>4bd:�9u,��Ʌ�n��j�s�q!iNgՕ��N,e�n\�KEo�\��K}�t����30+�@S*�%
̪�^ef�U���i~- ]�����ݷ��p�6�Ǹ�1}^�'�wѥ��\\t_W͛����~lp���
�`��e�����<K����`+o7o�ȟ2������(�kmG1�/ꩦhQb��0ب=GNS%f��W�;�X����b��D��TX^)*�ө��j�"u
��-N�.5P�Mcf���r���r��ol#�m*iȈ����8sT��ao�d�Yٙ[�	�f�@2��PT�֘��܍m������������`��/B3���(c����`�j��R'��/!��z
��ѕDSF��`�a�^;�B��1$M�XFJ����M�l��)S{��0�l�9vz*v��K���Ɂ�k�b#^w-�Lw�¡��z�S�Ex�t8��G���3��ڀ�������fӴ�J�:T��ow��g�d��.[��vp�wu|�K��Y:�x(?�.��5��scac�����yhC�����3X�©��<���W3o^�;�����7���
�t��~q��~ҍ�t��Mv��cVm�����!S��P�y��������FW�l�P����7Xτ]5������9�i���S5�ai�^�����,2���*4ՁJ;=) O����E^�+WI�<<3X��{E��j�0���;/�P�%�B)W���Ņ"�8����-&W�n����&nGn�Up$R��dܰ�z�a�h�^O酒\N��"L�\�IĨl��=�t]��m{�"S�I��%	¤ƌn�]��|V�XGYG�N�&tV>����J�J������k���^/�#}0������ͬ�&��`�q��ý.c�,͝�J�9C�����A�1`�3��P�
�Ѕ��$nY�m�-{	C�\:OK���+��Ҳp��X�e�T��z-����ŌZބ�X����H����D��z��0���:�d�񨫐���K���,�5���=J��U�� ���5�Y�v8�4}�7#�2u�ū��b���H��Q�IJl/�Y��--������T����-�1�$��)FqL1`d�z^ �Ἀ�b:2�Vf.I9 �%�ӈ��հ.�Q���R	����u��ui����/ ��������`�3(���:�o���%�<���8��ArN L4&����MK1�s�7kf]�C���w���7�\��Ҁ��t�OK ���(
��P�0��*ƈ,f�#�һ�D�x��wF����#���.졷����ۜ� �4{j�	c��lm�s 2���)��ыa����%��ڶ�b�p��0[W��$�_�I^������۝#�0�4��P�[��<6pc/~�t�_�A�6��;N��t��7ͫS��еߜ�bjw��y���g	�Q�Ts��6��/a�1�GE"�=46���îګ@/�<�,_�� ������>w'U����������O���b����𳺺�>�mg�B��zf"�A����(��0p>�+���ݬ%��qS�~�c*�:W��؟I�֞��P�;7l0A_J{��s\��jG)e @�����T!�߻�V�ֵ��V콂�}�Ɂ�}�#gf*3���r�@	�vmwb���?�̦cN�C�;\���
m����`�'�չ]U2YC���z�'`p=ڊ��jW�TQ~�\�|�"=�����`�t����;�FJ�H�KM�+R�%Z^��]N�����/��r��<��n����f�uNK�S� G��p>�׍f�3}�4�4���u�EL��Jϥ�1+v��]p1M�{BXE	���@��^q�X&BvaD����E��M�D`��^�,��%B��H]��B�`8��f�O	b�j�GN;fK���4��o�YK�wy��'�����`�n�{�
���@��\��_p̓Y#�n],�_�$��O	�.��Q.�@���~�"��>�� s8��H�_��8���45i���BU�؍�^�8��[��8����}z��aqT�4V�>����_�V����������}z��x\������q�b��}���o(z���?���������?����o_�x���T      �       x�3��;�8�3��J��8�3s�=... ��D      �   X   x�3�40Q�Up�HN�I�+I���.cNS�DPif.\̄��(攏2�40
y���^[���2�40J�'���c���� �      �   H   x�3�4�CN##a�k`�kh�```e`iel�U��ˈ���F@%��uF
FV�V�X�J�b���� �!Z      �   d  x���AN�0E��)|���8I�]hR��*mY��Yjl�Z{��ŰU�x��՛��G3�@!�EoE'�5��h'�͓�H����>�w�"TT�
PLi�g�S�3NfAfa�Z5¥��0���(Q��쵏�/~�aDc�f��iZL@S���sT�Ѧ.�UQ�v�EJ3/Mb�dAfav���7ժ��'I�Y8E�~}��)2�Pgu�˛Niu����,�DK��>���4_�bc�� ��`�[�����ZD#|����&}���9˂�%P��r3���?��ч��Q�;�"zՊƌT�c�/2���~�	'� s6��n_L42������;�!�:�/���W�O�a�`      �   �   x����
�0��s�{�I����Vt�B���ۮ���xjA���዁�XWXF`bnɷ�4D*���9~&�LU+������,�O)�-sC��}�
�a�|�w�ZA!��:]������:%W���t��[�N�Vp�!���HF      �     x��TAn�0<S��R��dٺ)nH��.r�e#1	S�H�H������\���d�E-�P� �H;���%'�V�[C/��j%M���ti���8b�#�)c���b!��'%���ٿ-�%�J.�}��
y����I��S����[���N��2��4cY��{�F�e,�'�ᗓ��#C2�W%E�&Q,$�N=���Ѕ�C"K+��ӈiV���ɔ��N5�ӹk7��J�a�uaH{���kЍ��8��"�LP��N�XH8#g�K�%��}��Y��J�&�&��dG����<�ݷ�QC���ZVW� �oҴ�D�"�!� '}V�4H�[Ԭ�J�(�L)�V�ݟa�h��?�(�$����Z�ɗ^Ҁ>�P��Qi�>E���F0٫��,"dk��,��Jl���!yĐ|0� �~R��skj����K���za/٨�C�)9�Z=���p�np�����\c,豓�a�%�Qr^�,������0Ê�����8��~F�F�0���#��e;�%��W��Q�4�!� ��Ћ�����}9�bȑ�0�݌{�_h��YH��a*`���<"*De��4�kP����C��<������j�����"+�찷�XHn?$I�#C�R      �   K   x�3�40T�Up�p�u�����.cN#���������OgG����1P�������pc�'B[� ��      �   9   x�3���w���<�����D\F��~n�A��C<���Ɯ��~���0E1z\\\ [�      �   Z  x�͔�n� ���)x�sB��-�ݲ�7���d�N�fO�Ú�-z�t�Ԅ�_���@��芔w}7n��\�ˎ��ܻ�Ic��8�l�ܹ��(_ûC�޸��~] �������%�I Ye�&��n��V���1=x�kA��*����*��=���&.J�����Tܲ���F]K�7����4g4��8t-Nm�^�2��a Bͣ��,���z�Y�W�d}���q���oҬ���//�D
 8 q `�p�X�S�(��/���)�lQ�j�n����׳�Gs�|w�-l,�E/�����O������9z9Nu:@ӈ�۔�u�y��,�E/��]E��xW      �      x�3�t����".#�P?O(;F��� T��      �     x���͎�H��姨h�?���bW��6S6��1�Y18�;-��d)Ҭf�-/�[@�g4�d4���ǘ��;�X�/
zW京��/�:K3���y�Q����W�1�3�YY��?~>~��CC���C=�P�1A�8�Q ab��T0�ZD��m?��}�>Է��o�zl�ɶ�O6y��r_@A�X�SS�̀�����@9Y�9P�Ʊ+Ml�S��ö'�<Kް�F0�y�D�k�'��,
��{~8 �yM��O�	���C��8���-�^����V���SL��h�YA�ܤfiN׬9�q�z�������X] ����+"��߶uGq�vW?�ښDJ2��Å7"#�ϸ�t��"�� ����<�m�nRo'���e����e	$�Ųp��G�P),m,�Ƈ;R&�]Ӽ��:���Ph�Q��ġ�U��s�)&�/�E�xط�v|�s�>�n�v[�fOw�Pw��������97E:<�3.G4�Ǧ�}�o������L���09M��D��h輲ſ����i^D�X]�jeM�(�����<<A���_��T���5lK̹�?d!Ǐ��\����D*G"K�.=����Ќ��q�??/J]��w��i^�J�tn�+�,А+:���;�*�[9P=��̰x�?:Lc��eeAY�� �L^Ѽ���_���_i�%hZ*��q�{��sB�8�:<֛�;5n26���������J5`+��>�<�ϓ��tz5!�)����i޻��y� �7�      �   �   x���A
�@EיS��L[t�Eܨ'�&��@;7r�Az1[���,B������b���v���Jq��"[�%��K`WP]�CfO�r̸�+K�F�����dW�����P�ƹ����>?�I����L�^�~��b�>��FC�"_R���c�1WI{      �   	  x���Q��0D��S��c;��e��5[�B�B�(��i��H��**V�*sѶ��<V���x�D�ȈO�F��Q�F�2�\�.}�
�>�0��2��?���0�4�1�k��,-H�c��g�0<ը����|�L��g�v^f3.k^�0��d�n鐯Y���MFƤ>�e�_�"���=�H�H������֕�޸F3J+�8�Üi���Z����X�K�l(�����9��02��#m�3��X�7hz��Ǵ�Řg��JD?#��      �   �   x���]�C!F��Ut���Zf�똴���m
����4E����d�6��^i^%.l�+I:��O�X4�^~Ժ�$ϴ�1��Wڠs�mM�i�1�l�,�0����|�8^.o7y��Ɨ�z����1�O_֦�򮫞�`��,z�V���9�o���a�r;����
6�O��-+o�1���\�      �      x������ � �      �   ;  x����r�0���)�[{�G���G�xRL2S�K'7v2�S��u�M,��4)�0���Ƿ�oHXz5�Ln��8�\����o7��7���#e��S� ����U�y6�VU�ȓ��E6�w�q	�0 �~�tU<��E�*�UQ�
�BLйb�}@�G(�"�b>_���3d��n���:�:J-ķ�ݎYT��{��e��Ps�Y(p����*J�B*YSIU�E쌵T�����������\��e9�-�Be�R���iUsD��}z�JO�e�1:N��*1�=�_>5O]/���G�@jj��I�*<��DsጵT���2�8���������Tr/� ,�FՅ"uZ(�Ty(*��l؉
0T�?P�\��%�(�*٩㴶�i-O��"�\p��RO�" ��M�\1k��3P�v�1�Hh�XK�C���.'t�,y���]*��.��ʶbU?�t�`k��j��;c-Uا�� �����ȹ�t�j��@���:^5 ����nY���g�l��fyfQ���9����z�@���4��-��$γ������T\)k>����Ĺ������J�B%^M��Ի��)*iRђJ��z�u�ځ�s�Y_S�\�V��;�;ƪ׌��+���+@��y�����l�^N��.��?�W����.ZX ��A��d7^f�-���b�=-�%ݝ���8j�Ĉ;���	�1��$͌�g�$�A�^�&��e�F7��}ɦ�����c�fI�����yfΗ�BMb�� nD��������G6�AIŁ<�X�m0���_uW�)      �   �   x�u�MN1�יS��t�]�QlP�vٍI�)�'�}��$Ã4�)�������>.I���=� ��=�kԑa=�<��x�#�ޒd,�|��Wbk�+M9�Y��b��vl.#A�,Aj`���Jވ�g�<H�rEAcJa�C�4��,T�v���+�GT��q�����m���]��k�"�^B]��P���|���\�7�
jq>k�~�\y'{4�]�2�9g�]4M����t      �   2   x�3�tLJ-*���".#N����ߘ�5W�1/%175�(F��� Ư      �   0   x�3�t�v�qt�W�,��".#� W�`O?��G�h� (�S      �   S   x�m��� �7W��I@�Z�ıw����zy�b4����L��b��e��fW�"3�Xs�)cf��<�Zf�{*zfxN ?�4�      9      x���ǖ�Hئ�9WQ7�9�fv�y/� !F$��OH"�����՝'����D���| �A�(}B$�	}(���/��ř'(c��Gp?�>��꘯�o�f���H�����z���e-�[���h���u�씘���LM��?�L�����������_C�I��'E#����8��L���/Mљ8�v[�����c]����M�e�ꌉ��S<�+_}8�'C�$���R�ᙆb�A���(8�'g\1A��d�^�I2mB�
� Y���1�f@e�g��-no�E�O�~@(�I�'#�@��)� ��0�&�h��f4�9�^جu�H��Zlu�+"H9�^�K�m���O'>a�J1���i�2�St��/^ X~�s��"�v*�=J��YY�d���¸ٙd�*�`���6�#�'Eџ(X!������N��qb�W�_����q�1
|��쮾���mI�If���
t��Ƞ�~���X�L�#E�X,��c��q�㘿LM	�35}���s�n�`-+��XzNp+N}}j6B�$��u�+ٹ�q��p��`'�O���`؇����w��_.�F��bf��[n�JoS8n$�a��<D����P坕V��m(�E�O�G�@��ȏ�1�I�5/�(hJ���>��T<���d%A��C;Mׄ 3;�&􂱖��y����R�m:�E�O�'�B��w^�C�8�O~�����C���tAG�s������\����R�ջ<(�@=)�F�p�CR\Aӄ_�+�N<~���
�s�R�W�T����>�zxP:����I���j�1o3��	�D(-������r��p� eA�C�AF܍ې�EQ@bVs!_����[��u�����`�����+���;�8 2<�x ��)Yg;UY�݈�*�6y)����wV�!H��f+�o#��~R,�J��3�2���Ar���I^��"���d�8љ�M��6x&�{+jI�oaA~B(�IR@�@(�t�w���S�����p�V�Ajɜ��co����-��y[���.߆�?��1|l�6Y��(� F"��pŀ"SA�J��� _�&���'�Y�vT��s��� 	(v�A}8�ʀ[�.��}��CG�\W3;\r�ERm�HW{zC�1MRp�#t���C~����Q�@&a��ǥa~[*O��}�w�Vک�M,�����bf��V���A&փ�6�Aa��>I�A�>�_�#H��
�e��ӆ����k�.�؝���i$��T�)�Öz����p`d��'DO��0,�H��8�	�ʹ��?�:nk���9$
D���&��ffM4���{�d�����O�aF��x!�GQ��Ux07�x�b8����^(Ap�p�&!��6�A
���$�1޷�p���[��v��6���¨p"E�#Q���[���j��62y,����p�q�9b�"�q��`r�n�>5�u��6Xbr�oNe�n�]�F�0���60�!���O��gt&�f1�f>���<�5Q?�[�p ��%65�+P���]�Պ�:���@�d�4^#`ux�]'�}�g�+��4�u{-⚰�o=�>����v��j�[���U���p �}B�I��?��k?Qy:Ѫ���5�1.����'&(�ԄD��[����cS�e4��Z(�$�"b�F#&4�§;"?��(q��9��o�W7���B{��k��~�N�^AU�[.�������	F2 4�	c�B>TSfc<��oE�����Zg�4���&�E��2��+�H�������d�'FQ�Q@�"��_.0�ǵ���::꿀�Ǜ��.k��#�e�>,����\ԉ��cH=�v�f�������F��'�+|��]l>�b.*~����;�k:��T�~k_��gX���t�Qo��84a@:!h�x]!��9'�+���;�v�Y�]��]8�3��a���������Y+�mxb!�cG���(1�p���2Lp�_����:u�Zs�JC��J��B��#����\@�a�ӑ��l]:������F�?m�W��YHÏ ��]JS�s��CKs�t�1H'K�mY���^x,ȣ���6Ml4�y��Ҭ��ˢ�AK8m��g�U�%��w�d��f��_��H�m*l�Bir6��^�;e���)�r��T�D��".
�p�^�gN�\���k�����'.E?1l2�|�F��k�~���� �<����;�rآ�vr�(t�/�cZh�����|yBF�d���2���8�;1����'΄F�;$��-���z���^h����P����yDN@8XcD�x<�p�& ���E���('?C>�Z�9���L��� ��J�R��8-�i�my\d��65�0��i�T����q��7�d��	��VYcm���(z~��j��4L�i��45F�f+jbb�]���1n韫�ݰ���ignۑ�}�c*�6f3�6�oo���1�F��	.=z�*`L���+`�)X���ͬ��2�<P���S�K/��=�m0�$ܣj}=��`ke��uB��'�B@E���r�`
����v�tFc8���Ɏ�Bv��U�L\G�r*mF����N@��oÍ?~�QJ�e�~���@��� 'p@$tR:X����#��C�\�,i�;���d�l���o(�0�#�s&[���I�?zWe�e�Y(0����-�A���[��m$lB�F��L����ʿ���C&�y�?������`ƽV,�\=�p���0��[���(| ���������~�2��@�S��=�Y�i̦$A�Ҳ��k���Ey�`���|a�=����@?	p� �וh1����"�1�>f���s���n@T��m7�Y0W�D�4rB��_�g�߱<�|��k�꠷�i��}
g��������.�R�ަ�&��>qx
R������#pn�����g.�=����9����_�a�X�;9l��|�.��}�LE�����^�]��'����iM�['����r�U�&^Pca�K���c"�!�6�L���_�3T fx̃��v\�5���r�V0��l�l��)��'��i������f������)���
�4yWZ�SX��~I��A�3��ĝ�w�o�����>��V��D�B��]��xwA��_�����1�.}�o8ϙ�5��]R|�?*���55�:��,�������G`,̣킾�e�w'���6���ݮ��q���F���-��h��`�p��Lf�=:\f��97�w��ps饍�~ᠫTl����JҸ�rX�E��	rd��������~i��x�q��fr�G� ��ۍ~�
������v؇KQ_�	-C����m�QƱ�1���ӱ�|E�G�B <!
���ڸ���5�����:���@NTG8)+/�O�ȉƉ)�?%a|^q�B���?l�/M�]��<�2�8�,��4��1��ơ&�@'� �x��݅c/&��������xH�ԼFEf#�ź�;5��N�]O�����V�m���DFS�'�N�[ �9��x�������P�����BCt�m0&��!7,ż�ȵ�l��}dj�p`������^̸������h���H��<1~ʈ=/��ѳ��V��V�xeQ{�ަ/l\������N=�G:0ɂ�(c6��S{�	%��F,��Ic���"��������/ωb�/��$�0d�I�%�[����Oރ�Yݟ�/���%Zh�rW�h��4uC�9�4��ҡ��@�3E~�Ȕ��J���$���6�����'�V�8�⛄S��;�x�Y��G����W�U�T�6�(��t�LV1���f.�;�>��n?��^,�
��lS�����'����v��s－��h$U��4�m��y�%��+�oV�e$,�    ���UYB�7�:��%9��Xvo3�	bt��N������Y+h�9g-�D)n�����TX�+�V[�YQ�s@���yBFNd8O�
.F܄_G�I�8&�.֐蝹��B�:�A@��C��E���i߶i�Q�)p��S���/@I�(ڷ���G&ͪjmek�nI�=]#��t5�
G��oK�=�����H�3�x���A���_���21�V�6ne��_ְ6�c���|��"b���NC3<���%PIрy�@fŚ�C�~�U�;N�Ҵ��*6:��8��/�lsAl!i��|����\�����+���h��֣Ȃ��#f�E�?+�<�Dp��O���<��Q�;FD#2&EfGB����dC������[��3��l]�́�R��uq	~q`k�p��`��	E�<X�{u�uE��_c^���Q��T�a��͵*^��Rt�S֮�2,��OWu��^�66Q����|�X<��Q�o��K��M-��L�ۅ���۹�ʫ�'&|����6�C���H�7�h7  M��E�w�3R]���ى_t�b����y[q�-�F};�O3�L�-� ��a���G�Q��r���;�8�j`���9WW�8C�����/��vx�&'F��	���9���w�C[F���;�۱�>XG���h/Vq-��m�Y�G�^)\�x���K��F[55���f9���Ʌ�}�Mu��������4�7=�+И<�g�K�߃���#��3�A�X|U��Kzʡ�
����:�g\��T����4��0ƌ2r�s� ʨ�&��{�M�٧	���-�%�|!'k*����|�V�R�KQE���OJ�<R(:�T��<O|pØ�bH��O'�+%/�+�oJ�e����U�܎5�t���{��{Q��:
�N�'I���=�1�����GL���mUKТ���u�k�ܭ��n���Rw���o�-0�NL��|aS��;�o0	� _�]0��Q�i.o̈vy4Թy1�q[Ȫq��5�6��-�'�f2`���D��h����Q|:�r�C ��y���/�-<,Rn���n�U�f�b���C�T��s<V�{3�b���U�1�>�u�P�qSl�kq�)�-h���4Ѣ���g�m�����"��d �A�:�TF�G ��G�����Nn�]ii�_Q�DaN�}z�MbR���5��C@��7�`�'.�Pe�0�_������g��Y��	��Ҹ�7|I���\2�F��	�opu��4K�F#X�~^���E�(=)���po�k/����#����5�Y�S<D=����B�z=��v�\·-=������2/�VV˙��G�ģ���.���(N��.�G���!Y��Eh��%����Ĩ�Ӝ�G,�)�Ǽ��hK�K�ҽ\P4r�f��a"o���;��3���#�3I|���W�.����|�A�I��[�X����F�˲N�q���������<*#	�`#�#?f#g��$F��}vm_y(��>[�E��x�%�<��"lжc�jA�D��t����0:�QcX���fN�q�'�س�*�֠n5YȐ]Id��U�F�svA�JW�Em�3.l� �Rh�aNq9�nC(_��A�!qѦOpE��;��7��_�\��2�W7I�nz����g,�zY���7��K섴��g]�Т�V���P�p9�����m���Emv��`eP��K�`�S�8J�R�$l�{�:\���}�D��`���LNL4AL��_��/q�fw���:�٪IiU�%,�$��������3������#��}�;����AU7�O]��q���ǴQ�T��f�o�7��ټ�f�az�"h�P�9�wE����KJ-_�R�m�p��!S+7Ŋ͜�>�oG�`��hp#�i&��|��j���Bm�>#G�oM�� c[m�%\����;Kz�1����'��Y��m4��@��&����erQ���C��`��I�,�����j}������R���s}0#8F�j�YYcV���*�Q K"t�-�cz4	���r�T]��z�%�l�k��.���R� �=��乞o�i҃���K�Y\-7��L���W���䈺��P%�w��w �qp`��2F[S�Ky�\]��Z�P\���W�!�G�:b�[��|؎�~����gH��D�m��?��l�u'�Z��@�R���-Q��l�c������iM�!�gzG+x�bE�C
Aާ"�T���P�ph���v���#�5!C���E~%�g)$Ki��z���3t�R�{4~�Q<c#'6���涹��^E� z�+�u*����P�ĕ90�ڮP��|x�lk�@_4'=#�f��=�K�f���I�B@�|���Ғ���٢V0�Z��f�r�XpL-��?l$=!��	c�,��`查Ǐ�\-"��y���p���Cw�x��2ē\b���l�x��B3>Eۦ�If<��0"Yya�[��X�m�Y2���b�+�l�v�ʠ��??�3V�Q�c����u����9�)xu�k�<�j-C}�J�]c����fq�ħV|�[��E���m����C�ҍ�;�]���ش�ȕw9 .A�J)��?����H�g���Ɠ�Κ�3����rLI0������R���^o♊��rK*��M��l�k�֑�"�
���d��6`р�(Ʒ���@Z¥�X>��EJ�[�	���d.�G��[Ћ��3$�7	� y�����Kv��:dY>��hw���%K��۶(,���3(b�B��G����Q��v��5IS��6�`�e���}T�m*�9;���6�5��~�ߗJ���Pt�?@g�*�����`_�f��\�L���c5"�oa�J�AN����qZQ��E��5saԔ2%��U_}ӏ��cE&��`��p(	'K3Jhgq)7ˁ⠎��f�3�7�B;[D��p��[\�z�<;3ڰ�-���s�bl�����a���<���	+��۩idtX�X�����2Σ�������
Q���3�=��v�n�Y��5�d�_bsx�������1c
������
�6�j�w���$q rn~�d�3�jq!���!��V&þ��c��H5���b��^��KA/���O��u�۞Cj����4 ~������\|Q���h��1�=U���e8�Ӂ^�د�#k��,r�X񁮮�&�W+@�-	J-���uY�}�Y�q
l!:��qcv���_%�	�\M��މ������.��E~�s�\�"*ν.�F�O/��� g�'�z�J$����|�ӎsW�/:�����|s}�3/^�"ˣ��O�*Շ0~��`I��a�ի���f�'��.�6��̀3?vL��i�#��q8�״<��\�%!꽶د
�S��_��>�5����%{��Ϛ�7���߰�탃�N�*�����VPv���a+e�E�3  �`�)��I����Cg�����@p��n{�!ו)�]��b6�Hj�ؑ��z��w�8P�D��JM!�щ�JO��g�v�F��S��qю����_3q��m�Fʪ��FNG$��@0�G��t+ߋ�~m�	��^h����M�!jchp�{۳��UN��2�<��4���w;K�$Ӿ%B <�,�H	�퉢	���|�"�$�&K6d��w��k/*��!!357߁�$�}��9���]�l΂C��d���}rj򲻥��ܓ}�4�yKψ�;=�U�W��\���|�]�4����tXvK�)v�m��w��P�����ތT�zQu�
��ht���)�%��@��B
:9�M�*2ڡK�pf���v]]���t���:�ߡ�#\:s��}G�D���R՟�'zC�L�{u��p��}�m6^��N�X����X��S��T�i�7�)A��O+�Ō[@a-�v!��� 6X+(ma�i�+m���~�bf�3$rB�x�>��z��9��UHx()T�9
XNe��    �\w`8Q���Њx&���]R�����H1s
����� �H�K'|�l��E�y�����,Yi�����7�X�Gu����M{Q�LB�Ie���T���;�f���67ޮTDۡ��j����-������|����3I��7�U���B��q"9k��|'\�B��zw:%9�l�	��Ϙ��i��p�Mu��$�o��qpxg��%<[��� r=d���y�����m�5Ͼ�xF4J:��Hd
�!�]����M2up�W�Ղ>��%}�	ٳ�\���*0s8��JDc��a��1<��b��85��K����ӛy�%L�Ŗ���P>��N��.:N�Ll�%kj�EV��	���a�s�x.vO��T�A�.d�������0����P��'yQ�)��0�x?(4v�NT�<��ۙ�<�ԁ��e�?mװ*�R`�Y�[OCi����2��ǵ*�%6~��F��/[h;@�g	��{�46����Y��\��t@���aC �H>>�!g�����X�I�$m���CW��ޣc/9Xe��$�Z,
��جm�`S�|A��=�l���ϱ�t�C�Y�v���?���]�\��s)�����K9����-�*k����/4=c�g6���S|�3:#��1�"L5���r!�f��H�p��m��8у:�l:�#����vӉ���j ^)|���N��aes�������Z�Û���lEf6�<�������v:R��4��ݜ��}�'+u�k��Pk�ax���pR#���EYX�y�r��ñ�td"�����|��*@2���Q� ou����u�;W8�젶�#��eY2�KY�~���������)��6�+T�쒖mkO�t��Ь:py���Xv�h�t��{��,�cY�R �=P8a�h9��0��}�p[.Ã�b���`o���ة;ߖD�Y�k�����Y�	xn��Z������\p�s������>)|ϔ�*h˪��dJ���;6e����O�/`��c7l�K0��f/��\Ī������SK��T9ti��� �gX���e1i�׬���=��?���c^Q���" ��BsD}����?UՖ��_��f�'�ԣ��^�����:�(�i�ɏ�T�uC��I�Z{'�[o�#�IL��/:�A�w(��ǹ�Vin�yQ�ƟN+UK�+��W�sz1���&JW���nV���Ԭ��L-�`�a.g�s������8v��N�MuB�`p�T�C�%�[ܭ���ejw�>�x�����+�a�?������V<���DOغY�`��cq�䅽fc�*O��ZԬ�c\�kڶy�꡿JZ��<-�����G�*nhse�(�CJ��(���E��3�Y�	��D\?�`����d��Z�~%h��R��X�IV>�A0�.'缍�c�!��oejVur����n��*���SN��|�ztsU�r�e	�K���g����B,�U$3F��#~G#�F��!Ucf01�)�?�Z^�����+��[�)�[B��S��[��r�����ϐ�o�?�e-���q ;i�B$*�T_۴������V
[��YS�0/�ן1�w&z�f�. �s���/���yM����rU�&{��vv�m65X���k$.����f={�FE �ܽi0��얷־�d�*�I}WS<�p������������;5�����n�W��>U��@��V�bؕ�]�2%���қ-c�>l�.�}h�޷��Y���#�L��;�m#?�!/"��c�wõ>P�Z^%|�ц�`2��5���և��Oh����{���&0�s+o���n*;��5�e��J�E+C!c����~ߦ�gA'Ǳ�d�L2�w}��M��i�0o�����~���"&�m���+���z_�ƆSl,�I���Ӛ�Z�QC9F��Iݵt�)��vx}��ٯo�	�ml��r��5�@���Ool7^�8e��)�G�?3��Hhy��q,��oĦ��4b���^��x����,{Nqh*���)��/�B���bֈ�y���w�������t�`c�Q�޾�ו�~jr�;X(1O�GH`��#u�L�uJ�H��1��*��pS���:,LׁLW�.���c��\�Σ `jj�������τUN��R��_s8\�KM���N�^����b��3j���Y���:0ѵ{M�4��gt���H9�dZ�;$'@���I��-��M����}_fl=���+����{�k"$\:&ee��{� e�|���ե��m�X��}�����ql.��=l���>���h!?)��`{�%N�J/e�X���^q�"�i�}�����3��E�w���11��k�R��RI-�V-�[>�
��6�)D>�_�/��gt�7=�����i0� �����Yt�ʢV^z�o���cHz�V�t���Ëb�gH�4EG����gv<��܋B2j�R/p}$��K�dM���xK�&�T?+g�<C�f$��a�֘s�Μ�����䰀aK�Z[|qA��$�@�A�}�T�s^亞��3=z_C~D�O�a.��[�~�9�څ�P��
x��fk�xI�ZE�5(�ؾ��=##�d����;�,L��Pv�?�$�KeD��'n�[f֌�.a�n��
w�
�"}Q���o��1`56鎅���t�m�v���O�uWj{���F�X[����
�c@��j�]��'/���,��#$c�"��}��ʁq�5��5v�v�U$K>�.-i�D7��j-�_��i���R�w$r*�#�JaL�Y7��Zgq�U�T{�]m��N�bi�7�>+ŠC³\�p�`����l�i���������u�܅k�8ׂ
��#����@�ʔ�s�ԃ��֫��ϰf�'�y�ܜ��|����|Z���-إX��_|��QBɇ9���f"C$�/F�>#������'���H�7E��	�qd�g��K�T�®�U��N��+h\���P��+M+�/B2��f����a��)���ቓSY��65y�ˇՎ��hg
��Wh�&96�R(ʋ.�g@�ڣ�zǦJ�{��!h�2Np��kC�����/^C[������ha�
3a�{5r�
>������=��_�%�I�"�j�:Ph�q���C��\��I�/���Fu'?1��~M�|�Y�y�d�-ܥ!������4K�����y�"%ٻ�S�H�?�"'*�_���k��-�w�B�/�����k�s�'�qA�,�����F<%�u�)Y.��al1�g��ߒ�i�`
��U��,�a
��J�:�6[��Q]�a����厵�b��3.z�p��)���Д�7w����&�sݹ�8�]����"��-�m	��*�X�^���h�0������m�8�8���{���.��|]����r	!#�����#�h�1�e%�/J����3�O�5>���=�{��X���PN�wz�=vGZSXl7����!8��݋��3,d�"��<v�j�W˝`L݊���g�|��kD�&��Q�^�kg*�.8^�EG+��H�������~�k���UcJ^"����Ӗ�Q�7��V�.�QTV/
���a�?&�u����/q�4���Z=��AD�]Ńm"��CA�o���íY�BU�׌�S�9�ܢ �#	��g��Q�^��އ��Ny�N��=봠ƍ�����E��3&bf�OE�+C)���-�
��ϛ���ڿd@�b���rr�G�]���}*������������I-��H{�\��p�Z�v��\ǘ��+��2�07��*�b�3*j���)i
����$<1��z�/�*݉� �����c<�W4��i�$�x2(����gl��F@���E�c{7�i�8�T}�|��H�5���r�e
����γZ�!��|�����oJ��pX����c˒��[���X������H��� ,�Sv�Ot��bq��t]�vh��M�b��32 ��X�2�A_O����>��+�7�1=nU����h�ﵽ�X�����    YGy1��������ؐJ��Txn�"tg?��ŧ�����a�~fj��(�M�h1�'��d�mU�}��R�1� M5<cNu,�����F��M9�Ԩ۠	(m�W��_���⺥Cپ]���#1������3�-�_���)�� ǼN:��Ë�E�����e/)��0�Q-�p��H�?��?ދ5a�k���q�5��ߔ?�V�sG5N���h���Dp �j�i�NH���"�߷#���g ��~]��q"ѓ��v1�z1��._di`[�%I���ur���,�����m�w"jvľ^���כ���@ҝE�����@9��n�;��6��c����i�EN�uG¦upƦ�'�G�N���eȃ�I�u�SLu�[�p>�N$-ϱ ޲�p��f���_����?�nx�(�K
�r/Z�[9�\1q^�7�\5����r7�E*�	�ؘ:qaS2��&����d��jx�b��L��Y���V5���޻J*T^B���%"/�����Ŧ޻e�͏��1�Ɋiy}�S\�:-	�Ɏ��ϓ���uE��|�_��uNϸ�;1�գ���ꚠ���)�k��㉆�nXw��;J�d�.�����[�A<H\W��c?v��x:I<����_ϭ���n=��h���֮��Sگ!��~Q]��0�JF��_�c��FMF8����=���G��t(��H�a٩�uʢ�o�Z�.fx�H�����vx��lGX�L$?��K {��vh3D'�f�n*�]U
_�޺Q����!���T���S�T�<Cf>`�:�~��ѺӍ~e��yT��n�ZȞ�u�p�G�]������F旺xf�U���?M�����қ�w�8�Ѽ�����J�Ι�,O��E��3����O��{s�q�`*MaFb^���I"���vq5�"��p���*lט)+Nn/�o=cŞ��SFו���}\�~�`6�����׼p�·N�2�Rm+�)u��`^T>=A�S�1�FORprʏϏ�_я� ���/���Х���Vv��X�Q.������=��>�Ae��@ח3��<y�IH��A�n2B_�s�q��ы���$Bd~N�_�ck*1�@�Z���������7Kk"�i�[Y����]�uk�unC]l���߿p�Չ�_��RtƐ�E<}mz�,�"?��dq���Q;�F��DX�fo�kW�y�
4�-�:/Jg�qa3�8cn�L!I�_c��$@�(�Ez�.pO�K�t�FFJ�!�����d�/Z`��p�?�E��������&=�� 7��5�񴉑>ē��1���]���>���`����X�="�8�8W�_r��qkm���K"JM>L����ȵAfl{��K��9se�T����J��y��L��a�n�����n6;��؆���T(�"q=+�/�c��8P���7A�OKj���[/8&��|�4Ѧ�׭�!ަ$NhAO�������ď-��ز
M�~�������Ol��E�Q�䮤2�u�v�6��6���W�J^�x�4����'Nb�ӂ�u}|I�w���^�V�)�-��%���h ���[�PEV�Q��x��<���w&�K�>v��Dɍ�.��Cj�E���L�
,���c�t�N��M�6�J�������ҏY���&�g��{lY{�L�I K׭O�㭤�^4������$�7��h�خ:��_��߷��Zɳ�D�����*�C�@�`��~�6���l�}f���z1�v��ޖ���8廦�EU�0$Z=���r���/�����8\�uذK�~U!��	��tj��F�w5��~S�y��㛙���\��"���,��<��/�˷��1��qG#�ǻ�ј�}�:�=��=#�"0��RX@���� ��ι��	���M��}�alU�(����UU�?l�'I(�x~}Р����L�����g^�oyQS�j�b��30�F}9\�6���;Os���o�t��o����MЇ��#*�`W�.d��SX�\��g�j�rj
��@8����7O���Z��g�*���!��doԬ��Z$s��cK*�" �ˮ����?\懛hB�|��N�h,d�f�DP�N]&ۊ���^�V拎�g|��2�@ܓq<�T��A�&��Xd�Cɖ����[�<�Ԗvp���źޔ�h�ͬ��d)tN���j�Y�a^���%�¦$!�g�p����b*0J�r5K�#B�-���6����=�e��k�[��j�LH�ǀ�{`�*�m��J�]V\A�ƙFHZ�@��w1�|Q���mVy��{���1!�W�����uW4�:`���=������غx�Aһ��������l��1���c~�W|Fy.^��W?[w�b�t�T��Pv�4���_|�ϸ�;����O���R�ޠ12��s����	�h�fg�J��&йr��X:%/b}ψ�;=���Ώ1w�S�6����6�c�l�e�j��%�t��ą�k��(����3�Y�	|~��顗�j6�����q��2�v��(9A�
�۲�MЅ� \Xky_՞�JOشy ����ܼ̞��aoH��hA�4x�)��uYwa�]흖K*�������h�'`�]����蚝a~�Jx�N��[Q_5܊%l3(ձ�P�r�u8Ԕ��*B/&==��K<5�T�A��x�o��[e�"f��	�jͫy{�D#pq��Ͼj"/��g@w����Q�=���{?���a#�ǚ�]���݊@!O��_���l���N>Կ���l�x��'	���G	�oj>�}${U�~��E'K���oV�x��u�,e�y�U}���Ѱ��"��F�>�%���O�y!/V��I¼��MZ���� ]B!v;�6��E$�~�¿������ښ�H䔩q$YN��oH�����^���AF�;�(R~F7�<�Z�U��� �a����3;���3"0���*>Y��S�Dfn��_��?C#�hؘg��y���Or�#� �Vk���"�>��$q �[�RΕ�d�[Q����Ѭ�$:�����k���g��T�����P���E��i*��h��HUں?\��!���^C(���'0�>�CS%�:�f��1?��0@�+}�v\�`ѫҬۮ���<�-�.�*�]6x{FϪO��D6p�~���X����X��?bF�=p0X�h�RXoO��3W������y������\�q��W��)���:�!O�	���+�.ɋwӨ��Dd�nKŅk͋ʻgTȝ��ꅜ���:r��Mc������!?ZI���ۻ
L�{9��<l��UF.;�ߗ1z~
��^}1y����-)S�R���V�ѝD�[z��;�#�^G�;Td��f��X/�FN�~|�$~ϸ�]��M��XC��y���z������U�˕v�*d�e���zj�6F�r��	�{���zE{����A_0ޑnBn�u�1�5۱���v�QDW��dϠfͧt*��џ5����ud��*OO-�u����������Ӯ�[-˩�����Y�i��Z�曉0]ߢf:cP�ł�BF(��,�����D,�;��$�ش�n�N���o>����FYE��KS���t<Z�kT��B�8j�r[��-,gp�S�����SZѱ��Ϙf��1|���J�~ς�����'�qϲ�z���'kQ�b+_aG�*b��cZ7/��s�c�+IO/A �N0�ԇ�)��pʋ��M)7h���|�-�zc�X�Q��J=�M��Qyx����	��`�b_�I�kq��;O�U�k�w��:'~��U�[�K��0�5����m%E��։��� 3g��Ǫׯ�Z%oXV��+�FśHau`�o7��;�2	^�q�w.zJ�|�B��Cx�l���ɣ��1�'�ĺ���z����֯�;���G���X�M�|��|���X(5�±i����hٯ�?}ė�5G����T.-tC_c��I"�('Ct�>sas��8��g���zz�ɝ �{�rg�\��Oy�_G�6�u�A�:�|�C�    q�iF�����ѲOS�J縷6�{,T3ږ�t�,܆m��(j}�w����a'�X�4��ҷ���G�mD<yB���N��ږ���5iiF1$6�ҡsz�mXX@A�v��YG@|~����4����}Y	I�:Y�� ǐprt0�6[���16�^��/*��a�2N��l�-SFc8s��{B���y�i�Zs[���!������������4���m/�g�:6�u��USC�� ����L�Eo�K��-�\��ۙ,5��vZۯ;bȕ�W�g��[���+OvW��b��k��a�λ���{=VB�wl��a�y�G;�ڨ�ێ
��-E��1�����S`���G�}�Ph��\�X��b�׋=u��+����(
���sP	����\$2�5�q$F���S��X�:���S�zv��P��>�,�(�}�ԟ����O�C��ޞ�@Ƒ��R�kw9�H�Sb.lM�/:@���w����QY0]�u�(��qb;n�i��<�͵���k_
v+��&�.���.(�kH��A�������wN��9��rƇl~jWj���Qw�����`��[�h��R�)�����/Ax�w�������T�sA��{T䅀���v���4Bʇ�p����ݘ�Ɓ�t5�u�>٬��8~b�"������>7����pW�E�h*��~aI{I7�01R��x
Ϻ���\���h�f�_����n_�o�2[ʶ�LF�OV�=7��ܚ�����r�Z���[�'�E����H���$$2<�OP��O|�{z��e���b�~4?�ޡ��1h��������q:^oΗwq�V8�Y��$DhU����ܬ�����L���}�v������.4���.N��b(L��.��P�t0^����YktA�g�D�8B���7�OW�����Eɤ9�9�k�o��
9 $:,�6w�:�i�k��/Bh�v|PP�ۣԷ�������=h����g78�O����:�t)oPkn�l���8L�{�SΒ��@�^�Y��{wBѲ#Z�H���~�>������B�XG?� �
}F�؅��*�=�3w�l_J��B���N���2���Sg*fP�Zv��q�8d6c���/����d~���������H� օ�n�
�e4�>U�k6���>+��zO�بU���qz�9H:?�6,����`+;gM�LJ������1�͈���y�f%�^�X@��-qm��=C�v���:��1%�l��2!X�s�&��cPVp�[@�����<��Y�a��[���xr��~ftk~$���Hy���������݂��\�F7�j$!>�y۬:^4������w������C�P_A�û+�D%D�)���=p$�G,��mI�~ZO�D���@�ɖ6�9��ؘ�^.�,[�4�@�S��\KR�M�0�h�C#�HKAW,�-����)��G۟�a�G�����	�~݋���
Z�G9!R$�@�u��-�N�+t��nM�؂�����I�كC�TU��B�}�IZ�dd%�t(0�6o��c��� ��*���z�N��_{;��!o�����F��%���t"��v̾���#�6��Q���'� �$��)�K�S����ϫV�� �csudT���Ļ�u8�N*���հ�: ¿�e��N��e� ]�J�S�^���hԝ��:��OB%�ٙ?�����눊kX߫ڸw���?:��Bv��m	�>���X�o����;
Z�Բq��C�#2 ǉ���h��F�Z;㰢�[���ѕ�|0͎y�덪�g�H��W^Icͺ�	8�<��ZG\��|+*��~�s��&�\^����ӽ
`(��.��:���Re�<����̰�:�#���
)�8���Iq�\��C���q[Ze�k+H
V�C��/Ƚ�+wr{��	�0��8��R��x)���	be��J��̽Bg�+_;_@�DwN���f�]��!�A6�M������I�TgL+�LkD�*d���_���:�����|�Թ�����qExXk�a�^�4�0���*�Y��vV��J�ũ,��l�>:nj���h���{d�{��Q�)F=�kQ����9��b7v�u�vMoΔ3xw��3��pIr5�?���d�Ld��b���f����8?�TW�ٻ��"}��g[*䭥|kspg���c��{���D��2���v��	����5�X'�@<#��0�y�	�i7m �Dko��S�!����%4�->1�(l˕3�MV������ZӠٚ��ն�.�9D��A��?\C���4��Awv�5�wfu�[�v���m;ᔀ�9R]��\�{,̡̬��M�^.ǧL�!Z?7$GJ�Y�M��1f������,��.f2ٛ4�������ʟ�O����|��d_6߬�7;��1�6�괩�<ת9��oM[�2�䁉���V8*sx�o<��j4��?�c����4�WX@�0���2��s%��ytWߊ�$YP��C4�<<��N��c�{Ц�'��+ k=h]i��k'f����Y�	+Ǵ�X�딅H~�ĄL���.\�V���	�]�;�÷�|��`��d��z�8<�Əۅ��"䉈�z�,<���/��9Z`V�PBVU[a4�z�Hqk���	8|��s�p=�az;J����U��jAmn.���H����
ÛX����}M����-�,�@=��N�_^DÔ���4c�Ƣ CS�(R���G+��Ε$�x�Z<�m�v��0�����B��S�����GU�AS���v�҇���o\�8���e{D5�1��sh�\N@�_�����^��I�j���}�����wd�lV���������P���t?�Z_s��\��S@/j���ECJ�M�S�E���U��v��~[�2bԴ�{q���ÞNN>�?�DwY���W��^�B���:�:U���x�X��K�w��k]6��@=i��:s�7�Q�I��e@R5�1ҽ��v](�,KR�ek=RL��k����^�na�vܓ��i" ~�`?2׷�*�+\�0���y_�K���Nto�!u ��Rp��s�&jG `�ձ�/�g��>����q�����&�W��2����� �'����E�9t�#����)Z��ڐJ�ʋ8�\����Yy�6gs�S��"�-��{u�y���Z��Æ>��c�����eԟ&o��-�Q����j����լ��q���oX��d�`�'�T�#�U?���i�s2p�u�Ce1彋�m�1U��*[�4O���Cw ��uaHk�(`����h�]�̕�Ri2�Y����\�������]�zm��º������R�1Y�:��^f�Oq�ٖ�x�� V�ɸ�t"��6d`�\����5e�<h�Rf9a��?0�^�z.��N�M ��Fl����)�� !׭��[���Ӱ�:�� �s���~J�D�}@ӞT�X  �*���`6�%J�Pv�<�^���9H�	B�^ݔüؽ}oIY[���>$�8o}?�bd"'^`�/C>,�/��&@�4������`�wV5Ǖ�:�(����Ȑ��>"�Z�1�q���P�*tj���[{��g-��pj��W�C�`���z�-S�$_����B&X8�����z�!}��/�/a�ߜ�s%�cus���X��k� �!m�d.P�]sh�A�9h�2����5*��;�X�+�m��?�]�f��Ċ�����vU�C���.L%�Aþ�������L)�?�9M���QS��!׭��_�j�)����w��y����s�[GP�(��]Z��q����e��5��
�:^
�%�5.���Co�|-�O��x��a�D�1��;5V?&Wʗz�����[w��ʅ�dEFdȨ`�&���V�g�ϓ��F�N�+6k������z��i��ؽ�ɝR6H{c4"�	��Y��(�`�5�x2|�i��r�K�<G��o�!�Jփ�o���82�C�5v	��p�/���9O��#�    !i��Re�����9M��´+��y�_���Hw� k9~}��Her	@�c��e�9LO�'��g�Z����D��AeQuU�5��X�Q���>�@$���'���Zb�x�Y��U��kc!=R��
��}�7�͸d]�mb<Qr$o�; �s��'"r$�>R�.�o�|�	�3�����S�lg���J�0es�p�vN��L�>,���?�=m��GV�'4r�/L^y�dU�(b.�;�A?4�ϓ�=N�70".J�<�'�oLC��;SU{�R��d{��'�#a1���(��	N
[`m�D��0/~���0�%����h�w�t�.<���?R,`���N�W0����wH�<}���e���j���G����%��M�p��\K6���wb�}�p0�2��_�y�mrY�����`�6]Y�w��լ�n�_5�)��\��9����q3�H�	�iv���j��V�Yct
���μ�	��Hl�z���]c���6箛M���6k�uE��!tW�:C�|w��Tj-r���f�Qװ�FE#/+��欱e���|��-�p�yY����|&���*ˈ� 49�4�{t���TB��TϽ�=ݥC֕չI`�x�w0�KFU�@MO@Ĥ��U*�,۟�!s-rK?쯌w�:d��D[��I���"%��!DQ6d.�:̡�H������s�4�8�=E�H�@r  2ѥ��g��}�9�ޖ_�!��ݶ�>/��6N�|���\�k�t��ox$Ë�_+�֙�"/��`�\im];�5��I?�V{��G�JH�8�<���r��jb׈��2��P����[�Cf��%N��n��M�@M|O�	����{߉��2�nnQ�l��}�m��vK�������J'3����ϻ�����:m6��t�O����Ç�T`�K��UI��4���Md�DT'���}����i���\r�z��@�w����D�B���gI��:xk��f�*n���VIwJ�U�D;������8 ߐ���#�Z����ƨ���0%��k/���[�<������>��(��G�尐,�̡���$��A5������3�~��)j���]+iq[�![�]���`m$���Y�;���;#���a��T����x;�����:WюN	�� �"����gĠէ�H"w�p���82����0B~nн3���~�#�L�Ȕ-٣HV���Fgq�Q'���;�	'���i"2l���@t�#�yb����u/_6�esM�S&c������� �#�-�����)2l������t��#O�_)�"(�(֕��b�a��[x��='�#� 7/�sy�~��G���:)���ȘQ���y�k�t��Z�zE�s�]���/W����$���m|dXn%?8���ԝ|ٹ��$F!�7�]D��gj���A������G�zJ%pSU-0����6b�C���N��H��Qj��k�qt�(�����j������}|_#�J���iH��Ӛ����<f�ڒ �P���x���6�in�M����A!2���z
-������ח?�s+��-!�Q�_P��ꠖ�����b0��d%pNPn���s��'"x$��C��%d���W��K{�:�z�p�a��C�����/򽬘�
�)��������� �ű��$��y�F���W���vN�W�>�"Ps�
--n"��8�ol��r�2�׹�kQ�������\�� ����SG��9��3_	v��]",������8�-�nx�{��v�e��o)R�m$�
1@����cZHOU_����w�r�a��Il8S�S	��	bs��=b}ݺ��8�bh���ny�����;Ğ��I��l
>��_��j�W�0�R��r7��]ڛ{	�g<w�Lw��9`��Qbx�5aXM��]2 �t��0����t]R�֨d�� Ge��_���@OP�����s�eo�^��"v�on�mŮv����8�E�q,�My�ӂ��&r�4�X�S��EX���X}�'H�����ԧ�U]�2Ԓwʹ��8'�h�H[��ǭ�O�GP �sC��jTp�kI��C��[&~�t!��שQ�U��P�8_w|�d�ǁ8!�3z�z���oo��$��x �N'X8> ٖz��> ��KN�hu#CH�Ol"���M��O-��@ｍ߾H�`��Y,�y� _'�Yaףv8h~�P*)>n�!��ꃙ��-P�|D�U���t)��Z=<@j���ޮKh�(�M
�|�a$m��za�a���İAC�lڙ�8�ݗ��1,�Fvno�Uo���mL�T�c��שrl�/�U�l��搡���i�Aa��[ʠ� �`�;��"����l�tۻq�2�1]I���%�?wB�n�� 4q;1\��n��B@m�i4pM-�B~{�!xA��J�T
�LN����e}4�����skh�v�ϭ��4�ÿ�.�M�=ɋob�"��g`�Y�y(O�Dj"��l��h���=�qm�&n'��բ^6Oc{Z{�OpI{l�V\_�CG���ߦ��1i%�n���Jľ-,m��x���qxg�<
�p�h��2��v�=s�#7dig�հ��H��Ə7�5?�����I�*���8��#��Ѳ�띉b[��a�C�ӣ�F[�g ������J�<��'4rC{)�S_y�7���C��pJ������|F���¼6����@����j�"rSDc=�{H���N���锩��¦g��J^$��0��7�M��'�Bw���D~i������s���Vl�XXVw�邺�<	��(�"&�UL��xaA2�Z��x��l^��{_�P��¼:!K5ޱʶ�FS
s�xß�W-�g���.���^����A�y��{q,.�4���`Wr�j@~���@��g��
��pU����qۢ���p̿n�� ��7;��WV�M�����)7\�s�G������"��hRS����뮸�%�n�.��إ�S�(� TRz�#����Hզ4�-��0��A�i?��,�E���Z��ays��Ev,�Î�� �)`�Y�p�k)Cˌ���K��͡(���s8�C�w�����7�?䂮Nu�	預��>��C���zvO0!����.d93�������M�ˬF����濾��;g׫ܝ_w[����u�u7���w߮2�sD����������ר���`���Ѷ.�V'�Stˢ�6������M�.t�� \>�&:Ycӂ~��&E����Ճ��s�4���)���j`����OO�`�K��W������j=O���&���R,)���J��y���u�3(��;��ra�{���T?.�+|�P�&j�?nɀ�I(��Gۋ�[.AUm���!�_<6tB����ś冥Q�6&�K�ݱv�����%*d�\�<�$R�t�-ȉ���ȱ�����dy�""2�1n��9xPՙ�kq�q �ьzi����=�n�q\6�s��	��'��y�M�F��_���p�--��9IM��Z��)�A���vɈ`�D4�+@�K��1�~~��v奄�Xd?`q�Ǎ̊��Z�;��L�x:��؅��9T�
�M�A�y��|�p�}� ����n��B�
��k�ݏ^v
�%ek�3pP`�C �/��a"����"�у�`)���6���C?�5�<���B�R��P�N��s��~�kQ�}������(ш&�S?�HD���!��&LrZ��)�9D�Ѥ�7�9���-q�5x��NmS��n����@|� S��ڞt��y��zd��9d���L"_�ΰO�����ؙfB�b����+B����w.���cGy�q[Q.�*�����^������^4��s��A�\�:r�~Rw�`uJ�%����>��щ�	�}�+gj[~���t����O���s]��Ié�D��lZMNt��-��� aO@�����eD��v���"9yG��5̘�\0�@$X�#�IN     �	�%��9X�1N|�����0��j!��=p@�,�0�nHP��Q�x�0�lR7^�mK�!s�&f'Pbl/��NE}�]3��V)U~w�Fk���}ǰN��r�Z��x���5j���s��xh�1!=�c��8q�w�9�M��nE�}T��xqs�M�����"�e�����B�y���4?�@Ϧ/�W������8���t��Ju{]��}�*��Z�5�
5Z�6��@�OP��_�y���yK���qW���@rA�콍�F)3�o�m�V�_�~��7�gyh0�"�� 8����!tW�a��Vή��N����߹�䎁�l+R�!c���<[(��!�ٽ�PF1��&��
��X��4�~�AH�@m稈�J�f��5�����u�Lྡ�����C&`���#�r�᷶�H��@2�k  ��px�.�殺��]ͭ>C���!b,�#�R�0�:�'��#c�ɬ�y�MRA��h��my�
T�Ee���X�Z��J��u�9P�jh�NA֨�7�4���_P�m��r�z���X�{G`�$�����@V�� 56�� 86J�E�����ȸu�.�ӽ������o�Ot��n(�z�N) �]��w���uy5�^��I`���ʃ�وOc�������DH��KQ�P��
ʑ���mVj�7�!�l 60�9�	�/�>�avh)i��x. ��a��/���8>���ہy��]���Z��A�*�H��ԧ���?��2f���L�OJ�"�:ܷt@o�y�si^�̜>A���ww�u���S����K<%&<��e�=��g���`pg�5_r���I������'<bܽ���iI7�������N�3���^�+>�o��7:%�`�;	tV��C?����F���L�DTKS���Ȟt��<@'mʸ?m�
�INVGb�Ag� g2�y�#F� �7�(�����슊�Ձ�v*��V蝈7d������u'���̶�����I�j�RN�j��e٢� ��6��{���z���������տc���d��f����Ǆ=1!c=|�M�Ţ�5,�!���vNb���΄�+)��q��u�p���yadՓ�Qt������|��������~�����FXC��zo �Id}��-	�u8��B.6�I��U�T��O��-�}�~"�qV�ي��T��+=d.�.��UpI�]�ذ������zըy1U{����m/�ys=Pi���
zN����*9�i�Ph6�{̀"�'�l�R��v�G��穟��a"� ������2�Z���3G<RS��������9P�>�U���R�h7�w��}��� d��"��p���GR��} ��Et���~!2�CM�@��M�?\�&�צ�L�I���A��z*(�B#�dp͚�&���-�py�����(�fC�{����b^���>�/���)��6Z�G_L��5}/7.Ԃ�����ax�m^�A��a��r�ZWVI����f��J�<N��cvŇ��]��Q4��n�Aν����5�@"�GI<%U�.����H�au�Ɇ]�2	�E��rvJC$Ks�6������,���&X���#��V&��1�]����
��i��1�#��LK���h/ƛ�$K�+s��	}��0d�򨞓���2�}4Ǆ�|�X�D�j+�/���P)=R�ivg�_�@b����L�Q���k�¢Է]r��2H%J�ᠫi���� ��u���	U�ϛ�ً9P��Y	�}6�kvۃ����ԅ���2�Ur�v���H���G�&L4.��	Z�?O=C�Cg��U��Y LM^;'\1�D�]]F$uێl��h��0>3	� ��X��oDA�žoՂ��ko4��B�cq�Ø�ȕv�D�Q~�n��z:m�9DЄ�@F������_��i6��7:�P�G���.�
7��!I�H��:��Q"�oj���Bh?�~���\����c�����	2o�`���n��Ԏ�+R��ܳ� �nF2���}�)�s\�7����a�x��/L�)�MkJ�7�K�� ��"aĲް�&�=,��a��m�D��ҭ�"����~�����f���5�ޝ2���X�6��4���`�N�����O���K����_P*�U���+�L�ǥ���@��},�RGd�>!I����aß���~q���~̻�c���M?U�����t�[��RG.�(�u	�/".��@��t�y��O�y�P�mn�����A<�_G�M$D
�h媷3}���S�9���q��kzϢC;����ݐ�>	+�CM�CǮ`/G��AS�7��1��6��"
 ��<e�K��i��z1���-Y3���� L��0���6G��Uv.8Z(�~æ.9M���뀲J�»nE�錚�y�Hh��F�S=O�q�� �P�k�0�?�	1��ԭU��૸5�@��Ps{���
<�S��1���>�ީ��8
�@A�X���F����P�e�c��E�t�C�R�M����40��%W�8�(��;�Q�0};�y���^�5}�����glР�ߍ,��e�v�cj�*3�c�g�i����[��$��G�(�NО��K�kG�Ӛ�*d�N�몊���WwcA��[�gD�yX�qn�B_z�D� >�[����Q�ם�~l�.S��ߕ͆�0Sqʄ�H�ӊ�26Q��G�st��D�~��x��������y=�g�"%RG��@)������κ�SH6^瑰P��51<4L������s�����{�\һ�¬����zps$i�LU�.v՘�� �O@�	�fM#=��H[��3���]�J����s�i~��ȸ��JuL������!�t��+?��f��8&jp����J��P�&W,�HM6���������!����	�B�֓՛��ǚ�.��S�u�B]"�a
���̓k����{��8D���!��Eτw��ӷ��ۡNs�pɇ�%�=|�Z]����iװ�Z��5��8D���?]ya�>�&	4�֗�+�f�����c�0�h��x�����a�`"S��'.t���q�� �ܽz����N8A��#F@�^7V
�$C�v^�cv8�)夹h�EF-�9T��2�����=�N��������|�1�1�Z�\ ۭ2����'J�XkWp!g3�(8q<C�nXÓ��o7�i$j����%S�����6i��#R�'��]+�a�Uc�s���)
�OXpq���ˆ�mΕkQ�/p)g܍Ư2����+쭩����! -�S��{��~\dFA�	�[�������`����N�E� �@J..F��E��]~;��zAey����h-=U�8][��X��9�/e��5�k��jW$�^�S0u�S��������,��j]�`�D�� ���x��y�����Z����(�|"Yr���q�5µ�sw@dk�F�-O�ᛨ�'�WϔA]h~�CYu���ETǶ^�^��G�lg������t���
M��@��2�^�t�_������U�Ѫ�N�S}6���3�.k�bB������E-L����@�q�'9�bGቧ��l1�D�[|}�������[z���-�zDT����M�?HŃī�8?E���)';�^crN�X6۪njUo7w�(����-���G�M�.k}I��};�"8|]E��-w�|80\f�S � .Б�� �6�{�B����9�4�xg�̥�m�6��I����t��X���%Kskaa�n�
E_�˵�ʝ�-��ktU�������xC�;8�A�9 ڗ�z�����4q�`�
�Toӿ�ퟟ�%�oF��'EvBTB���=��D%�]�j��Hc��Ļ��A�߳M�N�Π��t�?eS�fU+�h����F?3��������=��3�P��{������2�f��`������*Ҝ5�o_���� 7�V����%%�Ĩ��-�    �=�C����}�q�е~.���ˈW��͐�9��#k8�I�]>�e���\�b�lv7�0M�?4��q��Z������8(�A�����j>�w���6F&k�:A���q��'�ǆE$�g(+�kg	��%�$�҅&<���3�Oi��zmN �7	�yt#OH��A���W,e[�*��a��8����b�Z���%���<�*;8CkE��\�Jn���5�>��_���n��g���0�;c ��.f�D3RC.��+M6�7v�}�����Z���,�^�ᖧ����ȆH,��Ծ(e��&��(y2o5���`��cß�Я���L���}��-z�9�02�Ѝ���x36���z_��C:��3Q|^�'��Ч9���&��󱧝�^m�@����E�u�o���,w�r����k�|������Z�M����na���������"��Ѹ�ˇM����rn�R���qA�n2Q;F �Nl��V^碭��	u)<�?%k� �=��(�&qI�fK�gl�����C��&��gn�����q���`Pct�*�C�[ܺ)n��q��X�ȹ ��1����`MԎ������tP[��~d_���ZlV7�.����lpst��mA�3�:�bkẙ�4�9Os���'�����v�Y�<�4��[�;]% �^�Z~�Y-eT]����9X�7,d2�a.�S	��r�h:3�g�°+�+�(v$��"[�|���t��1�Ѕ�y���x���E�Y������0���<�	���h�`� z\;�.o׏߂8�br��d����v8�� �w*�� ^2,_�؜���D@ѱ������c�Fo�9�1�_����qt2���q�RS�8ع��z@��06�ى��֘��0������b����01����n�~��w[��a<��1�g+����˩0��y� �Q�v�"ʵZ�И�D>!�c&��(�6 �DcT��5��;�A}��	Xn�W �?���뀫	"�*���Q�0�2
�8� �[��[9�{�;�w�N�#aU�`��O�m�#�w��Nvz�?�ò+��/@�*C�q�/)�Yl�uro�k����tV[>�"I!������W��:��Ռ��p��M�ۯ��P�$�j�be���{���&�+A���J���D�݅oQO�C�����032���$�77�ƿY����,��[T�5)�����3+�rD��� dDL�����K��)�hV7����H��\��Ѝ/�/�r3H)�pt��*A���3}#��R��Co�U�jzr&6��>m������G5 ӵ�A�3<� �.,�ϡ�&T$0�p�Th�Ru�]���v�����m�ձ�RO� k9�pA�ĵ����H1���l~8W����j�l݈�&y�BhU�y�ݯ���ND|���[�����$���q�u�mx�bmaha|k���p����*H{JQ�q����^��;�P���@��)������o@�\�"��� ����,@�e�q��M�1�������=x����V�����4��4���I��o�홤>�h���_�����Sn����,�pWY���?P[���Yuµ�1�9\��%������uq]ت���$:+���mWk��yqL�Bč�m*>��������??�����2�ؓe'�eT�G4.ʵ��3L�6�>]��9�0z0�l |�L����N���_���-�U|	��.�h�5Eo�6����;n>����zzq���^����C�
V�. �mx.����k�y(�zш> j�m6�g}��D|����ʋʤ)�~;��2�e����=������ks�h�q��^�����>����6
��y��
�M�۩�-�y� ֕k�S�
�io�ln�ǣl1wuy��/TO��0��-���~�5^ٿ �R�4�{��h����~R"T�׌����]<��DL���A_�ݒ3ؚ��<��a���s���m����R���c��%��9H����I��=m��E�D����"���zv1:�D���(S'��ٓ�>=,pg �#�I9|%�������`]�L"N��=E�h����[G�Ȍj(R����<�aGL�yak�?U�������O�"��:<��C<Q�Bf_��d��p>��X-l���F|}�=��%����"�o`�(�ް����r�$p`�	XIM��x��N����0�0�`��x��Dȱ��q�/�{?��2��s�H�� ��\'�f[Z@��f#�\v<	�'�^��ǩ��UO���I��eqWn½�qU�3�zt{��͒���`2�i�s\���Q���8�BN_Ö��������ҞEV!��@�!����)f藐i��&^X���M�|��MlMg��x�`���C��
�️:J�.��6���pϻ8��c��Qu�,�P�7��L��_"<O��Y�^)�A�<�����VX�p>�<��Th��)P�����ĄOw �+�w:9�N2�?�w���1Z���{�P���y��9�=�������c�4��w��R�Ql��d����v�7yoc�J�i%u~z� �/c��"�+B�<}K7~Y���DL� ��_z2ӐĜI'��mm��Áe��k��7N�4`5ed��c5��J|BB���B��9��������#_�W��\�H�)���9�ac���7�;7T�?O��	���y1�{���D��@�ٻ4�l���e��B�n���ʟ+���z����	'��Pi�S���d�}d���t�����b��"�0��{+���#��\H�_ �����ӯ࿽�f��C�wU�rBz����}[�Q:��A�u�/�,O�u)E�������{٨|�4�*�)B�`���S,�X��X%��ѽ��]"~a!|6���I��t�9:�&��.�Υp__w��5f����t���NgЃ�n�z�ysX���_�����}Ox�����֚�#BW��BqM�U�{*4k�nK���7�׶9p�����lg��k��P��^э��MH��i�⚖;X�� ա��D�PVe�ԩ�D�������#i=m�`1� ��O�R	^t���Xћ��{�z����a7���B�8H2�`�֟�/~����}_& /�u��[�TP�mEɭ���(������ �O�ü�։ʫ����2�rtxm��
1)P�s�'���L�o�|�0�mZ��|���dGpظt�Cb���5�­��]F�iapϫ���q����c�U�`.4�
~�"ƚ���c�	%�����ɥ��ȡjZ�]�k�v^|\򊸩8�
Aޭ�!?��L�Hd��hF�!�1Sb�
�?����+l�C@�R]�k����tA�Rf�s���`\0���5ԣ�u�q|�����u�P�wx�f�@���"z�Y]�N;������`�(�D���c���8ӿ�k���v�[;]��i�
�p�_��&�;�%���a#v@5.u��Ȳ��a�Q�g�Q����a�s
�APѴ�@+�AZ�c#�f�#vu�2��0};���k~�ޞ��C)#I�s��Ggsl��q��xEL��h���⅒O��8�4,������ag0����k�+�;պ�#;c+9Nx��� �),`_�ذ%;���A ��V�We��|���o�^1p4�N#���Ӕl�i,m �n�ɑ��9`�֗��O<�p���!�������N��9�DUx�,+���;���4�����zt���	01<H ��؟�����4�l��)��Z��IM��?:)-p	��j�j�)O�ݏs���F�ݿ��ˈ����NlCh�cqF�Gu�e��z���dL��䪼��
V��pM>�:�����F�FM�hs�@���z�]д���N�=ó+��>�ּ}�b�D� ��(�-�?���S[�ߌ�p+� ���l�m�1|�Z?4��:�i�|�HZؚ���=��	�������4�.�Q2���*��ET    ��D�c:Y��fK+:�f�R����0�<48v�V�~H��/ϺK^I �O��������?����ɳ�N[=�2���t����m���������_(�ɭww�
��_K��]Q���Sca�d����/��4��w<�j��v��S:��̉q.��fh�ZV^|���m�MR]>��ao����1���1�%�>��Dk�ر�*{}W�������\^:l6�:��nӲ^zY����0��g=:pB7��Mn�hx���Kz��	2Z��ȸȞ���ъ{Ԯk���;����7/Q7��p��$��~}~3�':%�����ZF�\�K
��P�y|jӂ�ߊ��?a�c�jC=
E�@��ʠl�8{�=H�[s}{(r\y���nGD=?9;�
y�"�ZW�Q����K�:� 2?��sD�झC2�������&'���[��BA'(80Z��h������'�zSq���֥�il�E�W�;l��i݄��%(�h��
����' h���E�fG��9�)&Iv6ۨ��tK.<(W/�}��s�#]�V#&��`̂��`���[N���o��\�����h,��cI�ХI���E��=�v��x>��ƪ�_J��r�<�g��>�$�	B�+ט���n�<�Z�� ���:�`��Xy��65��g����$�^�K�f*u��l����*]�3s����s�C��v��9H��惙��׌}�t�zf}$���<y�p$<�T��^�O;h�+��� ��At�z����G��0'Z'���� �Y�I����nr���5��I��n<�h�%��v�q�Wr>p��=� �)�=G�Q{Q�|�*�5�'.�%���� X��́EZ\L�sX�e����b��|�ʀ^/�>
d��JjX�|W�6�D�u��
;�l���Ԇ�$�żLw��'�<����Sy�!h�~��Ԣ?F���a�Ӡƅ~�w�w�VWf��⃔���������K4��s�o���>�,���I��s>�8�l *c�Ʋ�;Fs�7O�*�ˊ2[�B��A�-�����M�-���"q���ng�`#r���I��!�e��5��`�]�w����h�(�Q�S�]���6�/�͢�'t4=?|�qM.���D�95�H�5"�����'ђk���{�P�^�/���"!�H�1I�|�c/�>�3=�r�9�v�U�Y�3���-�hϨ+~9[�$� �����*VC:8���G��Ds��o�3Ň3Ő�"Ԏ�m�>��6��<}���&�����Ҹ���l𻴠��ˆ�[��"����pRj�����I�R��|�j���}�v����f�O�qB)Ng�4�-.��Y`�F�(�8oW�;I�G?�/gς���&i�A�e�ұ���S�?�m�-��V~���{������(����A�H�aW�W�l._���l��+X �JE�=]��F@��N��y�Y8�ǁ��2��P�|V�7�~��vI!��b���)9��6SA����M�\} [�=���ye�/�|����'-�2%��t�r��Idm:�H���#�rD����Wd�Cդ٤@�������N��w�p��d�F�ADG��!�w�(W�.����YX�>&�oKl�80K�
�Z�E�n�{��T�A��HFs: ?����P|]���I<ё�x�w�x|]�}'����*���]�A�o���I�H�i �%P����;? 3j��aux5���/�r������������6o�=6%JV����Bͳ�C��cMxD��O��r���޻_3�@���K�ǁ?p�������	mp��{��or���Q��J6�m�Ԝ��d35�P|�6q�1�5��ľ��q_d�Ptt�<�C�'4t�Ej�/N9��LF��4-�Gr��?g߱�(�5;����������
$=��H眬#T�jԝ�9�{��bElWU}�Qh�J�7@ǟ8H̭��%����m�w�������em5퐾w{���~��X�1"]�$h��B���fe�t�����!!HCAE�����!��ŭ��e޶,\�Iˬi@Sy�hA=��p*W�N-�4,�z0=1۔������1�2Ԩ�_S���v�ހ�
Sv����r$�����LD�z����o/��,b�9~��?V#6��K��b����Ua��ǳMl�GϾoF����t�!ɲ\y���L�����/p`�)�a~�,M���y6�ͺoά,�<�>���O
'���!B< �Q�?��ҫ���Z����0:���]Z���JEvm��0�����9�"2�8gK�E����p(~|�^��Y�swY�\�S�npa�j���v�^�G�d��{�K�P�i�#~,yc~�/���z9 =P�|�ź��/�F�[���lfw5+ ������_�H������36�Ȓ�V|ܨ�����t�]芐{��਋O��d���~N���:;�}U
_j���ȥ��_�9�J\�6�$&^OE�߂����{������fN�`�O�%߆�_vr��E��J���V�#�z���9��8���ޒ��F!�lfv���������Z��xF:dm|4�7gw��IöU�Vw���A�P��0�Z�0������䦰�!����|f9-��M,��,N���`fn��������x=���cS��h����{/���PT�R�Bf�c0�M+ O6��BIhyмj&xx(G!��q�U�����~{=�E�7����.˸&��L2�B�2Y"D1�ܐ�jU���)2�S�aδc���M�Ϯ:\����v�P���@�Do��$�D1�����1�@���5�ƺ��N���WWtf{xX<[����:�ק��zc��zߨ㲕�e|R��o{�#0?���� �4�ߩ%_�_b�G��6��P�V�4�������&�t�o�hK��75��l��3����%P,7vj^j>.5�n�˶,B^^�@��K���d����-,/�,��o�����Ik�	��"���xNo5z��A�����lݧz��Y�^nl�xd��C?w����Q������a�����;Vp�W�oQ�^^�>Wi�笀��>y8��X�ʤ1�i�-���䊸�ccn���9�խ��)�d�6k�8��y����
�Q(p}�%߿H}�V��*��]�������� *��F�,g�}޽ư�i�p
���mI�����F �O�5�l������I�V/�]����xm�X�:��C1��|�g�F���M�f�V�ۛ2-%h��
Z֬9-�"�:�EL��7��ڨ��.�-o��G{�UN#�0�D��pU)sckm�<<-+D�4>�;�ȟ�ef��y~�Ey/E.��#�Z����=�߅u!�:i�j���.�7��K���Q�Vɇ�G��WCf1�$�մ�Bm��o�t�P�5^Zu�z�Pԟ�"p����D�ӳ���ga5O�Bw�b��5R��Y��4ݭ�˯q���K��bv5�Ϲ��%������pS��X�L�z���l6X.����j{F�"�u���]�6��䚍	wc/v��/?0"��=��'9��׸�!\a�󻢺ʗ��(�1W����f������5�<J�d�cyz�����
������������\�g�_O�O�� E}~u�g��������������0�^���G��[�V��lRڥ"�S�<3��K�zKJ�+�p�iv�~0�c$�����;ř7ܓI#E	,�R�Ng�\y�e������{��U�L�ؘ"�~�-C�,��
~�6�z���D�u:.4�N�M��G-��*��5�9���G��I��|�9%w?K_�$��0�a1�r��ɉИ��
ު����+G��yO�9�*�f�6j[Qc|��LR�����i��`ȑ$���l�P`���:3�);~�e�����N}��� ���5�z��Kn�\�pS`
�ɫD���&I���^Κ�:> �    ,tTG��|F��Ȭ�[4��v��1����i%%�,��.�:4�����ti�?83�c�foN�x1�_������UG7aO�V���L�vW����N�x�3��Ѵ���}� �?��ZZ�t/V2�����b�����|�:]t���p]��r$�"@�}�jt���g�b����Q��h���Y��K�j\c;�c�Sd]�_���G���x
����v1���K�H��]q'u*�կ�M�DL!Օ�F ·�ˋ�OU�<�qF���n�U)�箟�G�}��eg��o���Uy���j	�=/rpI���4��O�O/F��O�放� -HP��ȁ"��[�9��^��l����q�fr^�Z�Z53=��I�C͇�c���ؗ��-�d��w�z�����j��HM�g���~"f��Qt�����Q�ӣ������<D0^Y���b.�r�S����I)��I���iu�T�i!ڲ��<r��Q���́�?��A����Pɉ,��*e���d��@
J_j�ϫr�{��d����ޟx�R%��^0�ɾ��
rA� @&��;�)Ϭ{�|$F�|?������Wk�>� )�`_0	���Q��[%�ԍ,��h�M�"����N�_�E�� 6��O{V�MM3W�a'<�cK	��lE�|�FA `˕T6��DD)lͲ�꠼ƛ2|�w4������Qˏ9˳���eR-$�jՀ�����I*�ö�T�!�H�y#u_B5?1���+��I���/Y�U�.��L�ǫU��҈I����:�deA���\�>Z�6S?����t�9K���y��_���|�J�+��&�J�}�����H�i�S-Jo�%l3�8091/@~ml�a0��������������ՊN�]+�����pp_���M����x����#�Թ��z��}}�����e��B��)���-{s�.=��B�-n���x�/��'���>���z���PQ��pcB0o%�+��$E��H�&�v��O���z7J;�Kٹ��%���*��X:�a4uK���2��$
:uk��;�_5���n��
|�"�)�.���:���LV���t�$��T�k"���8kA��)G�O^N��? ����rq���?�u�l�$�&��t$���U.9��m$�P��_]���Vv���m��I �-��0�/}�~�j(�Y�t��W��-qۄ�U)Tp]�����\<�aO�Om�#�|����Ja;�޸�h���6�B�ZXaVh��l�^�7=�%L3� 0]��4���}�V��$��ྀ^s���(�Q]avC8>ـ�v�;�Z�5[�75����Iz����ݳ�6)�6�m`s BV�������z����0Aq�j������Q�4O����|�ۘc���s��]�*���غ��G��x�)�P-Bn�gV�.�y���ۖ �LO"�]� �G���m���,s� &�qu0�p����-���|�2� oJ�%83��(4�I��N	ҷ��8���g�@���(R���rّGZ2w(\�Ѫ�o%������q����Abr�Ƒ�=�]~�
=#M�Z9���N��=J�v�!Sw��M��B�_�թ�W����:������qT�co���rRd����k��|��'$�-��p�ѹ�n����*hF��݃}��qM��p���4I����?����^�g.ڗT�e��"O�kG�����.xƅ�Տ_�G��b�@��"�*��d|<�R�DX�8J퇦M�'Z�Q������K�KA�M�?O���h��4��*nm�����PA����}IQ��
}�0q:CK���g?�B^����X�SOYM)�S��]�}om�g���9͏�����p� ��S�2�y�gًz?$0C(0&s<A��
д�^�"�Gss+	��|�4[�πƴ�M������ҥ�X��Wl��\�����S��7ĕ@ T�X��#�/.�"fX9�}?��F�������c$q���qY�F;)��傸�\}۝�zЛ��8rG`�>B�4��i;lo�.wB�oo���k>Gm�"٩۫�{�
_v�_BD�4���Ɠ��k\<ɑ���ux}�ȫ�La�r)�C��J\���fh{��Nƛ��6�����:ƽ#V�$u� ���|��	�j$�+����庲|^�O(�^|���Ȭ"���)~T�!�����z��d�5�~/z�� ve�q�U~f:ǻcN{����I~��ik4xl��d@�\iygnw�U�N�a����߈[��W�{�Z���wj�yF��N��0�gcnnc����o���,���8�:�I5"�v��A[w۵N����%_�>�!O{�Ҥ����ˉ����o�� �x�;�)��I.���E:���p6����Eb��n/A��iQ���1QǏ�nrB�L�����]W�o$��Ŕ�J�7|[2���^����f/���n�|UG���z�P̣��H5�E���ٜV
!� C�	$<�m��]��݀ߌݗ�_�ƕ�q������_Ù��#�2m@z�!���
�0��U����F����_9���a�fW_ͥ�A���oͫ�6؊��	�������邶\��6Ӆ���m<�S�����aM��^��) H���V��N�u��p�:��Ϩ�>g��.[�/b��Ɛy��O����8�xms�RP [ġ�����=�=��gX�M;v�k��g���� }��l^��d[�pp��5�8�����,jbs��Vʚ��y�:i�9�yS	~P>��V�:J�c�0{/�BS��\���֤����U(^ذ<�}���k�#O��n�m	̓�I�o��p�K�����R�r�z���H���Y���ڔ�%��|y������oĠK�f�G@�]퍓�/Ӫy���UD�	�ew��������R�t�&����3�ݥz���gfvdx���pZ��Ņ�j����:`)�����jq?ܡ�z��z[�:)��'"�?@�C�3|��(���5��޷A���˻C�7�����Gދ�\��;k��P�s��͛u�%`3�#Cu�����H�_T�'�H��|wѱ $,�5(Q'�M��-�]��F<��i�td���Z��&��?N��۵.曜�-��D�ܖ��$�쬅>��K��͎�2x �'�����@�]�͖mg;=DJR9�~4� ,w���dR���!����� 23;
�#����su��cs���'\����8���$�J�ps�������ʟ_�ب3&Hhm���?�%�����j�5q����+�M�ҳÝ���DlEK���.�������y:\�%��p�y#z]؄��Oہ���v/��."�b������ʖ!�C��yAؐ����s��a���`��M=%���u�ˬ`�||����]'%�7��K���|�gBf�G��=Ψ�1�k?�Qw8~���������R\��a��Äa��,W���s���feQL0�b��S�#mU5�S�������'Gۻ�5|@y|d��fgt��lȷ�;?�%l�	����5�}8��_:���t�B�k`�k�JZO����K:`���/��.<.����Y|,Y����|�Kc�M��N&M	��v�λ��)���AA)�"K�����-�� !�淟�^�{��,�`"��TW�βNR(�Ȇ�5l�t72-���QM��P���-�g�K�p�֩/����>3�U�������y8��b�SOA�<-6W2}D3��ͺ����G�6�7�����g��a)��rc0q�\T���y<�=�z^{�N#�����t��*�߸�>��c���A�$���ݛ��-uB ��ur�#YC��b+@��^����}L\�d^DO�ȱ<��k#=t*�p�P5�����T�*���O��t�%a�z���l>�ɡ���z�D�FqxN��B�x�a�����ou/G���Ck�%�� +IT;�a}є��>'{��h�;�0a?��7v�I��P�i����p���    ��m�KY;R1S��x���j�fH�h�����CM���E�<���
3k��劽�)�����	��Rμ�G����<�X������Cџ?����$ Z��͢�}O�l�����G�;�� �9��ԙ�|�38��:�j�G�ן9�/t_�qS�z�3�>��(98��]�	���p�dr���#J����I�[X2��)G�'�/n �qw�5��J���>����]S��n$��N�}=W���`��=����Cn��xّ�0���Q͂�zv{˽�d�Ep@[7n��юf���'@�E�Cͨ�'=��M}z��4d�Q����N�;i���gC݊�����l	4C��I"�O�er�t9^�%��@�3%�7��.;�����P6%�P�x:i���^�݀~ ��^^��>��Kت6v��0z-���Eq'f=p.��%>U{�.?.��-bCfl00����E��f��Z��KK Xy���,����#�glC�h/`+��2��4�Ed3ɏ���C��r>�@�a�e��m����&��=q"]�J�]��[E[�6�=A�S���{�\�;|ɤ�c~�����o��b׺���PM	,{�5���v� �$O���{��@b�4�X/�|�`�@t²��B[��zSU'�(����k�	ٗ�̤N�Ĥ�^��o����
�ܓx�[���kߏ.�Y)�)v��X��� ���
�	�卛����Ɂ#~F��p�����D����`o�_��@s���e�bp6��(��o�}|!"��A-3z��P�������@v�@��8�Yfm�e������QX�o.K���Y�8�Mq�m��g�����2&B���"�讷7��P_�x��t�U�|�֔�#�?F|�z����\})5�$�5��f�j��N�1�[��ʈk���Щ�qU����EX�,���zf,4yi`C��Q�]��g��g�vK]�^?Y�w ��s�X|��g����?۪2Y	A$A�A�e��e9$�E�)ߝ���WJ�p���x}	�L�0���.}����K,���o�5B��@Ӣ)
��td!d~���>?���I�:�/��c�wxx�>\���s	����_��es�����}p1�T�3�2�=X�y,<��x���� 6g�~�G�7F�J�o�7���Mb��̹r`��jxf�0��y�]μXD��y����i���&~P)&��l��m7S/\و�ݝ��v����6��GK|s�_B�`wbN���n�2�q�U%Rݯ��n�s��&}�����Vl�S���Ϗg�A򏵛��/�v�Wf�Bc˓[x�+��hT�p��{a S������v'|�>/ ����7�M�=�����]LN���zE��Ҡ|����J�"֘qGc��p*ؼ ,�9~�#~8%W�-�t6y&֗��7a����N�>���MU�9ʰ���w͑%`�A&��/��R��^��U�v<���kX��J^���VHwL��z�j�C}N�D��]d��{z������WL%f�5�7s)h���������4
�9to4|���)�-�Zě��0t��c�ϛϜ���ehuB��E'��`�;ʗu"�'%�v���շQ�#o�Kx���P��p�74�����ܙ�2��U�6�J�jW[j+'�X�~���3���6�"A��� ���J�������.1���G2ݣu���DJ;�;�ߌ=��3<�ĨÏ������=W�:T�F8��RB�?�7T-&jo����B�~����Q��(���}��>Y��f���Ҳ�"O�:\T)�cMC�ߔ��݆>���|~�!�	=�#���)9a)C<����j0��W��#{�fO�.����,���%8�l~v?J��'�M���~�������)P�Ds;���\_�k�`�d�ף��';�ҿ5��ȍ���ma���ӺF�ع_Aw�`]��z���	��Čvg�����NΌ_.���p�p��Å�r�mA��2�:^�c|�e�ηo���cw���ʾ��,aB���~q�#����.������ZSQ�ګ��@�}8\���V9�<�t���^�X��ָM6�n�6Ђ@�»���Z倍M��J������h��9�|~`�G)��lm-ᚉ���g*��?����XwG9�v�!�z��b���D��\�X����O?�B��}8�&�>���z�Ϳ ��*_5�����ݔ�\�$?��$�d{
ҝ �ӛ������Ѽ���w�cػ����d���~�E�x�~���t��5�c���=�]���7S:8����R��@��`�v<�o�3� ��yz�)YT�QQ��EkNج�[ާ.�z <��s�}<�G��������������a�e{�$�h���5�t��7�qp��i�/��ij̹���u��"!��{[U�V�K �<`���ߗ�+(~o��P�7b�%D3��!K�u�y��A�)I�Z|��R�$�uC�e�YN�����a�:?��A�C}��xN�g$@�.lzgh�Ck
�����7�.L���~�.6�&y��^B��r�x6^����<���Zb�y5�s��0��8�1^3q��T�Ƿf�)�������&�% [��5Y���T*��}k�Sf��{�x�dҡ�R���``���CI3'd���7oY�R�����ѭ�]t$3D[��p��̉��j6����7S����f��<'{��t�+���[B-����D��9�]��	�j�n1�g �M�����!�rF�ád�"�W�¶7�+�i�`tgj�9� ��:Q�I�y�9�/u���%� ����Ƒ��ʩ���Ѵ�w%s�강tW�a�maϹ��pʡ:�~���C�qO� gn����G|�@ҷmҔ�h	ß^Lz	�W7��넳8���� &�]��J0�@S������ቾ�K��_�a�>��L������mB��]D���)}�>��\��0�%�x�G�@~\�����pZ��J�4.��Ig/��x�Dw�F��a,Z{16�`)�~zV���q�L��9�u�7_�iT��ܸ��HH�}�~���V]A�`��W��&���2�u��\,���D�`a��>�,�y^W-iRi�BVUҪ)	������ghf�ΥH��n �n��.�N�7{�K�����3�c�q�e̿؈$n}ӳ�@�O��zvP��7uGp.=8�o�!�0=� �*~cZ,o�X����o\��k�^^�R��&��zA�S$�T<� �׏^�����<��?Ҵ��t_�'��'r�
?��c!0�8��7n���`����v�E����&���S׈}
U^:׾� ����P�+�&�@S�;�����υTI���&jo	���0O� �N&�үaӢ�@��b�Q���稾��i��# 3�lsG��4���͉~� ~�R<n/����Y=xG�`}�Jk����ۚ�NIv (��:Mu?�Qhfz�S����㥇�$J]Z�Yq|���c�a�R�)@�0�p9�/W+_���r�x���ǐ��'s��w�X:s[[w���,\5�b��J����������޽Y�Z�4��A��|kz�nc���u�қ�q�VD�uZk��"B��jV�Ey�"�-�߄.a��}��@^���P�_�D�7�aR��:��p��ݠݝk�*�x��H���@�����4r
�@�
�I��l�Q�:<�����}+`�^g�(E�8���m��Y����}�w�&�ء��YiζZ�- ;H�tE*�uxih�BG�����ݭ:�{��w�YK�f��I�i$�-W7Ǹ1�x9:���,��wt���Y����	�`^T[[o��F亄�x�B��1ƒ�i���Zǿ��8�Ǟ�������[fS&�d��9�,֨k��n�sh3ѣ 0�B�A�C	�i���ٹ�w�S	��JE;��mr>��#��bI�e��wo�p`�9g>�����/�vBg��*W��I�$A�V���ݎ�昂f    �ϟ<�::�"�g��p�Q��n�Obx���[n���4[�s&^�݄K����#Fr~c��m�x�6R���畧�U�[���R�׏���)���d�����ZΉ�YI�??�a��xFP��F�ų���k��d}7c�s�0�X���3���E��[c$���	��OΡ9�O������,�no�T��~���{S��,�#�ᴄ��m����Ǥ�'�ڜ�Xx���N7��IM��� �K",%!4�7N+���w{�f�i	�L�(9{�g!�M��c\+�R@-v��U��@��d��G~5�Evjoƫ=p��})�����%d�:�|o�};Q�^�h��
�M�Te�ӫ�jq�VŖD�����7K�f^7����y��tP����xv�NE���`�s���zMY@���J3h�������1�Lb���{:�C��/"�`u.ɾ�8�H�M�z�����ѭ����I�P��I΀_���#���1��nb_o�O�_��0����"�r�8�h�;���%lt86�y/�|�a�M{k	�L�B>�S5�0������x�m�V)G�^��f��f���J��>�ii�n�Û�����q |Zp������ѫy2��l&d9��zӛ��g;�C��K�q��,���`�T��H��:���mУQŋ<��c[z[]����M�ִ���r�0�8c	�@FL�����[��@fZ�q�7W�nZ�&nV��\B��ުR�f"��j��i��':N��t�g'pa������T�[�<Q�}�ԧ[�搐6~�^"<&��M��i�~B���z�>Oϧ6���>����f ��8>���^�N�-Π�fCT�%q�t|��	@�ʆ�p<��nfX��(�����]DV��S��T\�j}���#N� �W�M�r	�| �84�?͑�UF���&�/>F����U��{2�Cp͕���:>����g��]v������y�)��=�o�o�(U���+lC,���.q2U�͹�2�85��~3�Z@�D���I����82�����Kj0eW���d5{���nu����Jw�D��=xѐ7Z�%T3��E,�CE6g�?O!m�߼�rA�W���C�Z��,�b[�JQ��m�.ҵ�F���kf��������A}��?z�O��/x�^^z&�H,��[�é?��*��}s��qs9so����\?�������W?���{��*B�a'�j黼���-�G�Vp��Lh���\O�v�?�B(u.�([�ף	�9�X��+�\��(�EAB��Ĳ'����f���=^n���9X�ݭh�Vη���Vĉ���@Q��5�"c�����u	�@DL��cԕ;%���YPڰ��B@�L�"�H���jP%��U�e���(y��;����	�r�u�_��݂���͢�sa`}�z^M:%t���f��B�o�-K�:rr$���������z�[%�&�Ց8}y2zC�>��N��[��������I��dgќ����.�*�Gv%��w�,-+U�v���H��|�S���k6�>	������ok��D�ho�\C�%=XE�K+4\�^��~��� d��Y�s03ۓ86w�~������໫�]�MO 4�ȇ� �2V$$nWI�AozLK�f�'ǰ��9%��4�_���Ú9��^	�$@�����WvwC��z���a�p�����k�IΣfb�+�
윓�Nz����JZ_w��n��rM��BJR���7�`K���Ph�?QY�ӓ��^RC��~��7� i���=�%��m��u�Ǉ���o��K��9��cB�W
+cp�h��qJ�P�^�*�&ԱD�S2C�%��Dw.7�"n���YxA)��>��L�������wK�_}u-�_�Yr�N���R�.��2墢�o'0E�p	�t�P�3*��t�j�[��OT�{'�v�QFC�jL�CZ�3�%Ϝ���ȫ�d�MG��-A#Ј�˘5j�2)��OQJpg���xB�p)=s�v�8ǊΉ�~��������� 9�]���MU�cj�L�\�yh�A��
!n�rg�X;f�[�NK�6'�����i����/?�(q1;d�!���W �cP�:9o�\	0� T8M^�0�խ��3���ѯ|�NE������&ݍ��p4t�3�o1�X$�٭]�h����)�q\W61�y�0������#������aOp\@u���N�a�g�+Lߑ �.�����τ���4���-���z��Fo��@i�\@�(Y�ñ�O���MR�i�.��	n�Ѹ�9%=|��.��.���8�T˭����2�j��n��ta�,���@v	���Nm���������������+��o<>ێ���ֳ*�>�8�ށ�g~�0`�U�������5���ߋ��yUfj&ж�������ʚ�������V�����q	�@CN��_C~���ӟ�A���Z��y��Ԟ�X@���Ʀ��xu{��BR�V����?<@�:�����
��X��q��\L�4�J�P&��U�E�����/`	��� ���0|r*x\"�2w�U"E�z�qN��Q93&��ƣ�u�m���"fV�xR���8MY8oK��׍��a�0��5>��AF��>���k^�n�UK(��M	��
��(�N�?��I�V�D��Ss�I4�)����v��D$�F��7��%43��V��b��
)�Nޘ���c��(�c�T)v#�A}#����g��[z+�c�yEJ�P�2�D�{�#+��+����&s�;�&w=�����da�q�R�Ө�A���a	���0NC�1�U�G�����rk��0����bˬ���k�L���I!�-�Oh���X�4�����ũ(���^������¾CD�Q��ծ�j|�����,��\ }�߳
{�"'�W���m���9�}=�݄0*68 l]�2%�tq)8B�R���R����H�,����c=;�R��͇J�Mo�Һ0]��n-B�=t��r�A�P�5�-����%@3�#<-���X��5����Q�;X�#���3q_f�<u��~ �ю��#pW��g"A~��~N;)s FbߙF��ɺ*WNh{\r����+�~ٯ�@���H��}��q] E_�p���Sm��[�$�ۄ�8h�Xl-��L���%�4�ќkD�%i�~>{"�"�o��.����^�����pu,}M��%���j��Ѧ<�ܺ��Jʒ������r&x������}��~����<��4i�o�*�8��^�lU��6�ި<���,�7Ud~��/�?��^�����-�g�3�8YʯY#�v�"ED ��]�F���j�wt�N<ri)�[?����r��&h,��bԹ=W�E�����Љ
С7��%0�~ȫ,g�g�gC��[�V��y�^�ح^��¢��)�������>$9S;Ρ�ޔ�G��8S��m��%C�1-�ln���h�M���P��(�b/P�{�9��ӱ��Cf����)k�<6l�Ќ�I��	mK{q��4��VH*^Q�f�
���j=��ϋ>rfxl�+�;ؒ6��|͛^�:@4�lI�����An�rwN�s�uƲ�m芻ϛE���cf;1'�i�O�ޥ���ʵ�`,2��4w6��w�؈��|�_�u���f�y_z�s�7[Q�%�.]��RH�zg=��d� �a�m��mЗ���K�I�;������v�����,n�i{z�>W�/�Hp��0`MJ��7��,��W.A��W��&)�>�� �M���+�c��,�����,Y2"�L��m�F�'ܣ&)�y;О��_�Υ��)G����k�����`x�/v&˃�����3/�u/�l�!<ъ�y�2^�C=��H3��i����f��Z��dX��*Uז5n�m-��J47,\a�C�w��5�%`3���l�;�W�iK��qi�^���- �ԡ�r���L�"��(�2��]N����1�x��GL��vK�    o����<���*tA]�6��tM+>���S@>�_xH`f{���Z��J�����'����	x��)U^Pt��b�֞O�ZP�N?>~H���B��Z�)m8�e@��)����$���0���t����֜�Sʂ�e��Xj-�	����nX�W��T7\��#g�&��6(�b����JtA�cۇ��u ��д�JL9��Oi縿6O����_�"��{��B�:V�K�i�$��٠9�e}'�_B5�:ͥ(�*�K����e�@�sV���)gO��y�x���	G��M��#*�.9<���a�c��<~���G���v��3PB��Ęj *Hi �j�L�DN�Ǫr\q�`�����$�������p�ׅ4���Q�JLlx�b-fp͡T�j�'��������k01�W�xI�W��j��տ����q�Vs輏L���D2=�*X7���9n�N�f[���o,��9�d��,�؍�i���Mk�V���`(�ڬL�s+�ĭ+팏����:�Bf���"e���D�E���"G��B��خY��l��:m���|ܹ%��	���'��W�3�y�Kcl#�b���p�#wJ^���t�bD��(���nI�ۚ_���6�����@�&�{R����^Z�U�<�I�K\W�w������ʝ\Gq�N���Z8������E��'a�!iU��b����T�ak�>!v���c�99�����9������F�%��83����^┨�u:�:�$q�o���f�Q�!��n@Έ0�π�y>�����ruu\�S��bv�v�)�,£�����F�����%dЌǟ�"qܩ��6�k��w�u�@�e��i%ʨŮB�X�6|���m@��b��?��It��Lummt�(oԺN׋W�W�r�(4���=��:�dX���^��"�9x#	Y��< S��O�����n�Ԗ7m�e�=�{�x�HK�i�;zcY���3�o�K��	4*V�ؔ��r��)WmZ!G�COG6�oAP`Q{�q��N ���d�{�`a3,�:_7k����l��Q6��'~/pR]�׾UB�3�B����Td�� QU@|��Z���b�#��s�z�oo�P����f�{\%�J���s��L�_�J8�m{��ZE̠r���G���8�?�W�2'<U�"������-�aD�Yn9Q��M�������xp�g����~Ø�����a�.p���PV%ö�2q�;�M�k�B@A�|㓱���@s�eI�L��=_���v�9��m��Ӿ�l��`�r{:XQ�.���vǃ(s��;���C�Y��³,q~��4��=��Z�b��rv=�-�Z(~[�
�s�)z�v��z�������R��������N8��W��)ܒN�kG*�l3^5߹,A�� �s�t�;��C�%H�u*���D%"F�����(�Ld�ݯ!z����/�L�� &*U��a�������`�s��G�?n�@�`9j+��>�0x�f�m��)<�����O�[<3���6�A��[����h%4)�d�N2zޘ���Z��@�41�^h��ڦw�i�:�+����� ܭ,.c𬄒��l�[�M�hfu��'@_��������ء�.8}u�.�殗��LJ�*�m���r`n����̄���sd�O��Ji/Ϙ8�!����-0�S���@��0>�����K��g	��MT�ӑz�P�6��ރͽ0�
̫Ƀ�� VE@(��d�d��F�a��� ���!3�� 9�h�$u��ZS�c�b�#�w�S��}D�c��4'��ݟA���������������4R|N��,CgǍ�qr|��:𱶨����V���U7�a��+��[E��`X��7��%`��747máz�%�ӗC���x����rJu�7�;ϸy�ߪaƃ�m�����o!K�f6GId���l5�;~_[ݿ�\ [��gw�ӛ�nY3d{�]e�dgDXMH���#����1 �R��F�ݗ�Zw�;�� [��N���.WA���n[]�cY�J�EAG�%<�>g�q{u([�y��[C�Иa=�2�I/�:�=��PP���O�GӃX�j��דOɻ�������l`�10�L�=�;���p�ҬĠ;�ֱ�������Al:z�kJ&?����oZ2K��	1��_��4�^ٳ��hV�������ٜ�`[A���#6`]P6�R��P��&F���?�f������g��?�~��"D��+��X�iW�|���8$������]p����VQtJ2ǰ)�r*��8>��"��U��B�
�`�v v��3�U�4���ܺ]�P|��˫0�S?Bv��8�)�������/�	��Ս��8�d����%=�lM�z�)���&3n�b���Z��}t�H?MC�}����Hr��w��9�L���({R�����uU6����0���d�#��My�L[M_?�x�֫Q�*U�#���m�3V(�ݞET7�M�#�u�8����<�C0t�&zt�U�ǲ�,���(��[�,�����.�Wecnwlݕ���ۍ�f(��h��q�:��|6�S�2"Q9ix�M�w���J�F�1eӎ'��f��8�F����2���?g�qM� ��P�o #'+B����tJ��7��3m�Aew�\>{"'�\��	��)���"��Y9~i�u�� �i'g���G�.��Քz�˵T�2Ǻ�&�g��%�w��u"�{N���ƻ{	�@��(q��w����Ů��币��*ii�{׋�����ܲ]�ٲ��� �p��|,��&`�[~?f�|y|�B�䮕�ղ�V`�D�8��OI�Z�<Ţ�V9���?<ErB����H暧7_l�5�����'��S��o�Ț���C�i[Qw��`��ߓ1`�4\!�9�¢D���G��g�������ŗ�k蘝�lo�KH���%�x��{�ڽ��YBN��DV��i��-���ǲ]�T�2s8�/ ��n���;[ۑ"�Q��v��&X_t���9�A32{ڳ}��
���P�Ȫ�2��n��j+7�K��kH�� Qd$X�\���/���I�7
�F_�YN�Q���콖ն������_�t��%�{qn0�@Ȁ$$���LP��%ػꦣ�Vu���9L�LŚ4*��
}��<W]��&��l�XP|!:E5�c��?�	l�ԧY8���w���AhE�#WCGuzry[\[�.:uU�K���1e�S�$V��y�E�#&l,j�Ö8�|ײ�L���,���3�.��SH�[diY�)�-��BZ��y�L辸���w2�_���a�����<T�([j��a������Z^��+��3��N?oh� ���0�.i= �x����&�b�-�A-I�P�W���:J�W��j/H�E7����G�����,F��q�,�XvĜvU;�u�X�׫��M��� 6��c�^�U�sXc���ѐ�O�t�=�i���� ,K?��>gFϙ߅�:��,���MS^a*%�9�<���&r��}J18aa�I@\}X��LL���DĹ:Ii��C��0����_����y��?#�0l�45�΁�Y�������Ni�^\F�B1y���YCu��\ș�p��P�u�e�����M�C>r���>]y
K���&��JM��[�w��t��\x�gF�LM=5+g'�j��9�
�{�/�9�\�� 6� �w�(/ė�z��7t�Y{��#ǧ��))�Di�i�*<��������FpO�����{Gk�A��sy�?F�)՛�x�R��.�~[e2I��Rg��q~^�������ѯ�Ҡ�'I'��KR����:�_N{G$�ur|�H3�����j
�D���Ԡ?� j)}r��}V&�c���_[o�W�TO��9��.��������v���9�"�0�d�*�(G��w��!�I	��l_ޜv�e���ض������r�S���9J$m��2����5����k��e>�J���\*c1�a������J�*�I��0��=�~�#�W
hQ�F�/Z^�    ��.�0¼��צ�Ì��oZo��֯�*k��.��hr� �)�ݦ��5��'��[�R%o�Bw(�p��Qv]c��7u�:�<~Q���S��<�Qř~Q��X_l/֛H�������J>���}��Y�BN�v� !#$�	>F`z�D̻��k�;k�p��~�@6�����UA����*V��H8ջMmΨ�Ma�<L���Xd}gC_�k��Xm��p���$����Ĥ#$'��`m��Alo��Rc`��Ǧ������	�T0�<���"y�juV�{�d�"5�'Q�X�	����������r��v�A>�.s>���mTzKqJ��ݻ�g��>�� ^%j.Q[n��)PcXy2�2(\���IHK�P}2�r�K�㠊�ˋx8'e���G��h� �J�߀���S���n�Y��l�j2��~�ћ�]r���.��A����
j��A_7u����S�|Lb�^�%��pI���ޝ��6���#7�3�hX����!`��h���؇|C4:�	��>&����P�M�_]�H�4��q`%�JN���ه��QX�`�::�|R�ů�%vġ�H�)��7��K�䜥ѩJ(�E��n��҆�7�T	�/@�~vC��"M*T�C��n,\�������p��&Ol]sl���7$i�	g�'_U@>���Kn�\T�,�g�yR��9�4c��QTYaxY�[��ئ���Ի���T�O-�'�b�$�ǨeJ_����(���ɉ����s��P��>�|�D�a'���(�%p
h���<��󓖼`�a櫿�5�p�e0�!Cz�nWq����Jn�x@_���9��Ɵ����JyN�`g�BM6�*��1%�NV�w�B!�D-/�V����@�Q���!������5�S<�i5��]���=[�%��5R��n�����)��;���	,?�w	\���0]�n��o���]��D�;5n�5R{
�U�����+��]Rz�İ3�ёU��}�o`�(W�����5�����6������,���^�,�s�/=�tǀ��3R=e������YWy1"�ꊿ]�t����]��7�����W�66v����$Ac�'���/B��
�O�
���ȣ��ҫ�\�s�9�p��{���BK��Ig�~"��(l\*��
p��%x�ܸ�_��_b�wț|�/omBq�[a)�5������O����<
F���=X��&�)�Xm�h{nŭ���6{�Z��$����C�;	�G�����ggX��+��Te��l��WR��$�=�nK��8�kn�^�����փ#<	:_�P	K��q����@�x�ƨX��%ϛ�����9)H�n��ax+)GX�tb�W?����t�A�/�LC�j� �����^C�H��+7��ڦ��-,j��C!��\n�c�V:�Q��D�Gv�O`l���7���3�{)���~q�J�NL��TN�a��H�LuU+1"3�ɓ���&:=6��Aq3�~��6���T����PPY
�ݣe�R��7�`��x��r�@�~�$�>�#�_�H�G1^��L��`9��Zw�Bҗ�]L���,ծ�	Ka��=���䥙3"����V_���*~ԣz�}b�3��R����l��V����K.�ߘ�V%ɨHjN�
=э����5n�?4T^7�p\���t����)�r��IvZM�a�Kw巻rF�g��D�/>~�HG����W\�XZ�Q��ҩ>�
��x)����tn����E����� !l��Q��%nz���]r_?���������M�QD%�2�ɚǌz�$@�	��R����
�T��\��|6�r�W��P��z�����0�R�*��m?�=	
A%����ݧ��gYd
�b_Ķ� 1|N�K���"��z����].(�l#	��M"�G�$��C�l�>��_��=���<q�C(����"Թ�e�A���=I�4Ì��D<!у@=�m��A����Y��A-�>	��'�v���O�]��
^�'�+�V���	&GT4��~��.�SM�e��v��QcJ��X@b�~�ad)K�[�I�k��8�H(L�\�So��(k��N�i�$�.$��*��d�E�Q��l�^�|�(��s���PC���A)��*\zqi�~k���0�t���u�é�I���S�9��)H4BB� ����V����%t�~�8�F��m��Y�n�ծ�u>�:6���-�uf�����_r����?�]SI}g�r+֡m[�G�H*�zIMZʽ�!p�o�h�̬?N�?�l��`�8h��ߒ�9u�Ë/���{�-\�[��)�"{������I0��2�k���:{�}y�!�3����E�h�vbN�����O���׊"X����C��3�ʓ�ƈ��А�}q�����ρU��|!����&ZZ�f��V)�\��:?t���Op� ���_�	�@�?��}�9��M�㢶�����zR����Z��ZV=(]�t1'�O|��1`\����z&�S��-煏�.�|�.];`��7h��GD�a���D6F}���UB�V4��>U�^�5Vh$�TR�Qzg^��@J���O���ܓ�zu+k��5	�z�"����4�>��[�S$tj�{��bĥyE�O�����5�ְ�[�:I������0ǸO � ��Uc��6��8�z9� �`ב�i�t)����������$�����Nwz�<�?ї�����/������q}.���T(r.�,䑭V<���EZ��F��It�6�}�������_d�`~1���b�D?���ZgG�L1��|�O$[f�[�t�� :^ �~�ٱ3���a�;��4ӹ�j��x��vSI�������l.�VvWdvF�s��@��a�'��}�/�@9�3�V�0��*Ɣ2R����Y��nm�P�8t\8��M�bg9���*����������	*�/V ؂�1�}�4h��M�ӣ�����>��[��ޑy���;M��%�Is��#�_(�4�w���ՄL�]u��v�]ţ��{|�'�V�2Y^�,�(I��X�OP������M�$��z��v{�nL���r�h2z9��!�K������q�.~9�z��I��<���=�k[Fw䶋 ��+��e����BnZG;��Ez��_%(5���o��fy�T����;�և%�ڋ\��c�u�*'�j٥����.��&��#>�566Z@̧̰��=hJ)������mp^*����@7)l�ڢ����4�73~S�0h@�aؠP٧CI��[L��ƺ��N�lB=�	��[�ݕT�FL��auE��/��p}�G=VshL}��N����6k�=�^���m-7|bL%ݡ�maKOɛ")���0d�F��cl3zʰ4��N�|9�=7�)�G$t���ٝc�-���V8Ԣ�ELBG@�w��:(�V�W�9�^9�+7�{�X?V���(ޯ��ro�rG�ja�z�{�5͞!�L��p$h���@ДE+�]�A#��~�z�yJ/�[zoY3�QJ��w�?/!�t�1�����$*����<��e�Azn0#�`3�N/����9��y9�pvt^��Ç�}��r���Ɏ�џ��Ԩ�����s��'@ps���w����ea_���y��s��-)ʔ���a{�[5<Ό.'��w �C�`xp���lz���1��	C�� o�C��m��k΃��@I��Ͳ3\�I<��X.��7�`�_xM7���,�X���^^3�՘�G.d��k�E����`c��`�/}1\��%~���+u�鿋��kB��7(��T�v�>v���\����R�u�/gh�S`q�	���Ϲ�ˍE�v���ކ���B,Z�������`�6U �tw2ʹ����`��xP$6�����oyZ�Y�+̌K�3�K�l�Đߙ�U+Z��<�0N�괣�x�2	k�4��g��Z@<�E��r���vÅq!X����{&�-�6%��2�q�g��'��OpĐ�7���׊n�HGk�ir��6���-?�⦴F�FY�7��    � Fs�����
}���i��r����ե���m\}g�{ނ���SXb��;�
�����#[:��K'S�-v�5����x-'�)�Q���%��Y�f�'a���nM�k�p}������s��C�k���2���Ɏ���t7?�M��F~@����9a�u6��l))�]]iL���J��Dh���r�:���7������@�	B=F�]c�2�9C�v�Zx�yYG��F�WBx��:&����Dz���ˈ�� MA��W�4�mA�i��0��۩-PW�z�J�>L��4��ȼ�c������r-k'��
pt�so{�/�f�!�1�;�n����B�JG�TU+lţ�/E�b;`#�m�c��/-����ҡܣ�*X*�ܣ��/�:�I�?8ڂ��������$0d ���`��E��k�` wX���Wm���:7�oU.2��i�%[�q�-���K����j�#�M��}�)��@ԕ��.�_�L�q��V�)���׊S)b��	E5hoLZ����E[��bi������	L���i���	Iv����d$�.�
6[J8-�zfl>b�pćz�<��co嵥hq�����H\�"&�Ξܲ�Q��q�ؚUSS��l'A(d�cǸ?��x��eM^G?lN2�w�b��5��?�D��'�R�6�6���D�� clB��������:�z����¿��%/G�KZ*z�%�ʚJ-?�����\,N�!����?��Bz_�Q,�^	��w���B7��|�h	�ÁL6%[���l�[/��:#+4��02��������9I�l�ghE�a���ћ�g���en&��P?G�k�9x��A��~�hx�}�Q
�o����+
�z���M�4�s�*�֕{��&^$��.ذ�Px(t��������˦ʦBo+G\�T�E�:�Ά_�_��ǂ����,�⠰�?��"z=��:*	.�O�/{���4��#+�'	�;�h˅��	E�َIp���yP�?,d� ��tp��k���<G4Z���E�jl��k�r�����l�?�!�'�c��������[GEpKl3C�j⊘b#�cq�:Yݨ��_��>���1�_}��N�;w�kng;7ٺ�2ź�vo���ܱ�~�9��v�E�#>�tɏT��k/G�Y��
���X�py�9;I��[f�W�L�N��,�@L�|7&����.�6�7�������Q������"��ꏅ�].b�6~s�����(!X�QL�K	99��Q_�pR��˄vV$_o*�^Bqរ�:���!��Z ��������G ���AY��̒�͎.�(����rA<����+"]�=b��/`��4ʧm�0
�cz��'Y�uǎV$�or?/��u�^9�RIY?�Ԟ��F�_��/�D�g��Q��pj�-�Q���S<�9��	���� �[�����3��\�\�M�`n�B�Cnɿ����-�����PR�`𗽶�M�ZMl���:�}�tW7N�����(z;��y��y��
��y�ī�\耫� ���xr���_�����������n{�����H��ŷ���M����d͐�&�a8G��I�ˎۗM��2�u�1�S+�1��@LB��*
v�V(H1KOUu�QN�D�?�}�͸�Tu�m1=�u��ȑG�6�Yp`2�juO�ģia/���2��:��pQ}��-������Y�[����n1h��]�./G�y�I��ۊ7�(���63l�I@}�'�Hٸ��:Ya}�s����8=0�N_o|��-]o�b8k�ܑ/p����Y�$�>��F����S}K�56/>hQC��A
����;���.s�׌���!�@���m*���4����x;��>����a�f��G	�Q,�S�i��\>��g���V*�ɭ�ܖ-S]n���H�..�3g@8,�����[ ��rC3�?n���i,��|��f%9uLY���BH�K]:��ߊ��$0�	��d��p ~�ʢ���H3}X�dbso݃�fO%�K�8�����"yٕ�bf�5������
 �Tb��ٿ��xu�^q�[�2c�wɞ�W�2��T�r�Uu��_|�`o��%zt�������k�=y:\Y+P�n�8fPp��`-��Hvc.����u:��N��<9:(v��?�c`B�ge/.�R�u�ط���\��x-/t���.�+tk��Lm4	��}��p�t`
�>�7� ���9�
G]�Nw���ǶVVn]j����^�l5Ob�<��� �*<���=k������<��!}O'P�P�;x�����>�X��0�X�e��d֌t�$�>�������hd����?����{�ԃSPG�a�>�ks�/�^��|�F����L�1	�z�/Æ���Z�_l�^�ۂ�:���'��]��,�®k����i�aN[q=B"�w�;Ng~�H>��>1|�+4QgOG!����&�Ў/�����zQ�� �L-4�
��ՠ��e��R �8OX�Ρ����˭��,�U�l����h�o?�놾��=����)�&�Bx���z�'�z"�Pr���}<wY$C^�m���P��P��ە�>�#��l"M�BzT�`������9\}�مb�vo�棽�w�!9��<V��&Ƈ*��(�j6�d�D��P��L�ħ?��-��)�݈x��,�����(*�l�gX5��}5Gɝą����<9tN �[�����3�	!��LfO���N{���rx	�yy�i�f?�6aq���K�ux|���>�P�lMA7�`A�C64!��@d�| ���Ыn���a����M�������^7\=��X�l�E�r�6��V��5����7��~ca��a2d\���Bq��OI����U�y!�(�J�B_s��r��p���]����;53��F��P|���1m�k~���lSj�|p��z[/V�]G�t�jLEߛ�������5����qa�����4Ig~�}x�̴w�]�M��)qtr��	K���7N�Xn��l�(3�2S�`h@��������)�;}q���ȹ�|z<�B"�����!�F������U�w\�dq�Ì�S@]�o���غxy�3�學����7I��g��Vz����R����b}�=�6�w�Z�����髏/�*���b]KUȂ��N����<R[>�;�W���Ƌ�������������.�x�_��:w%JRP1��-c�$[F�/��lK[���6TΨ�L"�FdԸ1���}N�Og%��hB}��xM�<��,<^_p�1Tk�	�46�;�˚�d���fM��@� h���C8��[���	��V����n�f�4�J�y{WWձ~�?���01 ��*��,ԻCZ���21+¦j�t��r�D�F+�%�b����K�ÙV3��IP�=�(��اD��_Qާ��$D���r[��$��@��i��]�.���D��a3�I��hB������{�<�4r0Y�F���M�e=8p�:�S�yT>��rQ���M
�CY��(��4�P�~ �����5��嫺w7嚉��a��d�nڲ��T�G��?�Y�}��P +�U�������h��\�-���ǚ�P�"ăi�a�h;�X�f�&��6��!+����{�0���� ��Ǒ��P�/JV�
{ƾ��/v(��]3������ C�Ҡ������ϖ��њq���d'����S�}����$��Wx��3��IT�-@��fJ��t��|a�xN���n�K�����m�ڹԲ�Eu��V�Rx7�-�D�G�/4��A`���e~,1�w�}���a�s���|pф���=�P7fL^P)�63RB���8O�^�h�4�g�� ��@���)gV������^:[ۭK.���^��^�c?���ͳ��;p>�l�	j��K/����lj*҂��*��6E�v��Y&*�Hh�qv;�"E��;�H    y�'|�d�i��W߳X.|0�f��8̘M���~�-��Ŗ`X�~�;�7A��$P'�����S&��e��E�+uK�21��._����?���D=n��_�E���~�|$���2�k+�U�s ��#R{��;x�H�Wl��4�(`�B%��h�s
U�� T�`J�,�����%L�_ĆuFi]	ã�n�.}��v5�D!nSu�N�r�>ë����x ���!�$�_�^h��)�pl���Y�7��׬�˛[���5�[ZBΰ�&1�Q�m2�]��17Xw ��,߲�4�u����0�,�-�D�B���(�W\ć�5�V:�5;�}��ij �{��xhʭ�����U1��8�3�T��MK�6֞���Z\���ԧ \��
���υ�17�rk�I8[��#���h�-�J�]໠�}�����9�/�H��0�Q�۲qF�}$�!�7H�1�l��o��_Bbi���B���*J��e���8ܧ�6(�B�`�?x��sϳ@���/�DLp�*V-��yg�6fפ#�J�j!��f[�!<#4��|ß���Aj�����#y
+�=Pyk��89Qa��6�����#2'2�p��a�x�(�N�z`}VJ���\�3�O�9᫿�7l��h�vv:%�G�CY�5���rq#	Q猻��q�?��~�Q�O"��Q�_)���ͯ���9S_����*����p��Zi��'l�l��ly���}%`�M~��da��ؖ+*�\�zc2���:������27x $�~�k'�:6?p�<@�P�/����#�D���S��c��@�W�ǉ8�K���
O��v]E�}����z?$���"�ǐ7��s�6?។'���{q�^'2� z,�V[n��U����T�\St`Q=�'_�t�������B�ޜ�� LkFY���~���MX6 �$��b�rmߐU�C��W?,g�o[?��e݇{���w,���05�?����X�T�&�-�%�c�u054\�=�0!��v��~�Fc}ا���!�g���7�q>��)�޼c�!{/S9�$��Nحm؅����Qm�jd����C?`* �@A�?X�~�Uk��U,*����d��۲�h6Oe��_�H+�!%O���NSC9����*��pE�e"�=#�N���$y� `%..w��!Ro��1b`�i����)l<����-cM�q������3:|i���p�pLm�(��)�Idt��?� #$��K���o�ĭd�;��8\�+�\{�X���4#�'y����3�)L8�
��E�]��\FT��9i���V^�E�I�jw� OC�ۦ�v�%�k|a�����{p�_�kԾa|�]��
H|��+|=\T�������.Eh˷=Kf3�H�����/�J���y4M������c_�5&i�u�m�bJ�W��r9��́����?�G/U�cO��3M��F����88�M�T�:�FT�{�F�˺�����Y��>�Fj��_$�8�U�/@�l����v|��Oܒ5���V�"�<8�3tG�:��|���^�I��p�/��8�F �_���E0��7_�e^K�6�.�R,��<�і5�����ť�r�u�2��N�h�Ih� \o(:肍�������nuc������v���/\c�����*�@��f�`Z����@;�NQ�\�y�_�>D
"	-aD���KUe�S���J
96��U>Ә _� �#?6α��~���}5��h��J�V�U�p"x42��+�ʄ:ģ�8r6��n��.3������_E������`"�� gK��S3�����d�?k>�ȣ�ߚMf��s��pq�i,M�"�����4�%���z�憆��G%o���i����R�j�t�e'g�ۡf�U�31kU�0�`_�}��3;6+��r.8��-Nǜ�	��z��e��Ǖ��ģ��0	��D��бL��љȇ�����-��9�q�3:�h���A[�A�V�I3!"�I=	����'��1��%@���L�]�[��)xi-�\��5dN�G�Uqa���,�[X�F�.���B%�<#�9���5H���_�A&������������X��"��4���8���{�]1���>��� ��?��>T-�%}8�"t6�,8�o|�.,v�js&����}���CB�8�B3y�$"⍄�[�J���� ��s�uD�"���G�0����/��򽺤G��>�Y*3��$&�����!���s�_�?i�,���E�u�@7�Z_���Ix�\ߙ\�ɸ���]z��4$&aQo$
����9�X��$Y����_,�n�Ӊ�7>sr��m!4�K�5D�BM�XY����ID���aG4)��~9�){�Lb��URb6����pH^�+Ѹ3;��u��$��0��fȵS�H��\�}Tڲ�c�	����t��?$3K*4�t��L�6~y��T���e�J:�k���IP���� ��5!�麰��	f_�>ѩ��+����#��V���2>�����e|wN.�����!DLbC�(��򉱶���ѼdTh���j!�c�R_�:N�t����;H�^�ZT�hU��Dͭ�۝�v3��Il�t�A236l<��������H�	��)�i�X�\�.v��Pn�v]��t�8��j���Q�mA����4 ����p���v��/nLr�Y�Nkse�Q!���u=�R	f/�R�k:��%H�o>�����G����. ���"���V5�N�Z<^�v���u{�p�йM�ҎJe_ig�&�o`�Ǎa���> '��UNg5I.�]f`k?�/�U�&t��M��s�c�"QȌ!�$(�V:��9H-<���*G��[S�	�.��E��E\piDB���-Q��B�u����o�=I����ը]�'��4���~Ixߚ�^*��C��T���n��,Ќ�iR^��2.�݌�$$�����q��" �����Mम�R�bT4�"�Z���(w�U�XˌA.��Ω΄(x��5���h��>�/	�p%b�>��σq�H�fTߏVC�2_��=�d�s��]���#m��ڔх��l���h�tFC����ɂn}�%�PwRNa�j�߶B��}�+�R�O�H��l-�wi�{9��=		y��:���!B��}��������W<Wx!p�ۻ�n��
QJ�#����u��Wg]\'m���cÁ��B��x�̟����B`���'¹���.���E8j.��+�2L�H�5VPŵ֓�cff�������0
d�O��
h��h!Ɍ�݆�9�٘�ٲ�9<��P�����]�4�'�o�|@��`�9��@9�������I$٥g�W)�d�i6J�/�p�7����*[����"�@��Ը,x�e	h��1�.y/�����}���0NU�D]�K�o�-�0�.%Ӫ<����.ȇ#CW���Ⱦ��>�|����C����hU�����R��b�eY�;����+�9��It�/#А���#�)�W��������FG���t2�C�ӌ۹!`/
�@\^@ hfkupI$��}��u0��OLd=�}�Ǿ��t�ʶ���{�lܚ�yu���{<ہ���}t�/ZI���#�_h����`�?�C��W&�.���S��@�ZE�A�e5����%�׷�/����S�/�<K���v���E��O��k��-�%��-XE���#�g��\�f}?��m�ȾG�|����z�Lp�SMԝs-b����{�\���|�w:�Y^c�ai��_��4:pAIp9A�`\<n��;E|:_��^w�F�u��^�AT�v��;��v\#hMYƏ��I|��ˀi�/M^^V�"�W��oa]��>g�!{$�N�N�=37��@�x����/z��sPx	1���Ɩ�?�Љb�qF'D���̆ח����B�WH�7�$.H:ck7	k�pK�C��0cX��3+[�%\hv|��b��VB&Z��B�h�0�̊�$&򍤀�?�� �  �Ӈ�a���R��A#l�7U4��"ܦ3�]���B@��)�L���^��5���>뇀�49������K@R���U+�d�AnY_��f�cV�����s��q_�`u��~q_�����q�p��.�_J}��ٌ�$_~C���FmT��uF�F�zh|#̫�N-XM5wժ�������{>l$��z�W(?u�x�����)\���)�prxu��Q@pgSŎU�)�=J�)���v�~��gR1���%�YG~��f��Қ[&�(��BDeZ�S��F�4{-<�(��А7��(�?E��jL����G��t����?�e���H��E���0�܏���$����_��C��E��)��#�>�ў��tC\W g_���*���2����9H�9�8�'�����ϧ��uOg"�u���G�m���q���-�e"Q+*e���3�o����Mm�G��G����t��q�ׂ�Kj"[KqtΤI]U�[D!��~f��=63�F�A@ ��)��8��l�[��ivQi�k�Xhn'Y�.Gqǘ�p���7�M`C��!�4n�U����o��8L�v�C���B�V��{Jk�5�L�%]��؉@T���`��t;�-�\D~u��[�bYw	���.|E����얻��I�{�q&�DD�!p�!hp��8}:j�aȑ�6��:]B{�������gw׈q���,�fQ��<��נ�������� �	N      �      x������ � �      �   "  x�U�MN�0�דS��I��iH���-�E7��j�r�h#�m
+�!å�%$/��癱ޤ�W�t�YKB�>��d�[KV,-��*���nwD�^�a���.�X��P�FH#�.���mC-Vd�ϝ���c���9<�ݗ�u:�k��x板�z̪:�������͠�C�,�H�0)B��sE�_R�%ږc�Jí�`��u�8�	�|_�K]��)��d�;eE�ߔ��X�(V��%�ұ��֪FQ�t����qiX�;2'd�6����e�������$I��{��      �   B   x�3�4CcNCSN##c]C]#Cs+cc+C#�b%\�Pm�(��M�L̬�ͱ��p��qqq \��      �   h   x�u�1� й��@�+�0t4'���#������z�`$���� T !�u��\3j~[�f���i�y��SIK*m>߽��h�1�e��G�v��0J�`�      �   �   x���Q
� ��x����%z���gf��~�g�#�W).PSA��?o�K�c�ԝ�$���|�F�1�?����z['+Kf�t5pF���LAׂ}�n\��c��>��u�l�@Cy�����RJ�Y�      �      x�3�41��\�Bs��qqq �{$�      �      x���[r�����^7�4$��G�
M�]��S�!�*Ӓ��	��L����hd���av�̸xxx�.�!������<=L����v����pXަ.���]~�~����,)!FY�����~~��J�����8>�!=�n���c��0$����p9Mg����鰼��y��K.��?s������n7.�o/�i���@���>u>��Rʣ��C�#�.~������i��~`:O��S�(����?"�}�n??�����t=]~��3�or�]�n�c��q��%�I���i?����ӷ��\�K��1��9_#�52\�_��a�{��6'��ݼ?u��G��>si��r����������䋜.Wـ�?�����p=�����do�������dOϧK�:1�pNɲ�{��"����:|��q��CAhЭN��$�<�v}�=��pӲ��~�X��|�?�'Yy�;ٚ����|�|�c�~��q8.��}��2���D>��dA��G��K�p����鰟�����,�~x���l�<���`��y���5#����x[��e����,o�/t�.ǋ��c~��E��Чn>/�� ��&gi���n�^�Q�Ey�A�Nd'�GGyЌ�S�~���n���mx؝o���IN��=�o����\�N��<?�μ��9L���d�R~�����1�� v�^�	糜��u��[�|x�e���7�.��N�Vv��<��lOl��� �x����?^2b��C'�q����޻z�'wn���:xYF����,�a^o�����c����cݐro�z�#�f����<�O>����.�+����1��E�!�����|�z�#�%b�m���z��1�S�q�]w���˕���&�5EO��5a����X���,?���t�w���.�E>�����g���rq��R���P:�5��<9��媔�,#LY�1���E�����Y�Q�r�qj��f�8�j���,
��ގ����������+3��"�����N�5��5�å�$O�l�X�e>��GٙhqG�q��梴%��#LfL�9𼏞�����A��$V{��_����w�@�,��y��4���#��(�/}�������Y� �����t��6VF^G���$�3\f�o���>v�r>p4��n�]�Γ�.�aɦ'�+��L��|�]�y)�;9����\񹯧�����{��f��1�x��d�G���3���p����<?���t���4��om�I6�(�@���Ĺ�����}���j�ϧ�y�ì�#��$�A׸N������3�1�/Gy�	��7�v:�����S���V� ��0j8�_�8���[�G���b4f���3��傊��~Ɠ�W��}��p�}�G^�!��'��q��xyy��	+�q>�Xr'�D�;;��SW���&�m8�8�X%F�+���I�gSW�Uz�p�6�>���y��MN|���rYpl�GqQ�!�9�#!gYu�=��#��g|�����y�H���~��
�ʹ9����m���s��7
�߾�n�H]��^��=!0��� �9��v��ʘ��{�G�l�{���ޠB6�r��<Kx�_��L��tQ����M�Y"�/�qx���{9/f��1b�qa���^������դ�|��w}�$���E���}��3&��]|�i�*�!���1���8��љ7<��S��ßdU;��x�Q=T�Ep��~�7=%�,L��s:�-G�����H0*.�˿"���򹆊b��'��C�	(�� �d��.ӛ�	������K\ϰ>�X��%�(�K<����,���6��ܯ3��읜x���.��c'o�$	�n�尜��}W'i@��l��3�?���I+���s���\V��ˑQ� Y��Q��X�YLh5�f	�QΦ�K��8E�8h���$̢H�8��_���\�g�5	4z\���v��?��9=���w!�>1B��<vr�x�z��b�̀�Oܼ�z�q��d}�)�ğv��w��÷=��T�������(2��Ï��{����"?X��_���$pF4!��]J�&��է�m�!�@F ��Mb��e!��_⏄�!><tO�<��rz���nn��������j���(�gw@V�[��q7Y*��"v�x��հy���qĦ�n:m΀lg^�d]�|��>�K�y�.ڂ~��BZ�+��1J���	�ռ�?F��%ցOk���b��q�u������CEB��^=D����F���R�v3"d��.{�A\�/���I��HMB��eC���9������I�[��ϸ��$����.��X��4_�~B����^Oq�m�b�>I��i�HA������	�^l+1 ��z9�,䧏�(?��>E�hr!fI��I�2M�=���r[$W�u8�B�t>����R~����z���Ն�G;��$����-,_1�/�����1�D\�/�B���E���%$����=B����2=���H*ʫ.��&�n��,�5B�Q��D�UGp&��eڂ-����8i�<>n��dZKٮ�~���N�lbQ��.�2�����o�I��e�/��d�l���D��C6�p[>%g=�kV�� �7�_����W�U���1��:,��|bX!q���b�#<��1*�&��X��Hb*��nD2��g?�禋�g�7���{Y~˙G�	!����u/l	�R2�Ep"[�Χ��B��ڣD��F�l��r�M�%o!׾V�'q��|�pW~���澭�TKHtǳ8\����AFY~Ȝ�s�&��B�^�a�hB��N5%�M�0�G��~� �T/?\O;Q$Ѫk~5���VO*1D�~&'+�j��Jq�^�;Bs2�W��| (�a"\����rF6o��H���3�z��,�.o<�+.!)#@ | T=҈��){�x�,W
�&#}@� ��N�������rXӐf��� à�CH� �s���˾I�&��S��GK�J�^���v�x�Hl��q�/��w�?���S�4_��e��X���tQ\x�(�hF1���U*�|�z$j��)C��+\�$��'���E���n� ^q^�$��ü�������"�Ef$1�s¾0���I�;� �~"=A��Jy���,�H>�u>o��> iQ��3iF!�f0��3�S)9���J���%SJ��a�\��������݃�`J�iF%y9?ad=�Y���6�h
�7[ G<_O��B�*^�Αkh��DݳuXBEgqX�{$3ԍ�2�&^�> �n��Ԓ���_>��\36���>�o��{�r��G�-����]/I�����M ���<��i��r���(��xЬS��p9�c��F{x���2j4���D�,��)�$N�%K	
ߺ!(�+�7%�[��y����H�"Y�~���%����M�Y�6�y� �ѾLҗ2���ޗ�&�(�.ʠ9����癿�������[}-0� ��e��Y�Bٽ���=�M�51�x#,�sH��V�����Si��4!���
���K}ϧ��Pķ�<�Uˢ��|^N����b�s��$$��퀋v{(��Դ�ʵ:�%�v�έ��QC
��r\�.�����r����z89.{��	��gn5���/��4�uc�%�B�z ���2p�q]��+a�n��-�|B&�a`����� [���g�����RG'	;�>�'S�"��y� i�B�1F����~4�x�D�����
��U�1��MTx�������"28H�2_�u���g�
Q�u�l_�zz��g����H�&�u�Q����F�E��� ���v�<K�uWq��A0�x�ǔ��Qv� �`է�!-`:#38uH	#���:��A3������� ��e�r��Y2��"������P8�,�&�Σ�1D����g�o�S/FL���MbĦ}�k�	'L�M�6� :�0X�s�=LO'��򮀸-�!�d�e0hu6�����ݨH<Pm>Y��J�&q�    8���T�z����Z5hٯF�Z����K�n �#b��%-H r�+��e?�����S�v:��I�'�}�8-��%�����E�w�nb|�vҴ��'���8G������}6LAI�Ks"]��iP�R2�nL��Bf؁Z��k�Pc��&ns��y0tD�X	���3Y�ᝀ��؋l��D���(qM���Z,1A<V�Q�Qv��d�(�y�_e`+O��в$���^��o¦eN���`f��#q|���r:�������Ŋ5A�"销_)�I�vK�r!h���6���"6�����Lc��˶�k� X�S�����)�� O�CB�@�+��*['	�s�W�E��L��>��C��%ѩ�� T���5hB�B�� w�]����v���g���Q"���I��z�1%�Z�mP�u�8F>X���u�X�����D�?�|wB%ܧT��8l��F�������X	����,6�P:@Q�E�B�m��T����#;Ģ���{%�;$i��ѻ���Y���c�\(ω�U�{�ا���Z���R�'�g��I� �����D����ϫR������`�o�_��r�x�Tf���m^#r+��S�H},�$�֐RN֛���N���Xd�WI,L&P��׼���mҴ�\������|��%b�c'�X �f���<�tn~��=j��I��< 9�Ğ��<�*��rFN9W��$V%u����.��0?c3?���۫D����1l�Zߔ��<������C`eO�Y�n�#c"B�����u�J�)�{����P��s+�)Fu/���(���t]`�q���}((����(��\�1Җ�@4a����Ed�i1�*t
�q_��_��6�{�YN�c�F�M	���X�1-��
����=���\�����~��!��Y����c��XE����gk���}c�@ �ˎ���݀%�)��W��M҄�|GTP�\bJ12�֊�Q�A�K<�~��M�\�{Y7	���1i���Z��s�;y�&�[�#�GT�Wg�|�Kǥ�K��7��,�I��Q�2�>�yz����z:���
E�9��F�f
x�>w���p���!yN
��s=�=M��> ���'o���="�)�#K�NT�'3)xg	]@�I�N[�
ckp�t�!��#omo�VX�E�������:�Y�S�5?��y�H �%��e��k��k�e=�nf�����V��@�3E�<�%f{��v,}C,Y�r���"�9���d@H��ן�Y6'i��+%<	A2������!D ��o�X��'����l�:/��w��5$�,�����f�U@n,b��`�;*�y�F,���\������%v]�]8m�gEJ7+@��5Kp����%��_ӓ�G9y$���;8W��x�4$���*��w	�1��9@�=�(�$�ݴ�n-3N�#5\:I(	o*��,���Bq`�]�������|����s���\KL`�Hԉ��� D���/!1�Ӧ2~������TXx eS����F?����%��]Aʙ+�$�H��������R� �����d$W��nՏ����:yS	Ixz�Ɖ�g��x�y�Z!�V��$J��8.�PYc
%NOb�O3��(!i����7�@[ JP#�j}�Ku[��X�'�f��Ng�P%(��@�$���T���gaO$�	,-���.����]�#2�R��b�ƾ�= nO�f�Yӏ�g���<6Z(�Q9n[��53��6I;��X(O��'u���ǖN��k���.nO��0И�b���yς6���e�� ����3�څ7D1Ɓw؝o�~�Cu�Dy�bgMb`�:���	��ԎچC�=8c��$Mm��T�����������s�7��a�6�ň9�L�H��@[6�h�:�����ۆ������(Ȏ�ʰ �h���-���v	$�bT^�l��Z��ć򳄍����Z��װ%�m,5\[�#9V�!֝�]��-!��P40��aG��	�~$�;�5(;��k\���_�a �X���;�(#�[V��H�&;+�H.��I��SV#��>�o=���<�Ļ�G�-e�oG-s�L|��}4�-ꏍ�ҒP#n�^3�Q�='&���&��GI2� o �8���뢄oEN�r�$͉���ן�+�I�`	�@tT21>P��ʁҌJ����h�h�"�y~�ߔ7�P�iuq����)z�����Z�xx�D��{L��(��hC�˙gy�)���4����g�HT��1�w+Y/zb,��2�~y�J��� �i ��a�Qр61Jӛ�'�)/q����!j�6���QK���׈��,Aa2�o<�x^N�E���D�FnƱ�bb]����g�Mؒ�xZ��A��=�`�DCʆ�YY�0@19�n���@��e��e��WZ���Or�**�^ĺ�7myYI咂}�]��D���Y!����K:.Y�V�gs�_�z �I��h��p)����u���kZ�(�y�8p�S�K//����^�&^VBX�F�<rK����q�߽�M`�	�=,ro�ב��!�4�y��*�{O~_.$͏�J ؼu�D�3`�Η����rz�����H��h܂QB����ܫ�2䙴��/o�ɘ����K���O�;��o�_ɷA�O���Ǜ���B>%���c��D�+VԀ�������H
Kaa���� n�˰�6d����`j��cIڑ�%t���&���v���}���"��#9}�A�ZV��_�����,��"{����:>  �gI.�ʲ�q��umn���o�����i}���8T�����r�:�Qj3�$�?ϟ@]��O1,HU�fX���^���:-�o_���R;�̮,������b�ٰ��Z�@��݈��ܐ$B��%Z�:kUH
Y������Ƿ�[�ڋ� 0��'���O�zj��J+�H���o�sz����M6L��l'1<s�e��G.S���}A�I�Nۤ��G:�n��g�h��k�b
%y}=m�o^	��^�U�*k)�"=�[l[b�26|��} ����k�d�(����8B��5�Ī���M�ʈF+p�\��Q=����c�l�*���\5 �>&�"3[sg�؉ �[P�Ϡ (��o���g9�P\�b��xh�H��=�No E^{X2� �V~'�%����"̗��{An*KIL2��A=�0���/���D��S�$F�B5^� �@Q������j��2vƢ��hrd�$�"�Ճa�bW`eRl��^�(���3��gԪ.�M+i�� =z2�������g��1]ޖ�ac����`D�"��H�����U�����zc�eR��{:݈�JJ�d���b�a��'�����	�Č�)���ߕX�g�eb�@-2�����ǧ��� F�8�zUѬ�w�:�ձ�� ��{޿+��t�5�K�y���a7H#l膭�ir@*�]�����Hk�m,/ʼ^� �����p��8������5ʠ�8�IA�c�l���k#1�w�^Z��0s��<�Η������TWN���&��ЗiMC�k��6l[��� ��b��^I�oG�o��՗�I&(�(E�%��,�����h鿢��Rs�>�ݏrx~!�-���mo[O.�6#�bǮB���� ������x��H��ltj8��0}���;^��3��-�d˺G������ ���~�$���V���bkk����iO:��TtXK�� eI�j�2DG���MU�xz�e���D�"�#����rf����A��ܤ$�3W��(�(aŲ��u���Ĝ�^�?Fe�J4�H�-�؟�V��RE��i]'��0T� z>���# ��i0"A�3����{^K#8����am1����S�����A��i_ >�`��`j>m��
��g<#9q2#ɡ�eP;�qE�,Z��� sV�qB%by�ϻہ����&L��l    ��^���A$L]��i���>����$����*yR6�u⢤|=��e�*��!�g#�w�С����Y]_NoӧF#Y�^�=юԈ�5H��^���v������$��Ρ!|O�Q2nv�"zL,?�x@;��`��֔)�Z),�+#4�ɐ��?+�yۙS`�f���*�m����B����F�cҐ��Q������2�˴��a���.�kD%��3�F}%�<�o�Ac�͛�ʺz��
{�� �pT�3���|G.�g�$��'�'WD�Q���cc�7ڞh���_`���Hz#G���K��h�C�������r'4{��r��7 6�۠p4=�h�ߪ(���s�?�Z]b�T���U	���M?VD[�V;�=Is���k+��;*54k7�6~?U�t��+1�TAl��B+ު���Kx�g�w�F�#i���U�_��4�ϵ���dJ��B-�����zܰ����תɨ��?iI]�*���f���s�V�����"*�nCs���JL��(��J�pG�C<��`��3$)����_�ѹ���xD)?���/x+���o��:r���>�`)y�h;35�^#�q!���`��Y�k�
��4Ҳ?r���Ɏ��}@����7����: ��uQ|7Y��ڊ��2n�r�%G�͈گ1�'��Q~�Z�`������ 7��E�Q�ڇ�/�;1��L�2,Ym��c�֔�Hh�`���������m�ݒ��#;D�>� �;h����%=3`A U�CUP$!����tD�|�i��4��*�0�^PV��YO�ژ���og����O9*pa_�4��O��'Y�u"��Q�кŨ�� �����|�
bn#�V��P��o�w��#<�Eҷ����_��"H�r�p�ޖ���J����E�RH�:W���u b<j����I^�QV��fw���b������SY!`/ԏH�qyY�� �i/x���$f!��E��/ś�����Ϻ��L�*�eeP�xR⢒�v�^��Yb��s�x=F ��.�N����]Y[��ʝӔI��e��b;�j|l`#��T�Q��3� �bW(˼8��#� ��U�,i��e�J4���ʫ���ǤH������*NdCP�@������%0!KoE Vp0~r�.�ɞTZ��r|>/�ff�'��e9}}w&$�K�bR�6+Ѯ+}�Y�J!���Lq��_��;�9Q���3����{W��ӗ��m{.��3sQ�Q�D�[O��CYc+�#`I���$�s��Wt�MV"��9�=����a�C�l"�g!O�B8�ض�&.�D:Q S�`H��R�h%I�3�++�&�"%�l�@�>�K>��t�������@�0ha&m �i����@M���DD%�)�5�^�.Fpb�]!��BD�I����N���:�)�@؛ɬ����+�A�>=�[S�p�x�L�U���HV�5oR������7`��4!%�iU鵔�:��گe��I�6��i�f��\q_����|�A�&/k�ŧ�:�Pv��e�2.+�I�^���J
,�,��W�^%��FX���`T$N��$t��0���1B/4"��YM�b�w�z�τz,���VE3�"9��nH�乨T��J �*����A>;���.��*o��7ԃJd.�Hqe�B�Ac�P�ȡ��V'4A��h�[�����k�(����Ȯ�P�8j���z�� �7R��6��FNz�)ڑcmS�F �/�ޗ�@nt�:i}� 슶r�$���aL.Jy�EVm�-R��EB��Ch�&���۶����.#�E���<Y���@-�_*�-I[�����T�
×�� �8�x���#͎�Yq���U[u�$+y呫$��5� C��Oʫ
�v�3����m�_�"Nm���k�����|�H��Έ��(����o;��O��j��Ĳ�(�/w�M�K|=�mU�ȅ*��aN�ؾZ�$b���}Z���Gݰ�}����>�8�@l|/~~@?��S���W��;�0HE�vnQ�͇gc)���Ty��i�J��YS���3E���(_BL�$Y\�|�\�����
����$ѾD�� �}�4*�uj� $W���)���{����,q�ݒ6v�|� �l6���K*�?#�S�<��+���ɵ#��d:�`�A�D�1K.�7��+�*�d�#z��	�JXD�%��il�m�z=-k�g�C��)M>!�Y���*�Z��8+�K"/9[��dj��vM'��xK����F׊om��t���)(��r$�ެyc_�7��� ��mWR7���T�����nH��ҁ�jH�7�v��\�Qkԟ�� ��or#kǶ5�}��q	�����ۅ���r.
��D1��Z���}�wⵒȯ'��9�U+̏�'s[2c�^�L�K�c���"{�8@��Qy�\(I{UI��F���v	%QC�\��[�^�����?B��C�E>��Ar<	����r�F���i$r\��:�yWFVvK�"�����I���'��Q�����]���H>4g�k��&B�����@Il����t��c=㾧-��7ɵ��)���Ɍ�~�@��A�dc��2�^�Y�b]�ڨV$~i
�%eВ�'qSN�P�����6Lt��qt��@��<�ΰ	�Oˊ��n��5�	�7����s��g� �oy��8��SU��)C�;�;�b$$k�$>bSX7{ph̌L�q飶X���0�%Shk���GUM�h���ۤl�i��%�/�kU�N� }к����@zm��_��~�`(9iC�� %WP�0}T�r��N������C���c!�+�g�vN�)wX5{�wԂ�;����R|���&�a��{��N��CT���T�1��~N/O��Cqek�8�<����Y��jtU���#1<9%?#�*���ԁRo�Y�
Ϣ|P5O�\J�j+������ޥK@B$y���	�J�k��j���d�����J=~�|�Vc���H���L��&���b�Ϩgv#n�x���,��>bʵ��a�ɇ�5�K�k�?>���0#�@�❹E��2}{\-�{/�]��ޣ�d�c����].��܈2we�k��l���h��%�|��K ��]<�Z5�4 C[*�+���h�*�M{��Κ�2��ʂ�b�$�js�G�6浽[,#`��m���4Jߺ��PI~Lm �PR�IH��v���P?����V�I��>�/
��W�t�m�Y�ɵ��.z4N��[.tG-LT��!|]�3��"ŵ�y�χ�r�f�A3XD
������jM���N[��H�K}-�A�1P���d$u��A;'�!Lhir�m���U3�E��Ʈ__�~�����.��:3Há��0)�+s�4S��Z��TH�VJl�j���|��V�G�j�bA��A���X6k\�P�%��V.�O�`��>6ܜ
1�"{�֜=�|0Q¹��e_�_qm˯��<8� ��Z%�
j����j�C-��F�q%S��=��.���3���uw�c��9(#���XVt���σA��hB�c�-W�<��=�_Q��
���|D�?�$���2yZ
*��ǔC�T���B��qW���rK�8�%ỉ}+��#a.�@s,b ��>��r��F�m��)H�mA���u��f#1�0*􆦘!H��y>!&���nk�����f�'��X��V���."�ˑk�cE�����P���j����Z#*R���|BX�����|�/�	n��m�VKT�~sp@2GA����(an[�&����@�6H���th_<���G��,���@�n0C],�$��4R:�d�aX�Jq~=ۏ�U��q5{�jL�"�\:G����gU�`D��
�+`m$޿�=��"�_�X9 _ZFې�j8��h�Na*C����G�nkҴ��i�1롺�{`11jo϶	*���֊Zj	�~k��.��&?`R�5�[ߍ�@��ej8    �\:9ٓM�Y_D�$��ʗ7�\�����e��tw�Ls�> �m���#=b�o�K�ܑ}�L��_�u���,f`,ɚS>�(���>�];]��
��6f&8=����Gh�Ts���I�I_g7� t1��¶��r�/��V���ENu��|1UI��D5�t���֫(h��N+�{T|Z� sc6�.a��@�R��N���9�(`jOTP�0V�ex_G�h}8e�=���%0�b𺵝�F�i��y�����4��fɿ$O`���'�wU��(V��y5X��tڞ����Q��X���R��@�iQK��\.]��.�P�����j3u�G�33X�B~b�A� �"�I�
xhS���Ǽ�	�v��Ǵ�a��� H��3T�yl�����En���\ݨ��	�e߳�iP�t���"�J��}�|�@��s�ߦ����s��Ns��U�t���V���F�hc#�))J�7o7�^nᕤ+%�Jm�/-��Ճ��@j	H���&�6��kAq`���E14NӤ���Y���(�K�d����T�1�8d� /�#�,<;x��K[�>�cp(?��'�GH�t뫁a�Z��CZ�i	[���t�i�=�&�KU�s(���$0��)_��Vca�m!4�ht~K7�?��+���b�A��dA�bu���{*�v��ŰPq�D�Vz�L�k�p�nAɖ�� Q7�u �Ƙ��Q*��$�%6Y�]Sg���L~��$w(N8$�  ���K���$~m4�o�3�F�� ��M,�Y٘�ߟ���Ѡ*�0��#UO'�_���c������?�2��t���@��*U�q���˵��Mΐ�"��h�s��o; &�K����8���H �f�����dU���|��k���(˕��|��F�q;bLXIxHD8h��!u�t�������lp�C��7Eh�7P��F8�nI̖�|\pdK��S�s�dVSJ㯵O��_t��2#f�5��-0�N�_"�ʅ��B�	�;�oBl �(_o��M�]U��*'�u�%�O̫���N¤��8�[�>�u�W1��� �#(N6���.T��^�鬒˨��X�C��3�,V�e��r���jjc��,�����d��	m~���7R����*{WS��.�W����P����M�ӷ�^�:-f�L9�8C�
*>P]����\�]�n���P9�P;>{弶� #4�I�5��F���@-{
\�H��sl2��7�<GU��`��Y{Y.��t�Ҝ�v�y�2f�H��R���6��'r���G̮U���uٍܖm�N&�Ҵ(�1;�\������nM� ���
6�.���CF��}�@�`xH�zH��*Z���l���n��<P�bHo���R�$ar%��Y�u�	��l�Л���[�rf�G���Q��X�������Ƃ0��	ȼ�l_�z+�2*��pvzc��C�����N%\�ߕOZ�5��p2uTݜam������8_>��z��q뤫	�áI�;4��Yls���i]���:��Q���8'��X��H�!�>A�Zk���u�8�K���] ���g�rT�N�t����&2�A�d���|0Ӳi��.a{�Q�c)ΉƩ���H����8��:�v�T�h�Y�+S��L�N��l�-	l� =�@�3A6����>�����i� �whMP&g`{�uR9��dm�сX��\��	�<=f�����W�[�����d֡$u]�W�ߔW1�蘸�������$����*]�wӉUwlъ
T����,��ĝY���R[ט�gh�XJI�ǵ��-����[& �Yy��Eϊ�G�?Qnc#C���D��1��s�1��,��f1sa�jeq��m&��9�j��6� ��'��i���'i�#��%;iE��D��#�^��jE�1���V���p[���"	yBA�z(*}P�K�,���v[�.��$��P��/�6&�R5�1Ҝ]�1��W�Fm��E�y��tԔ���e-V]�6��d�0T�m �҄c��,��ȏ־^t��x��>����1����_��U_Cp	���0�"�U��6��Q?��D29���%�/�YC訲�����m���Xtlň�4U�#!Ml7}�2~Ȅkr�{�m��g�ȫ�v,l`�u��GT�&f�f�0����>T4��l�08!�#+��0}c�v� ��͏��M��Vl:f�b�3�rP�2�#Q�)P]��F��:�"��;�YJ�fW�3���T�J|Y���<^�.¸�o:��}�i`�6���1�kx��ojm�KT-��8'�P=�
�8X`�%@U����I�����|G�,�0����hH�2�qIt0;f=��곕����i�5)��D��c��M���En���@���tY�*���/�	�����/s7�6$�EE�>f�`⣣�u������f����Us�T��:ob��et>�iEqPS��j<��t�Q�, 
�D�|�zN$��>���X|w�e�����B�h���י����a�l�\5Lڠ�}p6���^�N�h�.���VJP#㫈UA��V��vy�4?ڦ�r�Q���ȄA֒߅��4�ݙ���f�v��!�ǋ-�D#N�J�o�8sy-�ZN&�S~��P��$VBZ��0�C��uzm�.wbr����^���#�}؀Ţc�^��(V� %�!Td�l^����� -F�S�;(�f�r$����Y��k�!�&��i�ٲ�a��ߟ��3�yV}����5:[�Hb˶�6J��2�<�o��l�<�N�(�ȇ��\�� �!{�Ӌy�s���`%K�6�w-���% �4�l����Vw_1�6F;����
p�?+�u����`�)�9���|lx�a���6zP>���>���	(��|D�w�*joJ�-ߍ��OuM$�S�F�{!A�۰�.r��x<�i�eL�e�f�r��x|�>bo<��[��וڙ�<0 (��j�WQȂ���Z��0\L��"y���]��"� �n1f�zO;y��n���{�s_�F2��g� '�ĽOg��y	0[�<'
��i(������F�fR��"��!�t�7t~S`�� {e�$1W:��\���2�ѣ�Ϻ밀|O�X�&�O[_�>z�A�#�ÉU�2á�;!9^�I`�C,*�b�6 ?��Y��:�@TWY)�([�1�������T��"�`�T����NQn���)�\D8�GI�����Jm�m�<>�q	 ��$9��:v��{s?��,0��+"�#�Q���)�tOɟ�a8��U���E�7�Y� �e.S�7�1,1X�鰔o�M��Ξ�҄NC��;F��ȕ<t�hIwʂD�E���\�Ϫ��� ~`��Ľ �)���]e�"+���Ne:%�.�u?���Y��%��A�x5=��u[ X����M�E#�΄F|�}leN�P8`��CS�ʦ�9�jȦ����T����2���:z��9UK;���M�*DO��Y8��d@g�^`�k.���|�pA�B&�Bp�8�h(冩�[��μ9�ۄ
F��Gi�~�����b��T ��	����*1L1�?��wf^������6)w/�n??���Na�h�]��> [�E��DN{'�K�-�ᐲ�G���~|7�=DB}O�>h�d9A�y�D>m�}B���	f�	6M��N�x��ß��iJF��`�0�R|�oI,�����_7"���84��E[I�[ �|Q={��
S9�b�1U��|����*������Jqj�`F�L|�ab� *�C̸���A�"�k����0�rbh�~>���?�]�Hʫɒ�1J�z��;��\D�m�+�
I�-��t��#�ȫ�'���gp����l��,m<�%-��h��E��$;����Z�ga�(�s�%��L)��������taly=��Ea�9fi#�"�����i���m�U{�H�Ü`]Q���	�0r���>�-
��w'\I
kI ���q
k���    ���~6{�*���TfqC;��-X��#�#aX����#F�٘�tj���D�+M�$� S�.��-�h:�	`{�M&��+vK�])�mJ(�JN�%�m�n�H�v��{x�'�G�w�%&Br�Wn�L2�Q	�X�(�;Fk�]�]�@f�aH ^tG�smu�H��2W0�
�koK�>��yWH���j�F¤�kT����	���{�UO
!Q�!r;�
��aB��,3�ݎՂ�(1�bѾ�|�����������7Z�`ie㉩J5G��Cߺ�ȹ����0�&%��Ц.���z��"�E:g�ۥ��1Q��%-_��!�8�(X��cX;�nw�iK���M�D�C?s��|F��E'�SD0c3ꃚ�� 
l0]����>����w�Y�ę�Z:�7х���$R�-��B�
��}�Ml�˄#FFڣ6��(���k��tO8g@�R��3����v"T�d���3c�H�4dV�"֤^/�-[
�(�<�_�17�nz��^�*��,~`��Q[���
ʵd�^�l���hV9�D4������.`RQ�1�C&���Εz��[y/+�_�*.>�>j�,;�EU{������L�G���Z,�'���I�;涊1n�XG�A#LY}��$'��޲T� ��C"Q���`���f(Q�Ƥ^�H*3��.N��7�95H��; ���L�DӃ�\G36֥ap�(�$(��8�(�AI�G�Ѫ�b6�%m���<d(pR�nm�`�I+Nf2P5?ǽ#;t�5�Ѩh��ɘ�{�!.R��Q��Bq�Fu8��6����O-Y;Dn$�}�&��n��U"	���vk��&f�p�r�a�� 8h���p6�|��E'�oE��.��E�@�T:��I�`ʂW2!E@/��e��va�a�]�n�,�X���W`��3��N���y|��q�F��D�Ń߁b��I�M�{i��Wn.�{���%b� ����Wu�^E��!�����տ]�w+OȊ99K��tL[�s%���]�լ���BxAv�~Jdz���W�3��t��O��7EQ�rE9!γ�^�ڋ�����P`���s�N�S*���+"@i06IHD7��f�&#���C�=5����!jk̳���˴����^0i�s?�����f��L���ઊX�D��7I<E�@S�0���A'�r��پcm4���R�h���j{9�����V5c��O21�|�S�a� p�i�ݒƯ��`w΋�9���֕�MgKJ���:��T���Alm6��u��a�uB�MhG�n�LZ��?@m>n���L����%���7�4$l���v���IaPh��������fD�
4j0�;��4����r�����*����z��o�æ"E�aj� I'�`�<S��6�~��cS[%چQ�x� (�ya�w�LrLz��p'�E察��XB�J� 85g��Z�ƞ����qH��c�7��� ����fBʼ���L����A�ӧ�d�y���篃�TAO[����0p�����w�U��u�b΁�������χ�����5� 	���t|v��4�d��o��N��4\��<�_pRT�E��sB`i�
�"t�<]�4�C�[W̕
o\&@���,��EEr}Y������� �v�u��#���K���'���T�1E�C��S3Z��&�5���c�>�9U�O}�|�ly>�m��b�Y'�֔RR$��7���'cm6z�CF�R
�"�L�HL9}��sfq����e�rf��#r�Pv�f�}��	U��Mrg�>l#�M���II�1�.T`FU��J�K�P���oUDm�U�H��M�L�@=23���8������D�$y2� W�Xޔ��3�Y��p��ܮ�\0f!�X2?�����v/�� ��<Q��|�τ�c�	q����2/ǇE��F����}'y1M-Ǌ�#t�����(6����k#J�}s�J�t�������r��)a���͂ƩsCE��%D"��b2�)�j�)Q��1I�'�x���R�rS��˹[�OgR�V�Ř0�}k�6���9�f'ӑm���U�Z���DC]f#�r!޸i"�Ë�Kx�Q��)���C�a\�]��*1�r�>"}O�y;�Yes���r�t��]Uw	/�K��OYMFZ�7�>� �D������*zQ�-;l1��l�y6 U��K��N��d�	�������w5�Ç*:�N�<k�6)�6�9��5����J���I���F�y�������.J�\�r�-"/�v��.d�#D�<r�!��q^�u��Y�	*Of��=(��j�:��0pB/�~���(T���}Ơ��z�l��wRh\BYs;H�h\t����q�0BEK�^���Jq��;�+*����� �����w��.�:8�6xe�r��ހ��;(�ߍH�D�h��kGl&:@�f��E0���2�ƹ
]枓1�1�
^Ob!ޗ=����Q�JMZ)�:�=x1J�np��Y9�*��VzY��	8Y�[�������x(6�+��#�J���}�hT�kD��\u���W���7*��Q�� Qm�hu�/��G�ɫr/'�c��F}S�t+��C��fz�^u�}�������&I����+<f$�XU��ȍ�ׄE�<DV�&��u����i/���#e�61+�镰�A9�N���G
T"^��e��V^�W��qP*V�d��g�,�u�
p/���;T�0��
k|B������b+�?�ڣ��1��[�y%dو���f���5ue!�)�ǂ��[��e�x��4��s!)�I�m&�Y�O�*^�����^���&f��^kV����<��5p6F��6}�����j�N��N-f��>�v����O{h,�	�AӬ��������AwG���L+��*Z2�t>�8'�8�L*�Mm��9��1�-�<Uh��l?��oH�O�A��U�_�9�TJ��j�Mu��V�6��j�f�4Ѩ��O%�8Cm>��wt�9l�n�6��}�T�O��
��S�֨��^�$�~�E���N�A*a��n�t�Jl�����t�md�c�Xr�/T�6��u֖�<�[$~!d�(��ŀ�'j�afvI�G��K�Ȧ��ӫ��ؠ�82��((���/Q�Il���h��G�B �Yo��>���H�(�W{AN����tʻ�N+j�h��뫡�=bU��"�u)J6�&�ic�T�c|*�ȃ����G�'�'`�9�F�q���� �FOp��t8�9�	�y띟�4��UJ$RR�z��7{��r=}9�p�x�/���o���r�:\�.=�H09D�LtP�-�Y�:��1g�IPV}N�\��e��Q�!Xv.����{��'_��\�ME�Ȟ �X ��?[{�C��9[�0"�mY�F8�0yy���)�Yp�^O��	�hi�K���hU�����T`�U�ʬ�I�4�#�3��{C�F������v8�|i�ENj������� � {���_�AD�%��5%����VN�(�; w�՝u�z���=�}�lv�6�z}�����e8P�i�"E�e��8��*+�b��8è�o�Q��Z*�.9m{`�oחC�!2��=-�Ph�6�������7q�����2�`���󿔻"<�sUI(�@���ǵs:��w���:(9��&{��YGT��/�ֽ��1;#(ߋ;��&����&	&!�\��8ɜ��<B,|��!m:���H��P�)�8�4{�����L�Q}�]�PA��Wڶ�8�`��g9(��/�`B�c3��a��8��	�JT5_��]n���K��݃ݪ�q9*�O���a�x_�ӭ!:c�QhǙL�"�Pz%h~d�$&�6zh��xL�:�5+��v�p��/��|m&��ub�3 Ge?d�:�6!��E��,���!���\�,��5"�u��v�;!w�b���I!�������7|Na,ĉ��q�Ј���O��A~L�U�|*9d�Y	>��~��)'e��Χ���}a �v��I$���xq&��e	y    9�]x��:=z�t��lC8�'ke/��P�>,�K��LbZb 
h�0�t`Kk��eb�aC���}�K��,v1&#%V6��Z�%��az�=��ӕ���N˜<��C��z���5��؟AsK�k�j����I�z�����Z��-�J&'�M�� c�`�e����4��7`��c�T0��{�(�����!���{�?�|2�;�7�43l��1��������	E��D�����5{#�Š<��#JMVy����ԳB#1"��.��
K(���2f�c�q!֙9++�����[���'�o:L�Ș��#��r@��Ӳg�S�ņ���� ���{)}gc�G��ؽ,��ܝ`J*+w�7�"+�ї/kHpgC��4��2�Ⲃ�C����HU�>�$T�p�p���{�%�h���j�@i�:2�TT�*Ww"�F('�֚�Л�	�:�,��PW���(]��'���5�J.V8�u�j�L���z;�����A�531������u��4�h�X���xR
n�Ұ���#��w�<d��^�E���lsD�
P�R"J9��˕j�}��o0�K䇬Jj;K�&��+	c�u�y6�O��N�os���Ŋ!�y��W4,�:Ŵ�>�P�g3S�Q�y鵯ĥ���<���LYt�ס��hX����::u���-1k}���ҫ�Qan����m�W����:��I:�L�̀����ؿ��	�74;N'�����zފb�!�*�n*�wݩ���ڢ!�.!yo�*k�|bU���W��s�$�қ�N����*�J,Ԡ ��Q|;ڕ�a��ߜ>À}��i�s�!���}]q��u?��._i+�h.6�zA!j0�V*�cWu�D���'t($@τ�t�B/)�3��֔�t��y@Q̴�U��i6I��]������b�(��V�V^)r�=Ƌ� �{bTS[��&�"����H��ِ��bOJzF�ι����λV�F1��u7#�9���o���;iG�)��}��1<�7m�&p�>t�&�u0�*�����g���p��|{kӑ��g.����&����ѐ0�8y���m#�U�nCLTyUHA�����B��Ű
1ޞ����0*��3�PwrU����UC�m��4U_����Ai�\�]�e����$���qd����1����m���^N�Sz�'o�B�鈎غV��y�-�n4�7�"����-���;D����W�cMT4�SyDa)��Z�i*������R��uW����r�����%|��J�6я�Zߌ�A����� ��AxUN^a;}_�u����=w��0�yTr�(�iT;���r�A{R*B�d���P2��׃	����נ�N��l#���UU�Ўf�n��>$����A���f?����O��9���
���U=�}`M��y�����ֆ�RU��k��DO��&fPH�g��V�7�r���AɆ4`|�Ӫ+�P)�n]yވ��_�vc�CSA47�6lᴗh�Y�)}wTx� !���L)��:X������.	%��0@�m��K�Y�	�k:�Č��i%�;)^U]]���B�q:�������;�PoZ50���������y�ߘ���y;n�>�O�o���ͪ��;�5U�z~���)�y���t1���l�@j�Tʭ���!�[�����J�h#]e���KuDQ(X��uMk�]�����z�"�����`\��5'5X�!hBJ�+A���l���)��(�&;���������Eu���B�a�UC'~�^�u(o�Q��z�a��2�ɡG‥����U� U�H���Y�!��0o�����
�JE���U�ަ���iF�H�kTbG�qL��2�v����S���[%l�s��D��F_,�v�E������=�~�Y���a8� �@�C5�V�.#������^J�Ƙ���eڨ���z�ta�[�#�O"�5���L��m��z��Ӂ
Ebj������>-��þaM��{I��IX7�q�w�ûV^Q�S
6>�T����^=O��s<1�
-6�\�����R0j��E�������fq{���$m�����좜"=wK��=N��F�}�0��H�3b{�Ry�/���\�(�gN<�8�Q����	���E!I>N����$�z�@�Ȭ�l��o�Y �I��Q��&䏐B:h�Hb�<��D�e����)I��?u}�V���4𵨣��l���]�(g��&��
��}A.eH�5�1��=n���D��RϰQY�PG��U�ٔ��Â�d�@`�q��J��k�ܫ��)�`:^SHL���(��tgn��Q��S����G��%3��ZB_���џ�Nf�?�]L�.�]ei��҂��
>`�ʑ-e.ݟ����XG&f��,Y%e����;jʰQ9DO�y6!_�j���G���_�f0��LߺdU�,c��O��w7b{@3G�Oi*���?�͑s�T�ۃݖ����V���W� %(7�ڥZ�����*�}/�3�I��r�a�J�H��G2�L�?�nM��Wv_1"��ζh��D��( &U��!�
��]h뚯^+ (ۤH쵡�r���a���u�G;�1O`ԲI)V&.\��̓8W#&?�Q~�8���N��{KzRw�(:h��z����_׿���z�}c�l0�����"²�ߴv�庨�<��*�[��J�.�jCR����d+�L���&�M�����8�l>�A����U���t:���q8U��ѐ�8�ĐM����ƌU
C�C�*:#=m���!7�K�/�v�6�C#�)�r(Բ1˄&��x�9w(�=n}[CK�*�&*�Ax7�q=X�϶�x�\�/
�l��Υ�������ӡ);n�����1�,Ez������ZF��"n�c#h�:�c|\.S��{��dD�}�
������ �HQSh���`���%�F�I�t���/���]���p���\o㙢���W���.RV<���(���r����T��lD��A;���:�	Ec[-�K�g�7K��='	����ӲO�⏊���#���E��X��
�BG�N0���dL��o����;������-��L�;�<��6R��P9j�麯3?��io�ǅ�3���{���W�k�	�yk��w�1'	���M *�~j����dUb�r���*U
�%4������ŭ)$[w�u�w��;A�<�~AכԨ��K;T���3Brb�ě�dVp7��6#,3��k�	j�g���6�ZKN��Q_�\�������t؝o��ǑAGN��	GF[��?���V���n.�����/����A+�\�e6�;���z��_���%x��j�=�[eW������K�#���Qn��CSKz`�Hb�۔��bSÛ��DN�҆5J�[�2�-��5T��Ψջ�x���r���d�ݢ��r���.��\YK����Ve�	L�6��F�������Ľ���c@�)z3�9č��J��t�:��`<�̍f
��3��{Vj���w>������	a �J���G,#�<	��*�S��`O�ӧa�pǄ���s^���?7��I������j%V�������Yu��y�&uxi�[�i��>Xu-Rn\`���P;Q��TAc���XK0�T����e^�M��G��du��ZذF�q�bcy�r�TC��3�A!ۂ��|B��30�0튽�W� �M�!���tg�t9h	2z>���9���r�>7�"&���A^� |�.&о=�����WW�&^t�L4Իl:x�4d�h�fze��IB��et`Ch|��Z�	���^���3�y���ӽ0.�����a�o��5��a�n�&��2��Uw�*m�/И4���7/K��&������ ͟�>��dxID���͘7�+r��3Z� �����IO	��{@�_f�-�"��� V��M'�V,���6wM�ut G3��L5�Uj+�[�J��!k`���0�g�f٩ +�}'�Z�4-����9�]^>�ۻ�D��/�#��������8�T{S��D.�����;D8�3a	�������nZ9�    �A�賹��l�-Q�B��e
���5f���^9�`���׊�Ei㪝ijv�f��qD���ψد[�����r����&��ͦ&Pȧ:�Q���9'���p-��������Dt'��}��Ok��*xc� �5sMس`X7&��o+�&���D��Z��v��D�X{?�u� 9������V�1Q�-�����)�,K�<��J��͑���_H�K�:VP�҄@��r���?�0�vH*�g7i6����c��@A2�%N�O��d"�}w���~�9�]�B��(G���[�h�v��6|�{`L��$Ύ�\�J�{�6'�Nѓ	���]E�rz-��]��9�?�x�ɺ�n�,���m���#?�_(
��u�搘��u�`R�뱈�։L� W���ҩw�P׎ᓧ��X����S�AוTH\������a�O�KW�����Q�(�I��"����X���	��H����X���wɮd��Je�w�:�7��6s �^EEG�0��s1΂�_�'m���:6T����Z�6c�V��1	��p�Īd?�)��r_~�8�٦�Կn��ڷ�^�5��:6lP��<������U'�V ���#)T���(S�X��'���
2�����lj�&�����"��*φ��4=e���oϤL,�B�7#�YI�1@�Ƣ^KL����T��\9�L������^�*��ٺW�%�m����X�c�#� S�����\���	�.U�땵
����@�t�����f��a�wq������w�f���1��Į|�� R�i4k��3q�JIyd;���y�"���'5X].�w��$��b��o�ʊ��mTTvL��*�������H����B}wkRT������������6?����f�������� ���w9��0��b��U b4$`���:�z��_j��c70��(�҂�^��,����P���l9hI$%oaP��u�NǍ��N���A�]�gY�L1��ó�g�)�QXwQ�D�UC�9�τf��+��"Cu�hI!H�ʚ��l�Equ�7[D�6F[h�Q���hG��M�� �ZZ��&=��R�#w�hz�q~�!5T�8@n�^���>_�w<��I5I'q�'���cew�j�2�ْu�إ�����u�&�s�h�@	��b������4�h0��8��ߣ�q�qY�p��.��zf�ұ���9(H|[m��EqpAQo�}
��x���y��o����}��I��4|�P���a;k�|�`g�j�����LS]a1��+h�;��ꕅ�D�T�l���3��BE�e��# �C�
���
W�k ���r�o7�Kh���q�饛m�����t���Vq�l
@S����ꃂC��P=U���:���᜹��D�s����=-f�,��D�bu��,���t�i^����W���Q�"��A�GL�M�~��W� e���6`�BJ.t��z�]v/]%�/jP��A��+�E�s렺�sk���@#�xF�+���9@3)9ǖG��h'�����Mݎ�~��=�[y�c*�B���Q�:���ED�c���ԈX�,�I�8s��Μ�NjBD��k��A&N����;RF#Ը��H���@?P�+1�r���-�����!'��i��cԭ���Z�=r[+�����5�8��m��[}5_�e�Ĭ��RE9j�+ֺ�e`��5�F8^Y��P�SK�Mk��Wt�(���G:�t�L�Mό��(���YEz;m�ՂG��ýS�.�+'|�G7�\����Ri>�Cp;}��T�*�{��E�h8m�8��ǡ��X�� ���,;U:E��֬�y�5Z7���Q"�G5>>�gUJ+�1��w��6�;���s]���P�4����i�A���DU���^y*��A�݁��T��;���8�S��ɗ��uM3+t�B��d��ز3Χ�b2��DOK�RƝRJ#7�0##��
��%�@���E+J��_���
�6��z=&�����-lZ�)����v�yB�W@�P����A���lH�jM$C4��i�_�p�c򚾙��T,P�@�m=����"��4ث�\寭@��^#G�vR�,�,����s��o�D�J4����L�F�@���D=bg����z���̡FJv�X�A�0jR�L[`����շ��*�V�87��:������w�,�)}ԧq`�O���k�-�����q3�0&�Cn+/h�<����d�8�w��T�8�:U['B��\@�u�͏�1Zu�c�A'OK\����NV�g��DfX�$�(D��m����n8L;�ڌ'����v�����3�2@�X�¬�^M/��}W�.W5	&|r�辵
�S� H����K�s�/�y�\�2���Ǳ�k���uH�wx�ă2֑ş����������J��p�`X�#�:���9�t����,��T�'='�����J���0�^	9��IS��{1���~G�Ѵ��3Q4�wy8
�Ӡ��fn�!�q=�4�{ӧ���O��Bw�Ɵ&���XL�Id�q҇#�����.ɍ�ض`[�8�j�5w|��M��P0E�GIqR�kY��PXk��)�F�k��4�B������,� $ ��?g]������
�u�מ~��G���G:X�T��>�<-��HB.�~߇��P/�!��l�HQJ��ݎ�^�?��aA�i�O�+0a����hؽ��_,)|@R��1 �\%[�yZmEM$`���C��܊|]�|َ���Jb!��N�l&)�'XA_N5��5�|�� �<��57a�[tR�H��!��hŚ
3��#��͛�+���<����\�M�j�j@8��������׵w���� Q�ߊÿp] 9��~ve��>�)�jQ��&��<�B^��Ր�v�/�efZ�q<@�7O�n3s�����.w$w��] �W�����m��r����#GZ��p\�=�n���L��z�P{ZlK�Ԋ5���f��T�-�˺�����fkcu��.N1Ch&��䢢Z�4�����,-�"/T�}�n\Q��)�uy�F��뽰,��#XD_�3���e�9���j /��&����'�~"�p����F�}؅�Es����㮾��P�~�m��c����|�8+�`�b�]I�5���c�nń17�b��0Ε\�ۉS���p�3`B��OBa7�3��q���@�\k<;[{:��>Bc�iH��w-/h��Ph�7�S�<�<���Ǒ%�n��ZV�ԁ��	z�H��V\R�Y�"��SKofm�x��4��jm�b���°��G��u��L����� d��x�c;��P�����^ ���&����Y�<(���w/�6�R�	>fR��isC��kS�=��z����*��A�̫�宠�}ۙ�ܷ���&`�>���`���q�/������'��:S��~����p��k���L'u��ˆaW<DO����9�a���@�=�f=2�ޛc%�$0G��2�H.���+uG��S�kMP"yP�xTi��V�	�ㅞ����|L��Rs]H\S�2��'ZP�f���g]�����~sl��p��+?��P���g�%�j&nv�Cg��x1g!j�-�|X/�\��X�ζ�Uh7�ʃ��0X� ��m��h��B <5��Qt��"G���$�N�Z��N�y1���;�������S�bTsD��.a�M͍{,Ȯ�3�\SRS��5�;�D���0�U�q�@�~ ��������k|/�������g�@��������W~�?�J�9�&���P�"=��k(��{���ޓ��2ml��&��0��yT�%b�l`H�D!��Q� O9���W��A��w>�uaB����sTzt�<Ч��d�� ������eG�S�0�Y"�\/��*z���pjeC�� z�T�^VQ�\L��W�N8K-����T�i+�R��    ���k�,4#�1��GB�T��Y�Lq��I�D��#�˄���׽�P�� ���A���ɔʩ���J]�N	�[��R�3�E�����CC�>�w�6�(�b}a*M9�|�\ʜR��f¹_!�y8�Z���A���5�p��3<)=vv@As' ,�YzD�B�'�*�-q���Y&�V��,BZC���������9���k��0�7+
��;���@�!&i��h��Fi
I���=�W#�hC���Cp�p�r� 4��0~ ?�x��ck�ڱ�,����L��8A�S3�����2�$�D�T[}٪��ԱF�9Z�r�S6#ͼ48`��P�^�5@!&ـ���_]�����g�g��-��������	e"-3���0,.#�C9���H�T�Qa'�}�4���1�&�l��@�����f���6�
��2���|/���]�P���`]I@�e]&�Ɇ�$42'���V���㕛�_�<��������GD~?N�D��;���$���8W��T[�k4H�7��j��#C��na��F�L�
j�}��4Q�\e��D�D�xzG�����X�N����L�����i�G�@ɫ��"���5�&����2�-��Y� ��UY ���&!Q'���`���`y�#��!����gC{Ŵ��IYE��C��l���7Ϻ��b!�W*&��c�����[N5�n
|�1j&�V�8q�]�������R��I�'gAj���(a��k���GƠ]���,�ĺ����m�Ez^^m\uv��4� {o8e/sv��:T	M���u��18�����vB��i=���ָ_�QTh]����L���{��*�G�]��T}����m��{���z�'X��j�M�������}?+[��3��$U:�E�PS3B��vo�vx�q�P=�G[;"�&;��Ed�ּw�PL�Tf�0���6����2�~,Q���'�\)��TG	y�JKk7ܕ���H��ܙ�vQUn��rݝן�۠H$��9�E�b�f*e��p[��H!PK��z��b�ԋ�{�|�S8����?~N�g��~-�*� �U�<�@�����&K �c2o�ǧ��#J�֤^��+�tX@h�n�9��]8	�P��5@b��1���=��:�7lV���ή�����H�F�ԅ��e����G����P{�	j�uŇ����M���� �y��٭5?Xٻ�H1�
29g��WN��(��2����q����������,ؙ ��O��6���	�y�ưN6����F=��$�>J��L\����;�C��Qp��Q�s"��0F�bޜ������V��bŸ��s,��>ƣ)�,jfم�9�RZ��z��s4+Su���ס�ǯ�܍�t����b�F��Ȳ�� WQ��Y����D"�FT��g`��Fq��O��Z��ʉ2h�*� yez��UC�Yp���G*�NW囕 ��,��H�M3��a@�dGh�\ߑ@N�(@֏Ө����)��BIk;��`��Z�+qV�M����?Ʀ���2�<�>�J��J��Tَ@���^j8�$�dnq6!*!T��ލ�uZfW��#K��4���L9M��a�W7�h��8��K���v�#+��m�*�I,�7H&�ئ&$��F�`�p ���i`s�K@���M�Kr���X�fNs!�>��G���PO�KC*�퓒![�l%{p�� iQ�w�G�Kr�b���*��:��MĢ��eƟG��AR��Xs�n�����9^d&5��o�d�B�J@�$��]g��q�x��v�L����XB�]���>A�GbU�uCh�]������ 7�,���IDV�����Q8��'�(`�¯�w����5�z~�\$0�^?�5��]�u����茑h���\TAv���@���_B�tA�h�i��Fq~�9r��&����k����ް]kz�2���u�gcG���هH�k����$�����T<)�Q���o�6�3j��2�����W�!~C�3�ݥ��rPV ���"�P�J_��`݀^�ٕ�P*�aD����O?1�`���<��U�����Y��c;��5,|7�q!1��d���7��@� ��Y�,;O�� UF�w+bBL�VlW>���] {;�CME+>�^R�w1�yd�5�55��x�o5��;��<����d���Fn54�fA?p�oXL*�֔�A���:{]��
� �(�؂Vk����3����/�� �kz=dbgB��Ą�l�ֻ�tyޫ�44�W#��s�.`����K�{Sd��%�HivL*�� �Q�^��`�=L/�u���H��@�����w~M4,A)#��HR��������؝�L��1�uS��O84����fG5�}���C k��t�O��g��2a��S�"���<u�Nw��:D��[�!D Xl-�+$;eY���6"aD���|9�"�{�%��%b+�GBY3�q�(W�n�v�����f*�`���ͪ�-RvaH[��pn�ŝ>�|8�\`l����>3�&�a4��Ώ���԰\ � Ⲯ��6M:��m=|o
"p�`�\�?>�A���S�M��2%�Z�<�#߰���hg�' Y�Q�6c����a��m�(�#�`����d*�_��+�;%��v�1�m	G%2l�pM�������y���C[��TI\������m��oӪ�N�g�����)�E�|���x�x��Z�0���6͟Q��҄%���"��ga��-gO}����[�O�2���f7p�B1��`>b�5Yt8/_��F�;.��JcHw���5>-~��{�!%I}�����Z3�Ĩ]{��t�x�JZ�s����`��x��Վ��N/`�s���"T#�����.�)�E���F[\U��[ظ�gEm�sO�ᆅ0@�3c��yTD���d����Ήi�<�p-2Q��5��X��*���%��Ԕ�Q؏'j�0��紎<���8a�N�9Ha��:��k�ҶOh�ጐ��QR3��|�O2*H4��\�+*y�L���Jy�(�l�@��dw�C�[��!(�#9=�x�+��x�qpY"uP�bj������n���Gj���	>��ր���q��$�@e;(R϶�
�{뒊�XvBkY�f����3���>_o�Oz��RNokޒ�Bw纺mrS� hxو5�+R_ �C<6Џ�C'�Ƌ�3cSPg ������m�o�v �����6�Ы�ޝ�P����W�������J:bA��qK��;�Wd�7���-��� ��u��q�!@	hoZ���h'��]�H����6�&���߳�vJI2�!��m�V��RjZ�4=��O���m��4�Eh���a�z5�!tC��0�e���Σ�0�+���j������v�QlB�ن*�-s: (�;T��_�N��#)�F{�0<+�{]8�j�`���Z�P�K�fk2$I ��#�C�79�Վ�4�YӇ5���B���aN��n0���t�Z���qu�%/�9�:#��]5o�ڃj�n7�P���ٟ��7T�{<�k>8�'d*Ú���fq���#i�8���5*�n�5�h�ሊ���D̰i��̉ i?y���H��ȵjD���{^��g'��9�q��x:�#9�ʶ���%�ʑ��UH�1��,���3��h.�%��]���$��b�GI�Om��Ê��V�PK�N�j8���|�q{�!�l;�"�J��A���C�0Z���As�J��Ɖͳ�J�4�a$
$���X��iz9�s}y�g1�o(��h�2u����my\�,�L<Ѹh��z�� �7�В��-��=e"�Uvl�_�럮+��_(܁)�4�q��69�o,�Y
��Dr�R~ ��r���ñ�����>�JTỳň��;~=������
z3���'8N_��=��n	`yJC
'*D����pf=>��{����9    5�H�zA��j����l��hUN&c���ǈ��
�{]�/���U��*{y1�%����I@傺h�b��� dN<( ��`;Ǩ�d�(u؎4����{�⿇����,"�
%�� �$�-NQNM�|�����L9u��R�gZ���S[�����o��Vq����V`�:�m/�de�ù.9�^Ҽ
Y��?�2}H��ߧ��.Y�S ��h����$�+����/���,]�'��Ra���^�p��dzOIM�t�g~iI��oZI m��Do�U졳U�=�y�����X��90�Ar����6�l��,Ÿ�8_?���z�|\$k;:����.���߾�)@	�iѴ}v`o���B��v�S 6�+����C��T�S�"�dWto>���O! ��1.�f�X��g
M_���2/���_j��Pw��A�ѕ}+VRV�TWT��?��y;��l챻bs�f�c���09��h���X��ӝ1�%/l�P�"Y���y'qJ� w��񝐪}�H�W�&�� ��NAD����<tJ&/Y?�M6Cƕz^֧��~�o$7�fE-����C�׌���G��uɿB�^�Et����8Y��:9�s �J�����W1N�9����\�����C�Q��fUO�S�}��.Q�ʭL����'��:�a�2�
�.&x�?��뢗��BA�d��1������<1�9t�����e����S���?�;4\��s�-`�F��l�T��ܴs��	�;�!bm���Jg�Wd]�	o�y������IZ�;��]�[v�B���=���ЃZI�j���W�.*2a��pZt�ԥ����Na�5z���	�ת��~������B8�� �n�ȪfP}̑O��}0�LL>x|��
���ӟ����� -~ d�*w�J�,(�Xi�X��j��}b�\��tG%��-
�Ya?�r� (9�a
�Ow�_	��kҪj��$eudxI���P��у'�gc
m����3�c@�õY�*��������k�@S�U|q͡��1���(�����m�RV6�7힓\�h������t�0XjE�4�J����w���,h����^SQ��42�0�{F��Ƭ��N����M�#����7�(z��gB\�
�
	+<�������2�R���e�POE�jzQ�K�Q/�[���sc���tH*
D2����]��IQ��>zb���au�:�c{Ӟ�Pa��	����DP�qMd�J���^�>�	;��S���շnt0"�R��/��L����{��A�ʙa)k#8?j���	���t��$+���7� >%^Ǭ�^����y}~� y��V.������`Rr���t����������p�j�zM�R:ܬC&��F6����g�	@l�W�����j.�s5�Ν��(K	��G*`|��-��Λ�z�f�e��*I�H�W��0uE��q�F��^rXZ�u�����w�Q��ˍ�W1[��V�G���e��P`�Ք(��5��<�����ӧ�Q����&��n���Ј<��:���Vz�+��s�G�&����N0r���i��R��	i��G�ɪ�U�����׿�ݤ{���Z>�?�,�[�A�z��}�}e�T`�M� Ov�$�e�h{43�%ÇmJ/��C��u7�ӭ�	φK�4�ږ�Mc�k|��O ]w�YV�-uC�J�ĿN����r0�ҳ���Y����{�˓w��أ3��>5j��8 �����R���ł�<�ҩ�MUT�s�[!Bv�� ϖո���{��V*'9)q���sb��N�1d�nU�
�,��K4�Ec��H.�L����,���cړt��N���>֍�3=_��-���x�*4�r��%>���S�k*��~r��:�[j�܇��g����	*D�S����,+�mÿ 蚝�w�!�y�Ψa��j��4?��wM�:���*ₖ7���m��@q�#�)��Q��Ԩc�Z�<5;KӪ���*�n���K-F�w/��^�̭jޤ័�G��7?��Ԟ��;�����;��p΋O֦4ece����jd���A���qm6�Ƚ��∅.Y:��^_���m�lRd	�R�cPb�����eBM}B�m7����s��aC�'ӝ/g�_d5o�J9����iʡ��薵�m9�u<�%%��[�C��0Z8�!P]��E�&g0���ˏ��$�����9j�o�oF���`_`�W9��T��@�v&a%�\a�~��z�(�z��W
$|#St.���z���܄XiᩫaK���S?^�\��қ
9��4���~�)v�1��
j����47���0��.d��.�0~�?�d��n���8�RR ��D���Ѡ�58K5��:o{ ��W.�-r�"��o�l��?������k#3�����(V���E�#��&��^D�K�l�=�U��w�1��EÔi��8���n��<�X��h7�XS}�x�K���Xh^�=�Ze�M��IrM)6�ԋ@���gD~���Mi*g9fH0c�>,�<�^���2�a9{A����?�\�����Wabʒ�慪�n�$h7���*@�b�Ζ�K\��#���+��e��������`�P��i�O�Ga����LC���(���:8�{/�(�&_9ֺ<�:�	�5m�b٢�K�zSP����p��E���Ȼ��I�0XTə8�;�{���ju~��я�״!|���e�������9�D�͹�RO�_�e��ZQ��X�fz�U�w
�^�|aj�Gw�X�hy8=]���?�z�]�|�a5��.»Ԁ8�P���?&|3�8�TX��	���"���[`��B�6W�RXb����G�Z�?���h*�*�����h����M�鲰WZ�?��/��pR2�u�#�ȶ�����C�n M<�X'�u8�::�Xi(�:A։��c��?�$�o���=PW�9�i1.�����jZ�t��'����z��F�#/�^����&j�W%U�'�tn�M�<M��E�}���>�������:������@�ĕ�\����P�@Au�,C�ՠ�ws�y9���]{5μ�p
��V[$���,����|�/<<ʼ5�������whk�0_r�D�D��bh�<��Y�XM ��Q	��	W�����p/���hKl�sm��K������4c�j��	����ϟ�ý�����A�8yE~��@5��nb��yR,͆<ۍY&S���(�M�8[mw˲�ph�>Fai7��b��6��L,Z�=\|���~x���^�F~Aa'f599V��$ƦK�\��`A_�۬�ro�����ڸ`�J��ӱ)q�����`2������`��)�C�gC�<���'="ũe���l�,��D-6¿�ͧ1(:a�f�@�ǁSH,^���� ,/�$.5��1=*Yu�/b�m8	7�k��`�d����9P�%�\��-�{R0��dovym�����X<��0�*ż4��e�ڈ��3�]���9`S��ZXҍ���u�M�C(O��	-�R]��KW����k�(�2ɒx��O!H���hKK�
��2Y�.�	�j�QQF�C36!x>,Qs�N��ڔˀ�F.�Җ�B�����q�ez};�#h�����Up�m�7���`}l����Ћʹ���}�xd
p��CC(dQ[qh/�e+u���l��������fKH�k�_L��.d?�7��pȢ�. ����A��CSZfu7	��(�P�����I�z.�8�����ϣ$8�E�0�?��V: a�%�N����N�V�1�9�o�����Jw��۹;�;ԑ�f���m����Il��0�޽
���we�L%�O����5��둑��׷nVG�h�o��r��_B�x/R[h]p��Ϋ7	������ zz�/���j^�TX��S� �� ��:c���.����>H���j�%X޲<8o�F�̔	Q�
A�(H�K;އM�E��5?�B�q}     \tO�*�)�z�Bk�����\��E$q�L"�X�BӴ� ;�9��	BJ �L�ǋ�w����Y÷��=�ѧK8��т����B�A<o>N��z�HF�ۦ+����:��̽p������v���a$ր��*�� �X�5Ǉs#}tW�~�*���F6e�<�ot�S��u�%ZH��Cɢ�UxM0� ?�cԮ��
���t��_�=j�mܐ��63[7Г1~�b��z�� 3�q=�i����	K)F��6D�xe��e�2��U�)�hb7�J0u-J�A6h��KXn�N$v���GN�^���B�i?�����m[ �	��4�,��Bk���hl'���B>w�޿Y�"q,Ũ�W*��WF�;Y5pI����������Ji�N̦R�["鴀�����継��D�h�𒈢���AN07��T��ߴ$#khN��+G�cO$8?Cr/�)|��ɰ$y�MX�T�$i���~7� ���<��cV:��q��\��fi|�qFl�<|�/���������cݢ�}�h��>�\Q��&�7��"gBn~UH̡����,G����Ę�0�X��~ϗ�_w��Am���J$l��|y���5�?���R$`9��Ou��lP��\UȖ�#i	18C�+��*R�2��&�vk;��P�i����HXS��{���(T���Ϊm���,���� ����
�K6���ƙ������+B.F	zC+�'���*Ӽ�پ>�O.@ :yMM���A��t[۟hh{��
�
|�e��Z�j�q�9De0��a����a3���Ԇ9�v�v�< �?t'�temtF�߇���Y�(3Ǻ��WM��绁{�Ƨ5�����.*��0�nd;�.[���Jwx����ZXv�����\6���S�nX�C�0�L*6�EGC�,����S���F��T�����<]�j�������6Yv����b���>��`�CU��\,;g�1� ؇|Y�!��|�Z�q��hN�<�j�ޝ
�q\KT)$�#�5	�ݞu6�����#�tI���JΎ���5���?���kM|�dh�eյ4�>�����;Ô"ϬU��4Q��_��;��J]�h ,���ї>�8�/�QX�e�HE�(�_�0����]<2����m,��Ƃ:0�&���ťi��3��y}!!Y`�&�B�m\��n#�7a�����^������Nÿq���퉧���N!��d���X�~���9|r<nv��+����,����>Z�I~�zYi��f������o��N�x�lS�
�>���~s(�W��Fn6O'!p����d���	R�1�<6�����: A�O���l�fL[��q	0�67�e3��WOܑ��b' �ڳ��:;��h1�/��3��L�m��٩���4uc]{�e���]{٬��W�u�Q^�@=,�([VY髨��{�;,�yX����X���5�H�,j�s���,Du�HeW���!��\cs�Y6�2}y'�w,�B���I�B��nԝ������j�DseA7B[��hR�(ÓeՀe�NB�����Ҋ�@���N�����Iy�2�F�]v�:I4l�t�1w�&rt�9r�b�ex[}���J��H����}6|����m�H.,�Y]<!}��@��g����*o������}�h�L,����"B#��ߎ/G�Z��z���.8�X�\O6�dG5����~g�L��81�cg�|#�>�T�RLb��OE�o�7v/�B
c5p�:�Ԃ�a���5�{�=�ޅ�A����Et�}Փ��ҏ���Jm�v�3�}����?mM8됵�7���"�-]��h5��ە���q�����wV}���F+�^|�����h���fr/�e�O���e���w�J�z�V�,�����G8��aD�� S+�AS��A��_E�pA���S�Iq�b�]���+M5�X���26��wu��l�̙{t�5��s��}h�3�:���"��Ǒ!��J�<C�G������|���t�0�N2�
�7��7|��vt��v�0��o{�`dQ���Ǖ��5��6�y��w�B��`ޕ���Gf�ʽ��G����EI��;�eР�ceER��4mJ��q�t׽�Kf	1�*���]�9N=,S6i*�:Wi�q�놶 L����:�k�;R�N!�[o�v�2�3�t���t$u�5Kɟ���JE��lz�I���FQds���`���1��-Mf��43	VcZ�PU�t94���zsL���&:�O���
�k�6fG����(9h͍�J��s��:G�Y&Qg�W3��sۧ�K� p�I�qY�9�����n���xC�;��w݌�px�&����&�&S#�{�K�C�-{���11�8P��:�<z\޷>� �/a ��ݔ��Ц�!%:f?0���z��n	cJ<��`�������1���]Ե�dU�8e�\�k�YHx�����v���^���C�;�֗�G�Tlؖ����6��\_�V)	��9�r�괿�ʳͲ��,��3�K�*�6�t�'��!��7[-}��:�'�qu�غ-g��)I��"��VZ���v|>^^��d�27	�5�>��n�7�>r	g��#�Qg�직Æ�n2����K�kVvV�2�~ҁ��@v�`�=(��0��QEca��^�ϙ�^��{�4h�������:�3�R���߃jV�,9���(k+�$b~paC����#l	;�ut�9z,�R�,m��.:��!����
��n�h2=\�����=���6%7��j���dZ;Ckޔf�����Ţk����d�L�[���/]�r�.*��+�s[�<A*�UD���y���ąB� ��8m3�ML*�u�W)>�T���Wx�]���y�,�O�~���o�����wM2Q\š�[+*��\���h�\ 9����bR�����[�NZ��k�R;�l��u�;�9�F(	��%�\eUV��>�ϻ�q���G�ψ�ֳ�$ygF��\Ћ�V�A:z�*� S]��[�W�jM�y�׷-��bnH�y����V��U�L�D�n��'�.Ǐ�~˚�*`8��	��*�:'^�Q�-kKnATV�i�e�������P���~��*<�v���WO����\�-L�!�V�F�1�v�3�T�Hև���I/��ֽ��w�h������O	�c����$:���D�
tm�k��A�j!��_�Dm_��D�(Ʉ�Va��ǽ,:��ik���{z���O���(=�	�L�H~3W|��1�HMCP����p�ˉ������gg`{����?�����ءO�K�oo'�Br`L�O-���/b�:0��
P�UZ�/�L�{���ơ�����z��Q}n���3~#�����;0\D_q<�J]�������R�t�"<��I�;��n��ώ�i1
�w�@�����W����I�H\d qL5{�L�ckc�:Փ�fL�f6�<��E�����f��>+��*�xh��@&�[�3������`�5�d������MEz@��@(�����t�&3�]5,q?Q)�"�2��_���z�p�.���xC����ߊ���_��=a@�U3� W�mD?\�z��"�(���nT9_��$a�E��	vHŉ3<~gq��stH����+Ba��Nu��{�Ь���dB�`�ӷr�(�C�t1=�B����G�O]��N���ym=�bJ�� �ތ�7�7�FLbQ�|Jta�
�T�o	B��{G�ޒ+Rϝ�A����O=?l1�K	ěe;K�l8�R��{�q'�f�껪k���̪���=�naj*4�E/Џ�.���2R��F�V2�\��	b���,?�lR/�le�}�KRXݞzJ4f��c ]��2����R��)�*0�&M���&�7m5Z���W����E:~��:�a7 �F���s'��(4�Euܩ����P�7bsab��W( *P��zH!�w�N��.��Cm�%���e�������d�ḁ�f���S�aa��7��I�+�|d2[������В?�r�Zg�V    �e�E5�z��q6��X����:���m��i����;�ɼ��%������}RW�%6%(7��;/������J��Z}�`�ۓ7Kif���)�G@�>��\�XFigl`�}_/KF	p
}����e��'h��x�Z��uh_�5<�g�l 48���u����z�0M6�D�<S� �\ťn�bfk"���B��~rj�D�V�%��k5�m�d���ޏ��\�Q�ȊON[΁hl�4��a`�aJ�B;���s��3���y�%*�(����Q=�(�ڃ¬_V������|�*菺�~;*�!"�����(L��q���� c�l]��L������.�*���5�hI�s�\�),_���(�'Wjx����(?��S�Y��B6��k�}/..�P�����i���u�xF�Dn���sT�,��UZټn���x)�ݛ�l��l�����@�N7Y/nYx����Z%�訁Q
�������h)�B�čS!������_<PL*f�G]-x���n�J�A>�٤�a�
	����r����b�)��O�i%�rk���;� :���dkN�}��[����_6�]�G�a�ur�e��h%��Zv��W+,y�cª�dC��#�0�3����Լ)Q�y�C�I����!,Ҡ�&�>������l_ԝ�(|�dĦ��V�6���O/��W�p�r�'��ʗ3T���7�>,f���]G pM8�8F�,1ຜ��_����>�s����m�"3�m�ߌ��$��Ħ? �d^�z�۱ork@C����)G�R|}��X
{�$P&�+�-}$s;�7g^D���kYC7�4��n@h۴_��Q�)'q~<sK��ت8�
g��i0E��A�E�v0����e �����a����ǝԑY�C��H��U4����!	��oF� �＝��)<����S����e��Vq
`Z݆X~�V�Ê~���p:WS+À�Ε�jLs�.*T��p��?ڿ��*���%?���;%�@�^BB<�Ay�-=�NO�!~r/T!b|=�Ќ٬�[$��}>�w�H'�t0�0G�:�f�l�ҝU��Ȝ�HY僷Mx����g]�9IDu��E�Ұ�Y�:�#Q�(�1�复;me?`Q=�F!l[��+E��5�0�v�/�.f��r�X{ER<3,�!r�䙸�����:>����ڨ�1���oC0,+3T��f�T_w���@���*t1KP�������Zlt�
!�^�b��inވˆ�g�+F��n��g�m�Uq��'Xȕ�?��X���%Wc ���T���e׹����X��_�G�  
�W�63�����t��L�<W����
�p���^�n�l�k�KWW�PZ��0�K������=����}��$�����ŀ����Oxbl����!���p����s�2i�lĉ��G�n�4�O:�V����-��'���Fq *��by�m���0���>萰\�8Z?ѐ�����ZХd�`:%k�o����6b�@>!��"6O��6�z�ŵk�a_��q��IU����������?�	c�)p&(*�Q�`�^�����o�Ow8�	���OUIdi�wi�]�u�}+o.�Z=�<,��t����c�9�M��O9w��]��	��X.��~��ئd9���M.��
�K�-��7Ǚ��Y���a5l=�5ʰ�'P,�XU]P�|}?�yl-�z2@as77Ő����?v;��D���
ĚU=�| *�p,>��y_�z.L5�vN�F�����?�t��-uI���.q3�]���~G�n�������>�ORthk3��BǼ]��L��8�g���@�|�_p� �}����6�v�a7��b���b��`O���+6N!t��%���B�N�$���X�������5�R3U���c���nA���x5�/2�F�`=�d�P>[��ƾ�»�5[�"�B-o��m�����t�����nav�.�AwSA5�۰C'���`9����@������~�A]�0ȫ]�AQ�q��[�uS7��/y�@k��3��M� �g��L0a����:+��}X�z��4� Dh�@m�0.F]�M���K�y�Gc?�x�=%^�5���Y�E��Pt9BP�k�
6�����%��5
�_Vog�ceI�s�n�����|�׾�����6���e�n��g�������-\�������l�{�X۞� =8 ���) k��>��[>����s����؜���X�1ބ�����͌ö�`�����MB,Q'A�ڂykx�=VpS=�Ӝ��V�0�5�T��]fh�n�&�0(���}DNr��履Dl0���ji�?�d$\���Ȕ�^]�^[9�(���G��
w���@��L�P���c�L����u���f�	�>��ݘ}K�[�8�},�ߗCQ������ H5���OP����>ex����햴L҆�/ �� i�:&s+˝�7J&���_.����-d&�[�mҗ��C����_��,���nH���ߣ�����m�$�NJ��_=����_gn� DbFp��s#
lY�����=���|C��U���ϱc{���ކ����<0j�>�wVj��zU�r��l&(�p�M���k\��S��������K����`c�s�p�t'!Ǭ����6��Ũ�K�	<�l<�mO�E@,s䙃NF�)�ǓeD_��p����$�iEs��n�j�պ��V8pk-�H�txr��j�
%�Yh�R�9�ݤat��\Q:^d����6K���&1-�~�e�AX8a�^��5v\����v2o�Dxfû���oŖ#R}#u	�mY���C7a� �D���&�Y��1����O#�7)�|���z�P���to��
+(�A	�{�Fg��jr�ȉ�+�I .�U��4~?�Uo��;��$ۄ�
��cS����!Ԉ&d5&�4!����ɭK�h�;J>u�P��j(Yߌ�Ǌ�:Ak(w�'2����!�E,��m%�
���D(zK��ڸ@g�~
ߏ9*4�8�c���I� �vp�F7�����_"����$!���w�+g&/&�2k���?[2�v��:<�P$�)F��F!���΀�|�e�t�{�{�C�f�F�͵z��l���˚~ݡ��d�'��6
��ܡ�A��(_��taMF�&#�Q�`���0�\���L��K�������-;ԅĐؒXݪ�B���k���[�DY�s��Dl��q���?�������u �CbB��#�\�>k7���Wu6��e�I��	�#M#�H���2�p�H6�L��֌���	�ǡ߹�O䚁5ۏ�{�j�r10�m���A�s������ }H�,�!�#v働�a��Y5��F�x�-���s���R>�g�ʿ�YgX� [zf@ՂU<���o0q�ay��)xCE�ԛxylf�<�)ؚ-f�d�K����}8�D�F4omL���z�d4L�N� ���|���.�>uu��OĄ�'�UR3��]8e���r�q�y�$�0X�ؐ0�gś7�	Pe�*�Fj�qY��S�G���:b60@��;0L�"y}�}���J^bn}P�fmv��cRx�u�z%�:k��t�!������$����� �'�Oz:��(P￻p{S��$L�{�D*p5���_Wk�G�k��O�`��SYGe������r�Svh#/E�����,�g:
���t�\bt���
kg��������y8��jT '��?A��z�=�d�\3�;g���?�u��u,�*r5z<�w�Y�ɀ�i�"F�`+6���z1Q��K/�4y�]�0�i��ugGat ^a}�z<�A�@hயOw��Ք���3�
��dupdH��2VB�ָ��yذ�IYu����F?�1���H��M� ��a}��^�������T�e��[�aC���O�C68};���Z蒢	Z���*����Y/�f���1��1����E���9���M��ٸ    ewy�s�5JԐ_�+��dP��lH/��h�{'�ڜye����D�ѵP�%��̐XDQ�I"o����׿ϴ�b��}��"�V�K�;Jd��űSA�j ���ˉ`�b0`��k$QH�����:w	-1_U��6��&�>!s�s&؂�{i̽`"�=��ζ���ʩ��,_~\�v�`/�!Қ���_e~��7����!�ڢ��4w!��x�~gG������o�Qc��>�^u3Z��V�`�3Sf0����4��9���`w�W'X?O�����--$���1TO���ߺ$"���%��y��]`�RϿ���-��"n�Ȕ������?�����,�A�N>n�mY�����j������#�؜��K͢��{ye !O�s������Pi>�>��U�
&�	�>Ѣՙ��V��5*a6P���E���ƈ���Cc���>_ƣ��I�W[��kV�H7�C>e�y�F�[�a�
������L�$���z��}�l��G%=g��{���9|�j#��鬣�v��N�>h�c=�a+Z1͜�;ut�L�hPR�v '��;��~��Y���g��e��]��pe���h�����Ŭ~z��o1�7h  I��TÔUZۏ�2G;��2@���p��l�I�[�	4i���� :(H�W�m���_��WRg���V����d�J�r�������Q1�D���تdQ�`���n��rM pl�W�p��g�Q��*x�����1^��"0�����G��\����F�Dy�UM\k�WX�� �|!�Gt)XG���ԞȜh�8��~e�t����o����m����(���!�g��9)�j1����C�ƓT�9����B1��,�[h��Q�6�%��'�cIoD�	2]*6E����뽾�!�{=�LwJ�b�6���t��5.�Y��K^��E����=.�~u5�P��XE�?�jpz'�u�Tۻ;@U���E�Ղ�r�F������$��ƿ���Ѧ�Y����V�
pK��Ea�"�(��|��Y\ʥ�5�P7������aO�f&9{R���"^K:|���uV���߃���4%ɖ���B���U���nC>/�&r��Sm�7���Ѵ]��V��6b�o�k¼�!\�������ɹ���7oՁ]ī	|�E�p� �*�* {�ʯh���)�B���W�+�=����J����8�������s'���Q�4�2Ӏ�J"�ӮXB��O��� ������j�U��RU��W���k]������/���[�v6�{�_#CԠ�����S�`��*u��0�$���K�������K���JGR�2����FT<�KO���Ш��۝Uw�XY��8e�����j�@'�����v̅�0���!q�iw9Z��zJ,�N-�YC��f�t�mS�T�ހD�L6pS�~O/(�TFG���v�G��ya������vo	Џ�_�����0�K!E�by,'r��z�0^u�a�9������Q��ȱ��}�ʝ@p�]*L�Ep�<��F�k �H���pB.�ǌq?�Q�aڔ�d� �����=A���aŗ��Tk���x����`?N��Ֆ=�]�&�(I��9���Țaf5@�������������׈Y)�\G�1���i'FZ�F�� )uPPﱾ��磕���ۄ� ���Gd��Mh��4XZ�VY8-��P���t��7:o�ME���-��{7wѡ����F�P�$�aI�gp�$/.qf����C�ǔ"w��m�7Ƞ�I�pJ� u�-��c?,�� �I�em[�@;<`�S���p�Oc�S����^q&��eJ��j�M��_�ǿ��Hkd���g���4�Ωi��lf�s���*�B�o:tpP�XWy 񣳊Z���1���&�>s��̈����[��_:�AU4�gf�4 �����/��r�@@�"w�H����SK����Y�̦k���8��fZ�������0�a	�<���R�).`�����'\�!wgi���MJR<ܘ�2Y�H��6q���z�-	�l���>�2K$��t��`�  -!˜��$$��$��b���07�X��Z���C~�>\�����*|(�-|VS�&���֘���O�,&�9X�5�z�|p�����-�,�n]���bxF}��4��q�O��Z��p�%��"��Q[7�\Ԭ�փ��� Q�,[�����Q���A���a��;L"�f1P��XW�.�C�W�zw���ʣa�k*� �3�����m�lm�Pr�E-��i_��[xw< �^d�}��M���V�v�}}Pr�B�d�.���t�bӝ�*(gu�eO�����S[��p?(;KŎJ�A(�6�`i�����}[t���Im���եb}���ߏ�z����Pڱ����6���[ؙ0"����W뛆0�vahA����ښ`s�5��0}�|�u��C���.��#%���GKp��`3L�qm��L����l�^���:N�X��U�:2��������� 3�C����	�A, l�ӎ���j�bh_�޳�͜TY]�nl�=^�t1[ �]x���$��M���;%?��̳S�0v�&�T����m���o�sQPO��3zԎ ������R����7�Le��ڨa�~8(�]�ں��,=�u_�Rټ�I��[�!/}}���q����'����\���J����)�.� �k��ͪ:P��j�A����N��$���fHʉ�k�Y�t4���a�,'���HK~����d��(��
��35�bF�)g�u~�~:VX��;�~YQ+=7�a���z��n��;+�(VK����j���*����d��m�aV�����JX	�YKE�EM�z�X����5�)\��A)���#o��=�:N��B�=������w���#���&I��q]�2^Ҭ)by�da�,�~�Ԅ�>~U���Ū+�
S܂�:��
���U��i�������s!&[`$�TtX��1��M��.������ZK������^��&�q]z��g���Y��&	�����t[pˬ�����	�_X�t�V��"�(���!��
F�潯㠍 4�E� ̅�c�a�	 ��,�s�+��y�'%>ۑ"I-M�Z'�Y]�%��l�{��X��"H̓�����̞B��~�e-������E�%,���a^�꒻��^v��5�4?����	[�&c��G_&h�,p_�^[ ����*���ܵ�j<=�c{�1�
���m9�ޜ+C��� af��F�xV�W�P30f��zT�VtA��
۹ӉI�[\ս0[ΘMm��:��1=�%��!������׽vM&�_�m�����R�����
��qq��:,kQs�k6���4��5>A��IkC�U��Y�&낧���o�Rm��60y��;NY�Mۀk��Z
���O?FY.ޯ��hh���(4�Q���#К����K�?f����Ϗ�o�?��],�eEb���v�//$y~ph�^!���:���#��V���S�D��;��'Ϧ��~�FAؽ�R�%��eNl�r���%�Tʣ'@qI @��x��Xf�#��B�1F��1< ���R�K��Y��ި򭻒��BX�gƹ��~��۱����:��nXo��=vlsq�דZ�\u�dg����I$�,ZC�(��a2�R���W��\��F-�3�7��@���A3�@�|	}�E�'(���0Id���M�|wN���R�dPd�[s���<�8�����)�������/A�&�X"z���?͢y�e�%����Y��a��:l���%�f�.��=ݦ�2�%	Wi�x: :B!�|xf��z�4M�l6��X���H���\?�)ԣ����R�����#�n�Q
�)T,s&�p�Q�0c�#�졔V��\��]Aʬ@����T�����\����6j��}����<M��
�M��Bdu��������,FԺ�-� ,��tx    3@�CH�ur�H�k~w�9:M��a~{7I�g��뎪K��8$�3�x�&��p�����������]�)�տ�Th^���=�%pm7�AY�2�w�ԁ �?�m3E
��������,Kw,F�HP�����2 �ޱU������]��8Q�D�6������͉֊R������f�P�7��w�Fs.�A*͛�E��R�i�UN�*��Ĳv�T`	��ҿa�ݶ�ip�h�Q��7Z��[�8�ڃ�	�@���f7�	AUXp5վ@�R�Ց6�M`9" �E	,Ʀ��[t�8>�)OȿІ�5��EKNXXwR�
�x���&�ߍ�ր��|�7J���i�`͉ǎ�� <$*�z��8�XL�<y,�4�t��?�|�q�D0)��'��ɃPܠ��j���2XI;�(Du�x�gp����	��sK�X%N��cVQ)
�`[`O\���#L~�>�^ήA�a��T�0cy��h8��t2�A�,^��>Bx��PW�A�x�y7i�F��sl�\6r���V~P��o�G��1l 
i�j�c� �:�&� �H/Y�;�:Ę:�/�_c��3�*ٿ��Vgʜ�;K�C��\na�sz�7�uZ�a^�p��
�^!��s�vADL�w�1�O2J�18�5���G��
��w�zT�D3{���9@�bU�D��u����� TGb�D������"ڟ�;jA��8{3g��s;��� �;h6�!3ɞqêD�~�yk�D�7���7�y�Цa�2Pg=![�Mjc��o� ��BY�s���r���M�����_�"�R��0��\$hc!�����?���7�~��������݉j��4��[�\}i/��2���:G\z��k��T`EnO��ۏ���R��� ���!R_� m�� �j�o�Q '���R��[&�<e���f��%)VֵY���iO[�5��:'4<<�plѫid��^��l�.� ��]B�j���CDb&-�^���7�#���G.0�gW�"*��\������V��ߧ/嫰�V����"~=�4:;J��8C��$�/���W%HV{1֑ʇ.'��l ��$M��8V.8�Vg�r�4�%� d��k�E�6�����[��,Ҏ�tG�������8uتC)���-|�[��$^o����GΖ0zc���&��M�-y�RH m�>�}��rDA	�#�'!�E�:�\,P��YMA���:�*�3u�t��v��ޱ>�PR:������(n���v�ԝqy���2�4Q�{p�uSdb��$1d��/#�_���얣uf �U�9��,8�%��� p>^/b���HKEjL%��'*������z>]krA���Fdu�^)�/� rVٔ���\� �}R	��5��:�QY� B�:��f������g�fA%��U�H]��vzj���@�jZ���,�)H��P��o��%���E���hl���+���JԦa`;!0����}�"�����r=�v�JC���i��Ls��z���zk(�y�8 H��Rܷ�eQ�:h�CB�
���+:\�0 a���������A��$,�`���@t�NA,lC"�J�!�
��t8�@X��o��������db���F�Q��1+o�8�ηI���6��j0K�P�G��zy�4��N�o-O� ���ؖ�BI���W�b���m��.�%o��v�� mE�o5����q�������ѼY����)'M�!v�'>����n�z�_�w�=��'�(|x�@��l>O yp�8��(�[K�5��������7H����l�ְ�B�3����T�͵�zв�����k���ɶs���Ԛra��g� �]SF߫�}�B��V��6}�܆��H����a��4Hfm����8tj��.�u����a�=j�OP���)J�"D�\c�Y<�ǀ�c~�8a����Ш����x�ҷ
�H4��pV�Yit��o0�7�>�R�������:����2E^�h�8ڥ���'����ȸ���^��W���6e��� J'+͊VKC�`)|�*.Wt�%`��ܜhM�X�ˎ�rXj�Y�os������M^�[ �3��-�Jl�`��b���>LG�^���Qf��d�����y;��_�>���1�\�{���V.>���,���3�8(�L� ��	Y`{G#ö��H�,/�/W>�;.��r�YG,#�¥W����x�=����IH-��4;���^����@�$���~*C�Y�{c-�{3)��	qVP[wn��Oׁ���C��B�JN23|�2Rh�	��)A/��g�b�W�����=�b����̡X��i����Q0=�q���X<h	��	yO���h��zM+K*ܣ!).��"�]����dRx?a©#P������'�P�ڿ�1��kz �Rs�p[Alp�~X�S�L���ê�6���=�	�uh��.=8�k v���_����5�~aGf6pq/�\"�J^�����V;N�UΓz�L���]@kW���d��
k�H�UH���i��
L��K���1h���b�A{��|�%0�k%��j���x~Qk�:���
3\��������인� ������1�+￀>i���L�)�(q�m��%������z\L��>�$|�<U�����x�7�3�WxD*hN�M����ѳ�Iu�+*�^j���C@b��y$�uF��;�*��pEB2���k
�s �:B���ؿ}��H��w�U�-0C�=��?O/\�ヱߡ�PGnu��ˮ{h�A���s�F����?^�qՂү�`oY���tx���-
�Y�bճN�9u%��%'ou[�K�Y�-�4C=����TFN�Ы����9(���º��>�|�L�D��Orc+����W�ٖ�׹��?_*�E���#X�?b,!�C��b���UV��u�vƣ	������:7s�5�~?�P����DZ[%�x�H��g��_w��At� /��C�M�+�P�enq�����P+��T����m��3qϒ�o3AW>�#^�u�H�X��	�r	d5z��!�(��ա�䢛� /ۆ��p�d(�W��X�m8Mʪ������h�z��5� B�'���o>\�x�q�]�څ@�4G�eu�<��a�������sZu�-��St�ɵCX���"�ShU0qSq���
N
e߭hQF���t4��1�c�G֭5������~�md�]R�}�E=�� �?�oY���!�bEN����=x�1�Ѵ��X�9y�'}������i�|��%�D��x�Y�!7���k�z��w|!x���(6=`u�`~9>�L�p���̩G_�>�b��:��D�Dx�~^�[YU��めe�%,pPD��<�\��0K�x�h���?�vl��a!�2�O�*FNM����*����漄n5��`P��-�f𕤠��� �y�®�\�s]��
�z]��v[�N:sm<D}�@K.�Ug�#e��$��~��C���s܎4f�j�a�0��E��{�j�����~�{٘:�Q'�mT�k��_�!�6��:�(���^0���s�;�:`�0 }d��As�T.�:��l�AT�{�>ڭ�%@��b���j ��Vo�t�J���F;��1���Oѕ��Qb�Q+�vj>�7�?ȔV�X�����L��l,�X�(j��}zA�_iw�Y+u'H��ٖ<M��,2,�V��˪X�X�Y�l+Y�rTg��Ú'πgB�U��sW���1mV�5�3�[tuw�:�b��>z����7�h�cĠ�P@������·��%���c`E�^b���Im6y��?������Z-�F����Ä��z9�'�V��qB$a)%ըv���no���t�
XU��j�e�6Q��X��ТA�ɣ�x�=�F��^����#�X���6R�ܓ^L�J�-\�}(��#�ÆZ���� �ѐ�>6�K����@���i�S�6D��    u�9�&`Z�ȣ񒼝 �Վ��
��!΢L��A�>�j�%�"V[��ZiF�u������S|�SpW@b6�A����׃_��ݍ׍� ���%��e�&yQ�Ar��S�+uFW�vr'aW��X|��G�Y��u��Ch"��hg�>�^��.�u֟TD�I�E ZF�Ǘob3�Psu�$`*�N���������X]$U�fv�Ϣ��y����p��z�[�&�n�[iR�Z�^��ՕX#�?��Q�\����*�Z�<�����{���x�C���%I`U�G�A��"PM�����k��Dy��s�y�A:�w�w�4@�ov$�����{��[���wi���	�+�xj
�B �-K\���0[ıq��j�;��KOK�J�_��XﯤZ:콗T��¶�@:�t�F��I�uXO��׭�)���2#���&�_�h��ݮ+�͌�`�m"u|�Png����	���I�aK�/�k�sf;;Z�aP�V�N�⬦JI W� ���:��j`]�����(Qj �qmR#q���������:�u���Z�?W�X��)�aQA�5�8�\E���R�˙�J
����������t�D�g��lļ۩�O�)��h�˪FF?��Q��X{Mk�l�c�G����Ω�ZN0e}U�c��?����k��u-�s|{�6�_�I�9�ҧϟ��m������`Z_H�溯�����M׮��sM�G�W����p:�P[�	~,�j�9x�5P�ϊ�*�[�������|lV٫cm�/|`��"�D�����	�Y�J37nr����5(Kuϥ�,��F�#����£o�=E&P%	�)�Rԡ����	�;���c�Nr�BG��3�65���zf���u/�|��EK����SԺG�t&���T��L I3sLt�R,������n^F���a���.�f�&��Sr0ޚo�'�3c�3��:+��XR� "�]IK�SҕU���^�C��ω`̱i�d"�8;B�|� H�s��I��J�x�׼����ѼCm&N��Y�Q���f����EM�|���͇(1"1�پ*S{���7���R$�je���8o�*&+� R��6����g���Bt�7��f*�,2����bn2��"^t;po�����`��N��V���v�G2tB�I���>���Y��P�q�_N�(�>7dخp+2
KR��=U�d0A�����$��h	w��mͤde݊o�.`�<�+)�\�ykS�JY���́��0v"��~�"�Q(�.{��cf�߹c�ˠd��j�e���>���v��$�|M�5d�~/�m�/��Y�ه-�]�8 .�h�U��t�h	$����p�io
��6L�d£ډ��s�B�b����Nk���F�� \��A҈Y�KXNߨw��9����u��Zޛ�����f�0�Cz�[7��XG��b]-�M��%�i���)����H�81�6jBZt��w����@�
�Y֋%`���޺���ƺ�2��YKiT�E_������s�/��y<ΤA�K,�j���뿇����Imnͩ�F$(ޣK��:��<	@�:(䂊�Y�(-��H*�oص׍}#S���)+�g7�2���35y�Z���}���ZA�J�6G��Gr��DZ�ni#�(���/�F��z��\��H���n�u��;��̀�������n������x� ��N@N4KCRI2x�O��]2ـl�ho�i�U���=�1���@�.J/VfO`����	g~�ZJ���i]����-�lZD�?_����哨���3z� 8�r�`���2M���c�����[��D�фr!�u��y��@SN]�[���G��M�+I�\�k0�E�L�lg ��T�yps�ٟU�}j`�9�h5�u5=���mja�l�^�����C��.7T�=�|R��s"q��g=/�YM�=�-�:�,�[]�O��~.�k�=�X����+j*٣� ��k3�J~�"�����p�<�Z+%Z9d+Q���V�GQ�l���d����`#�k�SWKQ��o$��(�@y$�j����v4�����_ �f�ni"�>�u����`έ̱a����R��O��M.;��J5n�0�P��5����F;:�����G?JK�	�f�0x��s���5���	��N��6E7wsZ� x>�$�:��ꎞ,�Od'�a�¬���f(�ϴt������� e�s#E$o��-��![j��q�O[�P֋�M�=E��7c��j)�؅�&p����V&'���O_ �t�We�, �,��!ʩX�~��:S���,Z��L�o0�tҨ���B�5Eũ{b��'�[P�;�қ�\˙ �yd�!Y;�m�R�l���P���.<NM��YqhpΡ�z�Z�p��P]|�����7B,� ��*�L����LZt=>����hzA��=?Zԋ�B5@=F-�L�D��K+s5��%D &��$?3���P4ݹ�`s�jfup,g
�da��j��y	r��h�*=F�p�]��_�Em�|RRiP�L�l0"�{�F��b��Z������	��7�+��,�5�2Udg��.�g�7�&���ECw	!�3T^?��-�;�I�Q�,�=?'�2��įL_z����>���}W-�Y������ .��鿐����J
�"� �9��N��m��-)�S�̲�>KX,JI�su]��9Ѱ6útˀIq=�]Q��`������YH�Ъ�O�~ُ,������"��^8�a�G�a��>�����V��l�ћ>@e���S�t�(t25H�̿JÕ7"C�p�E�����_��v��xi`j���,�sE8Z�
Π���^�"��� �PN�U3(������^����>qf�q�Z�N�V��Qx�z�PO=0;;LSk��.�Hd3�G2!���dv�(6��M���z��`�((G��ͩ�o!�1w�c&�vB��s�'��M���2�b�>>!�nݮcv{G�Ž"���B���AT���޳��5d���\tz/��TU�BCtd��8]�	+f� N��ZS��~���T=��?��m��dK}�_��<uY�⒏	��@@$T����p��""A��)U�ٞ=���̸���@[����79!�����?:�Se|�t��Аiwk�Q�A� ��Þ���f8Ȫ@�>���|ۣ����΂��K(S��ZQR�j|�"�ޱ)�F8py҉}�s�:�f�č�ޯ9�[Ώ����7�J0�g��#4K��2x׊�?�Q�!U�#����ǪH���Tg�JH)47�@�ׄ4��at�e�>0Ih1@S�L�w�ON[���$ry�������P���ǆ_���~r�&�՜Ut-@���.����OZ0�C���eĵN�Cr�忥�QfL}�P_�����	'��F��m� <p��4~�`Ev85/ujr�WRSu,���(�^A59w<�ơ�UH6�9���q͍��Y�uH������S�,�v�o��]���"Э`#}@�y�t"ji��4#���ڿN���B�~���Pi�gg��`\�R �^�T�,Y�g�Yİt��W��D�I�{��ʺ ��Y��L5V�j�c�Ù�]!7�;W��A�9�[�'�L��C�W\���+�(�br-@��C��l0������C�tE�3�7K�F��"u$��bH�~h��{놖��$6�ÅY;B0D�0���ֽ��75ǈ�n�t؟e`�� �@Rcc�3b�F.y���a�
P|�%�����ܪs- ���^5j����=�l	�)6'�D��� m�tYbb�]�o�Ʈ+���a�U��Ù�*����ef�K8�-ˊ,��s�ܤ '��K
����]$��?�蹮B螤��Gp�([7w �Vn%Hx�軭��E�m�aA�H�:��,I'�ᫀ��kB�iI౔f��=�&�F����ESJ�~a�l�d�h�2Hy��P�^a�Oq	����}��h>-���-(we���%���h��ā*�$V�����r�    >�L�L��C�)�,������o�(*�u�CV��00��<��oQQCF���F�
2*���*F�7cX�1��l楁}ڋ�њ���j�0{�kt)XƸvp��e�s���a�K�Pe�4|h�R�Z�;Rzܬ�9���k��1밸���n��1�fRY3�[V���T�ZW����	���?����ihMe _(�h�x�#!���|$�M׵h�7~�0���'���;�Ɇ��	��
����䰒�CL�W���N>��p	o#���v��S��_a���?�SROǎtg�ź��5g1ȿ �&H�^���6���#h�q�Oվ2�����������6���`�=�H25���2���2 ��a��s���H�ot�>wI����,+1vq;��m�'��!���RU�O�Ho��"s���0 :0p�m{d����f�*;�a���(#}}� �r�����-�#5<�r౦�D�4(W��g \ϐ-����ZSbr����Ađ� 
�ys��o� ���[����̲�t�3ɝ�q��9���!��`ř��z�+���ټ��@N�g� �Ϝ�Lt޸�g�	l�Md��)AWV`��`�<.���g _7Ò�S`P��Y	r �"Q�q ~�CĆ6K�3,UM���6�xC˛K�-�7�8��4Z0��-7ϽXv!�;���BEn�K;]�n�h���G���Ä�LѼ�86Ѳ�^�dZ��.�m�J�����X]c#aXfrz�ѻ6�8�2�o3[a�R�V^ķ������6��[�G]��x����Z���ذݜ�i��	E:��P�t�8���8�!/�o�`g��H �lԙè7w�k�{�iIXg��N*^&�E�����g��B$�q��H �k�6jq���4	����J	�ȳ�YJbZ�ga�GE�Ǌ45��	��r���C���m`A6�0`��y��Ax�[au�� e	A۸���Jܹ��k�'r�!�U����L��ùe�Ȕ�̉>���-�{`N�@��;=�r�����#[���B��`��\o���m^��3������Zx��4��ӓ� mُp�5�������b`9��gM�R���yO��/���Lv#��?Y�������'*F��}�fJ�g���%�R6I�����?��ɞ�7����<
�i�+x�;-4Gdm�i3+�`����M�RB�pj��^���2ЋQÌU�ЖrX��?��/�S����wO�-G��mP���*
�EB�����a�Wʺ�M,G2��q$�����O�+���u�/*x����r|SN-i�v�L+esl5�7�N��r�z�Q�#^�NJҥ�60!��j T��������p*k�M���d�R{x�����-� �a��6��:����^�Dڴ��5X�L\U=-.X��\�)��"c�W	[���ߠ1U����%*��SB\)���v��U�WJ/�Wl���֤�1�@4��M�O_q�by�>���;�1������DX���uSv�L;��������(J'�͚89��u�[V���� ���\&���T�l�����FbWh��Q�vs�~�3W��Z7岋R�iH������V��<���#��2G�G¯3����Z��h�8FR��@�6�o`�om��M���;���Q�i�8��j���'�k�9�UF�
!v��JJ���#�o+e���0so�Z��Ml�gF�../��n�4�����鬽G�VzKpZ����N�ۅ�{'�e��E�pA�f����\���b����Bk�ěK���@f��i�m��*��Fo<U1�����OW�[���T�'SձU������XFk�U�����,摮b�:pI���ebW［M�!���d4�i���q;޷����T&b��� �VI|e�Z)[o��^�E��K84'�$�`���B�u��PM���<؆�Q�A�v�!ӎ5�a��0o�2J�D�_<~e�T�u'o�#�;�O#�`]���������H/���d$�HTvA���Å?5���$�����D� 3R�� y%�P�E��	A���q�0x$L��cF���q��C��
M���B�Wҹ�[��uV ݁Lh�G̶�̦65j��tx���Z�_7��YY:��k3�"0�S��G1�I��c�9��9�P��sxu+VA�� 9����{�
�Gڥ;�$��Y��or'�&J\Pk�y֢���+U����n1����U�"a	�l����"\5қw6d0f�N�2�`q� v�X��6f����`f`���8*�Aya����$�J�i���x����h�݃�G��@�Z.u_��9D�*N� ��Gl�����o�[�E@�нL��9@{��ޫ�S��6Ƞk"��Us$N���Fk���������J>T%O����[v�o�^��9��"|Nt�'�aSJb�兛䪬P��ĩ?����H�ZŁ:��^��Ac��l�$b��:�AW�K �?�*����#岡.K3�OB]��i�M�;J�6y	�C&]�J��C�>��)�y�|�])�b��7s%3�R�R�
�ĩ�����W6S���"��ވ�y���j�	��~��}�+-2Q�bId�F�?�t�F�E;�̎�Ӡ��a[��[,'.�����F�����Ʉ}�kj���q�i淕�_��\&3��|��c����v���y���N�\����'_G8�n��w|H6�2p漑�lN���&�4�HG�Q_���ӡ��_R|�8O���V~&y����&5�3��)�ؑ�^��N�a����X#���c���j��d����>Kԓ�5:"�Qԩ��,8kg#|A,�<�I�s7�βu#ف}���C�\I������qK��M��!W�b�W�ZO�`2WlԔ�CVb��$2�X���r�����.������5��fk;�ҝ�ڷ0�ib�n!��-\c@������I��t77���h��>��iL��˭�D(�U��ڪuk���;fq���&+u�i)R;������X=�&�l�{��T^�,~n���b�-�=���56dNVKF���/���`�`5���F��.Dz+��IzbD���� C
�O�S��2����ޅ�������"��$���H��{�d���\�aڑNx+2уԨfH���f$_�,&$��7j��vX�J)�h��v��'�m;� T%�͘ �H	+�����j����dUj�����/�ֆ�r��=�\�w9��i`�1�'5������f�з��<MyM��,�øVg�!��Y��D�x]�K :�r�\;Dld���'��d�H̋#ϙ�I ,�Њ��x�ؒ*_��+qg�t��J�gX����,�+���ْ�񢼗][��ȵ&�$&|����ö�>��9p�̒���ф�xD�_��$2��	��o�TY��䚏�^z� Ƞ���+�4]�u��uf?h�?N�?�q�H����F�-N*w���*/���9�����.Qk�l2�,�^#K�̀.0�!�^*֋�v�?�G��F�/@="Lv�] N��Fj�B���a��95��NX-��e�y'������~��|,���X(\L�O 3���C`��҂gv��N%���+4g��h-���X)X�2��W���}��H�Իz]M�l��֡��߷�P��P�))hY �� X�����y���TѨ��]�*���*Xy��&d[�@y7B��tm��`E��&G�~o��<o���\q^���" �)��lt�9�{o�Z��jr:Ӷ�(�_�~�M�Y��@�ʧ.�ﭡ�D�-k������D�4;�~�x�{9�(���Ǳ�D�dβ����ux�]�SD�䗴�2����N�}_�ai�3�:���ヷ`�[te'�F1	�@��M�u|���N˜�cZU��-;���x#� ځ��[؅إd_�G�M�s+���):�ٺd��<�    ��	�F�r-b��1r������	@l9���7x�4��G�D�u���{���fh#ͨ�R�t�����>]j��A��%���P�]�֍�/���>��yWuh_R|���P��0�Eq��>��f�.�?1�|%��� iG����J~��TÎ���%��}|͟���L0��^�f��z痫�T^���*Ӱ��5�����RA���WG��2M���z�]��G�� �{J)̗(�KJ�,����v[�aH@/�@�G!�qȩ2O$���Q����_�s�Cڭ����zC mR/C}�q�Ck���-�	����D��[\�+���o����g�*����-�X�5w����KAU���J������63������+�,g���_�9zj�Ra��K�3B�J��X�$wىVW?YR�c>�u�;����n�N��Hj�#D5���^SҢ���f�*sOi�t�r�{/%>S�9�����!���;m$����]Oٶ�
 ��׍"I�W�����+�K��K}�I/ߑ_Q�Ǻ����4���oI�� e��P��־�S�E)�5��7�ɼ��bw��jTʁ��^GܼWi~K=���5 ���+���D��[6jS&XK�����.1��{**���B���(3�ki~>�7'����g��.�ks�E�땱>h__n~�#��H\~~�^�
hW��mU��r��u�M��oLNG�$PV.�Xcs�˴"� �+��{6I�	��P���l9�ä\׎�TI�UQ,T+��M��������M2��/�7����E�S������s�Á���l���Ŗ�PX{�w�W��`������MD�I�	�
�PkФ $;��.�X��[݅�+�ڳm,ز���R�����Z��^}�t]��dd7��!��`��3����g�y�^3�ʊ�����$f���0XDpwF&n��P�QHǼ��Ԏ1��Ǥ�k6��",�ş�fF���ۚ&� ��R:�q�d"��7�mut]߀�,l�'��d�͢?t0�Mæ�*{��p�0`/�fv�Ac]�_���f�K����Y��V����nfM�<|�E �2����b����Z4�}9���.1�:��@� /�:Vh���ў��Rm3�ԲEOm�A�v1��C��!bDd�S��ƀ�xS���1�WO�{$�n[�dv7=%���V����ȏS_Y�˲�]�����ʋ����+\p2Q�Rg��B�d3j@��x� �u3F����w+n���Ion0t?�4�6���vi�7^������h��v�fmU�2�/Q�j Z&���Jb;^vT����o��g���L+�u5�v�6	,0��H�z�_M�X��;����	�����.R���Q]�qw�����Pc*s35��L�kh�uQ+�.�7t��8
���?"k^w��*�Uo^5ғy0'�q`������ߵǑ���L�^�*������2*�Q���2��a��wE�+�.�!�7��:��q��SZ�;?oq`��K�������*�i�}�kR��Vd��=X�=�Kl �T�x�@a`
A��DY$�5��!�A�����B�f�q-Е���>2��w7o�j��&�4��9Ů�t�*������X�՞ ��Z��W�Ͽ����u)o+�c�̘�4��Q��}��\(�0K��w�檨��T��O�W�,!��Wp��0r�6��BP��vϩٺl >X(��UU�!���T��/5m�.g�܅B%�dZD�YhC�p��y���e3c�ty)Rݳ��ڑ��Q��}8���1���f�9��qw:2"h��K�a�Օ�b���T�N'�qoo�S ���g�=5$�,`�+2t
�a�;�<%���ϒAE�u������e_j��ۖe������V��	���z�e�^�e�HX����ݲy|��d�A�r�FW�^�t�Ↄ-q19h�$����@5{��<f��R#�3Q�?)��	�r9=6W�{!>O	 ������/�q��.���k��GE'�h87�J��V�sd��csRf�d�� wR\W��/��_�\n���u�K�n����Vj�~�t>q5|�;f��xCC�[/�����	:�� �ǵPKfr㬆zq�w��`�g��8ѝ ������Ѻ�&��6���`���+��OFZ-�WgI��̑�(��"Æ^|�v�v!Z�7L�gH���M�N����A�gNBmyړ��d&{M��5����6�h%:�����rrAv�|>�� ( efN>�%����/}e��vV�o��$���r6�`R�� O= n?q���ia��D@6�i�⹜/߮�G�Z�N��dĖ�q��6�;r[k��f�=�b�E��vV|;^��DP�✙j�|��2��G��8�CR� �2�ш��L)����_��ܾ��7�,�>�md%�c|נl�5��ƨ���.J̀mͰ�3�<�tp�L���{NF��гLl��;��=z���y�i��}�~�/�8�����<�E�P�fr`sғ{����~�#��sO�J�F�}O���V��yT��i�����cޜdV'�<Ù�N��	�ŝ��7B�� Ԛ�v/V����d5��pl�T�:|�$��G�__��9����p	A��%���y�t�z�R���~�$0�'�Ev;�eL�Y� 1х�b_>(��޾�:t��ӥ����5�y���`e���	3iG��\ZɂͰ����ڗ6U��C�gJ�0�Q��v ���|�z���zρ0��z�+���q���'��v>x���ݓ�@��5/��S�6l����^�^`2Z�������М�q�~f�>�,I�?,pi�`�쿶�_��耏�c؎V�^˴������Ph���1���1��wq^@顪�q���
U�R��m�Z���cus5����µ�$ ������/C��Z���DL�3����i~y��{HC�^i2����٣	���N9��6`S��],��A�%Y�4������ `@
���pաH��h��T�y��>y�5
?�[��.�Y|�H�P��Vڽ��iT�G��9����u������j�ۡ˴V��uTێ�q�֮�uK�s��@�vU������}d�W/�jĄ��'ю}b#�|�?���]�� m	�Y	�F�@uT��Y��s��v{�r�U�i.#o{az*
8c��������m��8���j	qw���P6�7V�=L����k��R�6(� �uDV.P
*�S�v�pB,(| �06z{޿�g}li	f+�]%�V��b2@��������4��'=0�T���̉��1�jI\�D$�/j[��0�ߦ�GC&�Hm;y}��X��3�.��p#�*�냗���έu��Q���Y*�,Ѽ0�$�����?+�l�T�q�u�K���1�`�Q�h
�u��c��8���������i��H�|��f�9Re�>(���5<��re��̅=)�ѻ»����Wd|�d��J{�.pl��-��2����F�=�e�7cF�h��S�U��U�����u��4��U2�&����kؖ;ﮰ`��ڀm���&�����sC���G����:�H�._i R�B���)r17P�0�	sc��1و^!`�)0@A~����E�Ѓ���3�[���&K>�oI�4����9+*6���ֿ��:0�\�-ؽ蔤�_~��C���������b��Y���vZ�R%��q?JmDJ��`�d�#+Q�N�"c̪��� \i�K)��ޔ�~�P�����Q����B���4s�2w�p3Yw���vM��l{l�#	j�6։Vց6���زqy��J�� �����Y2i_��4�� �y��T�~�*"��%9�'}u�k�^�e&�P�:O�P��i���MtG��p�kx����#�D�����`�� �]p5�v%�:Np��z�u���ĬZ	��4���6H��vJ��ט��3�e��n��^{kd� ���oJ�s�l�Q�-�f����X<��: �5�;�3;��eᣢ��1���ǎ�� �1�!Z�f    �4�7H��w�lK��� ߉���L�Tԛ4\I�[�ؘ1KD_�ֹ>>�*Ƿ��{[vB��q�1B���<ơ1���iv�TLs�CQ�~nt��Y6��+�T��b;�>_�zSc�����~�l L\��4D�W<�k�=��j"��YU�B|!�iqq�g`7����.�I5;�]F�2Z+�6�
{ ��٩����0��٥�#g
�G��8Î�z=��{$[m�4k2��8��r\8pE�a����E�*�&�3�je[ڟ���N^`���dk��d����J�����7j��J�A�&3vM"��0�g��Z]�ˇ�6��pM�ߔ�̭��Qu�ʱf%7/�#)F<xy[ǚ�	�h� �5��}b��������j`��)����8`�
LE �����R���v�zD���0�\�6�����L�fv.@f��VfR��x� �݃�W�I끏��S���qВ�
��6�{�kH�n�w�N��9	Ɵ�b���X
T��<�����dЫ �T���Bj_2�c3[GN9�"��A������@��եk��o��q�}��B�����~;�4aaK����f��9�v݋��ke p�+3яy1�oG~W�6�J�X�bO�w}���t(�ν�����Z�h�׉�;�XO��j�aBZ�b����h:0�A����>�Z4��4�}DkV@���w32Yǉ�g�0����H��s%"żY+�����/b���v7��Ӽ�kk}�8�o�T������uUe�fyAW�@�._�}��cUJ�|��
Fc�����CEί�[�r
�>��Jp�r:(���p;�T�d[�/���p���e����Hm�yP����%^��I_5�T^t%�fN���YI����A�ղ�Bǁ��ʔ%dg��� �u!I�#����=�2�ɟW�Mc�6"�*܄��A�)~E݄9�IG���@ˊ'��(]�ۘɣ��ہ�|A�0(� >�_��/��1�ey��.f��Z}3`t�|����ϫ�;�gfY�<դB�!�#���.R3�-��k�M�w*��74� �2h$�1���:��3�Q��&�<��:�>��=��T�Y��7vY.��<�"��T��7
�l�X�g�	8D}98��F���:�;0*����=��ՏC)���B`�=A��_0�B�U��R�7�z�	aop��69��d�ٸv�4�8d�s��ELu(Xo���%�獫g��!��'-����cJɋv�k.#&i��<�p��ˁ�< c�15&n(5*�VO`���d�9cb[e{��iOO��PJ��%�KR�>rsM-g|)4�xv���[���qZ	_ec����	/��j����k�.J������^��#��u����E߮$=Ќq-�jR�zn*J?����(��I�㉾���j%l��{�w�cZ��gk`�|Y�T�Z�l�ا�X��ìc%�Q�K#���Ldș0�������PD)ņ��0�$Fu��p^|�&�����ֻ�Z�匇;�,R�ֺ��pn�bKۗ���^NY�X�2�\`�G}��'M���o�f�N����k>�� R�c�<�̺�C���t:�o̺�R�2BW;��.c솛IH=�q+�@`�3�ح��t�����۝�WQ;$�0�����ڮ�cu;��W�ڨ'w�m]F�56����:�r�����c&#<�x_9U�&0���J��ᤴ&D>���ZQ��-f;�͌�j� g�����oĔ�[+�q��������qӌ��hP�����ݱ�X��2G�zdtx���;)�
�7η�\�e������}��������x����Y��<�!�q�=�K�g��N�}���X�H{���˿�n,a'�~����΄��lEP$_ʆ��s������Ҵ�4L�6}ױ��.�(#���?�����R��	����`'��|צ^��_:ä/��o�A!����`�E_�Z'����>Z���J��>Vn���&�s&�ߛ�BWsF(���Z�V�W��SϷ�
��&��La��C3�����N����h=���������:'3�<yz\�F�3G
�3�#=}G���M	'���ĸ�f������W�*��Հ�9G]V$�=���{�[$�J�)���Mt�A������φ@�n���9FPYy�Pg��7�653�^%Ps"��������:��/K�J���>YY��A�/����nI/�u$������J����-G5OĹ-�����RJ��3��lڶr��h;x�uљ��Y..i*���?�F$�A��\�V0�����ư��s���>� Z>V�j�~yxW���f�Z��4��%|��� ��d��Dہg/�c��!�p�q��q�E�&��1��a��4�-8|�W5B2c�N��9��5�Zۻ:�zb����A6AOÒ��!R6���'F*��i�#?�d�3��l6����qW@� j��ȹzm�Y�����(K6'�B��.xԽG��#�&�ю9��qW]z˚�^�������xRq�۰n��a}��I-ʠQ�~��gV16�	;e�i$�Vs�3�c�~�zs՞�Μe�X���M~�U#L�-5��o� j��W�H�R���:�� <�IA�+��x=�&�4Z�w�_���/��/����eRJg�H|��B��`�n�V^�,�Љ�v�Z����B
��v��*�	-.�F:��qV�����ߨ� [�a�g[S&��x�p���$��syƥ��v�@@�]�tx#����FL�д��'T�ڭe���b�Il`�/f�yG=����-�U5<�ǯ'"Q���L�ߚ�dZWj���	�����u�[�G��t�s^ĭ�6��XBS�4ʊX�Dd^ڸ�V���#z�RGBd5C�ģ��������i _ �y&�Q��d�Q�^\f�w�7q\���d)<0j�� 5F�0��r�I*[��,�F�P����%�D "�80���4޼(�Z���v}��9�ڂ�Pm��b�4R�Bm��N�S��-S�hΣ���~9��ewo����gEħ�!aG#�@#[�?�\�@;Ğ�I6g���e ��=u;��#���y��)�Q�W�4���9�t�ݑ�����AG���X�ti���!�1�ο.ϫ
:����a-��7ѹ�{�g�PЌ�գ��#�2@��6��y�sP����k9��14�<��[6�Q��a�_x����P�����n��u���Q�jy\�հ^t��ήQ�ꠄ@��Wjquc��I@���%|���ss)fx��d2z���h�W�[^���qrA��u��(<��R`� �t�o��-\��:L9��#���!�O�z�ӧ����*7v�
�]�F��U5�B����ԇ@�(�3ߔ�Z�~��"�6�w)��)�-�g�FT�9&`:�Q�8M�?-�2�6�h�Q�vf����a⥕�WXH��<_��}zL�LV�;��d�����iiv���md������:��G���ˁ�Kn1`��A}��Z{A >��`(�H��8�9d�&�w�
�@�����Tw��c�J��O,;Jo��g��Y��BFǍq�^g-�y!��
��m���EZ\�g>��ؚy9�M9�q�ʠu�7v憮?p�9����g�>�4�ц~Ζ�YK�N�f,|����oZ�Ȟ����?O|{.��>Y��"�5��R�<#h+�M
u*��]g3�83(x��80Fl���^���]22]o �p&�:Ӹp��4�`wA��	���8S�'��۵�L������N]���[�%��`�2������0Y`;�`x�a��ז��%��O/�c���8L9�!"�tbM$���<%>xQa��E!H���׺А��a7��/�;1ŕ6��&i1�� c�d�n9�Ł��"Mx�s[i�q�j�\���:�ʗ��3j���@�,}{�Q-d��}�$��]����yw!���أg���?�79�35^�׋��<�t3���j��$��L��v=�������5�솋K^�U���z    �g�:��$:u�!'��=��
�����?��`\{�l!}��j��n⎞�F,�<n:A��4�h�t<��:	�����٦a���T"�kޟ����t���2��+�x�]�����J��X9�Q.u��sy��}�?<w�܊�����h�(XV�Ϧ�|q�8/W4����Hu\��g޵�DÔ�ْe�6�<vB5��6�J�*铓��0�b �
Y�W0��@�1G��p��sk�Q���	�t5C��en�]�5D���~���@�	tA �6%��3�߲�~����h��Ǳ�ʦ�b�5�3����� El��Q�@W�Y�	�I�\:�t�~��cZ�Zε2����qcoQ3O�w�	M�1*�d�梍��eO�X�\���vZ����M���'��Y�<��ry��:��T5������gr~�<�Z΍0m(+K�ϖ��2'�a�"��8ލP_���v&�맰��I�iN@��-�vw��
����,���@�e�����t�����N��Ҹ̅�B$um��[{��G;��"'�%;o����2�J0+wۘI\�'{ 4����I��M�"�L�Q��<���QW�1�nC4X$�k��B��y4@v�5����;�n��%����b��i������l<\�P���`��x����
�9�~BdB�.l���0� =�'�7����6�a�6�����,t���AP�������X��_��浦a����@��`�1k���oz.���0��!
z��^^ڲ]6�7:/�*Ǵ�z(�(K�?���U���3k�rF~�@⯵��Z~��� pMUL^��DE����7X�yZ��*?GWv�q&�R�>�{
kz�+#�I⠶Ư��M���*��Ȧ'�D������{�S���!o$
��6Br�4дJ�Ʃ�ox)�$��}	�E��cD�������c�����p{Jn�w�����;%
��!��喹�!��,���S�"�b6�{��p���S�Vn�Us�ȷbZ�;�}̻�������7���^�� Ҕ�,|l�@����,�Y�.��Ӟx	��S���R3����lQ+����/_/�)�%#���%O�@��V߂!@:p:n���f�e�ωW� ��;h�K�̊&}Ȥ>����uI>]ΥB?|����fWܗ1T��`c�@~�Az3"^S:�2P6��'`;k{���>�@�uƔ���"�A�rj�&m+��ؗ�3q��(�oG��t�2�� -�\���i3!������y�Z��������v�DZb��<�� �>�h�a��?�q�FƁ��.�"A'+��-%��t�� Ydv�X��f����-�G��H��e�O�O���4�G���&���#���Q���c�t�y�����=9
��Cˏ���=�pM��y��w�6a5���5/��{+��	�V�=Ԁ���:���*/���Te{Cc�L�|]W;"Wk�;*v��l&�#�ޮ�V�A�xs}�Q��$te"B;��\�ؾd]����@/B��:OfAQ�A�@o
3�F�<��ښ��]��;��	x�M�i,��ii��0�R��@���'m|���ī�4i�)]Fc(�1��!�ڴ6�L���ת{<�Z&���~΢�䃶c]XCY�+��LB)�������˦u�4��0a�0�r���5T�Q��N�h&��v�l�t3
�?���ղ�B��)�2d�w�7'�rp�&���;�E:̤����<	dUX�����Ҁ�*��P4�a`)���৿���n�ʜA$Ӫ�]�Fz-��{�X0MS�D���$KO�b}߿���s�_�Ӏ�����@��̮���e:<��+Ř]p�f{��.x�Q�Ѥ�Q8�%���(
ǡͅ�^�:�$�3��K�P�l�&��U����B+<g��p�wM&$m�N6�ai�	n�Q�SPNaӁzN�hm�d���,!�:cS�d�����	h�z��h,��rf���w=ԅ�<�9b%��p��l�5 a �IX:x��������9�{��k"JT��E1zѩ�2�������(����V�	U.�����o�i9�k��;�������Ϛ��wm����<7t�h,!�|:q9hff���+3/ǜ�2j���t�~����x��.	"�ɫ[ٹ�~(+���^G�#��F;�d!�t��9CyU����['�,�Q~32Zi!������܎_2!�{Lnx6OJ�����+��Un������r��J��ebT3���Y0�gPE
��D7V�w��1��zz��aT0w>�d�;!��?����qa��Mb!oD�ky�|Z�}EdǙ��PV-���Zv[�4P� ��_���'�9ϕ{����!�V���	���5�q�=�����Q�#2ɞ�ߩ�yhQ��]{7ʃ%XV���iS�����z;��p�X7ܔ%/��8��.����"[�e����.�݃�d�)*M�b��*���~s�$�
��M�R��� ؄�/hnu��S��H1U�ם�_�ϸ����򣜰�N�a�H0���3P�;�Ȋ��
�����%�:������=2`�Ұ#.�&)L1�e��d��B��!���l�Bԩ����a�����t8)�%K�Ǘdy��8o���V��h�̾@����|�y�ݟ����ۗ����������y:��7#��{/-f�z�?���ʔ����r�,� ��`]��(*�'W���0�>l��A�?���'p�ĳ1Q�q����o�.Δ���ӛ�7ԣ�gy����������Kf%����ZI�*@b��I�)�G`�v�Yޤ���>��K?��J�R�v���F���{u���B�a�F�)�����G��Ņ�̌�Q#	��HWCTg	�n�Y�[�	<��J��+��zB������˓Bƥ!S d1��ˉq�"�1�б�؂�l6f;e�����
�_<�M�2,%�+W~�"D���f�#y�ý&�N���LFʹ�w��x!Mw�Iu1��
J��Q��gHE���L� ��. }��u�q�1�{ZD�����C�,.8˰�<��Aݦ�Ga���ay�I��6�}V�'��9��-gO��'����h�_���6�6�K{oZ����OY�~�sד畇�&���S��!���͏�4�������#���?��;Ȗ��P/���yؼ(C�'Y�4O���	T�t��j�O��w�s�:,-�L���_)A~K�@T�h�R\�_K���
9�����&ʙ&�k��k�{#�t�'U�r��Xy��q<�����6�<�(K6�<@@�".Sj��2ǮRR� K}��.M)��/Qn'gwlxmXE�_6ӱ5b#��3�-ߞrG����f�����WQ�H��XQ#مͮ���&XoM;���v���8ٝ�1t��e�/���wSo^�2��e���q�ЏoC��Ϫ��;�BO���*�-�4"����]I���Ȩ�u�_'9ň��E�� 
���)�0 Ӽ9��y�|=�Ղ�����9yA�sXfZZ }e�l;�ɍ$�tF\)��Y��L���B%s��~�[q�kˌ�e,��kƙ���S��v;�\hNAH��e|s1F\��	�'�Hbt>�����6ǻy�����R�g��"�PA;�A�GS�bP9U\xc:�t�Gh��]`D����R02B�<)�&#��؂pn�����P��/�ȼ�3�H�n�#�8\����s�N+�C���w�l�lW���gc�!��
��� N�#�L�5[�>F�������~�-��ٌJ!�7�O�W@�J��~<~e������t V1�8���$`��7���s��?�c�ŗ�NdXPb�&AuD����ђ�mg@L�R�Q5'��a�`f�j�o��W@{􂛌���I)�ǭ��R�WW��c.�;�F��I�i����Ԝmgkx\��r���j/Kι�KbU�Mx/����v�\��ّ�~x��v�TA#���f0˯P ��F��������AD�B�RFa�?@n���%�1O    ���Y[J�%��,���=~�`p�Z��.���V�9þ��
ND�Y�*x.wѲ^�1<��@QN�����勥��Q��G��3Ot%�n���c��{�h9�X�`�}k�ئr�����1���%�`gY���ȧo �~�O�������6�bAx�&�	ˏ��<�0iq�t[��^x�$�R����{�Yr��Blz_�$ep.�Lc�\�&�s��5�+H��M*�ܰ+�~n)</�<��`2��/rQU2Q[�+��z�JN8��3"/��d�QW e��嚤#���q�3�JB���������d�;2	�һ׎S6�{��ny\n�ƥ���E̋j�3 X�"��2�&a�4�u�� 4S?7F:�$�WV2�RfP���+b��T	��O�04P-�z�����Y��ZOU~�����z�B�5Q�t�8�LVk@�+zP[�#��`�[�f����c,�f�B�-���6�m�`��@q��`��L�`��z57qʴ��������,�5�e��Uv����U�t�W��l�R9�9G]c����� ����9�T����7y��ƽ��u��֖�U{��[d���tb��v�lеTD�8s���m%��W�P�F]���lnt܇"!�T�g��:�X��S�.މ��)g�Z�5r9���ЫYF��O�R�R~\�f铞e(d��<�?��[Ր'�q�8����Ls�i��IsV��S���"��P&�۶; �j�F���)T	���� �\������=1�N|��&'�/���*��P,�5M�tl������G&y���#O�ǽ[�'&�^�*�Y����z���bz�<
�o���VY��3;w, ��$�	u39��AP���%ٵ�W���^|gM��i��Y��f��2�Ü8Q`@�rx�2���n���L�ho����;���pj�'�]C�H�Գyf�&����^^N��;�2����z�s�>R�G�a:��kkr1�2��ͯ:�q�����W:�n�oq^��8�J���`E�|x��Qou��dzT�'�\����h���}w_nU$�
��s{�J�)'��� �&[o;r�"�aW#�/�`:_>oRho a`���Lv�z�W�jC�?V��x)�9-�T�������}� �k�]��j���x쭼�z~E(E�G.?xU7x���1�%���.���q7�J���T�z�@�>�H�@�y6�j֠תZq���h����E,�׀p���J������E�2���	*�V�R��7������g���W
��qA,��L�Nr�O�)f�ba��f� ���zd��
�q� /c&M�g9���k���c�A&-a��q3��v<�X�t�`��K}R��^��G�R[gd�_�&�Ў*�m0�Y�!�c��,�)�е��9��*g$b.R�Ϥ�8�h��
�[���"D:J0���FZ�*}���57|	� s~��eP�����;'uuW�>�2��Q�.�������V	�NQ��v V�"F+�<��2Ӊ��Tx�AN�?F[L9�I����N����F�#����?�z><�F0lNm'8ܑI@\r��^=7c_6�#+<�d&;�qXA���������92��%���a��OOe�M�$��U�0}OI2U��e4�^�������C�=�D춳/d�&0"����0��m/�;4�]�ylYr���1�n��Xj��pq�m� ����WШ�u��AJ]j��{d�����<�C>*ĺ�5"���D��M���Τk�$Pq�f<���c��Dh�Ĵ�ӫ?�O���R\&���7��ӑ�L��Bp�$˔�c_�!|��n�R����ͰnkM�A3SKG����͂��Rx�I�wpW�e�H��k �$����"|:�Q��Bc�8O .�h9|?�um(�K����7b	Ꮊ<3o�z��>K8(�V�,�����c��O����hc����c�յ�I��͆�xFˬ�%�����	m�}Ү��^��(�Mj�|���{�٭9#L���B�K�p�8������`�R�f(����#�싯��=�}�0�hx,sE��٦ȸ����o��1��K��+[G�}��_����$DT!�L]KM��qˉ��>�bh��9�~�wH�#~�ҥp�D�D�3�'h>����K �{��n�uB�,�BUf�]��Xwa4�OW������`����1b�B8�a�ױ;6��ﺶ�aF�ma��:-�fc+���G)�v����r��^'�mH�9�sb�!��1��=�xl�5�z�>z�cd`�ˀ�UP֔�]���҂�9s�&�'�8 �ZؗC��5n1��O�;���LuC;Է�h'n���f����dn����-�lչ�:���.��U�ݙ�y�_��W����%8k��V��������k��d%�!H0V�]��G���G����,}���9�#����\#W B#+$�Db4��p���ۅI��)O>�,�(}���a����'�^�GI<�_H���c�^����G����R�B[�d��/Ұ�\a^.�FO���*k%v�4YԹ�����+j��V4��Tɶ�P�So8&�i7��+�&��h�Uue,�5��Ak1�C�Z� ��O��
�xQ�,�v]FF�=�L������T@v����� Ylg� Cy���p�\�'��F�(�2���us�$h���}]F��3��I�-s�^S������p���$�o��V�Xe�#�^�����v�5cM�L�MB��� )�y���pn���B�8���B7�	��:�Y-�l��?���VZ�9� �LǧAw��Y2�v=��cn��Cx�8+p�$\v����_�Qs�6�#z�9��
�ִؐۙ�s���A���f�^�+���B�����cby����7 ϭ[\��嵅�+�d! �����F0�������Sz��g_�l��$LJ�.���WDu���C#�)��J
r�.6@�-�H��M:���{.���Pv�㏞��H�'Q��%2#���S���Jd'���,Z��~��bw�D�y�?d��+���ž_8�`��~����4L���6�(�F���-_A���?�o��u��/��X��a��/<R[�����������XV��2��J��"�6�Μ|{ ]er܉+�ԯ�۹HM�����]����:ǲĠ&p�\}?�!�L��'�j� ����y�^�0�*�}!���`F&�tح{t���.��j�!t�;�
�A���Ғ>(WA����	E�� ���@����2,i]�:��S�~Q%40���������f<��\��uo�)=0� �\��%1Zq�k�f��ݓ�$sH��@����ZT��(���FW���.
��gN�u�Z�eR�L�V���`���Hs-u�
�j3%���ƥ Cߍm[�m-�#�;k�m����g����,Pdˈ��/�����5l�?E��>T�2��w���O���V���[a��^�� ��9`�~0�L�`�į���`�:^o�
J:FIs@�������6I�2� �!�4�� 1L:-i���2�N������?(�r����ỵ��*l�
�XZ�&0[�}�:Ԉ������� !K`��4�틺˗Zѵ�B� w6^_��k��.]�cG�ip1I-�Z����HKe�q��\uR�Hyp��a����G���KMyg,^H��,dk��8\>d�_�x��I.�؞�d �Jڷ����H�-D�Z>K�H��� ်h�ʶ���K\�3��ǖ��l�zC�=��o=�0)��{6hC��ub�D�qQL@X�:��d��h�~n�%fXㆿ�0����4������;�k����v;����QQ�+�C
1{��}�2�����J���Zf6��GZ*\���Rv���\I	�==L����z(k	"�n��8>S��jc��k��t����0�7	F����Y�z���,�����3=�` ��>��+7�p8Cg�u o��c(�c�{7�_�����&Z�4�2�p[9N�03    W��co��bl��Z��<�z�d��m� v$X��T*оuL�(����9���_���t*�p�]�Kt�,����ׇc�m��o7#���kĉ��6i;��O6�x��or_Z�3X�$���.ƪkR�Q�1h$��i�u�0�*c^�	*¦�9Þr��<\��ɦ,y�����.�2���Ã$T�k4M)��;,_�a�}V���p�_ׅ}f��,\�"�x������Bv��.=�f0#,,W�>Rx}����Ͱp8��[�l��]!�xtk����+�&���?�ۗ�t<�-��?E���#���	�"��`�x)��\�c�w\����[)qS��)�c�j0�֜�7dZ!"ԚM���6e�E��yx���%F9��$�*�# �Ч���P#h!k_�2�S,����2VW�8a��e�?�Щp#��?YF�H�Ϗ5	C,8�� �Z���`��s���8�>9.���0�t�]]A�!Jf �q�t���0�a�WmV{�h������	�����`@Y�9� 6Xh3,�T��8�L�[J��4����
�����¦��t�Y�Gw_�C܍BԶR�M楻n���TCq�0�8����[�&h�Yx���6�emy���[yA�DvNjb�+�`N�C'�r蚇H��.���~���d;�{����!2n�	����+�(�^�|�^�5�D锦����F�c���U�gw���>�� Z=�y���A�@0�j� ��xKG�� ��:R$vzd���:PnH�/wg����ZM�B�&���@���'�f����| /и��#F�b~m��0	җ��æ������h���@,���E.7���Æ�W!A��0ۋ#B���\>S������������$K/�ҝ�)�� ��y��á�V���^�-0����4i��?XD j�,P@�u:Z��Þn����A�B��{�������<ұTtL�����oܻ��T���3����Ce��l3�l���؋��×o�g`E@~H��� 'XP������.~b�ڭ�����Ri�J�X"ܙ��AH�Z+�-R���_��������E*2� X�*�~��̱��w��8.�y}�u�D�*�j���X�dD<B���^�Td���2�G~���ld��m��[�0vyy^��-U�PF>�Z�V��=�Z��o�������XYk���5ef�l7�]g<EY,�Lߟ�� ���ZU�h4r0H	f�@F� L���� �-���ATZ��l��U\�m��zy�<b��=]z����D�d$�W$��T�OI�uǥIOyx�Ug�@�r�yvΛ�~s��$>OYv^.G�g'�&��[��|ڗ B+P*�Aڍœǯw�ɲݟ�P�C}�;56�8H�����~=y|Yc>">W�L�)���\�rIM����-2Ȼ�Fԅ�J�%Y�A����h����z�#�- ��^I��2oF]� >���u�Z�o5�7V�`I�=ޚCB��,�G���M'�����ӗ��[�ڔӚ��s,�8����OE?�q���tz˖�s�����f��?fXbX˵u�`�V���r~�V�_�ܖp��B�}���5��4,��&�^��jC�4���jt��`:0lr��!�"�"�O��;��R$�M֯釟�w�m���c�}�h0^��%�������cSYbpN�l!����C�����+gƼ�H��,�o8�r�:[��A	'��L�H�h�nU��Ȉdw��b�"Լ]`۔k��ߴH�M�����.��H��&��T�3'޼¿���86�2��hCcq6��8�v_���ầ�f����k5/̨J~�g� ����?=��j Z��p��]0Lީ��tx�Y��������a);�'�<����e��*�����k��]O��o��:(�
�i�ʵHN�&���|�=@U�yxlM�j��j]����
�M5jaO��~+Z�<梦�<���s��B�S�D�Ǿ$��*�L'���d2�zbf����dG]�'!��	�
�`A��.�gfӭ�_�5GุK��P�}�z)P�9��=�C�=߿�c�ڝ�4���q#�>�6�5'x�<9���zy�z�~���a�<�X��T�z9������������rm�VZF�� =߶y�"!�bU��0���.o!H�mh�U�0)�L4����Pz�a���j. �Y"�?����E�ɥ�B��ñ�ӈP������\w��W�]�eZ��G����I���q�G�^�Q�|���(~/���y��gº+;�_ �F�ǈ��H�$9^Z4ن� ��[��K^`��!ǮaZ�m&��9`�����������ZB�q꓌��0����*����f�
8#2%,�~��m�]�s�߯deD�"��	Z�㵧��iV�e����nQ�`�S�b:�S�\gcG�َ0l���k��<>\N�v��&J�<��k,��GGJs�M���#	��z��tN�ь�wę�6/��HŐ��=.����LIs�BD���ḻHowxA�O��3_��ڤc8�a~)�������
�b8k�{!���?wN�fc�#�>*�KAM������,c~��=�LK�z|�?TO�>��Gzp�`��`�U�|b7��}�[#�y�����YI�*ќ@�-g
��F?�lH��t�4�f�O}�i��$�^t�y`:�[�`�vǲ�?��C_�d�R�$Y4׶�3�nʐ~N{�����D�\��L"F���?�`�M>��tP���[@L[3w��'8"�e���M-�����F�җ�?�&��,ױ]��F�{�uYH�J:���n�Rvq�u_o�m��Z�.j��!bo.�n5'����r��쪘uN5�,�|blUs�Np�jp�5�7���re�YO`��x�5�*.Π�|��e��C�?y�%*٦߁2�p�?��Ȩ���ƈB~8��ub�w�<t��'�B�ˡ���!�s���6�����1�Pz�-$,��y��W�+:4�v�ӥ��v	�-fA7���;��L���5�c��I�N}׷�4U���T[{�Y\�a����K!��|X�����?ƈ��ܶ�X���t�U�r�s�U���~���Jem����J� G��7-���O���-����8y���ǃ&=�X=��#�Ar���*g�8쪻��;W:,t>�	奀\O�}��4�g��~���2���/�V�>��s�Y,���	qM8.�W#������}/��\����EI4Rs�d�����ΫϫZ����6b6��R��ƌ�#�o�d?��۳��3昗䗐וc�m�؊ sv��ݻ� Gl���L�~E 2�le�ǖ'�Cy�דN�9稫�^
77d��Y�XRz�0��ܸ�;�Q.��㕋���:�-�:g�'7�k�Iy���D��F�#�r�ZpGYˊO�d�n����w�v�1�Ӑ��uW��R�r�w���x�F`I�o!�����8K����U�f�ZuO	xOJ2�Vʳ�c�;Հb�RCS;1����8�U�\�f���hp�?<sR�lq�����qTf�^��S/��mk�sh�������x�?�C �=Z��Ƥ�mY�����|ـ�γZ�Ԉ��Ǟ^�4�1��G�Z_��ifv����R9�~��ӭ+��f@&AAn��i��)���ւՌ��;�
)�F�m,.���5�舲U�G��7=)��`�3�h�F�}���;��a��EI�\��?z�[�љ�J3I2�� ^�B׭�	V�eJ��G��G�8��r������Sd�J�IS��Q���-1���:8C��Y�9����TA�E��Y(�Ea`΅�i�p�H�b9�NТ�~�����"��?2��sŞu�b2o��튁,2ŝ~65 {�E�ɮQ�(��~�f��V��tH_z�]]`;MB�ЁOJ�����������=�����i_�r��9���w��u�:�����~�evs��f�.�=�����@q��$�1    ����X;Xo�˺.7>���_
=/	]d�y���LVe���q����)�(�m57�l5QF��v�Q~�"8o�z@@��b�	&�F,����R��Չӄz��x����l�ɿ|ggx"�}�M��'a�?�[2��/��]��#L$y�WO�1��B|���E$kw��V�!����H�@��z�DJ������X8йjEǤ�~��~�j��?�F]H��;Z3��G����7>�<���Y�Wɍv�ה���	W� Ӝ���zoƗ$"~�E�!���y����J%�ڰDǃ��Q���:�������BsvI�Mk{�(ꤘ����C0s�/�]%�	:�,�Y���g�,4a��>��m�.]�
�Q��y�ന#�t��g�o�Ń�5]�+���ɗv�nփK'���;ݚ��7=�L�� mN�f�>�I��?ël(�e)���a�v�c�z�M�k�,� � 
�C|��x�Ǐr�����)�\	0�[;�ճ�Q����d�Ɉ�)
ψ�$>�A���\��ڒe�$�������m'�K�)d�h���q��q���Y�@�������㫃�v��aj�d��	��Ǿ�/�R�W���� ƮZ�S��P�:XZ�Dv������6���Z���#+)Zt����S��!��p�7)h����3�sb�2�X6���RR�%$��r� x5�bN�\<��l\|�7�4EB����ɡ����߯b��;Q��Nx�`�-�X��d���1l���u�该P�8�t<9����X];!�.�6���e�όгX2X���Y��}`��)P1��<+�r	~.C���l����/�"y�WY��ŝ���ql��0��pr�(wK�@����bc��ia�Б̲!e�ǼN��6c�(F����A�sK�l��;s�i��j��J2����7\��e^X�(�D*�*30M���}��>����4��Z�fGluZ?��Y�C2������3�7�R���n��7�{���|cDD���i���7|Kk��	�S��Ĭ�ֶ���t�	֔����<<�}0�O��p� � ������5k&�n8cV0��})����P������Ug�
Ԫ��}ޖ�i�&�3,⡔�˲�M�b}ς.*&��ވ��VНx����~�M1��O�?˽�$���
��w���@,����"�"(�7?���-�l�L+�	��LG�u������M �EZ��-B�<�bI������#�k_�6���h��k����ւ��������c0�
� �u
�(���ۭ��ʲŵ��7q�����fE�dl�H��@��U<��4�b>�q���8�P��Fw3a_ u�S�.h�M����]Z�,	��F6�y� �σ��O�#f��fq@�3!݀뤍��]î��d�V�勺uKٜ7� �1*�nc�GR��䯝��u�]�~6�F�_�#*:"�M�(����(�$�"M���eF|��>@2r}+u�2g�:�}�r��ن>]�T�]�!A��d�"rR=	��;X���Zo��A��@Ѷ�||R���W�J6h֥�Y���@������d3��'[R���IM�=�g���"�Dɜ��e�b��ɕp%\mC`�J���D�_�$������f��g�T�;����T�G=#�7�X�Ү�paH@�4mR�ɾ~�����C{�Gr&	Ρ��0���Uw�8.H=��Y@�Wa�<��@�+P���ɑ���<��6�Hx23�)|�1F{�r�̿���p[j�r&G�
�|M�Am���'u�ѲJ2��5�=�_���W��ꤶ8?N���4�e��Rx��E�=�T�e��x�h4B�	����?��*_ַd$4i�w0H�3���E�
�6���z�K��cYj��Zĕ��H� ����#�q%eb�}`Q���\�b�Y������6�i�i�i�ue����,:m}��F�Dd�����Q -:a��y���%Ɲss���W���C��٣���"���d�����<���E��:�|9ؐ(b��,G]����)�|�L�������:���?�!M�MA�9��d�T��"1��
��~E#��_&�H�/_/_~�K-s������e�����϶�4�/B�3�>mQX�R[O��������7�Ikr��1n5:�?a����2�kBX��z�+W�F�ѣ�ПPa��M��>P�M�a�U,�	�@>����+��ĳY?��dk�I���:)�kp���ĎYpr��0��פѺu�j��c٘ѯ����+j���X�o��.:�Y/;Z4v�����j��MS�����@N3�&G��}�����~���~�7ҭ_g�����t��Xfd��[�n��*��!�T�(8�ؓ0N�8n4�/�a��ˑ����܎ow��0V�
=ݰ�f�r_��Јf��ѯ�n�'��}��m�A<F⪙�gZ1H���XZW�/�DkH��+%�7�Y\����Ƅ�r�L�v@��qcKhOn1Ip7ܢs���y������ڠ+(A>��)��PupU�P-b~A�4�׈V�^g�0w᳿v�$[G�]9�K%�*G�d���D*�|f�t\T�+�h�Y�Zt�_���ؿ�N�?��qᅏ|&���>��c!dB�L���'V���,�\�⃼r�mk��Y� ��82��{؝���a	E)X� �y�e���Qhq ���t�.�0����iÐq+3s���:���܇��G~?�m�qe �d'v�}�$MK�a���r�}��/?U-��V�n�� �P����Ɂ�x.{,�5Qv*��/��r��8��n���NB ���+�ae���]?�d�H�QX��j�x?�d�}�~���HX7F�Ūť��6l�oM��Iy�>f� r�O�ƽ�3�to���8+Wh%,"�<��|F��ͣ~x�� J#\�23�c��S?ܸBlM���vd��ӯ{�5�8+�1��'���o%���B,Th� �1��\vOT\
F��V�khXB�R��K����ԋ�R��p'����sU7�!Rv�}��ũ� a)�Pr}hBK��-��p��RK�u?BV�cc!��� �_��N� !��:(ϡ�w)R�Q��M'`�Ȭ�)){�*��k����>�����(�W�X���o��E~N#��n���e9�C
5x~%:<��G����،�Y9$�`,K�b�o_�̬Z�*����S����R�oJ�Tz���G�pt�3�	�˂���������N�X���U8��	��1�^)���������*��B��OJ�\6����J�md�"+�+q�a��Ȟ�\ՎHHȸ�,j���as��͝]I�����:J4V֣D�/eoݸ&�.:?|�ͨ��:�\&����>{��Y�P+����u��KmX��Gd���*��	|B"G���g�~�Hڰd�Z�����W�\]G�Le��Y�Ӈ��:'ő��T0#���J"o�AK?�y]��r��k5��JW������L-"���r��&;Y̨u�{���X�V�5C�zYǪG��J9�n`ӧ����9�9g��>��ub�P�K�uA�=d�4��p��Ӓ�;M���4l×�p(%��Nd�v%;s(U���up�W�2r�é�N����������I�WE�l��k�!�e}
,���ȉk��Ί�;�?�������P������N�.���u��x���ż�����N	�	�W"���9W{���ڻe7�#K���GQ�^� $񨲵mU�R}�]����ψ�A������9ݽV�I� ���4c)x��R`9,�Exaz�Po��4�֗n^�x���%7�YsR(S�;���� ��^���d֙� 7���*.��s�y�x�wη�Wgօ��f�6o�����-~�N���G3i����{12/��]�6�ͻ[������:��;u,-U������Z���e���!5���$?.m����n�=���%iK�mD�e��%Z�Ʌ�Ix    J"t@����3���2^[�z�@O���s�����=@�<�ؤs+���%u���5�����]IZ+z� I5�Wr����h|3N,E�1����h@9V��m�]�r������<��%���q��2���6.R 첸��U����
X,|p��WD3��=b@Nd. �(7Nun�U��"��N�ց��B�4]�!�����c�����驒ӊC_b��(׳�rQ�+������8�B ���V4E�&=șةe������j�2�D��C�?������3��sdX�Z4l���젞"q������L-Nh�ƙ�l�T�dKv�߸sZP�a��-�\;|X�Sgt�2u����h̦�3R��}�؞�_!�&���,_��r<������ܸ�<Ԟ*b\�������u�`��(���Ӛ�1�*�x��`�iD�\e�B�/��3	Bw48��Sf9�ڊ�T�۳C�x����伱T&�4��yspFT;Mef)�LC��9�e�e����.��xy:pRڡٳ�#���$�el�EdS�{��$���2	��1ǵ��,�Te jN�#�f�KXZW�+m���-j>U5t1��_���\V�H�?\5s�y���ӎ���&��6�^J
�+V{��j|�I>�x���Y�˖��O�Zx�ف>8��ԅ��6���g�B
��$���,%/�[�]�������,�_!�v����+�,�q�Hv�b4�wn�Y����b��}��B�P6�F/@��T`���O� ʖؘ涷�v޿`�r��ŧ-��c�/�m����ۇ>��V�a���|�:��4�,�P ����$9���V~(�l�n,�-�yf9�k�95d��z?��%�gA�8,r_U�7{���u�'�2����X㋤�lO�r���6ߧ��ӣ0�cNT��d����텹2������{��OёRf�{:wڿ���)C��B��Q�렗!��4x�HG���c��'1�;��d�����o���p��P�u!9p^wo�ZNl� ���h���j\�hFcm�Ī��'|����@Y��V�dr�|�߯����(E2�,Z����ޮ���w\G
���0q���rL[ Nru����R7�l�����7H0�v�g������3��p)�KU}J�d�N)�*�e�A��k,D��FⰁW�i��>A�'��Y��a^��BsT_����?�r�4�ٽE���Y~_����B��{'��8�:|{:��ᵢ��z�Z:��E�I���;��`��/ǖ=��"�&^W����;�{�":բ��X h�F�\�7+YG�I��lP�������X��-d�'�6�',9����G��a�ȶ�ǧF�m�4�ƫ�]oBD��C�k8o#�Oc�� ���-_W֛3 �<d{e�|��C�B����PG�|�S?�AW�}�v���zM�RG����?�5V��i��!G���9~��\�������z��+<$��t���N�g����`�h()1
5�Y�#��W@��w�:tK�~�2��dO�a��v�ߘ��^��J�Z��3^���*��v j�ީ�&����q������X6�7��np8�lV�)��~��a㟅	�b�[��6��|"(�ay4ƣd�v����������t�<K�?(U�re�ѱ��ǃ��li�г:/W>U ��r��4He��ǯ��oO��^li��W�Jt\ttw<o�5����%7�����~�7��D(M�9n��;J���\p�{O��.
r���oyT�k{~���*(UA}3� ���
Uo�u����zHP�f���l"��}�� �3��>�����v�G%ܾ�+-��ـMPK�� ���MJ5!�([�w�6섆j����8Y��Ythq�v��1���Ovr�Ԕ���)��,��hG����C3��v���n!*Q�^�XG�F�\!k��M��KAt���D}��N�������p��z+�&:E�w�fk�>�k#=Ռ�0�������=��iS��7�{i�:�Y���<�v"�8a�x���x&�$g�S͜j�u3�K8}S\S?��>��ʪي���y���YCt�5��z͹�L����wO���-��w�_���Qń5:��Ȫ�
��Ϧ�ky|��_�!��3N�-g}�;�A&��?0{�05)x���_iT�bVw"��b�$�����M{���'�K0�����h��~g��/,���n��>tI�e��y�����`A.�)�Ԧ'�J(Jv<e�� 'MV{�^��Q�~J����!�YVO���N�~9�A����:�����r'$k���
ҫR���Nh_4��n�S?�œ|Qm�*f�Xm�%��R�h"���ߡ8��M�#;a������3�z��lC�w�'9i�c�0�0����Bc�H<R�g�9�����vN��<G�0�)�>FǮ~�hAA�7�+c#v@RV#d�ޚ6���.���C8x�nҴ��5�~�e��C�X[)]�Hh'h�Gܧ����3v���E;��ou+{����z �Đ�����7q�Rz�a�i��w�*<Jw3����CP� %:�B m���j簱�RFՕ		��J_t�ҕނ/�����  js�1�U�����*�����;�R
C.[V6���hr/)�����-�F�8�5;�Ԙx=i4t�Oq�k�\u4bU9 ?ul�f��� (�<l�^�C�.Q��?�:�����k�u>��6������\cA�=�|I�Xlr�/aъ)�é��q��`D�|N7~���0����@�2�a�3�*�e��<�~���S�  �(<׍�ϻ�C�����6{��k��y
����q�J˴��xÍ����%�mӼ�?���eN�-I���ͺ��Ɯ���D�i��K�P�-vҖY�Z�aQ����qg��M��X�N�TI�����n~�(h,,\��^�5�!Թ���H�%:6�V�ۤ�G���t��l�,j�LH
^U[�*kZ�}٫��g�y�(f�N�.�y=$�`A�Վ<m6T|��AY��X��*n��,&�(E���ÂIzD_���%ޟ��s��i�ve��F��#������EӯH����p�Fm��=k��C�6��� ��M�VuD�n�z hv"^�e�9:ۯ��n�-W1�5Hu�ʫ9�a������*=��H���f>b���������p�G��~�QK/\B�H�K��4����텼@d�qU����(>�$�� ���2��=���5�s@vg��T)�wr�p'�<��/#�K_��on�
�W@0p
�4���Y����}mQ��s�WX��ܹP���Wz�8�"��v�e�kD���h��`��'�yc�����j�4�+0��1 Z L�{�Mj���c~�E��Q�v6�����n��_{{��0��8y��W�����$��܊�t�}r��T�g۷��j���w��O�^";�Xؽ
rܾ�h8<��x�#4b,EN'-�xz�����A(�&o��ݪ��ﲔ�I�� Ǹ��S��X�&'�a���v�e�ΐ�*48�*ۗ�hlpi��+Į-CD�_`�8
��OFƝ�4|�ݿ=A��iT�#�R�'��1�r,9$6o�j���nx� �o%Q���D��y��p-{��7��`���	c���)��71�M��$�!lA\6��Z	�^o�a���x<��%+�+�^"�a|����~j�>ϣL3p������HeB��<�+�j �S���y��D1������ҴC��)�}u�Mɨ�Z��d	����(��]y����1�̅O��_N�[� ��ý���؀�Ņ��C�LV`���ݖ��U��a�����-c�)�\4�z	IY�&�a3ӦO���\�F����bԩ��g�so{���S�O�^��S\K�� �WO�pJ[fE�$j(f���f��M�NQAԭa��i��(eeE� ��Q[��=��K�Y�8@]C'��ҏH�Ƚ4�m���3&;���F����5�}��    �t`�✷�Npʌ}����=��3�ׁ*4�:_�j�_#��N��Ou�h��-����Y�1Y��]ކ�.�x`��%��1��O�����2C���Em5��$\��G�x{mK�*����A��q«sO� ��7'eB������(P78�_�ܢǭ��Ct��� ����c�Z,H�{7�K>��G� �0dZ<���w���@3n���
�I�V�h�C����N��ʨ���O�Pv�?{�K�Ԕ�9k7��˯;��# ҿ�����_	�;�9ځ>�}?�W��}�z����Q}`������LvX=����bq>��%38�*�IV`�̡u��N!�_�]f�K��.И�DW���%6���|�jp�ŧ�
0j��Y�0��n#]R��#ݣQs�9P��'R�O���W~b�-��H�q�]Nn��xL5�|XH�����FD\�vWv.�| B��5R�Me�o�X��L["H@D�Õ�H�w��
�.�/�#a�����c|�!\�,Li;���YZ/�\��j�s�L��P{�/w-��]�v��T�t�D��E{�E
۔o0���gE�	�(t*ƨ���m0�t@�z	�=�D�0y�.-��O����+�rfo�z6{����
��Tݟ�]��_~��*�-���%Q���1�\{�k�'�}�:�(�sP�=Lp\ 
o��n��
�v̷r�`8E�>{₫�}0o�]��sI����Þ�Ĵ��mC�O�aD�^f����oY�@N$��<₾t��%z;y�8?m%D#O/���Y���=��{<�z� �2`��z�%��o�|�����2�<?`>��5�*�N������6Ŕ�`�E�ij�9��U��~W�}����q]V�oJ����kd���%�4�|�����Ӏ�_��ŵ���A��I�Xɶ���:U�]��N�&�Pauj�����XZ#������4h�FNQ-&)UX{�R�TG��"B��w&E�ז�jҤ���֪�/F�p��f��J55��8B�٣푇G�`����K l�#�S��vH���/��`ω>�[�@4ظ�/.���F���H�hM�e	���Ki#�ÉN?����[~Uuf��cѣ�	�g �,�m;+��$N��8k�+韇���=��Pm��b��@{]f���B���!U�R�=A�H��s�8[�?�x����p�t�|��g��V������p�0�@s��Π�{�#7* "�9q��%9Hh��c9^W�hk;fk���{[�� V�YЍ���� /V����j,d��乡�j"�1sE��G�/��x�T���O�9��m��n�r�*���k�zuX��Z�إ���3x�2f4���j��$|�0_��i
�4PW�J=G��H��G��FE� A�Op(.������,���?�e�m}�O�R��e7��;��\6Aa�����NX�������?$�yܤ��3�ߚBH���bY+�����+\H��b$^�Jfńz�=;����C/E�_�^x�����ա@�����{�-��a��S���M�w �=������n�B �5Ԧ�gX�l� z8��[�(�y8���E(%�J���%}�յ�I,��RJ;Į�u�U>i���~��5t֫)�+��w�u�ox�M��?p�x�v+*�<l:�O��K���C�f�|��'�-�޲}N¿���t�7���;��|C'0�;vЮ6xN=g����c+�<,��Ws�D���}��(l��DNQk^~\����!,9`����d�@����8�Ьˊ�����{�g��4�
!�����3!X�����rt+Od�	��ވdվ�y�,Zpp=��oP���"�9�o�ď��-L|������ �����]�*o�_�
��
I��0ʉĲ���HUg4��9�i����Ԙ�jcZ������7p���4� A�ż=�A�=Y�2Й7y�=���T\�ϡ��E	P.�9˝����r{�X�7�z�[P�eK��(��h��>9��_��&���M�W{H2�i �x"2'I��L.<:z'�	��}���4�K�z����1Qvr�*�qH���]��*[��6� ��Y�_��2��渡�5*��%%r�cEh� ����Δ����Tz�¾�
3�Wם�;�^�����a�]$I9��3]2�f �i6.D���f|ٍ�O�~�e�͢R�p����,��d� Ý$I�H���7!w=	��W'�`+7�m�����Hzp�/�A�i�\���d����?��b�����t�
�����������hiI����{�������wkkL�O��H'����#��o�.P4ʆT����o[� ��[{�����yX$���;�{��ì��9�5�\��Y�p3��M\�&:A���8�SZ��I���ֲ^�g����"��K̿}����w�&9�����쓇�R	 ��R>t[� E�V�w=a~ǹ]N)���J��P�67NY�-N���P1O |���
b~'���(�>���(�aM-������m��J�l���$���:�	d���qiB9�=��͇�H��z3oj�P`}�_�%Fqvj���BG�tt�f������i`��c�s�>�:�ƹ���O�/���=�a����Ъ�*�����y���/���.��5��A�\�+������7��e�$4H透EX`d���7�ӭ�&GU3�d�9�BV���O�Ȑ��NB��<�[��������.^���/�t@�E�S�fY�7 瑫��ɲ鋧葭�P8? c����vB�����Ŵ{�&��F�Jy
f*��D?bq������[�,�)V�!G�×��g�U�w�̏T��7"_P�N�p�.�8�C1۶�k|��b_��E���A�����Ǳɪ7�FN�=���n�CN����l��XͺEw�������
Ű�;:bo�y\!����-+:r�YW�d���?���|���o��b�#U\����R��	rM�\�{O�{�D���/�i��;��
}.c�0��GЅ@+��:���j��l�W���ɢޫ�W�n�g�A�ղ����	6���Q�!7#v��I �&� j��v���i�9�J��b�*(��
,��Z�D���(���1K�*/6La+�!S���|�ܵ��O7�y�v�v���H����8�&=�N��#/6�j��������]��~7hp� �t�{&��v ��&��ų-+�F��F�A����\�����~��;/�����?	�,��yY8Z���D�H��R��gf�����i+��}��P}2`����f�m���m��ÆC�q���Q��X)���iЬq��.׵d���B4�\�SP���N��i�i���T�
%�g������0�+:�N����u{��`�8��V�%<�3o��n�������J0˭Ǟ����0D�[v��͵>�!�ꅄ!��q���xU��v 4��L1���D)^��p涘����:Q��<Z1��9bd�E��x;�Ÿ�&B+����tt�\[2�����*�D��-�Z{�EŽ͙k����KlY��ݨ>0��5��'�;���lB�Z�Qo�#���+�z�����GW�ŋ0ͩ?���y1�?!s��#�)��D�;l[��^|��XH�Y��m��kgΠ���4qǡ�~`G���و��1y�=*�).�E�Gǭ���?�K	s��zT���Z�I�:u�Z����2��=���Ҷn�-�{X�����?Э�z�����V�^��(8�-Mxk�$f_a��(�ؿ����Fu�Z0�Z�`�Qpa�"�E��ׂy����)+�5s�H_��QCh+�Xڃ}�*���>��5��1�4���ݎ����'�y ����	=����`�0c�:�Z�_�41������Ss%�E��<�Ѕ�g���[���-�}_�n�mj���r�^�Nź�X��|�I���M<    1�U��8�c���=��ɏ}��k��x�r�!�Ȯ�'>�%OV�K�B��T���Tnt4.��p�$y���W������w�Fbr'0�����\}���^�S�SF?����km���i�/�FAs���/|���5O9\>Ә�d���;�N��D�q7�=�1��i�hk�pl��Uc�&�S�¨#�Ƥ�Ȟ�ER��[��J��'�#��=U�XF}��)b��w���h(���>f�2��B����u���#[V��.�k� ��;���np������ZV4G�wȢ������5I��J�.u�ϐ��䈫\V$��R�c�X���ȗ�2��%�]H�p���X'����a�sI����fWٶryآ�4�x�����y���\dT�T=|�����g�$:ȀK�֨��P؝�g�9���f�p/Tk݂
�{f[iQ�AOA0�e�@mA�88�N������������}UMf�?�'�;�:en�Q��1D҅�/\�RW���X���EG�����E��ֻ2q�2�:X���Μ� ��' ��=�j��J~��$z�SG�fr5��D�d�3	��E�V�X6iy�,Pj(�Z�f�+�	�p�Ǯ��j�Z�q������n��X�I�PE?nn����(�U��]6��x�F�R�bW��U�*��������.'K����`��$���(��O�R��V���#�����Zr���lrL��Ccot�3��!�-�a+m��ߋ � ɡZ�����S5���69����3�ރtwC���DJL�uL]�5r�Ay�u�±c�~4��(�G�V��v;?��7!�Z� (���6*m;Nw?��9���)׀`9�J�%M��ŋ4���a� �x�ދe�quIh�C�!'��Q��"`�-~��{�k��O8T��|:.��O3~�n�����%Y>���H��	G?)6�
����^�������0�#W3"�����y����u��ʴ0h��@�B����g�j�!�tzߐ$�D~�����z@�l[$ ��+_qଁ�X��'�h�%�Anhg@s�t\ۅv�퉧��i~'�w�d��w�v}��m�4��Ko�f�F����9AȪY����Xqz�H� �S�y��7�\Áy���m\�L䜁�%$�����.���Y�g#e:[1_i33��ŝ��:�	�E���It�|Ή�T��n����YQ���]���%<�j%��[��ZU԰���
���K9�>���s
r��H�÷�žXҏ�E�"�rǉ#,����k������4�b7�m���	_�(����ޝ��Կ����%:��"l�p�NJ�Qg��Yzf�	��'+nb�Sz��?DY=1(��A�6$ĉ�����^�S�b@�ɶ�h4`���)�;GJ#Z>_���Iv�G���Y��WX�]��"�J���DUu�َ��S��o?�����Z5�&C<���5��TP	l�if�1�B�ޭ���)o���/�R	\IR��-S�̥���i'�a'᝵LKr?�,�P��G�F��.�;�420���^�A��eo�]��^��� �6�����`WX}����|�mz#/�d{��Y-�.��zO\r���DU"�Ȩe��Zf�f_��h�V���'KI��K��
���~Z�e݅k2��q��1�+nX,h�Q�(~�,�����1���|{�&϶_�
%i��_����M�__�	R��4��#ˮr�˰H(!ݷ�A�H{�)��S�c��q� ,+,G�<�@����A�@����d�N�l&i���O�����}#�`KD��U��E�ce P�5�R�JJ�lT��
�����N[��M���W$�H9Ҿ�'����%v��ѹ>c�P�ء}U�N��WJ��~�ׇ��a�%3 �%�i�1+��};���y#��\�B<���p���"���� ���� �2�a<`�����n��b����Qȓ�G��8 KP��ի�DE��)q�3}��ק=�K��{<�N�z*y��R�㞝�(���?�E0h��F����V��>�j�����;2�� 
 W���hKl��΃JC.76h�!����=��CsR�`�R�&��x������ߨ�Q��b��gTc%�r\��Ï��_3w0Z�
)�uټ�N���&��FҜ�E&�f��%=zk@���`�#y���󴫹�
P�sNJ`�gF�HuN�l+��G�e�k�iI�&U@ dZ�C��ӟq�j��AL�퐔��3}q8{Z��2��1����c%]�̟c	)
I���=�ޗ��ȝj��d_�9�Χ{�?p[N�MN�S�r��p�D�����܋iQ�@��<�2`D�r��wts��m���j��o7�q}�������m��N@m����M�|YC��l]ϛ-�z�~��N���x���-�3����F[��VAZV��]�D-o��d�!��K�����~sS( �n2��4��V�(���(�b�и��T��5�7ٻ�������q�	�Ow�4�t�k�������4��w����ǿ@٬B@��/pS.L��iM>b��g�n�u��':|��t`���_�F����Z�_.�>^���_�� Y��(�T=�H�"ɍ\���x����S�d��5�	L�=���.����%(բ�7�Iw�І3'
�d(�M����u�{r���������,����t��P�=�Z��j;����:N��� !Q�a���b��L�"y
�I ��V�Ѐ]�7R� J�tu���|z�4�IlK2E�Fϵ޿�W�3*y,��29��|�xA?.��ޱ��_��v��I�y�5�v��<�ue�{2ouU5
��F{��x8��}�?��$R�v�y�	��(���d�4˖ ��9Xg7��$t{��"`�yPģ�����4Г�3/Ѷ��o(�C������8<�lw�K��&W� R�N<~�ƺ��m�;��&�6h���b���N,��ĉK�o��i����J��Ny�؎�ŵ����x�h��+[Q�Б#��>����Dvu@|pz4wm�ɦ,�|�(Bh�f�����r�ΉX8\�����G�k�	��d� �HƗ���|��������	/�,wLZ*ڇ�xT�$i�\1����P���e����4���H_�5Th^3��A��`�w��b�"Z=��óF}�~\Cw"2ҥj剔� �������O���e��m�9��QSrX�[��5%w�޵��z��?����<�cb_q�ۑ��rnG7⥣�p|mR�*wx:~��?z��VZ�dG9L��B�4���}^8>�LWhDbϴzg�T-w���\j
�auGP�G��4���;%�]ن���K,��y�hOw�f�X��HC7h�<N��Kܥr��g��"a�3w��՗_�����3,��y��>���[ܸr�%��\'	��2SKBc�?�vՏ��ppkE���t���31�cW����y�����C�g)�*�.;H��:������?���!��L�zQ����g��J��`ܪ���0�l*c�j��86Ύ����T��$HJ�(.��7&+GqA�o��
�dV)�ZH�d���~��T���q8��'K8y=)��*���a�k�*�;l�gO��M��b��2�>AɎ5���L)�	�Ƽ�&�ْP/���O���_�>%z�/���6]ݨo�V�)��D#ع��r��O;����`��.���Od�䍏,�	0v[I��YaU�;)O@���!}>�_�6���T����u���D�i�V/L�δ� d̽�����枈�z������C�NQݚ��_H�dp#���]\-N�#���>HL2�؏��??����6u�nub�`Tzd�Bd{���DK��^�iUƠo�@���U��&^W�����{�8ղ�};��6�0E��f�>{�-˄�V�0�j��b��:]�qͽ�eޤ����H�j%���p�yO	vI����[q�����م�R]Y�ȈO��p�    ��>��:�^CR:��-�_����X�:4=4�'WY�.<]t����󉠍�-���@'�B����n����&�C�1t�cΣ�,��"�\���  0x�Y�o�3�TA��7��J��~Y��%�/G��`����:��r��C�sҼ�}���=��6Yyf�	1��$���{���c���Yǐ#� ��Z@�?p@e���o��r�3���#�5��\�7UI=L|���u��D��ы�`� �/��{Q_�I�I�+�������&i1W��cE����v���K���pt���	�$�4��G��:��q�,��g^BVj�˿&^O��iى�q�Ĩ?t� ř�qW�r����t�Z�W��w11�.����,�h�+�4X�[����sV��NBhHj?��U#��<8����;��D<;�Qd���f6]F4-އ�Dg0s,���D@6WJ�nd��Wl���;5 �j�+,gg�&9mq���!�>G�m�f��-�x ��vA��Z��хm��wK�u���f�a���d�l7�V�'N*��݁7#�1X����%o��e]�ae��!fM|��/]���@���ɓ4VY]NO� ������~ݽ��*����{�V���5-��7e��u�I����ܔ͒Qq=|\�8�9qvD �v��A�����ltX�K�4���琅���q��~���KKL���2a��':o�F��0�-s��҂ 6�����o�_-���S��u���-�eI*�.p�B�@x��E��C��9�U[�vN�Z;�b����^�U�Mp�u�#��>��6S�,9E*����d�}���"���H�@Q�`�Y-b�8*�tKhm}�@�,����d% �l��<N����G}�M�3���v�3�V�����X��U��*5�V(�+Q&yFw����K����y\�D�C��.�U�t��K�Su\}������¯����K�zY;a*K�	"��0/��%i_����7/�u#茱������M�{�Am�^�whR&Y�rO�BƁyY�@���멝�	#�V���[���4Tq %��W�����8(.�i-�(1�F�/Ĵ�v����7)l4w���˧PG�T`���<��oq�����U��2E�=��O��F�M���|�p��z2����L�:����XE�YR��Q8 ��9l�ؕ�*�٠�p�C��ۻY��ɖ�Kl[�~h<���3�y�z�x%ז�"������`(��\�2�#�2�����
l�N���*��qz���i#	%�F��l�/�Y�Ds��򋉍>8�w��0K�_�m�Y[��}�H�e%J��IM�b��N3��W���d�Ya��M̴w�����z�߰@�]�|�v0����ov?���)��?l�#��p>�O��Ko�Bq%h�O�6�yP��˙ZB�w��b ���^�_��e�9�h���>��4} ʤO��+J�:v�_U�����������������;����9"*�>��:��`�o�U��=�<e�b����Ĝ�[�����S��8��
�z)�-����>QGb´�z�a3��z\������'���M�p":��Ahy��xƫ��᠖9f��ג�%���.��vm��\V��J@�GI�j��z���Í���q�S��}�(g�-	����j���Z؇��:9.y�vA�������;�ޭg�3�!�� ��ڤ�Qͯ�)K��M'GǃN.)��u���n�B�����묉�]+KJ�f��_��+:w����Y����!��&�hIQ#�o��my0@؝�� ۖT� /o��Z���iB�tnNh�K�,�e��@�\���8�𭦊��:�O�ː� b�q�&r�ȗ�/h�gm��V䟏����N� ���b�A�����B��
Ia�y=?�ع�-�Ŀ��JBN	�^�oTV�g䠅����J�u�M[ ��)�Q��ҁ�~����c~�:����������b�5��ϩ�#B�d~�\m�����[��5��Q� ���|�lݎpV����Їqr[���2:�j��c��n�P��\	S�s�/���ҿ9i��96�W9"5 &�|,�P+�َ��e�0E��=��c˾�y}�����BRqM�#�F.���kk����`>;Ń�A��ޱ���{���������>�:�wt��T1X��N�`H�'"��~���c����VV@Fiv���?�������� �C�I$@��G/�&4j{j��ө�Ɲ"]́��E\�����n�A�����O<;tg\T��;�۸E߉�WO�m�J�qR��H�������{�63ڥ�z-�'fi���^��Cdfr��en�{~b�A��%�A�P�z��i�'y~������C�N%_*�SIo��X[\���Ñ��
Hӆ�Nv�y�?�"&X��@�o�-_Z0����}H�aѿ���"z(�[��K�~�)@���@�X ���3eiTYBc9�6�/D4��jē�QL��{�4���[��D���"kRh��y��ٱ�eS�I]���=��wF5�,�G7�r(��S*�HS^��p1'-Ͽm�Wj��|�j`�e�a :Q�����0Θ* �r�@���O�H2������t:V鍳[Ġ�& �������,Ez��ЈҎ�-t���h:�G���u����K�,���`�"`-Ǻw��M`ҔZ[�O��;̻a���@����gQ(~le�iM���� G����t�!�Q�AR�)��V2L(�?V���k�4J�I�D�P��������o�ШI�]hoFiC��oGe�T��pA���>(a����1���;�C��Y�5a�����v�/�A+J�0j�=�}X[׃��$=�D(� �� e �$�JVEj����i@&�[Gh���`�&]�v{�`ఘ{�&�NZ ���D���X���ѸJ��[�zTA�$N�mp�iU����n�Rԡ�j^�8;bb*C{�V���s�a������ݰ
���q�ղ��f������P�Ny��OD���<}�?�~�+N��r��<�IB�8�^�Bҿ4�/wpi��2�s�B�w����q�J᧌0��^z-"Z[���O�3��=�Є:���:�7����N�G�.]I;���r���U� :��ř%��\��`vR'�BDp<�`�M��-㜊�V"D���j�k��4C�q"�� ky��^�9Q�+��(��c�$���Ǒ4ǁ9ѫ�]czrl�>��T�[j�;�Y4]�(���=w>𙱉���P�c"�v�X���^J�[��-��"���b� !�U���\CHj���T��Z��'i�Q{�Ǣ��΃��Sq�����q����w��nx��޳�7ئd���X�D�9��T���9-�����ױYpL�;/�fG��n�zD���u�q����ym������u����-�d[�A$`�F�s��4P^�V؀�u�W'l��
��qaq��	���h�\�mK�%��i�ހ'�c�[�����,4���oj����C��[�ۇ�z}��@��7G�퀣R,��KI��%/" ��q�ݠ�f��SŹwT� %U&�|��]�ۙ����;+���Iܦ�I3j�uG��5W1[�'��<a�F{8�~�����1;	�ٛ�=�fk�㋩Y�¯��%�ud��v�o�>`,�������S�g���)V�|`����G8q��ɼE�* nɱ+�u���΃z ����r����A�u;����4.+i8�a��郭��5�@��Sg����['ڮxF���0絛�� l�E��>�#���k�zU_>��������z�v�Z�����FD3�5+ p�������ؕ����ɛ�	�98�C�sJ+��p| "��X9�?��]�HB0��JB���~I�ݺ����h{�4T��y�ƙ�R��J�j����\@� ��+TZ-��@�g�Ɨ=�!b��{8L�Nr�n+O\"�xc�	Ho1�uģ�e�VH���Z��Ш}�~��|��    �����ڙ��M�g�`�ixP ��qH�u]\+�}>X�}u�|���Y�qCWyi�(NO^v�
$�����ÕO~]y������jwi!��[�����/ミ�ט�� ���@���������p �I�s�[,J ,-����]�w8�P�z�q�\�0���+��(z���͛�8S޽�}4�'@���l�	��z�,�ǁ���z x��}^��87	)�.��Z?#@x'��̡�s�}c��ڗ��G�"�J��C����U>ۓ8��sS���
$�{E������a�pW�����&"�,�\�7��� ��
�Чiy�pao��Y��b_����=Ҁ�[f�y�곜����c�z;ӯ� JOٰ�=��Q�E���Y��^+���7�g٤akR����6!�=���l/x�SNBC�����ڹ�/�T�-��QR��37�a"�5�`�9�j�;�~j�8�����!$��,%������hD���9ϻ>ad�?)�q07ԛ�Jcn�k����DM�����^hZh5�/��� )d��M�^��8{�y!�W{`p>n�r^%E����2�-�j'�~s�o�a��U����ȱ�L\0@�ヅ*�Q�AB;4s8�u*m\�k�E�������X&ff#t��.��w�:g��h/L2�G��z��b���Ĉ�
cy��}ހ��!@�7u9��+�7���1��M���\3۠=*pu������ 8�ܚ`V��S�L�����!4�|DqN�X.R�@�ƺ�|�ծ`��Bn�����N#G��o����#� Q����[C��g3x��_3v�����u�[�:��Q��K�}O��e��|��Xޔ8|ѿO�~+�J���o��%�I��O|V��q�����&���9��{�
�*�ؚ��t���;:f����/p�@�ω�!�W�oW���e4�f�ŵS^fFxB7��̶�<Բ\ǉ����j��r}\�
H��12/�xl@��z��AP~�z�P�y���8;��w��ن�F;��R��h�?��{�j�\E@���/"W"��e�"cs�I;���IHwu"0
e�S�)��:/�7�6�4�A4��u��,�Xt�We꣧��׫�2(���6��ew�Rl��m��jQN�N���N��ɰ[�����P���YNeŮ���m���k��/�ֶ�,9 S�o�&�����D� ��^���Y���z�����7�?�Sq��>�P) ��T�_�jA�q<�L��,���K���y8x[L7��?�x�BCxS�!�K�-y�&[����|�a��D��W��Ym�ŶLyb����Nک���Μ\몳`S�|8_�@m2
��v�"���DbPjy磙3�rBvh�;�Ar,���3o�o���5P��_�"�)HA�S���ǥ��R���g�t�ڶ�ҵ�"�j�����HT��/�P���Y�H�o �t���f0�[q9�Y�hW�azw<=_�Nw���d���;ċ�7�Q����Wt���_�l%3$h��j�����ra
��h��������	�;L�$]:�.j���!����K���!,�!.����6��Ć.P$��5n �1�N�X���F9��Ia�H��B�~���{Du
��ް��1�����{�NƝ��M�{b؛�<)��^:�=C��7��i�l��$��v���u
 x���WE������zo-�v�Y؛�� ��m�Dլ�}`�\�90*��0�¦fۙ���N� C!_�HK "����yX�<��dއ���1���X�=6϶���i��[�Gp�<�����VA�V�.�����o)��`[&��r!6+���]�df���l_��G~d��dr��B�i���V8a�qk\	��s��ep!�1����.��`ّ�P�E��"i\�5�srA��*���vP~��J���욹��!b٤���ވm_G��#h��o�ʑw8ه[�G? �w�Mj#����_,ĦN�Ox<|�8�r�鈟������d�]�0J�x�O�g���|n[���x�~�R���%#0�lAh�в����QZ�<w$��l�Ѫ��;�������߈���}����:��X�kj�/�r����4L����6��B��zl�R�� ����nq_2<���rme([� ��z�������w��_�W�DI�f�x��YڃG��&���Cui���˅E4���f�5��8�^}������J��-�~��~�-xF�1�{"xYh?��ɱm?�)�M�ž�1/�Q��+�jZ�z_����}R��hNd�uv���#�BM%�|��h�9z:��Ū�lIRRO���ݴ��(�dR�R��U�9\X�+��~�TV���c�a�$	�j���}�Cg���.�)Pև��;��6=5W�����c<bխ����Z��i؎.�5Y-��F�1PF��]y>A	M�h�B�:[և/��̶�����\�������]j��)D��,�ʀ�����V���Tv����I!,փ�}�@�ܵ$�-�$�ʰ�u���V�(ҚiE�-r�|t����.�����68��m�RY�L���LUr!�t@j���+�6�l�`���"5Y�_{����*B�<�ǝ�\5O������]�E `���8���<� ���Ҡ�x'���������T`܃����S���?.ڟ5���^e��E��?�6Jɘ�ui�`�וn}0ӈ-5j[g1��^$�]^�Q�/�v�p��Y��6���%�2wN��36��i�K��L�=�&������mvߞ�]=�c���IҌئ��z���,d]5V�
�>�E�{{WФ��Wm��N�$ ,xwvǩ�OcB���P�	\��%�JaAw��>\e��~��%Y8�,j�O����շ��7�aIm��;�vB��⯷�+�^�U"���<���vU#E����P�S9ć-*?O��+�
W���ҡ��l���
�}?�2���m�>⁭�C�@��!��7y%9H.�=�P�����i�]ޢ��#�WD���K�� @F6Ŋ#;��#�Nmu�%��L�8^�Qi��_��ݠ �6%� E�&m�"���n�eD�aGl�˘�1�ި[(��ac���Fd+�0a�����H�d��ܚ�����
�A��*���	��v�}��tt/\*�=�teW;Kk��*���O���Q똽�i�q���ݼ��ˢ��{�::��D���*%��q�`s��6�9_ajv��֐�&|��b��b�M�����&$q�Y�L�KA�;��+h{I4�Y����^,�6�]5~�$���zz���dB7l&�Z��t��B�n��(�s�C{iv#�hB׵A���mxF2?�`ǥ�Οۨ�q��P��H�Xdi���EJn� ���2��8k�G/{|EF��t7ao>��nk�����X�2���]�Tk=t�>�����p����c'�H�AM-]��"��n��6�xR�2=�q�y���e֘7T8�{��Ƃ����@����.0BS���u�5�Vs�DV��p���z������e��*�)�k�GƲ�=aN���1?�*yߟ�W��8s�#Ɗ��C"��Z%�?��/^W�*�q����+���̹ڿG�����p��ǴT��~bV��؆1Hq�ѽ�&�s�q�2�t����LL��X\:���u�{:��#Rw2V�S6O�eY{�@��W��?�Y�p�U�v�_zQr�t|:\�N�W6�w�뇞���3�B��槊8�$푡�l�\���^�N�U70&o^�\k�o 0��Qm�}"�k3��~�; Q��>���X���	��s�����FX���+Q���~������_(R�&�;�X���E|}hO=�պ�U�l�	���x������j��ϔ��L��+�{��#7()�5�u�G��8c&�/[�}x1=��DN�����D��[͂�͈wٳb    ��ϭ��&�>�^OrI.�i]0@|�������֙i�E�UEa�7촇�{�fu�����o�w	��)`���4�Ȓ���B[�^��� /<����x��}`[��m"-+��"{ǧ�uSE<9N��H��khvg��������#f�k�'�s�`-��H��>�/��0��zm/`�&�R�����u�x��i�5l��K)T�a̶��m�h���@G��U����o'-��G[;ϔ�8������$�����&!�&2[<Ĳ:	��a!uɾ+;/���^���d�ʨ��h>�򂡊q�n�o~�+�����;ꥐ��q�v�����x��g6,Azl�B�B����!��/���k���)��	7[�箧��ѐ��N���	Q��jFG6vٮWA�T��!
�g�3�L�Hg`�n��1�6�>�	�z�
�m�q���Y��Q�?6}֐����Wl]QR���k�5Y��吢GS�Qk���Rj�C%� Ūy�A�>S�����ߛ"���u���P�D������N�8f�4��:L����ܝj�S׹� �k��D�jE+�"�*밽�M��͑$��N�����{����ݾ+R/I�zaH�ĸ�q�מ	�e���T��(��=�.~���Ôǽ{��vmE]��]$�	��$�H[��u����j�Ш�AC݅���Щ@�#�%�O�|}�}E�D�YI����7T �>��o���N�t��W.����U�u@�L����G�6����VpËG�}�Ĥ�%����y��Ƿ��#�7㠓�\}PoA�e,I��k���u�Q�4�p���jƧ��o�-����AR���1f�Z�v][		�28`M�4X�����4�ԍ��jD��bAK0��W��(����+{���A�l�^8���4���i����1h�/�M�^+���KϠ�!�V�TL%��両Bxk��友��*�\#�(�Q~�K����'��`?B��m����\A�UL���֝�L��|��pdAt�Dw�D��3q��_�����(1s�;����6��*6ڹ��.�2'�������Q��k]E,�YU�22���U�gG�b(��`��]�E�,)��(&���Msf/�?.����w�O�/D������e\?\0��nu�֏���A��\K��l�x���Nb��g��|w�V�5���#':����7�	oj@�$�6;qx���u!Z��VMYP}"rMt����ه���Y�0��k�ut������_3҃��-������5=
��ܟ��KXMp�t{?�[ �>4�$ک3X��6�C V��'���� e7�[N53aP\�j��	��)�؏��|������8�p� ��sf�O"��&8HF|)S�v�Ǧl?��3J`���dL�)��ק�,����?����v�v�aj4WQ�:DY}�֞��[��SBdxJ�cUQo�V�œ����A�'M�Sz>?9�Z�B�n2l�0�.���	 �"�_
Ѭ2s������J Գ�EM�]sw �5[u�;�%�~��Փ6q�}�>K6  y:<W��/×��Γ��*���H	N@g^�r���
`�Aj$��I/��3U��b2�g�B���r ؊I�Q�6�g\�B��(��eM�M�h
۱�Iڭ�xa������>x �B�m�a�y��2�B ��}��
��`M�]<�<w�	Xm�c��o��[���UL���CR���D=O�`Mc[��Yr����z�YV�"�B�g�
Ȍ}ک3�mʼ7֡�ѹ.Q�H��Ἢ�=����e�J�h�]�k��7�	T�z��&M�-*�ca{�G��l/� �|O��)w2x%X"3���r���B��Q�%�%� yI�A<�:���u�q�WÌ��3�)���ן�yBk�9Tt3X.H^�؁ia$/�,pU�B`h��2w���+���<������E��	���p�����n��嵟&ploe�aу���y8Z�|K�B>�C&3���5��$�Ihk��u+4i�a����݈d?Q�5#��뜜��_��d���� f��ƺ-�&o��֥skyv����v�6�9F���i$E����=NG!���*r`���#�M9�H@���#�s丏ivq�$ �˗���@�_V�X�ց�KKzb��NF9�=����N�	�**�"Xw|�y���I��]/U�CM$��k��;�\�X]���4N����j�UG�F��,��dB���[�PdOU5*w��F��
��rQ N�;U�6cM��G(�B_/*�4���G1L�(�7�~c��u�,����%Cπ��\�^�D��l���s�@:W��\���'A�X��KU�إ:��ߞ�n��	�3�ӌ�Y����G��.�v�}�׹��AD������ 
3F��_�@�FgO�s	,��S���vWf=A�x�?�z��D��"G�K�5�mj��$�z�3�:�s'��xmݪ�5���`/;�r��Q�m��ߏ�v(K�Ŏ�_r�C]��I����0RP�L~$�N��@���f���2�{)�w�HZ>��k�;7���Gĳ:l��\a�
�58c�w]z����Y��9��}�|��f�E���D�Vx�5�O,[���=�לB)�e�/��Dq�ҵVyM��Q��5;'øC/+^bw\/�oc�(?��Mpڔ���P�Ώy䮠�+�Hm��~�o�@�g�L�����NY�ܯ��թ�����~�g��7g-��Ο"es��2���Wt�w�0��)n	4"�#�qIJ�0�D|m��B��)-wD��S��?/��v�����]f�I{����0r�)`�Y��
,�2�̴2A��S|��^�S5w�O�T��&��>^
bh�E�.�<T/���NQ�� ;|R$���yy�����^7�����䥋�����K_^w�wdƁ�w��'}w��4�-���YI�qj�u�h�8a5��Dݜh�N�a=�d�ꃣ����, k4�YN�Z���(i�Ѽ!�q��eҨqߌ�%�. ��!�9Q�Zaw���>��Z�u-_���ɾ2t�
G�
`�>�i�t��3f��@�p��8I�s�z{���/�{�������AʙO�;�KW���!�y�IA���g0iU�O���������%��W��e6q�f+��"|`�u�Sg������8�p8�s�~�BN[!��[�;�uA.��~{�TB? �;��7��~դ�Q�eE�4"�"cd�x�bO�?(��}���A{1��L]���^�����A�zb�7�l[͜�ꫬ���@L7��w���5T�:�;��V�}|Z�&ԏ�BB����^�>�߬pU�nm��u&͹���m���ʨVI�_�|���
<�O�ѩ�rPu�$�z�ǋ��)M�{�ce�qr	0r5-�9��j>��֐,خ��b�d9��%�*�]�:�Q�������P���HA�^s�8�L��-�&�������
�mq�B����]�����o	v�kJL��g!1�9ɬ+œ>�~d	�	v�0()]ѧf/t�"AV�m�����p�t~��I-AѮ8DZ/��ͧ����#��">�(�t�Ѕp��u*]	�f��C]���R{_�N(�~a;|g��3�������2R$��a�����C$��N����jo��~x(1���u���;@�<\�Z~F��?���H�я�2�ޠ�vj@BA1l7D6��W^�9�+���V�rXWa����fϔN�͜����f�i��}e]�~�ЦI������̴��%��
��z9"��S|�l<Ӆ�F�����A�.���!�NS����KU��tm��e[��E�_�N�lx?o�a2������oLJ^�������8�∽>��^�g�����|��RV;��P��S)�Ӫ��<��?���3�;��d�ik�)E	t^����3��`pFw�D���JTB`I����X�}���q�7���C��[Dک�B�e� ��!U�i�]s �kb�CS:>�Fյ�h�U������X�N�/�c�j    �!]��	00f�7;!���`Ͻ��	�*"���=mn�0 ��5���c���kJ�kM侗�F�'���\����^`m��x�OQ� ����}�ئ��"v�m�ܔ��  �V�~��?f�)��zi���v����Ą�1�fA�M��W��A1Ӫ�4��4U�0��|yS���������Q��#��K������0ɝrH"��u�7����h���L\`{��`l!��}޾_pf�0������}>�_�+L0ß�ӫ�Yi����e���,�`x��Q�}N��Yv�G9>~ݩ؇K����z������(�z��\�8�:�i	�E~5n�j��a �&{X|jlia��o,��~�F��.�g�
NlX�Wt�8����*>_!"�&�/�Gl�`fDl�ԅ�3;g��C�qTD�*���� ���+�8��s5�9�������űH�������4�.�{�"�x��@�H���z*-D;���Z_C�7S�7�֋澂�0gi�s+%h��������o$#p�9-����i5����EZ>O�WGm��������c�p�� 1�zI�B��ׄ���~�IH������
�]/6c�p�L��Ǭ*C��ͬ�'|��BZ�����q	sjz�e�^�������k���a���+$/��q:rݒ͈�/"��p�j ۬B!X��|�l����@(���N�G(?~+I�m㼫6���^B�&5���_)5e;�A��@p��$�Mvq\s?��a��,�:������ ����7�FAu����-�1�O[j��%e7]݌ϛ �	N��v� �A�<��k2g�MFc=���k������;�>��f�E�f�C>��<��-�q�z7����9�CW����#���@-D���Ѣ:l^���+W��}f�{�`f&��MG��	ꦯ/d��j��I��I@&D]�x��"�%�lK���|� n"g��"~Xv�k�����F����Fҳ�9i/�[�'T�d�]�W��r�*V�֛���>u�����Y�ű4w�6���̴��l���U	LM`;z�d�<��C�޻�lߵA��5�)��,�W���{G�3匧��4L���uaѕk���7!|�NК�
����8E��*VpH"�����]d�4)"^Zt�*��ff������V�yImh�`��LM�O�';a_�'#9s�i+�*�a4����S<#�.���/�$[�`?>���Ӛ]YK%�����W����{�&��kq�`C���O��fc⊺u�\t���U?6���։k���!Ѭ�e�Nl?�H?�g�孭�"+@�8ҖN'��akL�RY�j2�Ģ���e��?K;t�/�J��w�	t�&a `%���m{���ݎ� �Bl�<���۰uLB��T���׍A��Ķ���X���^Q=0����R�V�uo(���>���H�qB�d�5MyYɍN��mD����i"S��^�^�.��e�
lV!Z�N���d�,)�9���
X��̋�~`za�҅���sk
zf���i��nᶂ}���O��;�Vm�.}�sո}���u�s{����{�%i{���B��+��^�2�Kfr��
S	��ƛN�b��t��RUH������P���bZ,���Nj��	��=��J��s��0�[��۸!5]���ǻ�z�&�y�0e(�<�#"��f��2�S����g�ן^*��N���?��H��!��*/��42[vq	uQ�}���wYI��������י�����]e����<o����c��;�@?���ԅ�=�����~�5�QĀ��n*��4�"�qޯ_bW�/t�ʽ$R��Nǯ��"7f���h`eG�q�����@��I/$ڪ�{�F��^	�Aq���8�V�J���'`��?���~��J��
,6h4��q,"��g�f;Z4�c�T���u�)�7o�"�����ˆ>g!Y'D�f�o8tY���.�}|ܟ�̀�A�n�BJ�aZ�%�ǭ�d-� � ��Y��	t)��'A6�Ɓ|�B/E�)�ARp8i-�7kPѱA�v��F�y9�G ����LI��O}�
��Z���ᶳ����D�(�EI�v��RT;mR���S�-�(�g���x=�.�Uh��� aG�#Vm���(>�P)\3kf:��zn/n��u/�4Oھ�v�5  ���Oh�]��to�%��-������Wd���8]�u��N��s$$��4���"]�`׉谌�-�|E,B֟��p:���;8�Ȭ�<��|p��oa�'�h���B9�*	�1���X�%r�y��F�OA��0��N�<^�-1h���o/ǰ3�MZ��a����g!3r�Wb9N�L5� ���N �b��D�LyA�4D�9<V=�
��:����{
%,w,�R|��|k����{�n�"�����z���>� _�6P��A6zgn`�t�����������V� ��#�-r�˦Ħ�C{{ht��~!��jJ����� >{R����>�x]W��:tX蕋����%h� �����d��J�Y ���-#�lpɉ=��T�'i'(LH#�_X�;��_1ԡ��jd�to:�\���ZH9�X9�c�]a����.�[�n��}���}���� o��r��E3m`��kE�Q�L?O�q��h`�瞫��el�M��Duo9T}!x���������_�g\�#/5i�a7wy{:a���O���d�**�.���d�uW����*8�& ǎ4���,)Y�8ns�4���FN�5L~T�Y
 'E7?B�����+��k�e7�x������wlې�~唶��'LDJ�	b��n�Ⱦ<�@��=Ԃ�1
����4��P�{~cz�?��,d�l������BT,�(��Z.�X��y72F��)�^�'a}�&Z��t1�׺8�ʝy'{1N��&7b�t,��W�jU��Ҙ�JƵ�C���*��=�G~���ňJ�%ˢ��@ �d�Nf���g4K�cj��K�]%l�'/��*X�����7���ր�Ejd������*�H���_�ڭw��p��$���k �R ��Ϭ�� �]8����W��ڏ������B��W�mY��?k<�'���@5����_�//��v�.U�%���9�v��i�-�pzyo��wd���Ҽ����!IB^�jUiat�@�3�1����V� � �_Zgzz��y;d/p�+����V��XFaouJ8�B�Ŗ�۲0���{�ۭ	���{�����3�sE�.���s=n�*�5���F�7��"�Z������A��v �nt��s� !Ӳ]�m�<�p�{3p�4�'�%���t(`-Mێ��0�|���b��E7hO�i�v|�2o({>2���b{iA3M�&IM�eF*�g
�7�m�X�/��xg�6�G�B�� u*}�O�Ә!��OC�/��@q�#W��W�S�~>�^�z��M.+��5��UT��t�����w-�2$Qm��}�����A���m-g,��稥2�C�`{�@6���P�˲.-���q���6���M=M,�Yp{!+^62]��r�q�4��9J�Y��T��/�]����_��`W��J$�.��1C|<~��b�k��'�7�k�uHY��I��Q�nB֘'y$�e���z_'|~�>V�t��oH���&��du#;IE���p����6�uER��B������x �u¦����U��,0І��7�,�����K� �_퀒M�8�Hvc4Y���f>��]���H�ގW���a�i���(�dZ�M&;R�&�5�d�v�n�P�*v`뵇��B7Nǽ�̚b�Aӵ�l�+�f�G?ס[��jw�ހW��p_�8Z ��q�,	���o3�Xds>3�1:�:p���ɷ���Ny��n�m=�G��*Cdv̝�O��ٴ�WEXz�c�܃d�|\G��Xr3��.��r�F�c� �Dk0:�sak/9�f |uļO��ǕZYsA    o��[7as�&� �=�l��R�ն�!��_�H0k���q���a.�_]��Ȭ��̣�pG�湉�h�j乻�X�$5qO�}̇�\�R�����h'	���R��������DU8*v����u�Yz���I����udٱ�b�@�"	$�*[e�J��HV������ (��wr�W�$�@"� ���zةZLb����$vfe�y^�����ʣ�"l�dyT��� ~����0E9w{糧��5땕�蓗 ) ��fL�lbkTXkZ�Y������6l�����ڍ�g��u��7�{BL1��aV��ׄ�o,�]N��3р���������|���~رy��/gQz3-���Ĩ�o�f"�Ƒ� �/A�6gL��663$jB�m���M���{n;)ד&t.&<qV�������N��nm+��"�9[�q�\�Z�n�t��X��/����\b��>~�3Q����3"��3*"�G�7RP} -��q�'1{E[J���U��jDd`C�{v�y�m��ş�º��;v�-y���d�UJ�Z}�D��Nv�<aT�M�����}k��ڒ&V���� ��>�
w�@ܱ�%�)��y*���|�[���5�'t�{=�a�B��?~PL���?�ZL'��]z�ׯM�y)�]u0���{�����y�����ށ���c��R�'�3�}},��tN��UD��5� RPp�tI@h�����c�|�)�w�@w�IL��� #����W��^*���\�]i �����`���`
��1�&�Ն9�-)
�݂�Z0�u8�n�ZrY���w̄�=N��s�ZJ�cLM���M6qO!XYC��3��������zKF���� %�RZ����G���O�h�?�7*�m���bY�a)5t��!�cѻk��+w����˂��x�D�j���u�`w���j��6�0S?$%��1�y9��Zp�g�%+Y��.|/���Nϡߵi�C ��j���U����U�'��خN��Sɤ�#"0�]7:�U�W#��g-I:8k�g]��8QWνP���>ϕ������ܮf�OA����e'e�5���v��7��k`o��R�^S�x�zϵb��#	u��("M枀���|����+P`�R]ķ<�D�I���܊��ar'J��u	���[9�|�5m`�L"FV�9d���qh\�`��\�4jd��#���r����z�={��*w��q��
%sD�i�U+�M��
�Y�H|�l�&0T����bH<Θ�)up�{�7�й������p�{�Bٔ�w{�]���'�(j�$�nZ�tJTK�kz�6}z������:!�)������ �JoM$9|�,�*��j�4|d�Ks9h$/����GY s��
{��PZ�}�&�Ei���о�Xy��|�-�Jx�v��HE��_�Z�
8^�Υ� ;t�2�Le[�6V�t)U5�s��RI�ݟ#ٜS����|>�B�����0ʔ��\m@�N3�5�H��f�<��;�-��m�ǘ�t�`U}d{n�q�Yfm�9:�1���W��*��2����,��i�Z�"��v��:���.U�t #��ø��v�j�+(KC!M��U%�_ٵ��G:�Tɦ�CT�����գoz�'�����ч'�����s�y�?C\��"H���l+o��������a�Y�5�9�TFPo�i?��j���ڊ���Х�Q��X��6���L��f7�J_K��S���������D�}���8f�. �REN,<G�������6�sx����$2�@�-Q��������_�_�
t�o�`[bﻫ�r�FS8�S�,r�����O����᝜�e>�9)��~��
�����	����aU� 0��r��0?��Y�<|B�U��mu��߶�#�4I�_��_k!�p޿��JP_�*x�9�h�D���T'י���'l$�j6�F����x@��B��'2�Jj<�H9+`u�����$(ΎQ%%haV�X�d'_A�xb�Hl=�^���$<�-����@go ok_��W2q"26M��؟i�u���5.q�����.^�[���O'l� ���Y}!���D�W�t��؜�����ݢ�ry�(�v|���m������^��C��!��Y��.��g�]l;������V�j(d��k�g���#�ɐ� �ߓ�|��'E�<���Z�6|_tߋ�����݈��������v������Sȝ���N9w$�l�KP���kʝ�]�J ����9����B��[������a�H<�;U��ĽT����i��F�N��i}��RKr>�a˝p瘮�*����v��a�vlK��KD���� E�W�&e�Pm;��h�7��E����ޒ��Ҕ����D����%{c���?D��l��ô�۲e�2[5�0��r���T��7�6�1��4�Tb���՞�	٧K4'�n���)k����	^�u������k�y
�ѫX�������8���u+W^�=�,�P�R1'�-�9��W;�ҍH/V!�Oצ�%�H*q���@�Ҹ]o�y����� ���T�>��Xl�/(�鳏:���\&ЩѦ53�1�ߴ�ʦ�o���,�!wjOh�>�}� TA'?�]搄�vmG����M�����r�1��y��.� {϶��Q��T��q�y�'Dk7�����a4�j����2�z܃j*;���?�e��aH�dP'.���	������.ڞ�����04Ĥ��M��0��4��K�ZҺ�N�
]�afi�vJb��&�^q�O`3|�U�x�iu�3�߾���a���4��A>r�:��'~EO�w�Eq�k�V&����%)�?��B!�u.�F˻��"��� X�'BnHp��1^UA���Ɏ�%x��gſ�$����)>�1z�(�8��J��������~4.���ii �f�bx�Y8Q���i��I�Q�_U��)ݔy3�mH}b�u�Ҥ�IP�v�uPء���Šo�
��82��^�b9'�B˼ۇ�X3 �$�X��0�ן��L�EE�ǡ�;��,s���'ܨ���?>��4�?'����(9�ܠP�g�e)�Y2!�=�\7_9B�R�j�[�z�G�v����l�D@�z���Ʉ�vh6�}_E����3VK�[/?h��������w+-��1�X��* �uE�+�iȍ�=����(��|�t�J	㷞Z?~�������p'�͡j�O���� @�0�:͢U����"e+��ጔ����őͮ3�����-%�1~�(��Y q�m�.)�{"o�g��6�	܆�!��@R�Xöm�8Z�q���;����!��]��Ō�T	-���H����d\*��7;��-.��G�Ic�^�>G��8�[���-&�h�xu?=&�m�Ze�*]$2��橬����Ů:<�=��X�����<����t�<���#a�:xk>
�. ����iw��ڂ�30�[!�QTL���8i��;�����w���_G�G���4�Z$fA[ǹ���'�.�'�߸r
�j(��B=>?�t>Y�BEqt�*�@���ɷxWZ�FM�y�t>�~g����^��%(��	�
�۞�O��p�5d�Wq;�]�����{�������C����\ �}�Z�M�� ��v��%O����z8_��+}:��L�22E�, \SB&}Z����ǖ-0^�*��a��Y-�w2ᓒ��Q>�f�u䇒t\��!�9�0Iu��w͊�e�j��]�K�r�`04*��%(� Q=iڱ9��n���x�HN'�K,��U�6f��p��A��[�	`JX�)Moז�D�0����>�Ȳ� �z��I��[�K_��W4(�Ƒ#J��������)+С��Gɖ��N����Ve5��[v)����qg-9����=���e<R��#9����V;����N��f��?,    pkMB��8[V-xЁ;�YGB�T4�q�e�*�p[��h�t�5M�|@ͳ�~v�<CI�0L��_ ��D�.�1�&I�g-:T�{�8P�m���[БV� �32䤐���lvѼ!hv��n�Ī�E����G\2����e���Ɵ�Rb!$e�����.������2�F�<ɪ�v�.�0�jW�U�N��|C�rS�5a�bw�)mn�~�3��y��~���x~������9h����G��gQ���ó�Ve³
��'��cg,^��n=�g(�\�*��L�O�Фo�wyC�	���Vpk O����:���DC�)�;Sђ ��ol�u^I&��h؂�2R_��g�������n�2�,�6Rs��t�ࠐ/�d��Qgq.XfWK���y��~c�A�<1�����<��	#��*��Q<F�v��r��W�)�J��J�a;
9�󖟆���y_u�e� x���!����u��$:R�(����o�ت%/=qsh���]Ou&����~�n�;`(3��=���95ln�ߗȒp�ym:�c:w�����7��,��o��sY��k�"/_ L	�
#��k��7�>q՟X�����vdȈ��(t��N�X��[�JOE�~2 ?����f�y�?�fP'l�lG�RFa[�&��v�z��K���R���8�+��h��640��𳼪�2� �w��o$�T�/S�+b��̑
]����c5����n�ߧ���Vu�/���!���ysqKIV`į�����#�a��n�dGtF3�*��ǹ��`�e���x�t��x�^5�P���f��z�#;�=�Z��&o��y��@�q�ݨ'��߶�R&+F9���A�s;�ߏ��&8AHJ�;�-�\������b8��j�ſ�KCu�*�eF �
�#�ac�I�% .�6RvuJw� ?ߎ�_3��_5(��#0��e�>��{h�4ϴ��*]`�� ��3�IJh��C�+R�������v���<��>F�Q̓W��C�N�T�i���f�s W�۲���ޚ:�H��*Au�dӖٽ�*�5 @�~@�id�#��񣹡��'.�pVW��z !g�C�:]Rn���^�@X`!Y�$�0�y�+��~y���K�{L�	�Ͼ�����K����h���uF{�'ϣ� ��.>���\������[�� ���a�`2h��BL�?��~{w��^�c�h��S�)Q@�F�W���e_�	G�� /���Rw�����!0��)6�9�CݡY��?t��dò}	!�]�`(N�J�1_���۷=��RQ�Ix�r��jx�X�N�i��e�d�f<^��l���F�z*$�°��pZU��+Tι���ɂ��ي�wU6�L��ۉ� �C�M�YB�vA��%��TecM�a/�$/"vd{���}��&����w�"u�]F��KZ�����ĉr�t�'�������Ӗ���* ,�
�D^�a^^?n_�[��N	G12�|B6�pn������H��V`�G�����l��e܄��<+��b���/Ǜ*�V"T�N��P@?����NƔ�	J��GWO\�{�t<��B�\4�~�$b7C#ݷz���u���#�5ޗ-��%�-+@������GP��;�*`��j6x#Ѵ�X`�t�F�a��ҴS*�YdZ0FI�5��}�Y�e�dŹ�`�\������\�duJi��@rX��Z;�E���~im��M�^��t�]����j9�e�N����~���t?����p�՝�?��
�;��&��)�:B8�x��	en���)E�a2R}���Q,��hX�E�����&f��=U��#�\gEmY�Xi��G�lc20ŧⲐ�+,9~��|9�\�W,Vl�k�&�z�q����fK�判t�{;N>�YDr�Ci�.�.�f��k"�"�V8�H�f��z���Q{.������t�ZS���e�?߿� k�$��ᔥ*�,�,�~z�@�h}A�}���1�C�q�Q��������)!uj�_�z�y���g�}3���2���Y�zdJ��B[<xM���nW�����!������8�,�.kh���Aӛ��jm�Hc ��?.vG��Vu��DC�`�9�@ E���d�K����m�v+�g�����m�# �`���|d��@��2�F*�y�_F��>���T�)�j7���~��b�:u���
2M���Tvd��Z��qx�P��f�dq^������!�H��Ό��ZhHA>qa�H�-фÃXb+H�\� �9`�R�\��CRt����f�a6b���A]}0[���4�i��Z��J F�>#nrY(F�P�0~���`<S����Un�3��	Gx\�.��X#^��HU����V�y�����ڊd�K���o��e��qQW͒�w+#�I�{��eN�=�����s����n�k��B����,m����҃b�7�u��K�X��|j�Y���C1�ӊe$��g����ז�6%Ag����W���icI��CkH��d�I���)AD�8��SUX���X�����O71�ڗ����r.�q��x��2���?�X�oa���>V���>:��aO��ECݴ[��m-�y[��P���x����	�E�w�2�-��ǭ�^kA\矇+%�!���2a��v��d��ڸ?�]�E��2��G�����%�fP��P�g�>VzJ����\�ɋ�pw��B��MX�h����o�w]������h[\�*�h��Y�|�xe�pk�*T�y%� �1e�#uR(�����߻xu� V�ޫ,��p�<A!���)n����J/=/
R������"�u�+vƛh@�[k߀\�[�z>��HL����8���g1`)ߟ&�@��8�����0�T�oM�;R�z�|��A8vR���b����>S3H��
����ګ�)a2�A�R
f��ɒ�0eq'u�h����++w=��&�K�/���溤�γ�
���|��=&_y��W�%i�#|R|�Q�1hs��{�^�D�~�%�I�G|r��������gi����ğ7���'!�UYމ�	����/��b��e�����<��׆�`a���"�1��ٟ���u��^ n?��,�p�ha#�%Y�
����4T���4������xxt�^#@d��>8���#k�O3�V$AT�!"J"7sא�`�֮�GA��B���
	�\�Y�R�B�	<��}�̑o$5��N�{^��%���ŉ;�~���ַ3�A�X
���R��e@�!��9��`���|������gJ��զ8Z�w����d|z��d��c΀�5����`v��=:�w��H�/��R����n��=��X�����f,���3�G}e�Y>��q�rD;VY� ��Bhk���?�Ζk-�pe��r�f�Q��PDɌ;���J&��¼�.X�a���5�?���9���f1���(����Ɛ��J�mIp*�T�B!�!�C���1�7�'�L�P�B�1�lևQP}��D���rpe6�����C��8��P� ��R��^��wx��F�9�����a��c[b��*���a����h��>���O��|II�_U����՚54����A�Z'���.���&,�֥_��q�%q_��J��t���ɭm�D�,,�y�������VQ@�FĈ���:��R�}�������Bo�,4BO�͏3J�����&���^-��5���]]���+�b�^\04��Ø��z��MH�9Xr��{V�0�����z��Ի�N)r��/������jpҷ1K_�QI�r'�b��w�����"+Z6Y;���i�{�9��j������ޥO�Qx�.̶���#�.,���[�{�&�ޞ����#������E?����#�jlL�裂�R��ρ�xL;���-�p-Q���'|��W\W7P�M��ǎ`�����N����K�OdC�ܵ�;TKU�)��A�Ī�o���WJ����| ��`�e;ꏇ�3��MO�8 �    �}�W#jG�*���/�����[�x%;˕)��	���э�>&�ש�V�j�	ϐQߓI�Ĝ�3o�#�S|�`���eR���#7е����BNe@����	�涸s�8<J�8��`s�O�
%�ޏra��S\ZPȄtyvTa�e�h��,�dYo��to�;t�,\�Lf�T�.��W�3��AY�I:+4�)>���h"م�F�����wW���E'�Hg[U�آ�}d_e~��	�Ֆldj����IԤ�W93����w�l)��o��S�b_�:8-�y]���E72k�J�~�r�c��p�]0�}�Z���v�+�f��.��a8EqS:&�}��&��"p77E^'`V��xm�s��p��G-�_U���Sqcdaݶ��M��C'��f�{�s��E.����<���PF���Ɏk$����>�����=Fͷ�O7Ö�����V��^C,K~Ϸ�Be����T�!pX����	{��tx+�}M�ۙ3AS�����Me]� �(�/|��Zr.�fJc��z��l����}D��b (�V
��PQ���' +��C{
}�حu�u��_B|^?�6�/;	P��u�a���o�r�4�`\��`]oI��}�P�G��n�5�����{�d8���0����a�.��,��A?��8�m��]�&$jk���j:Ǐ�8�Cl�^(s����aE�s@��������T*�o�,��[uڽݼ���ߎ?���l[���i"��{v����vE��@��d~����B�Z�\a?`+���Ma��y2���C��zA�{j;с��������$�d_/�C�][x�rA3Y�Ru�'�i1�����ۆ7��p�2?��`���vtkm�R�0~�([Ђ���?���x�*����*:��<%��H���T#�y�:�n1���D;�W���v�Ͼ�-�b!Hk�$��$^�
3	^i����r=��m"��ׁ�Ju�Z�;�w��Ǵw@�V�mt���>�2Uޢm��� �br-�&�k)��.�~l�v��al�-�m��e��Q{^��(����BT>�z(,�q���L��_�`��\������\�12��ߎ����cF��E�_L�,�!��������Oc�F�w3�zͻz<,�C�w����7�5x/V�i(vė����j�{���>��!��8GD$H��A��c1���k��
�C���ۏ�+-^��b��n���īc6
��؂�k�(�cq�Ǟ�1��)��/��]!�10�6L�Ƥ$�(!9I�9s'ّC�.b*e�)J�tE�q������P6R�섧¶nNT8��G�,���z{z�?20u1s�&%xG0CG��uG�o�V�D�;&iu��7���R4�3r�Ş�L��&]��wᚻ�s/W�M�41�	��������F�r��Q�{�f�J|.\o��j�rg�G�����P��ϸ�Z���x��"y8	��{�z~�B���M��h�#�@CGM/�ӯ�$ݬaUN;�g����@��8@Zm��{J�*KZ"�dK��Z%[Av���3�=�1�T���i%8�$�(Q���"���So���-D�{��s���6����݊�� 	��|4� 0Ϧ,Ț����`�#F���a,U�����5����v<���|ے�<ː��v� b������M��B�R��Ս�V޾��gg�G`J�w@�h�f�$@���{�8�kO�>�dMA���ڰ�t���B�0dc.���Ɔu0�ޏO[��}���i���4���~���_wn].=ι?�<���AG]P��K/�%��d���@D��Zō� �y��;r���  ~����s�u��l�U�&�^�����:@�</�5�:݉�T����rԙ0L�[�ؽ�H5�bE&�e+ܳ\��#ĕ!-ִhoR��0H���ȋm�������Um3�g3�ƻ&7,"����(���̯ =r7��"ʰ���y]��`E:ZOuB9Q� _����kt>��D��a�6�)�Y~�K%����^��)21��N��o{߬%� kA��[r���G��l,<��G���
�%P�;/`�(�$e�{~\�Z��j�(F0X��#���F���#!��] ���R�}8�-8eW�#���|0f!�'W ��l����o�����A�O\�Z��s8U�V�G�&O���Tk�� H��k�G�:�G�D�͉}�Tm') Ύ7*->�n���ރ��R���IJ���=q�y[����a��_��UMoV(�[57'y�}��#&0��p­���fqh�]�)a<x�Ӭ���\���Y��-�U��i�q1�j��q��km3%��w���a��1tH�U6S5�����ȗ���¼������۝�o@&S�YN3���eZeW�F�k]அ1Q�u���U\���ݯ����,ժ�m�G�n�#�+aD��!��[LJ|�d�m���'��1P!�"ޏ�N�M���+��Aug�$Ϙ
��_��쌊�# !j*y��I��N�C�i��G+���U���%�YK����wfȠ@��=PS ����	BY�m�r%p�p��$�+����m����d����9t����~~��9���~�� �y�>}�]�^��+�^1v��#��7;��;h@�lr3Ro��r�.7Nl����{�k=M�-�̚ӧ�����. ];u�yn�%˲sҀ�]��K^t��B����b��1췑�#v�$��c�
3�l��>&���T=�����u��,�VDo�ߏ�m��C���PO�)@ ��Ǟ�+?�1�[�����E��J�"x9�z��t�}�Cl���т]A��~�m�����L�|3a��E0K� �G"o!Bn{�D|Āf�W!�Vx�Zq�g��:����7�|��C�f���i��h�VB�osU-;�ڬ�-S��M`v4��qP�FVʋF�q��t�Ж@��kxm6�OHK!�e�2�{y`�
�\3w�=���}�����	Y����l�"�Ŏ���%����[�ĭ��$q���l���
(ކ@UC*�?�|��=B�����p��C�k����W3�[˒���$�'{V��m�sM���K�~���5d*�_È���G �fj`H���:��_��7�`+�:��]õ,�ᇄ���ܣ.b�P@tm.���/��3t<��V�Y@3�x�ßU4�=�y������|+� �C�1@o7\�Bm�0|q��9T]�;�: #x�=u*��iI��>b���ǋ���9��N*���)���\]��ty��,��&]W�:���K�4�s�H,w��x$T�����G=�y���q�&\	Vư�~�V=��OϾ�؞�1d�f�H���FC����]MZW��6�մ�G���9I���oK�'3�b�Ϗ_*�~���j>�{�z@�c٥n�d��?��;��s�]�2����*��i�/�M�`�*��-�x����C@{��ˍ'�-�D��P����I�;�a]5����!��}%�nu6ʲ^�l�Z�H!ڀX�A�~�`��Y��h���GHl�]��Ͳ��O�};R@Od��E�qP �TG�/߮�E~���Zl�a��kO�[���ȝ62O�����:-��g�R���D�fe=֋�^���M��1N,�6:��̍���nZD�}��x9d������
я��ΝG�7b��8�j�m�+��+�܎��IS�J#��QG`�4��r��]���G��њ��ǯ���
음 (�x���f$:d�����E��5W�����'<�f=SX�,���CT!�bqCռFɋ���������t�*���ts�r|3%H��U�Wf�P�]�Mw��~��i��6Z���������Q��^�rhp!� �rI��ap3S0���ܨ�vR�����
�%�2+��tX�3q����О�V����s��>�?`�z�l��gZ���P�kJ0�W�F�O.a�҄[�D���E��|�l�v�<�>�H    9��х�aZne0�Q^N���"�[�\V���5�v���:O=�����Kã+�VPP��@ڀR�Y�s��Z�ĢZ��v<_>ᙨ� �� h0����O�(H��p ����[p?����	F���oD��|)�:���X��ݽ�q�@X��ù�.���#���m�$�N6����G�a;	�9qN���<x��F�����-A�� X�φ>k�T�,���t�����
˞�$�8���� �O��IfDl�΅�S�k �ka�9���3j&(uY��6v�CA�[��'�V���>� -5G�+���TU2C�TW!O�?�x����.{{��� K;`��0L|�i�a�X���5�{�y�|�E�Q=R�pb��~ǃ�V�1[MX�t�?f �Qj���K7^o�>���T�gI��9Y�W~9k��`�$����-�#B^����S��m�מ��x�����А9�r2Q�珘[��f?]X8۟�	�Ř�X1Ә	2���襷��/�qa-���
�)%J�=� �(��{I�Z���r�@������?7OMAG�[����]�Vn�්	��^�LL� �	KמC�wU5�F�"fl=�O�Pl����]r����e0z^��4w���>`�z�
��BfG{�cC�����LA�ǋ; ��Bi"Dc^ȼ:�%ir��ƃ&뤀��}�����Nku�]�+�h�1K�7c�V�VV<��N7�c��Ȅ����� �����n����y���V�F9nm����x[�s�,v�`��"/�O~2��j$�=���9�f�	�A�] :d��w�̪t��j���ct-0���C�AZH����#�Bl��n��hFU���B�����c�?|�Ł�-����,G/A��O��é���Q�ʙ���N�� ��}�{�2��kٖ�`��7k�dGr�OBD�MZ��E��&�hd�[Ux�_u��ͳt���޵�rn��A-��A8�+��à�%`��&ݥ��6{� .#Re��g$q�m�Q��1����H�7-���xW~�iȆ��>]^�A�еN`A�qOE�|z�E��q�.��FbA��w���R09�-�cW#��e�!���9 �?�o��� ������(h�ʆ�S�J������]���Gd�u��@�'�����5��Ivc��ҳ`��KZ�m ��,I��a��p��RJx�k¹J�EB�f&\O9�d	=�1m�Ed�����Ղ��=r&����pk��©���η�žs��L���Ax����gŎP������b�&y��ӟ��m�)9�#��cXІ���ۣ�i&� ,ONU���j0��ᆣ�	�� �E�	�>s�Cآ��7��}i���U3de���?o-��v6�U�tQs�]�����B8d"͕��PQ�����|�S�
IE��w��C|��v ��d-�_�i�_u�(Q�yT{���8�9����^�����	!�����t��k�W�����7/O�T���_i*����c��L��y�����{�v�
�SW;��l�3�x	ކ`ӡhx�[ˌ%i�XȑdK4L�
�>E�d�����m�<f� ����^iah֧����@5/7�W���՞���pO�����L/����7ڶ>�^x��"���_υd}�,���B�T�m]eo=ᆸtN̴�GBkP�Ϸ�]�%�m���6K&��d\y�N�c��&�Bl��B��a������D7��Y�}�F�Ai���z?��ۧ
��q����m!�Ԓ,k��X;Ƀf�ޔ��ft0�@���̽_���zZܪ�[��Є�����{0�8�O��m���q�<DH�0�F�{�!����<Qcj_��W�L�2js�i�jdk���O�H�R*̥�)� �g;*�՗#y��<O�|%�A ��s@���ўPO����b�����, "���|��6������oa��u�UK���4�-�b9o�	U��H\p�_>�Goh��[z$����O�����t��ݴ���wp{?��������wDq	R��#.#�p��%��W��=����I_ئL�'�W)H���")�q�<�%M)ǿVJ���ڀ��m���.�1�R2���Mo߫`�3@�"W�����*�V��T{�	�����j2��~����O�x��a7��#4��b�ZGyU��_�vޫ^�z4oD�nz0NVU�k�@Є��+L�_���I�D $�E]MK�w[�T����͂L��-�V=�L���F�}�IB`���I{{�WiZ���s�S+lH���m!��IQ$��`�F���~r���iX���1m��?�g��[���]���p�V��l�
�9�&{=���&��r|=�Ae뽕>�����:y�Z�+�����hOE�5E�[7�?���#�},�k%S	Qt��G��	�Ze�j^��7JW��l��!I���eb����Y瞪�QT�0�A�"|ST9M(�$.�4���L�r�]��j�v��r� ���P�
D�g��M{�}t˽pm��D���En}�����=ƭ��h\�q'�n]��Y��	ƽ�B�}�SW��F��T����^�kG�F�%���ȤYw,iI|Ŵ�J�r�fY��gG��튙�n�v_�֮��\��?�okV ��(��l�I���#��%�a����u�F���h��t�l�3X�LNl�طT��M�,�#z������Bd�cA� �"����D%�KU�� 9��0+�y�j͡������=�i��W��[^7�h��ޞ�VQ'�u=�lz�*��n���4�D���`j7�:�w��k������OE�x� 탔�G�U�K�l`�P�B�ӄA�ｷ(V�_%r���#�cE�E�.��>�9�=�-��/��.H����W������}r��ư�[�?�A	��.*��4����;<�'���TĲ!�,���ub�ح���
���,'Vi^���hN��׹Dh�T �A�K�C��nk�x==rPB�d3rĢ-G3<w�ѧ%��DѻGa�Y�5i儮4u�yHR����Ij�o�d� ���V�}�Z�zw�?��@#�ha6��hN�t��c"�I߁�2�ҁ��#�R}�
u��\G5W{Yx���19�<o��<����(�Ԡ������>����t��j�^%�~�,���\�!��	����FI4N��v� Bvc(~��N0W�1��M�R$a� ���V�Y���_qڱF8xϛ�3(IJ�!w��	�(֬s�]r���5g�!r�ed�B�%�ظ���A��U��c�s�6×u'�+4G�*��'ֺ&h�^�����o�WT���e�� 2 �;u���	�*�]��a���Y*��E�6�V�6�^@�BO��I��R��u���L��S�^b]�����͊O2U7��b;h�X��'\d�z$�o�Coߘ&�#a;<S�|B���-H5� �l�]��|�fv|�j�å����'}>\m�},�﫤Q����}�󔀙�t��S�Ա���U�~"�R�&V8���x�����ɞ��q���Wz�))�,����w]K+g�س �k���ң�Y�ա�����X���o���j�?5M�5�΀RL� ֱ"�ݞ�~���J�SX?�>�p
��qE�J�MD&@
S� r�
Q��딸R�+��}��VJb�8�B����ļB50��J�%&YE�jc�����1TV�41\O�u;�Y���P3%�ljv���W3���w'Ba1H����]
H&P�Wζ2���q�LuY�^;�J�����R
��l���������:��7=T� �66�#��{Op����4��ܱ��S\a��Q
3�r�>�*R<�FJ�P�Y��w2z���cD��K���U����r�u��%9c0��$u2�~Z1��?��}ܰ�t�D��y�8ˆf����'' ��pܳ$��t���H�{��n�M���Fp�����}���p���C���E̹,ʓ��L�e�ς+�B��̦,FR��    D₅�?�`����z���u`��=���p���
��ay��yP#���F�8y��W��d��"X|��l�zʄ[��#��^�}�a�Q}ۚs�����d	��7����ϩ��	�ǭ4��F�?�5>�Jƥ�0��A�zgٲAE=0߿cLq�>�U0O��Sd���ݜ�\������{yV����.\�Oͪ���B�s�i�fe����(�\w܅!׳ء��d`�����3pvMc�u
��4��U��"3�	����髺c�qk�g�9��<{�6g��WA�=\�_�G�|i�ZѶ|ѫ��k$ ���z8;\_,fy�bL��r��ұ���ɂ�zp��������|�4��Q� �v� �Xz��T�g�@��j�l��n�â�޻w?����������h�$�eE�a'ѿ����6�K��r"�K����8Jꂂ�㔞�j�k���/P������v�Cec���?��x/k�,̀�+�'W�x�on+[}��W;�t���s�H�t�E@�J�u���  �.��v�N�.A�y>�f�؝�&u�F���:���,w��0E5:_�t~h����ڶ��0	�!;5�~H��8��C=󁦋_Vj����m%�]�P��z'sJ(�[�[hJ9g�3�G}+&����\��;�"3��	 ͤ.K
B�@�|^�j���f����!
�%ȒC�~��BU8� �ɠ|h+I2���H��a�dnxٯ�:6��=� ]@�!�S�������׷�ϼ����-��hX��t��u�g Dw�װ�`�|�ck�/>kv���T�䎔������훅��̔�5�_�(( �zw�tx��_����[(P�>yN6���� �e���|�3:b�+d�ȶ�b���7���r��g%�K�a��K�)D1E������>A��E�Fa,��rXX	A	�f8T~`�DNV\�GN�!�>s�����N ���۾��H�|3d�u���BI�~�u  Qx���K#0#��^�m�<Rc��E�ט���h��xT;���樤����9�N�}z{;�֧���	���"}(�e�{*����(\Q�G���W� \���Q(�4B�&�ʁO��V�c��"�����]'8���V��$�1K���#�;��f8/&��JO��0U��'�Ǻ�y��K��M-� �?��]ܱ��#}��&o��^hȉT��J����T?�-x7a�F~6sGQ���{P���/��h�I겦`땞P�a*���e��6���U�e�%#�~.3y)`��jexy��+
����:Z�[ ncz�%��;�
������8�!��:a��Xvd�ˎ�x׻F��U�|ݖ��d�g��k8�3p�/��5Em��;O�=z����E���s]�*E����$5C���|:B�������Bp5�L�P�*n�D�U�:}(��U�т�Ռ2S|ˏZˮCD� �����=D���v�������D0���z5j���͝������)Su=g̓�^+
�E}�yzN�v���qJ��ɣ�N
�5�h��}�"h0��$p�R����U�N�1�G��p���'ͨA�!;}�ZtHew�/�Ym���'~�gMM��S'�߄�4�J�9���wb��}���j�`�8��8��� �i&������4�o+XY�۹�8f4&ԅ#�SR%;���Fgu�^ ��+E���ߒ���ow��#���(�Vm$ܥ�`><Fi���:�0nޢ�-h�b����=��JH�>?:0�R��`���'>li����a%�[M��q�&����}#%G��N�@�W��#Cf�gip���l��2KbB�� �7Ls緼 � |]/��?��py�D�q>�Oı�\v���(�a��7��ױ�e�DwF�"��P��9lyA��uU�u�&6��3�����������F�y�fZ֌�GARA��̮�}������})�����R��P�C	QӰM�Hm�'��H��Vw���l�A{6�a�����a��dkϫBHP&\ؠ؃��k�ز^�V
��z8_){Y�U�E�V��ۨ�"�d��������?��tq�ҏB����Κ~��9*���E�ɨ�1RhY�Eb�aT�Ԃ�gKwH�kl�?r9p�iR9J8y�M6}�-�T��W.��)$%�4���@�{���c.���.&{UiO*[D�0X��Sc?���zY]�D'��}�p��өыtC/9�$�=�@�'mD
�&�y�G��X	��Ѷ�V$���;�������Q�I+����o�6V�	D@��K�T��̥
�(LUvr��B����vH��^��C[��>�ץ����?k�$j�r�.y�`�Ǟ��o��z�V�=�aw���bԢJ�ВI���n�_Pq{�Lz�-z�5ṓaoolx\w{!��t�Ç��P�zW�3�S��%����ʾ*DQ�"���b�t��ي�נ���Ͱ�+'ӾG���5�r/���AKM�V,� �!��q%��������a���J�Ƀ	�J��@����v��[Ҁ/�"d���k	�]DC`b}	�C������M=ڸ�4�]�N�X	vҏ��褰�>���M0)�����~T��3�hR�����3M-a?<�������۵�����Y�h�N�h��v��ǡK�1t`,�F�8K��X����P>��
�>uK3F ���V>��=�#X�y�l� ƻ�Ѫ���*����dR�m^|���=�iz��#*z<�a�y:<�<ۓ���Z�D؇p�3��.=�o ُ,5P��4��12��b'�_І�xȃ�4塒^���MU?��2�k���qǼ���'0.^lS�����eV��nX�yB�����|E�s�(�7͙�]�S��D��׾.�A��~�`��YƇ�E��V�%�7Kqڮ�.��W$��X�X��Pl�b� ��s�fwU�5估����V��@G���	�r m+��������� ݳ���%|U���^V������=*�A�{[�"u� �����ֲ��s[Fb�vEI��ǵ��P���f\��2�)H$j)��I;˭�l���ER@����Ǖ*i�[�3��e�9Hǧ�WUI��B�.�<�X��"?sv9�z��z�e�K
��-.�dF=���5xt�k���f��?���I�6Z_�R@*��ޡ�b�!��dV���m�!ӻZԙ�*��($\�nK7p�'_l����n�ga7����Q��C�Z�bw}����q��k9�X&Aow��
����/�p�x$����%��i��;߾��������gT���;�h6�I�Ɣ��A�A�mP�7�� �2���9�!��	���]h׮�	�ݶy�L���҈.�����D�ϓ��Qv�T�����sk3���X��f0�lլYQ$��>m\+$X-�L��@�S�j�2�C�Y/�٧����P%.[v3�X[���7o��:�ٿ��0{���R��� ���	?�h/Qv�w���^����n��L���ZLQ�f1��ߐ3��ܤ���
�y�{=~;zb���-��u��N�5�d<ء	0LZ��"����x�눾nu�]�_��e'`;T�5�8ǯ���CW�L����m�Oҳ�����Ә��=G��A*�g%"%V�}|:��g����A��P-BVK�*�.%Jէ.E�0gm�`ŋ}�M��0�+�,�4){�c�h�#��q\� 'n ^>�ܼ �
v����ƥ <�u���.�<f����N��!s�2"Z,���ɥ�?���~2n�X)�(hEr���Psaĝ�85�P{��=\�C}����R�>���d�U֯��w�u�uU2܇	��a�v��{�?>���`�5Ѕ2�-\�6]Re��$�����^��kK^3��ն�ti{RL�g�� ����c��IXK���*+�eo�SU�ʣ�C/8u2p��Q��fЄ�mN>������������\�8��!�@{}�Q����.�q�SVۛ����0��J�%li�o|^�;��ǡ����������W+'�O�[    ���>{��=*T��� ������X:��I���V#�}K\$�1��9I�?��P���F��{����=� C�cb7�g��ow�m�/�X���<&yІ f@���u��s�	��y�0�C1��Xf`;Ż?�T
�*��n������NB�u��@6y�?�$���r]_��1]����%�d��tJf�'�9W�>��N�q6e�zl�&�7-N��jH���K\�����Xcu+fUuK��pN��x4'3��.e�t�QBR�
3�ޙ���E���U����.�Q���f"O�`���A��i����	�.]��n��`׶.��y��4���.��Ρv@���
>/МQ�+S���%�/k��Q�AR��p����u�t����%>K�pAX]G"���]��G�4C���W��^c�QO�S�Zx[��x�����'����4$���z(sZ��Ti�(�?�T&4­���fTl �������~��PG(mF!�}� �?�4����K���� �|�e��t�쫤`/@2,r�H�s���fR��|Sl�hd-WIoʉ��̽}�z��z������Y8�P
'�ٮdв�O?������7Y$]��*� � ��f1��)[�e)�Ms���	���"�<Fw�L��P4��ߛj���1[�T��l�@RQ?@��wh�#��BC����S����xE���`�h¥8��=Mhb��ĆQ��bI�<�3SJr�FBb0���>��o^�	�"N2&��pF'��
����s	[&̽�^�PԸz���/�MQ�?��N� |�R�U|[���K�H�a�0�J�Y�o+α�!�e_�B��>-'Gy���T�_��ͳ�f��=�}�%�cV5�� ��T�%�Mk��^N��`rB6<f��Ë�t��&$��`�=Y�$��&��j�c������6�N��o�t�pF�UI/-��I�O�	�;Xc�Q�,~�WᗒGz���G�z�'��Z0�[�"��P��'��NĆ; �(45�Xǎ��N:�f畺Z��x�gʥ��2�n�;-�,�G'�e��f;\3�� a �~��ݾ�_�ѣ_G�_$��k�)�i���Q�>HrA��=~Tx��"�{x!~n�ҍr��c��Oq�@-T��K�1~>��@���(�n��5��S�W�h�h�n}$��Cr����Pi�
m ��u���4�,�%5/9dbmy��s_�?����#��EL?�ׁ�=ܟtPÈ5��AHW��]_�{��U-ߣ}��h=����gr��(\�oL�]{��i°�`"��8L��^�\�R:"�%�^�2���=�.LĹ��4��_]�̱t��L2�M��h=�?_TmO�^����Ո����%�S/:x�c-�U���Q~���-�7=�]��}>r��nb�y:�h��C9�y�5E�1��P��UjvXl�ï�5�p�a0�:b��'�b�_4�2��K/�����B��XW�h�Zi�Z�h�tG�3�x��۰�c$���%C�����z ׵
O���2��͉�x6�`�(f�ox���nJ�W��|���4�;{�t��DMA@�ŽSY\U~ma[����o��D(�8���B�u9�x��'Yn��u��? b�57��:Н
M�9�B񙼵:N1m�`�j�@	J>�[��f��f�LJZ�L�!�	;�=:�����a�=�jS���*m�Q ���� p�,��?���X$!�S,j	5�A����=xޝ��b�t>����0nk��m7�f�"�0��3d�Vz�:��	�-�����T�������}�vpϻ���w�)�TF�:�.�g�=k�o�7�2S��U�Z5
5W��a�B ��(���D�����<I�e8\=Qsu��冓�?YM"Â#��E-U���Z!������D������D8���_'#d��� �ǍM!�."�Μp��N'���o�[TN���q�~�cϏ.!�T����$����i����?����i��ǔ��ԥW��G��5"���T�F�t����ő�W}�Coj�Xg.��cnG� +��b�P�}T� /�J�_6��J\��B�0��GQ��)[�{�_w;j�m��蒽V]�RxG7�(q�����$�Y�,�~c���V4���c�o�""y/��^��@��I���?0��*Uګ�����g ��k�2��ξ���_��|�2myK��]�`���*��Y��<��ݞ�'+�hFD3TWIY�.K;a��x�5�U�̩ԉNR�(���Qav8�����In(�����>�P�"8&ɶB���2��y������OW�l!UY��Xl+�<Y��n#@m�E���'�]RF�I�B�_P���>+��#����\�J�X��l�h����a�Γ���u���C���uM�26u�����狴b�!�q���O �ܞjцX-��xV�xȺ��
`�)�8Sd��N'���1������Ĩ��3���Z}��c��5E/j��}Mj�~�C'$*���M\�5^�����7V�К���np��)��Sq���Xt1QN�F9xHY���xm�ޞE�P4<���3p�)��
z��V��noxV��8�EB'�H�'|H��ں��.��Z��t�:������,��%,�l��X,mQ���쿅?$�c�۽A�geTj���̇&5o�3�WA=��"/���=^Y��;�(8V�]�"�|��7~uْ@�Іх��د������,�n��QR�C���� ��6y���ql����7�$D ����qk�K8��)�2Μ�sCQ��'_t����%Y���!�� L>�է-�u���\yO�Ks�uOKi�#/m�2��\u����10��RѢ�]WV??e����V�E�0���p�2[�-l�}��椏H�"��f�-��E��A��	;�\B��� ����g�%��&�S%�^�q��,J��B3-i��JDp�u6[�V���``�"k��Nsr�Cĸ��߾�O"��8���@�F{�)�i���\A4{�h��N��>
�Y��\#6�����F��n7Wj|�}���ͣ�'Ul���k:��.�.�=+p�׈<�wG�A�w���-؄�u8�A�vۯ%�J}W�����ʺH]��ꁫ�w��y�q?P�
,:i�r���ts���h�Y�jyQa��$u`��{�ܫ��~':��I�UrQR��`�=[Y��a�R�*0�+�&��xS�����v��k}k6���<��ݵ�C��uy�p�؇F�֡d�fX�&if0�B1w�E��(c򹺵�>��<n[�ՖH�)Ԛ���ԣFXD5�B�}7#?Ea�B��E�O$b= K��g�G�����.���o7��ZŰ��Vi�T���i5s��r|]�.�r
�ߧ�ᓔ����R�Kؒ��������Z6���X�7(j6�@pl[�l'�㫠5�޷�b��@���&�|�>˝t�&q�>���5=L�g� ȑ%�n�3��f�T���� ���ʐ��3�
� CC��Oz�̒� !2[��k��#�"�,��H��Ź����o��^�A|�HDg¤��3�loP��Ȁ[�1�F���*$�
�a[�a�G�	�D�2_��+���'�b�����"���^�v
$Y���,��.���������=� ö�q}�������/�q�=���W�M�k ��{�>�"��ҺW��L��� p�{���{��`�t�K|��Q��@�{�k&��H�?Y��Y�Q��{&xu(Z	���r ��m��������ެ������r�U�0<j�	��ܙ�OCa+>�d�&v̌����5ඩ%��:b~�J�_h��jz�Yz8��xu�b��>O.�� PƝ�0  �H��ܿ}�N��?nmuڋd�1��{�A�I?S0^��q���;OtAׁ���S
"��/�}�/(P����'1�à�J��ܯ�heI����'�e�W�Rn��k0    *GN�ʑ��<�uD~h���	��1���I(z�P����Û�"�g��}F�)*0���+�m��� ��j[�:xl����|h�n�؎XM�f�0PS�Ը�4�X�^E�=�����i,rFй�&�7�D�Vtڤ$�����?5��^n@�`�$ׂ��|Wd������u��R��_UI�M�K����]�[��Y���e������T�Ɓx=I0D�HI�ێub��fGP��^���u�X>�����I�y� �l=0f	kU/ݗ�x�0.�,�iZfcu���/���嘕���?��E���Ra`M���0e���{T�-�;	�
ofO��d1���_��a��>υ�=dP�	N;>�l9y����¯��@�LŉW��D�[��t�;��Y�͂��©ޭI��r�9�B˺`�`��>���2�,d�-g�jF`R��>V��6�$�q,��.�����?[�X�a""�<���]1�,R V�!���0rG�y��\����w��W�4� �����춏9�7졋/b[ە�*|��Bo��[Ć�.`�C�@�4�F�=��.ܳ+� J Q'gvQ��#���?j�z�0���h��������hޛC���\�l�����XE��D�۞�c����c�ub��!�x���I�L[�h�ɿG�3�Why���s��h���	%T�R��'�E�hj�K�9�"���ڪ�뇛���ޯM�cE~�O=$��2��=��wI˭�`�ī���>�����΢V�[f����;9�:OF���r�|�!�L�j�b�WX.G�_<�L�<q�k�ъ��1_U�s�|��WN""�#�n�^����3��c�������$@q�݂�0������vF_�Z�}��`bO`ɒb�7-�bo���y3u�Ʃ�7�ޡm6�]��Hv*��}?;� �z��A�	�����$y��c;@ �X�w���;b�����ᘹyl�p�u�ʸe�aAmDH����Og���.K�	������""��M^,C���1z�)�/P�YR[`�o�m�V���1���A=�b3����u;��w�# Ʌ�E�pQ�G��4�x�|�j���AAyR�CCGH��.jh���8ζ�y�2��ާ�2ò�N�*.�����ZǎsDI�B=��\n���v����l7���ӌEqz�ެn��O��(����^=!L6_�l*�����b��b���d	��������/s�s��^X���=ʯ橑�AU�=A���``r�8��k�g��~0&A�'�.�Z� �b��|mC)'��H��9<�^�y���Ae�dV=X��)Z�v{� ����C�����ڰ�~E&�@z�~�?Y��<�/a � =��<�SK,�*?&�6�U�ЮU�M�>�N-����l�`����^K�O����j:U�u|�� -3w!��\��_��7m�Z�Q�$.'F�e����^���oȃ�	��R*g./*��7|��]���86�:�	Z*>4�	K�uL��1����V z-�ϵ3!��Hw�'�n�V�*���T�[�a�n
u��֚?Sz��bˤ�ša����C�h�ɍҧ��폶9Z��� 6��f�ˣd�e!��s��>Ω�,DH��:�;/�I˗:�s��������H��I&be�Z?�|�4�W��(p̞��d�,�<]�P-�}��9�d�s��q�(X=��δ��ы�$��; ��/��c���	���MW;r�e oq��������5Ri���F�5�kK�t��6�|�2��g`��نM�ۻ7$^��1��s�#q�7��� �p�W�`7OyJ�w�F�\g2��V��zH�8�F�K�sl�Lu�0��|�f�ף����xh�(�[�^��l���z���P�X`��zk���������J?$�"㸌������5^���B�0Φ�u��p�Z�s=E�:������� T�L�nSo��9�� ��i�}>xX�o�B4cV>>aɤ�ޯK|.X���L'�!�hev�b�����UQs��!5���{��	��T@����Z��E���FF6Z��;�D���:�{iA�3�~ￜ� �6�ף#[�uԼN�p3��=ɒG�4|�v+�����D�lvWmY��c�.���_)��w��G��y�ámْ�G��L|<�%��������n.��9~�@�y��ս�S��pV��V`OY"dڊ��m����7�0�������`�;�����q��gf=��B��Z�� �!���e�d�������li��n�˕�#�Z�Q�%��i� <^��o�q�
�!V����ʔ�����-���7����_�oھ)�leL�Ǫ���2�,A�,A @0�v$}wV�����P�Y9�� �i�Ca��.2O������oȊ���-�	-��l��ɘ�]:�?� �6����a�	`�7@aa�<P�d4�cQ=���<6+Z�x�̂�TM
` ��9k��s��ג���V�;d�����C�-��y�Q��eo%���l���	�ӂ&��IOM�ແ��X�O�k�������{����,,[�I�حJ'?��{h�z��0�%���H�2�:�b�s����P_C�e��Y.�zw�q���0�&"��2�纘�_^�an����K{�B���[�$q�^�k��f*d7ڌޝ��X��^4TO���z��sEz2�d�~T���b�y�P=��;�$�B�,�|�ރ�	�c���i		U?+�sf�B1 ���Fi?a�g��H��͇����>k,��V5�ڡ��g]Q�#{�#���<���;�a��ױ�Ⱥ�ߓDWV��M��"*���e���o��{�^��������܀s�#�#h��,�\����#T���->���5�Uc.��J�8��q�*�gd3�G�j�p���Q}����!~��HN�2���� E�x��+�ʎs^�E^��$�U!����}��Y�c#`r2[9�'ب�������=L�`r�)�J\�O��Ԑ�K"�p�B!g���;7V�� @|��<b�6eb��[���H
�;I-%��j(���.��u�|�)����fV��'^$��3�^�f���M~H~
��:{��A�M�*�J��(V�%`�R �՘�u_{i��*A�v�6�woV���1��L�za/�B�1�[ׅ�f(��Ԡ�׵�ŚG6A���(=���ySOS���	P�NQ�
�
�C�-�WW�:�M$B0�������a�m"(*�����[���
�<�/�?��a��tB�g�D �#(���8�t�\�J� ڱ�roP|񈒋�{��n�o���|i����rQ.��D���
��ӞB5M��~�����Z�`���'�$���r�9�we?��|�N�%
���Z�s���B�~��y��n�@i�	��X@����1�& �A�8��-��O���3A�_]����ɠL�q�_��w���o���hݯ/F��-c����HAYX��S_�T��F�@�]no��k(�
��zB:,�`Z�	{ W��(����{P@�׏�o)�S#q�iAF59����O��-x��5 m�U��Ⱦh��,U�^���t$>C`��	J���R�@�����OdE~��p�U�`Wɴ#V�c�~���Jk��T9�qq[�eGw���n�IT��'+�4�'R.G6��IxQ���Y��Rvex��r�	�F���c4�1�5�`�DKo�ʣzӹR�ck�u9�
��I<��������� Y����V(H����d�� N4��$�8���l����q+�Zk�|'M-���?ca��������ק�����.jm4ue��Ɗ�Fg�Nik����-�,nv��,�����/�>!g��tK��H ����zp��9��Νi�A�#���xJ���\93��E �E�=�H���w$�زYlw܋��˿O�BK�}K�Q]��p��'�+1p,S]��O���*%�0N~��O�g�\�bD��j    ӣ|��p�	�)��W_!HG��R[�E©ȴ_ ٷzx���LF5��[�^!�D�"��k�1�g	d�lU+8_�<� [�=zQ����n��`�w:Taz*����1c��QN#���b�ط������T;��P�a�4!�h��|�����	~Cl3��rt{���IƩ%lY��%�25�؋d����Θ���2v�0є.�C��i�u���/6)���J���e��������c
g����qTe8��h����=����+�. ��QѪ�T��t��R���W�j���=�����X��������L�@��됩8�Z��ZJQ�����!�B��P0��g�����#B�_����,RJ�C(I{6��w*Y9�o`�N�,�v?^/g��P����&M�<�!�C�����~�L�Ж|x�`c�Zy2�
~(v#!������2�Y2�v���&m/_�20����Q�r��UG��W�����mEݍ���G?y�CI�̞��J^-�t��9���U������ΣGBz��H{��Fvdi�8�m����#Kb�X�"�R�.�ul�4[�p� I�m��y�}���L$����JR<P`Z�Z�@���zҿ�V�+����5��\�8��La��L�!���z�ο!*��1��.�V-�M����I��Iw�l�L)�n�nU�1��l*	����Ex�+,�����j/����:�c�Ŵ���[�YR[���8}{Q^ȋ�L�S�R���}��W�Rx7t�R�!�Ee��P[�tjf�%D|*���N������l���Dt���
H1���-[4m�x �GC�ZE3q�?��Ԍ7yƳA�nH�If3R��S�P��-�=�u��8		�<'$a��O�/TmG��(FꣶIi ��9��`)W�d�[��ܡ�a��d��b�B	|Ut���,�#���Q��J��z���}&���"8�%_�����d�95��uY%Ρ��ggO��H"���a�r��K���,j�ԆZEI�9���������	 (�64dJZP��,7�����|�d�Oc�!��6�Ї,(ߣ�RR_��g����h��p��J����� ���:~���.��}�H�Πέ����
�����t��bͳ�
���c���e(c����u�JP��'�Z�üta�̬��|,z-�i�(4l�ḲDx��GҢ�װ��#��^gR�֚Ӄ�1�ID��D)�q6&�V3����7lGC���)-�P�(������p=2��i�)O,�Ρ1Q���I���xR.�5���.�a����p=Zg@�PV0�=�=���\-��K�&�s3���|�c���bo���'ZܝK�q�=�j[M��83藡�������&�uOo�NϨ��~�����*��{+�pǍ �J�# ������Rn������Rf����ÛPa�K�_�j�7�����Ţ�_g�z=� Xx�6���9�*k�����J?�'�R�3^��s�g���]-���TiQ*[]-�d.%x�F=���� �e|��<k!���Cj���ꡈ�0�H,���3�Q���>6V}��4d�̳�qٔ��|�I�:�t�5vɸT�(����0*��3H����ZD��Jn��m��A���< Rz�K�p[r�֙L/�Xc��z�@�a'�J��V�>��(��w!���!q�]���YZ�� &�5|���M�0H;��K�֩��ëO��Q����Y�F��I{B�J�.js��Z�_1R��ͧu(��|���������ed���"��3�4��3��+���ByF�<6*��&���#R��3w�U�W o��[�Q�Ь!�8J�m�-�TL�gc �#�@lRi�,<{�$l͘}hvcq�W�����S�ɚ?��A������[뱛��$ٛ��ϐY������(�I��鼒����Sm(�J1L�[Yy[E���N\�/��b
��m��u
�������x���4UɎ�8���B��R0��q1*�L|�0e�y�8���~�L�Lz�1.}g��.ec��p7с��T�����l�vx�>�	����Ҭ[�_�a��L�њZ� (�(�X8�Dݿc��uB �;͆wʬ��E��w���Q�<^yV�<\YI&j較��o�F����L����%�ӑ��U���_����,&8MI�i�I�w��D˵r��Q��P��������bl���8� 	W�����n���:aFX�y�?!̪vU2&�1�|� �_�=Nŭ�q�z?%���6�<�e�N/ǋ�f�Ǐ�����L;"��F���;���P�DS3�`�AE��/�p�>+�B��I���Y�$y�_ߕ�K�0���0]����������DO��p�E���ɵ�� ���ņ�7�߰NК�iW1��w�G��c�#W�Qky�,���B�����c���U��D��Fœ��ΝER�������8�0�ה_Yƞu���-�*�R��M��,W@�6���y��TK������c�y]&0кD#0�!b؏t��]�<u�R`E�^lɻ�������6��Ј�H��P��G�0���R�`�]�/Y�l%u�Պ�8���K2�������e&y�����5 ���-�7�{k$���1�U�ºZ�����%�_�T����
��nL�J��_ �7�Lo\lցPd��&�9�A��c���P�ƙ��oZ&�E+z����� ���=�`f5H���Q��=D_�$�v�wz�u�w�m�3q�aij���#Z[�Lk1*�I|��"&�ڼ�ǖ�X�6��?Uw��+~߱L��\M+Heg�Y���;^�6��E���q��C���ү���Q��t�]��+d���g4;U�:�  ��/���������"(��e��)9�{BS�IٱAa���K��MR3�ag}|A��/9E���	z�ؑ4�|�",����� K-0� a���x���UP��PUy�&Kr�˻U%�%�/�6�10,d��I���EV%�A��a�����U���q����։�����d \I=����""��L�l�ӌY�(=�J	�wT���h@>�,Q�ᖝ�А�fUk,JA�V�Y�Kj������x�+�_@��:�Y�:c�
I��`>��쀠��Lz���
���*a2f�ͯ�ǡrm����\qK�7�#f�ck�C�v�J/2�3#p/���5���U�lQ���3k7���5»d��l5ʖ�2e����	ce�֬��\�g31j�l$|7�w:l��薣�)V*��?+�Rb� � �Ee\�A�-8'�,�ٳ�5�z���G0��1w ��L(f� ���d�H_���u�W��P|Kw�d��Mܒ5Aċ���n� ;p��1�o����Eġ�W�L�����ܯ��b�QJ4 1�	刁�r�n��\��[�	����Ok�{��5��ės��1�6CR F��=a*J�/oF^���M�������?��] Bd��;b��]ѽ�'�IEb�"�+��]�p�PK����2�1�TWT=��$j�ho���g4V�s�,��!?Z�35,�J#ͭ`�e��!Hq#��-�Zݠ�� �.p_�kv���
��7dy�F�&Y��n�g8?
*c��(op�tA��􁲁�i�URQ=X����Y�zf	a�c̙7�4��qi�!jU�0�����@]J�4�	](�UN�l�f%����c >�`d�azzF�������g�O�(�0�'Q�*N�>��"�^ID�`F����2f�#y>���?c�s�L�x9܂�mTi+`��o*�`AC'$�Z�n U�lܿ_4t�B��D
*�8���A����p��Z R&�+�~����������\�p
ꓛp5�<���k��5��2Wf��DE�C񀁒b��c�tu���C��ا�M�#b��.N��J�tIEl�������˃2[�cwc0z�m8e��R#Wq :�y*d,Ԟ�h�p���1    2�7��@�=��h�js3,��]��b��|1ŕ{�`;H�"&�S�I{��}CC�3�ˤ\�0���l�q<�b��Z���9��8<#N���z?����M��JP��T�F �^�La�U=����I5-��Td
��J���)�G0��Sí�sH.L��^t��w�]�	0����0I��9.�C{7�����s�BI!_���.A��vk{���h�,��e�H)��>�,�̳�@�Ix{���'����mB5��M��SU�╝������l���j�ݘr_��y9J��>\����41J4J]��Q�Z ��ТRm$Φ����9Q�
+
z4`���Ⱥ���&Q�\��<ْ���}��/߮�Wʣ`��d�A����#�;80x>�='��چFC�͋����p9=�\�#������R
��e	��Å�5;�_c�
�yjE�"_w�PJi6���.6�x!���4X�lEU�̯��q��!�pLm�X���ƒ�̚�.�*�.x�����׍
;q_ii%΂��s�b��xk�C�.��>��)�����!ƺt} ��7�\H�]8��,H���ॽ}��C���`�8��,��'�eC�(�"�&#�	�"�����"�Zc�c3d:����@���J��F���|�����c�i&B��՗W�;z���!^���T*D�+_����Wal8rY�^;�Q���,��U2�&�vY#�"m��b,� ξ��lR<�;,������^A���~�m6�C62�8��C�b�ru�O �K��#�.Bӹ(r�B`֌ܻ�m���^$d�o������譿�@��ش�6�_ּ��ë9����Ǘ��Gq~S���1���}���܍i�����@�-� D��W.Q�4ī��J[�H�J��o'�Q��k�����.b��"�|U!����x��ؒTVk�rqF��%f��m�� �A���`�:�_�o򒿏���&�KqCI���"f����Hի�P��>c5�"�*���h#�z�'�6� �H �1BFݚZe�Lc�X=��AJ�z������UZ�7���
`�0�G�����N�C�Y�"�ū,��Cr����O*��e�Vp(�Z������jwڭJ��85J�oMM ���Đ���g�����ޣR�����	�wH9��5��r�"H⾂�j;�8V�������OSF��"���Ec���Oܱ*$&��n���a� ����ɲHY�g��Uf��a �*f��Ԑ�PQ8�9ॠrxU��a���A��I�2$���}�7��9�v;�~�o�����$�䚀�u|��rLs�D�1p��q�oz;��Cª]My����ʁ]���4%`���G4KB�,��	7~���N�~!i�]F:1u���ƪ$�c�=bg���Qa��w�������)�?�r��>2g�G��졏l�y��ꦹ��o��3nb�d��*�j���%lpk����(W��&�+�@#���
�~ڜ^��&�	�6W\%�K��:�Uo�
����� ��(�%]!�i-Qs�-��z����
_��C��p�r҈������3����ބ:�Y�e M}�Jd�An�û���Nm��ĜD2�p��	������MI�:�S0ӆ���b�q�Q�[���oP�>��y�v�
�J�P#�b/�L�>���Ÿ"b��`�<<��?d�Z1��TB���+��F�d�x��ãnu�����ؤf���+�z�i�re)�7�7�e�yB<��s �k�p�4�&˶L�-�;<T�-s��t̨�G����[S�?���=�+�d���H���G�w��D��:���!��͞1Vd��~��ia��o韲����z�PC��Y�Q��2�>� ����_��F�n��x�e�̄�0�5�rEQ�:��_:W�Ϛ�څ��%�D+��í�����f�1�!g4�H������V�,\d�j�>�~�t6���=Z�s)�G�i(�؊�pgƍ�?��6����b��
]k��.���F�'� ����Q�im���f�B'Vծ�VF�{>d�$R��!TȷF��Ї�pX�Kq(���Q,�u�n`��RU� ����[�8+�h���q�8�j�L���ӖR@�ۭv��R��u�W{ˮP�f��$����ug��yݨ�q}�Uzӆ�����4 �]�]�t��I捎��ls�tVk�ՐP���P}BacѴ�&�M��ꍧ�B������\ܜ�d@ZnH�t��:��rQjU���s�����=��p����H�Sޡ�و��؆l#nTu+J��bj��N��?[<�܃(��N�:D���:� �m�~Uƴ��Ca"�ճ��B���a٥9�G�����M�-��:�m���v��r�����Q�A]n����%��9�N���_EG�0��&�F����[���o��f�.;W.0��DA�hWI$*h.ƿǽ��Za(+��2�%vNLw��'5X��I��XQ���X�Qm;��C+m�tY�Hzbz��lǁ�ڊ͕�˴e�$��nt1��0Y	���j���Qa��>��ZnO��+����a���O,%!s��{H�N�fN�кӌk+bFY.��!3�o��� E7[><�!��IHaI�?^	mU2�2�\��=�y0t���شF	���?&[cE~����s�5[@�aA@sЭ�-"@ �n��4dݤSi���������e]s�X?p�9��+lUB���@C����|F6�V���V�H9������N���T�j(Y�O9o6���=%u�קv���)h���o%s��k�&��bCW���n�w�Y7�����33����#h��h�)��<HV�R9��x5Z+9*8+#)^L.(�Dƃr�}y��ȹ���8�X;����?�������d\k���ȣ�&��w������@��-�,�F{Y��I�̓5�2W�*;5n��m����fm�����͏��6y�hɣ����9�6���BG�Ԉ|�%��^�:h@���&�+�'�S����`bC0�����7J�se��)�T�JG]̡ύĻ&s`t���� �&C �Vڨ��)0,b���x�� �e:\�~�ˎ��M�,����U�7�L��V��23a�9U�z�$0��s�%4���Ջ�F�y���I�.5�[#�����=�6��l�d�V୉A�<,>��c���G�.������<p�)%�&$x;||�H�yܴ���0�dD���/>hY�ӫͼX?�������< �#h�=�~�T[���'LbH<�WPMuR�M���J8�aj��:红,�a�?Z���ђG������
`u߽!D���rUT�o��׽�h9��_{Y��x,䀀���&�l���P�[#�t}���!�7�Q��;��yفf�M	����t�;�������z���7�*|�E��y�O/ЀF �=�F#&�[C��p����-D�~p��j�O�����UL�'S6�'�w5�;���_��������!f>BP�!Xj����U9Ů�2��n�b��8�l�8(�VkW�e�[���q��}���J&U��	Y�%�P�|���Kw�"����� �u����M�y���y���.�ߎ��iJ�W�F~G�@(��_�|<7H#��{TY0��4����L��(������I.���+�[I�\kkka@H��g�KŘ�~�+s:���,%���r�,�M�Ͼ��v�a�iySs�ϙ�**����U�*�D�^X��=�qe�0IOr�{�1(ʵi�9��O�����g#+i��y�7�]��@B3m���=E
#�g7�}��>�����y�DD5���#��82���t��jg�'v��F�!���f����#���n5d`9�-ٛzC}� Ei��H���~��vϣ^4Lf�0���8��	C1���zu5N(c��3��@����va^\]�k�s�`p8(�    XL�胤�U�����g}��>F��N��N���ED���t�.�|��?����>d��c?�@�}����O�*L�nc�5�O X�������X����1��NԬ�� ��Ж++���wR��B�[�/�E#Pg�s��<쵨�|�0ZԦ� C�aA`?�&ԟAc|Y���Vt5��v5F��m�����ؓ�����É��4k7E� �Z(��i���vU/-l�(1ھߞ�u٠��חU�%�߳���M�oh��+e��q�/��r	��EEA�*D0��	����l�H�y��ap9�P����cl�̽`<�'��]$�DD���e��q�Vk�1KZRSK *!N��������~ q�o+��(X%�z�W^.�_(���VP'��!�^��[È��T��-B�R�l�,�k����+����/�]��8�K�:�28w��7��P�]f9漵�d�����ݳaw3�b��K�A�rF�c(.��&ۨ��|T~VziT kTC�U��n�5��N�����1�Ѣ���C�E�s�~�,k6��'�c{j{��щ��b�5.�͐�Ňc���L�#�'Q�%��ΉPan��Wj�jѕ$��^<N�2H�	3�����?w����WU�2���c �i��w��Sv�ؚ�}��*Z�G�|UB��ߕ| D{��5&$kTZ:.)��KA�_9�:��KW�p���VFP|�5H�׭�8
`ސ9m�b-�k�&���]�	s��		b��V+�|g��?���E�c���b��$ٰ����* N5V�w0��A��Ӵ ^��NP'��*�����&��Է$�??_r��Dc�ɉr���+��ŏ�K�ؘ5+ �0����g:לyzm�+;;=�
��G�o&��N��h�ˀQs.6�!�"�
�z�0�j?������ý��W�>�d^$�Q�tT�4[���#8�Wnzш��7��P�ʢpޢ(�����
��i��bØ�{0R\��*�wʀa�|��2��cKw�} xU-r�9��]� �U������|l�
ӭ�	��Vȟ�]����>:��g�j(����^j�@�H��K�-WEI�w�Ģ�� 5�ؠ4q�[$��L��_N�З�? ����m*���@b1���#)���e����ͪ�.։�g�OHL8e%g/\��ie���r�Yñ�6�=m�N���ন\�Y+���8���Te��?O�����tsw=�I4"�q�~H��,��m,�B%�sQg��Bor��"Y�0��F�6̍�t�aP3�	�b}��
Ħ��;� "�YI��52A�3��Sg��,ʴlc��]|Z�����%O���ڣ��5��g͘��Mi? �d���8��Q�&)�R-o��nA�H휹�T�;S
�e]��rF3���ȉ�A��<��� ��f=Q�v^�T��,a�>W�v�"$.͢?ʙu��S�E�o�_���cgE	�mk�����'P�^����!m�?Xlfk��W�^e�=5N���TG��/oq�3��$�}�C���p>W\$�?���@Åbow�[}���HNR^{ąH*0����h:���-3�)��J�`%E��n\�3�&/�`�{&���?q6C�4�aK����4�T�md62a2�h#>�T���V�Qt2��(g ����Bl�\Zb��ŷ=Y�����B�x.%��Q~E,�7�(��O�������e�b�`����V�rd�ė��|;���������^e ���N�k�
����zL,g]�����3��)��,\!
o��2$_����c;�NGc����C"{0- =��ګ:��J����R�!���6�VeG���&�Y����R�t��Z�Y����A�`i�i��N�k��&];PZx��he�0qϫ[q��������Ѷ�dM0�g��g�G��Sy���ЗV�TR%�m;$�#���P�.�� 4qH����I-������A�P�s�P�*�ko�Ile�D`�
��<�i �"ڍ�]\�s��m ϊ�oYy%�Z�l��R�����r� �ޙ��n%���d�'��
Ѐ���R��Oj�����8�ni�i[�-�j	��[ݴ�ڦ���HK�)�B��s6���8��g0�@ʐШ���j;Xr�!.h�&+w��"w�3% �F��z<�6�U���=�Cn�T%V�F���]b�����*�G���;L�T25"�F�k6�tL �'�����9��)>6=�Ȟ����9`mߍE��v%��r�4Bn�;��\���割8lJ��H���-	��)pa- ��y����y�+�5VǉO{r��ң�&u"���Ȫ, u�eY��⯽�wAm������,x�V��g��Iok�x�}BG,�]�;g�����wi� �Kc��u��Яm��(�MX]�$�J���Mtʩ�~��<Z:	PZ�e���os�w��Ǭ�ٶ�fi���(nZ���Ā7���yp����FV�١��4�3��f�5�{�:�Dtk�G�������]L? �m� ��̕�p�2���M+��i@��d�Wr)^jj� m��8�h�%�,V�h3ef�Rk���f:����	���Ss�햗�J�66�c/�^������/Zpn�����AU���D^Mca@\�>M�։�Tm�n��n��5�Y�-P�2�K՞��<$[p���R�ؔ��m�&�h�P�&R|�?��k��`�X�9Ti�E|�s}!_V�'��UI���I:���t4���I��Qs ��֨
(���?���GL�de!\�(�b�������^�uA�J�&�H/I}x(�<�ת!��ѡ꼩��$��6�H�6����^ݻ�Ey�҃y?6}|]獪�Wx�P��y���,�r�R_����&���7 vT7NhD]7h7�.�m*z.;B�.:�VH�4�y�l��w0T�ج.h.k_z!pN�@�
�~�n;/1?�������^Z��~��ay0th�)PѪ��A���4l,*�@�j�v=�2��Fi�٭�ſ��e��֪Cӯ�m(Lc3/������2oI)y�A���ht���p3ۨC���Č�� �{̓���k��a��"ͤʯ�ɯ �j͏��o�@�*y$��BZ��l�0��({� ���Y��Bi�O~�	
վ��y!�O��4?1x�8�h�}Ḷ��`�ڕ�0am-c�{��Hy����aC&D��%;A��d�������;h~W��E	�g� ��$�rW��n��jJ�h@ W5�,:���x
^Fyk�d�jU|4�c)S~f����+7-ٍ%v�2��_dr1uU_T�q���y �{���9�ƀ��9�ZH�vo�G�Y��F��<�h��\����O��Y7y�YG�x� B�	��7CX��ꏜV1wnB@Q(��Yn�SXgY���W9AK�MP�d�� �J��F>�o�Hu�GO�e��(�uڿ륎�*>���rq��ս������'���)"��3K�G����\\�A��5ʪ������N!Te���i��F��{[�6��V3X}�@Vkyr<��&ҁi��/�ĸ�GY9Ɩ�w��K�S3_��PL.�2)��ӓz{��;&s�\�a��E,���=�:�� ��2u[���>�+덿�r0C~��5��y �h����o�� 
|�8j���u��VwC�����L���g���cʏV-.B�^<��b9+5o��ɺq6�q�9IX&su��Kz��^6�z�\��Sybw�ģrT��U�(x�w{5� ���f�D���� G5�3�/�݈>5Idlz�̑�$(ǽ��pK%��V�X�lۺ<��<J{sQ�,MP4��>�ࢱ\#���ݷ �v�<�Б,RC����d�l���cA�����-ۚ���0 -�&�,�/����� �`�l=\ތF5#�ɹ�T�U��RJ�vz�i;��첋?!���O�U�j�o�h�1鏡{��*��#�Z��`ݕ��}����    i�>5���l!>��x������?#��ːW����㳫vn����s�n��{,U��y��@S��t �9�'f�1`�X��>��t*��رr��F�!�p��u
���D�� �e2�O��O��8F�*y�~�P����:�z{k�d��Z'jkil�Fe��?�iw�j3=5�(	�^~��!�����%���f�S�k��?s�oMa~b?2FDJCV�fe֖DqD\��+�B��͛)E��:�3xOI��n3�R�UI��b�+!<�A'L��۲��󏋱?N<�@�� X�V��:*D�L�-��_L_�M����}'l��r�/L���3�;-(=�������x6\�=��r��D�6�1a]k~"��R-@ȂI�j�ÌR7G�l��� !��U8gJ<��g������_�Z�����-*k�-����:���������ւ�-|�����|�j �0�I��O1����f��b���	ft��9��\�m�n�7�͑�H\�����H��*u7�T�؟RQ$��=lp 	b�V Br�V�ѭ�!��_����ج�2�鳣d����i���[�'��f�G�IIz�d�S��5^��h����B]$�	V��6�ʄ�aDF�)�_s%D4�忳"�c��!D�� �@�[sx��{�O2l�LRٙQЎr��k�h���vk�QT͏[l�%w�{�!��S��%D4����f�6�Ja���:��`���ytZ����\S63
�e���rx����00Ҵ�����k��x;{F�Z�������εg[
gL�3#�Ln�������b ��,D�ze�"��� ���p3GvYs�\4�@��9&b�l����]�Zǐ���oWTK�]+�jn=#��?:k-Kk|�/�]2wS����}<qX���^�^euj�h#��?u<}m��ci�1h	�3����m7"9M�Ǟ���Y��>ߥ���g�����c��L& m�P�� �3@ƒ�Mmu~�ɇ����;���X�"�r�>���m;[yY�-��$��25��G�㣏�R�}KRu^�����V(z���k��k��6�s�(�k�v�[��ܦ��ĺO�6���O�^/ETr��5��k���I%^_�b��~@����Q���PG�;��+v]sHwfwT0�'�T�s��O��O�<���,��#��Q�u.&A�c�qک����u��Ab��Vh���-�xuc��¡������$Q���g������r�e��l�qeAQ[��� ����D�x"$�������'U� Z`���eΌS�kQA�R˥���G�� ��T�3��F�>^�
�>�V�_3�x��l�z��p�^���k��IQ<.ymw��ME�X�!z����gT��܊�j�w:	$ٝ������;NՌ&bq���y���X8�}�	i�9�ʭ���#n�H��%��Ӛp帘� �x���v	���]o�?�\%����|�rt�㷖�*WV�����;_�>pw��0�ԧe{}i���y�lK�٦�x�Q^B/�C��N!<~����Y[��~����>\�J?5����j�M����s֮5�d���hV�C�zvȯ߿�?��壭ҩ�4
��� �?E�i�����%{vN�P(q�>����V���r��蚸��l_6fة��@��k��9/� z<ͽv�=��SQ���y�U���89��q�}Ep$�+�����f�G��!��A�H�r��qy9�O�)�I,�
���ʙ��Kv�~<o��L%�j�%��ܮD��Ǯ,����f�g+�L���"=:��PLPR�<��Z������i����&��%�*�����t�2m�*t+�K���A]����F���<���>�	��z��s#�b c�Z�-�#�w�?�í:�֨���-�/��ފ縷��j����^���1�7�Z��{��76�l�D~�<C N�����mo�����|�S�D�*���{�����f���f_W����;�'�Y�h� �gȹu�*2N��h�c��UK&��>7�=�Q�`�jp3 n�34*��0^2�N�ć���N�Y��ß��r�U�ql?6`�M�a������I:{³>O���n�w$��'5r�2�z�ZYs'q_V\4��߽ g�:f(�j���q��x��鼐�"m�Bc1a-�j��Ic�D
�#ï!��%����c�У�&������h5��1���٬��B��C�_�`��1��ܺGJ���:Ur �6\C��k<��W�7Ȗ�������R�ِ��_��v�����"�io�+�:�.�_�)����ol���U��y�nl��<XI�w�e�6ze�é��V<��O/]�@gx �ط^V�����o�m�v����f��O �-��?ю*4 ����%�k�kv�? wQ�B���H������ *���o��4�r捥8k�/���s�
�쇶G�>v��9F= �ѹ��B�e�Ԗ��߹�N��_��\�"ח� �%�ܸ}��#�f��������3�]�.�Jhz�z& �O��I��j�[G��K'7��6�`jS�}�W��y֪2���l%&����m�.���g���dխ�'K�@r7�.Yfۘ���`���Ki'�g�^[4��g�����tr�\īߩѤ괧"�����s��z���R,�2qB��V��{:n`ɭ{E�{`�x���S0X��I�^�I��Cr2e�TV!�^���"�'�����qi�֦�'�@���kz��d����&��"�6��J������y3����{�,T�H费=-Wv�}G(>���	L���;m1�P�6��7��Ѡ|w��H�qB��X�� 3��NSz��h�["  ���t;"ܺwȃ$���剅��-��P�E�iW����.��'�h�}��B)�t}mR��b.�?�ML���%�ƌZ�u��{b��x��kq&ь�%p���R\V`�l����#�V��:|l�ܶ�D,|��3�gx�@��f��XJG&�ͅ��ɐl4�~���!e�C�8R��&�����9�̊���n%P������*�2C��o-�/d�Ө:=;}�Cl�BY먄 U��L����q蠷F;��\}/cDL:&��N�9��IFp��C�,�u��U�y��x�a�U�Im�b�N��7�I\��u<Tۣl)���LnU���}˲�dP��#彀�}�W`z��OOg�8�Ka0������)�����iؑ�.}��
��Ua�C٬oĪ'��!���ܐ���Rn�G�^�N�:VY�u�����/�8����Mkk=A��3���HBc��w|U�77����P�@�	;eX�4��ץ��Y��Ye�l��tn;؎t6J��m���� �!!�A 0IHʐ�4N۰�褀e+�m���P�(nzٟ��Ϋ������-P�13��h�r$���n��U�=��@#�e��.4�.&&��5���ߦ|"��o\��q��
ZJ���t�q6�"� 2+i�$!�4{��,߬@|TB)�e�gQ ����E�� � ߑr����F���Px6vɅt�]�����_6��c4� sF	,&��w�B�pPMb�A�k 6�X�-��/Q�l���6H8�Nf�Z�C_K���e��+�%�;�_��c�\�$��5��0~�s���W�kQ���N��lR��վ(^5�-�SY�3&��4���K��I�����:c:}��س��|95��N:V/�Cc�o9�sɖs �
���b#Ϥ1�'���m�`��`!K����x�F X4�X���@��|�����۠�!��j�������5x�rrX2x�&C@�V<�DG��G�ӵ&�]|�w�W*a��i��彲�=�䏟B��A�P�oGC��68������a3�eϟ߼�����r�l�Ustk��ݬ�xRםK��J� ����u�4y2*�+��tX��p?�Е����Շ�������z}�HIZ�W���ܕ�    
�.��㦖�,DFA����Kpk:���?7�(���l=�"ap��(-��k��HJ���C1T��8К�6|��$v���|�~=4�O���wj�3ط��{#-�!Tƙ�F���e{�6��f2o��L��S�:f"�r{Q����$���
6����׸�ނ�FN�	0`��<��TU�E.��T ���_Q���_r�:��dCF�	 ��7�1�r���u���A��EQH�(Q?�L���������ι�F���PZ�ށ�FnR�zzV�"��#����7	���vϘԃ?�s�����$	�ٯëjQ�Mrn����	�����`s�"���#9��$�cQ���%����U$H��P�8�w�qn�~�zbr��|9�5Ұը0�F�(������ta�ݲ*45��˲[���p�!�o��G*򒌙��E
�n����ث�2LЗA��r!?K�$K�t�g�K�+�ύ���O~��\���3q�c�w]2�Id�z��C�a��!����y���cS]F��<?��m�jD�� ���o���E7�G��j�,�������	����M��n�t�?�+kH�'+z� �k6�B�Ζj�h�X!���+�I*�{��ƃCN�yu�1^�"Lybәj־
�-�dպ�������b:�rLO��:�
�A֕�\��z�|?n
c�;�5���R��o3������`�
(�i�D���l�c��z��D-?5����n���\e��~VF�<�0���}Z� r�'Kq�% ܭ���]�������H�6+#`>y=��9��W��"�o>Nm},d�;?� 6K�˳�� ����+h	(|o=f-(�,J�F�=���l�?.c�9[c٭y~bq��-�RQ�c5C?c�g�ٵ��8����,Y�)<X(�Ò)��e��Ka���q�Ne�D^Ǜl����/'�\^(�i̢�����Jÿ�4�uە��nU�s74i�ɉzȑ��Y�7�ٮ�vh]�3r-���))�}�?o��[�>�x�m�J�XH�C��=w@vh�k�+��B��$�J���ʟX}�s�N���6�(_3�kF��EK�n� z>;m�I3;n�$���1��,��1��im{D�7+�Zǣc�H����J���l��$�#	����n��A[6�6��%�i��s̱�>�f@�R\��z���66"���p��|h���~f��	G��ŬθR�J��e�a��hX�wWXQ��υdtU�q�w���*����@NU����/9��+[6�������8U+�;�T\�W�� ����x��!���a���U.t��b�Rwz_a�l�'e,F����0|��`�@�O:�V �_A_ 3�J{6�Ë�9�펩Mf���X7�
��A��m���![]{(1�<������q ~!VV�'����`n�j[p3�μ�}���=�qsc:0���V�%p=�A����o�]��/_:�Ԉ�J�+YQ4d�6r*[,�U��%0¿L1��	|L[%�;~?�h:M=����0@��q_�a:�z2o47�n��K��ٛ����~!)
^i��9��7L�5_>unE�k.�/H�vz\����s;������k�@��)殪�{$��8ye(���;�goϱ�`��'"�i�`e��s�Ǭe��E����|eP���J�N!���Ԅ��3-���G����p�=k�W���T�|� N�S�F|���c����?̙��{�
4�'�L�l�u`��]3�Q���z+F�-+�LiA��_0�����]5Z�U�
`7>\�������
�z}1ds@?��86�Qx��2���~u�᯵�ջ<D¢r`�j�V� ���� �e��˓�H��2D�<\+q�83��-z7s�E�ZL���|k� ��Τ���`~�Y����Y��2���ʥ��&�x���.�6@�,��t�4l�]S�|GV�%��J����)�!鈲&X�����콎З�6��^9��w������$y]�q8��r¡a����m�$��a"j��(Ȫ�nC/�^ڪ �jQ�w
�x����P��,�;�/�8 c�((ْL��͑�P��v�!/���3q�x}�h5U^"���P0�n�O����"�� �y���E�j#QҮ�����Lb0Ca�͸@'>��_�;ڼ�-B��5����ݣj��L<��l�7�!m?,��s�A����֎��A��~GBZߢ3��1�yc?ֱf��WB>nu�8Ӎf��=�N�Θs� �Ьlc�+�@�ո�Q����É��}�W�kb[+�CI6z�G���C��P$��%����Hު��{Z��Y�䲁_��?Z��IZ���ӓ!T�#�����<��S.P����Js���?�1��	)�割f ]܍���� �𹘸��-7(��� 9�ʞ,�Y�%b�=�C��+�������00���wG�2�+���у�>�������d&C}��):p��O[�2%:�fr:���-�M�c	mҊ��h�� %/�n�u�P�Ƨ#��o�x}앞�n��_�l�f�l�/�D!ב�_�`
x��gO1�kɑ>���L�&��OSJz���M�4&�����u���IJ-�4ʸR�p@N�Q}u�/���q��4n1��ɍ#���k��?Q{���8/c��#�0t�a��6��V�[)��xb֑�#sR	M.�9�4�X�;�lM���hٝ��
�W���0�>���8��#B��4����2��<?}$u�S�X�o�G4����:m�s��v	��3\n?������}��I�]�8W�uB�����9隉�=�jT��@Z�"n����y��E��Τ#�,��-�~�/�Nu�
������^
Y�X�7EΛN�6�w�)�7:��r��h���q�n���'݆�dw!�� ¼N��D2��w�?�d֕�����K1'&�<�J�%ʥB�����dl��bly૖�^|���7��g�̞��pc`��>\����T�tk�k �����)}z�T����bb�u���t0"oȤi�k(t~Nb0W�7~S[�e_04_L�L��L�c
���E���7W��O,�щ�"�:�|�Qy>����=V�AQzD�8�����l��3k㶷���$@�+��C�����>����A����[!-N�����x��5���Qh �A;D�'����
�1�6Q�+�C��Ƅ��@�A�I�e��&2�-���'ne�����p��B9X���D�V���0��|�?|�����s4�i����?��_�����x:��� ��h�
R��d���Joٓ���x��CΞ��K��_K�:��C�x�H�^f%$�w���:�k�+Ӗs�)"�-���~K�9�I����8	r�ə�R�@k7I�4�8��p3�n����� �<�N?,�_>��j��A��9��G5̏j���u��y�r���N�X���8��Nڟ7�������*����4Ӧ�{�������\�6�\Fދ��u���|��#�Et����@6DP��/����?����ɗq�2b�LG���gf]*����r)��x���eN.m��_`K��c��)�������Y|zmx��S�I	4y�d��DӸU���6�Bc���Z���O��_�)MVX�]V3W�ͷ���y=�z�M#�����r�����1���3�hbh�u��IA���}�Lﳐg��$�k�o����*E�2��KÀ(XF�d����]�~�ڪ�	��?
@M4��pƸ�������JM:9�=�P�S��	E�?�K�r���`\TՊm��ŖP���7�m�>r�4Zm��Y0���T]�7�|F�p� ���a���~�{C�����*MYt6tQ���w\��Y��	#�4�Y�e7���x� nX\�)-��p&��/����!�W�h�$Zw�ڲ1hQC[d5�dCx_/���($b&�G:+����ZX�0o�r��d�4��?�G�����׶���P    I*H�`&�c��@�>�?_�:���4:r7G	�mM�̈́+�?!s��N/nT����$�s"x����F<��7�ٕm��)�."D��ѡ�4�<��)}?�ﰷʬ���&��'��GVB��EL����o�V��N�:C/�ͧ��ɤP񩠖�������8nqV|�����������7�	D��;'K �x��a���������j�_65/��ZtX�e���`�.Yi�wIX�pJ>B��+)�6��l��t�^��_ӻO+X-�MP�
D#:"���M�Uٚ5TY�j��B�&A�
X����.���V-����A��#4�l�� ���z��M\�*4�2�FQv48��\�V#Js��Y���i��x�/���>��8�
��	�O�vؿ�u����.���얯|�<ˀ-Q`/��[r|�(�E�֢��j:�0J;�}�;P|gDK�kNe}��1�\�ՠ��m�%�'ԭ���d��ZT�<���8��C����40�����Jג=3S~�ޏ��KA�)l ��� :�I����^��Yn+u
����u�6����4�|/-�I$�ʬ(}1��Jg�W��:�Km�I��0:�4��©�0�������Ĳ�  �L��9�t)iM�I =��kB��S��N�M�_���I�^r�_�����7�H.��\�y]���/�gq�M��g=Uv�����s�G:��ܞ�k�t;�^�����7k��x�o�VA��L�!�D������\"��eZ?=2���c�
�����P�n��~'H6�JD���ղ��4��bS�����=�H!�,�2Mnw�d��""��4��}�!"�:m3?|�dƆ�\��6�y�~�ғ�q�	�/�z��]7k$�s�yތ���A��Bj��)������$�=�����:O\��GRԋ�@�^�>��.@v5�L�E��x$46K���9�q�, ]^�z�Z �~���¨g��TH��8�1�}'�!�/f���R䆨ļ��B��􇴗�V��<c2'��gL��ZO)D��'��n".q���T'X6?~l��5�������UbL
Ϗl4�^���6�U��`��%�>��E�~�,����̖L�C�'��"�����-�R�Ybˠ8TQ�BjW�����5v�
���J�|6�3��n���ކu��2�ɤ?�=fD(~'��}õԋya% ��� HX"
Ոod�oc�{=|�|�`	�)�*A�K!�����z�AW�D��I;��1��5�,(���>�b
��;6�Smho`���ک�&��Q��X����"���"�k8���QU���s�Q�r��4�k���Ļ@�r���;93>�4�������eȑ:�i��ʺ9�'�KGZ?���T��D���H�bb���_?����֙�����L|��[D���_���ԫ�O��9�55��D�'u
�s�-�)[J�����6��L.ͭN�	���5Ϲ�T"v�G��C��oY!*��B�\>u"�[7 *H�����XՐ�����pm�blc����{�"�75��_{�ʔ�D9�����%���]o�+�:��[�����p�L���N��O�(R9�r�p1��b��"ڌ_�Cd��\Ij�T���Ľ�m�p�3���$B�L�6	O�A��|ʪ�1Bq���;{�^t��W��u���.���BG�gXN�Y�p�ڐEI�scLMU݉�������Ø�zp��X��J������Q�Y¾��c��0�	���v(�NԐd\J$5CE{#t�8r�jbq�d�r9~_�*�� ,�e�$r)+7H�����8�F�ʎDb�5&�t��+�]힡m*��/?_;���a����o�v?p��lg���lgP�X�
�"�v�H(y|����΅W.�:
��Vt�ެ?x:~ޜ�� hF��\�wymHI=�9 �ކxɨ�N+�??Ѵz9����f��1��F��W���d�ǒ7�+4)��,ճ%/�T��-������al	��܊����ޢN]�lL�y}�"�N�E�y�r��q,�ECki
�1u*mP�wPyѴqS��^)��	��ȏ���uaf,.���쀊���
��/ھX�L�̇O[�qh��]�'s#����V8�+�.��y>a�7�0[eQG^��&E�|O6�ä�Fg����oҺ�
�4�$h����,��4��K(d&�u�d-6��0Tk-TT�P��$��g�}��������D�M��2N�LT�>~\�X�C� ���Ŕ?�v�l`��l��B[{QiQ~rS��%����?^���i����>������4��Ơ|h=�2Od�u,CE�-�ǿ���nl�u��dn�?�s[�}|�5�m��%N�<acE�0sƌH2��g�K���V���Y|g噛Vvƴ6'�}�%���z)V��O�D�W'5�����Z`��zG�ɳF�	�u�|�XxMσ1큦���3��	ʗ7���&{l5'���B쳬�������w�\���0��cr�L�E>����|�Qd~De��:~m�قش��C��gvA���h��(işA+��j�O�f�����՘g�p$3�<� ��%d&H�e����W7��b�d%���>�td���;_��ŽP��g������7�;3�:]ީ�^�(X`:/�Td�Gzސ֝����9�nkQ��f�$�{��ӄ\�$ �ʋ���Ori˖�ѽ�Ζ���� �rMp�@�T�?C|���\`�O1�"<W�e��jB�\�����p2������c�i�Oh^�Q����:��Yʶ��^��6��u;��%xR&�@^�����޿����_���1���L��g-.E|H-��Q��@|=|T�r�ޔ%׹H�'_C��m#�Y���2k�u���ZD�t֎=��e,�+�j�/�r}X����w��/%#��gUV��$�L�>P6~��w�=�N�G�m�F��}I�~x�I�t�xA��X ���:�ȏ��ﵸ��hT���]"ǁ
�J_�����@�ũ��V��%`���M�+�Y�2��W�SZ�}�"���&,�Tl���^�iR�_,h��;�!OR>𰠻�yME�r`8�lX9��̧e���5��@KY��H���g��;��i��Eu��`	�H��r2 @���m�H��C^CV�K��_[�g�>n�:IF��;�߮��a��h��,�����������K�V��9�,3�\s���c���9""
��u]�I ��<����NǬ#������qd�H���'��0�,T�O$�kˠ��h5jj��˰�NkVm<���\��Q$X��p�ss]Y��/輠�}h�W�נv�r5b�	}a٬�A<v}!�p����Ș���z�����uGL|9��O�Ѩ���5j���J�(�Ub�|�J(~J���Б�'��Z+п�����^5���@��7�,������:{Sd�o�&�+���7�v�HVp4D};ۆ��bS���-z3F�߱L �>!O��]��:����,�YS�� ���᜕�h�Buκm$~�j?���BT�L��l�/h�ʲc� Ϗ��Ħ�ro���Y��Q b����k��ahm�����Ih0_+�*���m2�b�L����uw'���nO�� �[��3��m�@Wx�o��>��5�F]�Y}�����^����t�����-t	,�N0��=A��t��q�蚘�rC��:�,�u�^�3���D�`j�ߛ�����y.��q��y}�蜒�,4Ef�u
�������o�Td)0/T�����W�A��dm��~���M#��ų�b��#�ny�o�����	��=f�J�p����*�_��~y����߮bvGφZ��@��D��x�?7B����k�DI�Ɩ�n���������#'ƣ*F��C^�,��Z�(f3߹��hL�h0�U�Ex��(;!ж�
��� U���W�*�Z|����zDՉ%~��{&�    ݆H���b�RF`�#�Ъ�5�I���"����_�m�$�%�	���$�9b.Ba+8� �������,�J@�P
7��h:Jd�2�q��znO�{&D7������L$�|��ý�:���CZɮ�����ɢ�(����7���	�3���S��TX|�f�5�	��/��� �"^�9JMr�L�H�x����-�Lq�lw�Q��45�-%�I����K�L�s�R�_�mpT��;e.>x�lMˤ�e$<�si-�%�������U8&
p��}��r�~�p?�������4��2閑�t�|��Eۅ9�jY+_7���btz,45��,ɭ�Iˤ����lu/'�+<�~y��i5�38�f�̻�������b�we~�sZ�F�Q���Ԇ�l߭���
[��K��4{	U���{�'a�����F�P����{+|#�[3/^$z%����o�x���o�晀�v�[	�` ���@o����x��:��?Y��fd�P�۞�(�$�& �nSAI��B�"X�F�2���z�%���D}̌a��h����s�s�Ū���J0���CȃP�s[\�	�j�@Ceָ% w�BX��q�۸a�u?H��^�+�P�Y���r�;%Q�ի!�:>�g�D�0��᡺���_�I��}D�Μ�<2|)��4Z)�On!����Ձ��$�)��P��,�(X-���:���ړlt}'��RT�_vV�17L����>��� W�cQˬ{�E.ZzE^�����L��լBQ�s���ځgY���9�Z�����ļ{�7|,���j��B�Ƌ$ �T�I�7gxyV^I�$��k��xE� bA�`�}��قjڟ�_/�P�ֶ�"�1k�K(��ɽ	�U����g�5���Ե0�O��a1�c��~�R������{AK	�_��fC�W��]�,z�?���{h���4�d���XrӪ��_Ml�-ҥŗk՛B���~��N1�����5��wl��:X�7_g=ي�܈�����T��b�ۆ�ʪ{@<����g|��=7�^��U��öj���?��VMP��m:�Z��֢���٨+���(e��t��m�Kҽ���!���Y"Ul�-�%`���e�mP�q�� ��>�4Sp!���j1�^�R�������s�G�:�<�P�`�C��FUZ�>Q��{����\#]��S����Fy�����Z?_��A��Qd���-h���u�*��r8ys��a���~9�ϣ��=m�����] C�
��>	8I��Su���������)�ї��B�|4����� 8o�d3O��t�$`w�3���)o���Q�K�(QwKhY�?���`���[��;ͥ�{��ԋHT�Z�ߋ�~N�v�|�e���K,s�}�ԝ,I��M�VU�M]�b��6�S�n�hØ�h��߮�_YXT�QFt�(�I��9ざ�3�f\ Z}q�^*Kq�,<I�����m��*eU�t�,���dVQ��}��*��c���P��#��Kքk�ڽxR��ۻun�&#�Hbc�-�6Lr[6p|z�
�U	E�ђ�6k��uZL�5�'� �����du-e���"�cxG��M��>�$�&|�	�x���6�ָ�NP���t�J��1���a�3�)��Sh@̒u�p�
s�Z��ڌ��DVQ��msB�b�[�4v�&�8����Y�,E�ܓ�|0ɟL*����N�˧�'�?����6~�[-����سj�䨝#�ⶖ�}w��U��ha5�?>1P��/v;��J95�â%U��p	s�1-
�т{�5OJ��tr��>
<(�Ey�XMuZP��d{p!��%"Q�h�Ω�5Z�N��e�D�|6�(��Rε����ob�����^ĥXuɖ÷ц�W�4,L�
��',����#�y�>U~<���hI5,��pQ8�W&�N��i�(ɾ�����=bU�ݖ�R��KlG����n46��)�b�T��cYo�|�"��xx��:q���[�I�Dib���e��	�̍8XMBy,@e�;�ʥ�����P��o���j�4�L��f2T�)%�٧ৱB�l'��?%T6��r�I>��&u�`ܟ��/@|�4w����	��Iъą@lvܰ��meQ����E��,�e�cP5^�W�9�Nv� ;tbR�]�M�em�z�t��Q9��c	�7�5TeX��������#ѨA�h�U}B�+XP$[��b���G{Gΰs�F%��3����i�(.lᤫ�4U��A���	����<�~���BT��JR��ܣN:y��a5%���Q�Bh�ݟ���i!zQfF;'��	),�4�&�۵Р�~/�{��>4��u��D$Ru��3V�Ê5(P��N����\Z��?#wg��.�U�S��������ˏ�Mg��_��r�^�)B���O�ࢣ�e�|1Q��#���,V宬s&���hQ��F�0��M#Y��Tm�]:~k��Ŀ@�M��FI�#!`�}4̰�?>�KEY��V�ڳ3�:Re����1��t0d.G<*��S�i���l8��p?����X�ᯠ�k����?��PI�m�9|�T5uV���f��8��3�1��Um�_���w���/ؙf,'-�Ւc�I��Y�*Z��Xfe.��W�:yw�܏���fK�PZ2Vg��qǤ����dh�c�"2��8vsR�eGt����@��u*'�g�b<����d���P�^��w��<�/^_0Rr:l
/M� �nK�����7T���T���|�=��Z��.��;���&螁ø�83�
8+X �g!}��a��h��J��w9������nM��[���O�ʜ�ժ�xbyP�gz��N[3�=���SH�_����O~ 1=�,|O�?}�˷��Dzׯ�.��e�M��k*� ��(���>D �������K���CH��I$���w�i��Uȉ~��Ј��2�l��aۡA:٤oea���a:���7��-����e���Q���[�}���Dg�R���,K��n��],Vk���R[���N��
i�.�:<���f��[�Qe��`�4��s��ӈ;���Z WY>]����^�M�z�_�B9��CN�GL�o�/���"���*Nk�:R����K��W��}�q�����k����cbr��!}bU�J��B,�.|����W��"<�a��"F�3��0������� 4/8M��Θ�!Hc���t�U���F�UY.]qi�jb��Ǹ⫙@4���	���/8���H9t!?�%��^� �%s�����=2ɽ����a�����-�X�b1�(���G$�JS}G;�~�ХJ&��;��+����N�|/Cl�h֭��C �@�
�{������F�������a(� �K�~UVP�C)Y|��q�mR�yi��UA��Ӭ��0IB�W�Bq��T�*cU����#�ݮ�J��k���npl����c����>���������U��_� D�� F���*ˤL����;Gcv$1Q���n�nG4��˛ǡvc�z���oe�d){�Kȍ۵�H�(�3=��f,��&�CpT���^��h�j��L�8��T�E��?d�ƧQ"<��ϟ`A�B`dS�}�?d�D�6�Ph
�)�]���e�D�:�_dJ-����E��V�{Rq�Q��ę�G;����H/���Ze�4�.������&k8UVF��(�n��d�� (脜)[UbK���򏶰��cX��/pt��jb��v?��>��xȾ�L �ߟ�G+�nZ�DB���5Pq}�[Q�i��Yo�O���(^)�� k�kR5wo�?�<�z�&����]�Y�7CC��5����@8���e�b�T|��wzQo�f/h7���+b�j�m�x��ɡn ���mi��~��)Z�x%�����ct9�Q��xwYez^qyE���蘿..9�T�|    �r�#���jv���n��ϳ)m�5��ո���
���7Eci[��U���J@q�P*b��坚������{^V�A��A�p�]tS$~�X��r��a�r��[|���~LQ�Ug�)�dE\���^� �	=*��c ���Ӱ͋W������F��͎53b/��XYr%��B'G���'�⎑���
�/YI��*��6k�/y��jp@���}[�|&a5�Omd�p"R@
�E�J7�&�Bٍb��\��>��͌��D>�
�o���1H���Q�6:�+�{N�J�|����Y�M�JEv�������ŝ���q8�V&q���h��SJ�QC?��!hA&�f�U%�섑�W�\o#�v fV��HY�`�$V ���?^:�����ʙ�KIY�&f�WV���+D�0���rb�Fv��~~��k������f����)�2��?h�ǔX5��a�X}@���U	��!+nT�=�#UJ�����j�L�m�a�RV���x���&���l#k�\� �Z���펼 �[�q䓤��y�2�̺�6o�o؜x�/#BD���g�}J�}�A;��'�U�D�k�s*��W��7i�&�"B�������fА*�@�þ*�SX��ge^�9�S4R.m�B:���e"�*�!���Y=��@�%��s���
�Fo��#kZ�taZ�T��"e��+����%�ծ�a���P�F�s�˪�e��DT��
bKI��c����-8��e0��͋�⏸�OI�dg��3�@A�.��O!ӝ��4;�Ň��8ˢ��^j��&�TAA����|^���P{�*F FD���0B=Dv�{ѭ׶�#���Zĵ]&bL+�p�^�a"?,�xZ]�LZ�E�j"�C��i|��p
�t9ǾRjU����߇����g(����Y�P+>��q&�%m��s"�o`n �KD�\g��-@E��:��\?7�F]X����}]�v�8�|vE��.	>*��QF�2��9ɚ���������V���$lԮK�e�6(l�k������;V����DYb���?P|,�sL*�g��6�J���݊��J�7F�uFn���.��y���@n��rN�)g��SN۷זDgܐ��0�{a�n�6G艹B�s��������@e��	��քx��i|�-r[�1Y'�kp+�0ZF�,m���!@���;<�1"G3���F�"��a�$���dk�qk]�����b[�;��οIf��m�k ������q��֑����ף/A�[�vpq���8X��<�ƹP�cI;9����d��JPn�2�y�m={�`��Ƀ�k��?�yŐ����t�D�v�4�3c6���E܀��]�9�5H�G��x^gi�x٘U��)j�'�����>6�c���ٶM��t5ι��`��-�P�=b�%�H�~���[J�C��%�b���q&a&.~g�T�����
�f|ۭB���l�Ts[�^q��G^;E����˓;�?�QQ+������Q��൭�(U�3�}0��w��r�O1D���Ϭ��@�SJ6#�1�*-��Ļ朒��{� ��|F
�M;���,��I��R���z:qF/w�Eg���%���T����/�Ve� ˶2
E���k;�=�v�ʶv㔅�%�����4/���vx>�1x�5�h8�\��^�Bv9=��p�_??��V��uOG{�l@�D��^R8�~;�V4��q�L�hrfά�Kμd+��}�Y��X��������T���ay:]^o�VXNl/���WW%`�S���E������P�����Ş�),a��,�����5|;�>�e��;��[윻�L�=̶���6����L�������n��H�CU0@II> |��XS0 �m���n>�+=l��T�X@��2x�{9��̿����c!�n���Z��?M0��eĆ�m���Tc$ �jK�R���Y����A�צ90����ϭ��?w��aJ����x��Z��H��'��1�ifJ'Y/\x�0`[��V��<]^P��ߔl�-L���$����,fُ�]:��=�q)�X����@w4̆��4$� '�P�6ǷO�]U�SdV���M��j^h����	���d���j�-�fh�?/!������I��B;����u��u6Kae;q��3P��mTC�
,�8��"����_;u`e��	Yլm��Y�����q��NU���U�~�ވ�|�bC�3�n9�d������g�|q���
�b��J���C��j�u�@��J,Z��Eq���
z��l�L��}�̷���C_9m��'s�zp���ߧg��Uh�g]LXՄ��-��p:�:��H>�C����W/5Q}}z7!��nqAM�����^ɼ��
w�N��9�>�&I�ռ)GFk?���Pϟ|֬�xL.
i��l�A�b�V�̞g������UDG�?�M�sw/P"�;2J�S�a���p��V�픀;";K�0��z���p��;�d�8C��~�gO�>b�1v��zG�(�u&<8'������:���ˀ�h�����%1hnD5��������9��$h�1�Z�0H���nбOWa8�&�s���V��۾e��N�F�`t�{N��C�qLT�2c|�)��d�!B�G����;�+�5
�D ��·Ȫ����`W� G:������+��>�L���\��T���ܟ�G������׵���	8fe�X�	��Kۄ�>n�EbR�w�ڸ5J?�{��՞�|h�q7�$��l�G��I�駃u6�L�DԀ&�����!��y#굵R�.Xa �9]+t����U оw��\@���4��)�/i��\��ֿY��9c�D6�����8�1"7t��{U��������XyI2������jqv#<�u�A"��vߘf.{Qa����<�T�E�;���������C's\�5�V[����lm����k�b�!��+Sk$ʹ��N]��+)�����H����?!\�6F�3���)S/�"QN����>o{k���b�$�� ������� {]i�����\Ӝ۳��qm�67�m)4�i+6��,*r	@��L�ef+G�Pgd�t�Iq;� �E
:H�A�g�9����f�ۑ���ZFO4��m�!�t��{�ntJT^h�+��Xف#�q��t����p�`g�]�G3��-n.?}~UM�EV&�k� L-�?�+��P�s<�7�;+.�����6f����D/��"}
�S�X������ ��?	��D���hE��7-�BH��H
 q/J�fۆڐ�G�U�`��T����V��<۵��?����x��:3�,֕�`Ra[��߷�eX�C�ҍj�&Tʇ�9��ꦵit�����!�6��K��q���"Ġ%	���3i�Y����yZY�3�4���d��剁8�5(�Vκ8�y5NjƯ�[>�!K&`Vb]Vt��'F�h��s��y>Xwt|C���=iJ��Gg<���7�Uw"��v�-̅^;����O�d��i��mYpM���m��tB�����8�;l��^r�HW��϶�n�13�_�+�zM�9�����*�."�pd,wti�G3�26�F��Y�5�E��*����^�P��B1��E����{�ߍ�T끦Qj���֑�5����TImL���56l9��׻��+�W�adgp�(�=b
��]yG�-3�n)P�6�����m������"��ykU�=�CubFr�-e�f��_�_�	���A&�k4��4{;]^��_��f8A�鯋8gL�y��8v����9�f�8�g�ז��uݟ���=G�p���.�,�G�m��æ5{�/�,WgI¨Oo4�����6ca�����Fn79h�}��	�]'jٱ�w$�t�����m��W���e�ލ �p�_�IqQ�i��|��s��oNE{�H���^�ҥ@B{���\x����t孒_Zp�� \q)�)Ǧ0�?��#��H}{ o� �  �����M$��=t��@L�3��"�r�;�.nZ�v����N�8�VP/rp��"�4��Kr��u[��f(�go]�([���nm�nlW	8�=�y�sI��TϠ{��*HZ{��;�� q��{*4i~Eܠ��b:��F��ҀQN4��t;h^ƪ6Z����*{Ǔx�ʰT�����Y��/{������]�2����lt@�|9~�_u�o�t,X�i^7U���M�
)��+�5ѐH%����y�܌��t���?�Fg��H�h�8G�&�*x�Pq�7TYѶ74x���ӷ��D2�ږ�� D���ބ��|�;ƹ�Z���j��Qw���R� �Т�@�3�;��_k�r��Y�%�)�y���������@�^�/�Ap���0�x'�4���ϋhiXv=Z;�m<��٪�a��r��M����*�ɢqjR;M�3)�?�g��;�im�߲�p��p��"�-U:e8��JL!2[
VQ��z�T ����D�_���Ћ�A���,�������4�������Ú.���7Z��� T�������j�Ⱦ�9��롑��|V�!�D�PQ��Y)�q��\or�B>C���&}�-�W�m�C�����*B*Q=���x��R�D٦K
�qT�t�)��f�Y���fCmԢ��d�,��z�<j
h�?5�M��������0?<%/�	:�Ob��es��J��.4R	��i@H"�3�g����i�}�x)�b���	�nF���-�-YK�;i����'f��c+�`�Y�b�]��S�� (���(�����'�y����`��~�*������SF
��nߏK��t�I�	�����G6o��<XT2/O�ekǋ��XB�XG"�	���R2��ܨ��ȖFP��2X�%�]s�����}�"[SR,T2hd��ï7��ڨ��̲g����u��m����t��n�ݞG���d�F�+�!��8�p�O\��Wy��Y��|��6��<��r��u�ݚ�`�y�R��q�eu��$k��Gt#���Pdn�yNܳ��>Ȫ�'~��Z��,~O�`R�>�0������f����WڟKl���
f���nm���R�{�<cЪ/|}���]���C0�]
i���L�-��	�߸X{�ǉ"Bo�`g�y@�]�����`!�ض�����y*�z<A�u��+"�9�L��|W��d�V�� ޘS�q�X�c0\�a�2p�g�>�9����apG�1�H����wN���1�kgM��7��R���V)�H�;J�P]>FY��<rG��9YpZM��w5��ǃ�"�k��H��z��{���{=�ĭ���(O[if���,s�b'�$�<�߿��yyL��I1���k"s-��U��8�7�ڂ��v|켊�X���I��P�nG`̖e�k���1Z��!
�|
�l��H�]J��I�BJ��`��(H����:rp�d����R{�h� �1��{/=VT���|��V��0�I�+��jOx�:c��>#�p{��|�
`���Ij\��
_=.�����i����$kAL�"ȡ-�8���;�[Owe'�y� L�0 ���n�A�,â�̚Ŕ�S��eg>��n+�r��Y�(M��i���M���en�vPq�[M"oN;����8��loX�i��_�_����"�{8�d�m s|z=�����n�ד�7'>�+�ӷӘ�Bt�E�[��UO±�`">q��ՄIi�2��3���p����,�f�Ai�T/Aa����QYo�L���J&#'�l�u���k]�n݅�-BKZ�v@�/���B�]b�W���^z��Eiw!J���q���kx���dK-2���K�2t��w�ò$�`�ߛPK0-�nzx��,��A�AxZ|��&⯮��1��������)����bbg�R��}�?�d^r`�0�
�����Y1,��ģ�^�5�����A���Ԫُ�H|�,
a��%,%�lKR��Ț�t��$�6�I��-d��瓊
�Ωe�gQ��$�1���u#�D���ǂd˟G#��p�-�,���&�:�P�q5�*�����s R��2�b�����+�M:a�~Ԍ��� >N
��8~�5��[��P2 �5C?��BQB�~R�;���]9c���g�*���׍
�fF����j��Ȍ��I�#6��oAgsY"�s۸���t~��
[��wE ��6�v;�c��A����\�	^f���K���w�7��2EQ�pU�9x�.tkK�}|����{��f�f���}%����⏱
�	�g0�g/�ie���j1��p��R��7�b�T����$c�?��!�ѲAq�U'���)��aD9v�
Ɉ��saU �_|�rV��Քh�QX>B�G�AEw_��=��2�����ˮh��Nr����M��V;��	ʏ�׶W��mYl�\���E��f�z��(xd�^����v�9�ýf���N�DYM1k�RԞ�ݺc��vH���߅��[R��e���h�4��R�}�X�q��~���H���>'l�f�ǣ�!
��<���E/���@��:�"V
e͇unlK7� '0��Y2�XL�������vz�t-��x��k[N��T�3���5��9���8޿��0�Hm��ƅ�x�3�u7.�^�������|���*�β
m���8�6K:o�\j�Vǒ���:T�I�3!�3�����
�`k&��=�m��H��tZ7�L��1W7ޭY��6I��e?޾n�x�t�$�`��F��"D����I�l;od H��Lts��,��v���w�6�� Z����Z8򱽡g�؞I��׳�R��Q�f�n\������E��_�@p|>��~p�L0�*�$y���b�[�����K�Z�vUɶ��v�`�v�>[�;�v��m�Fh/oU��ez�%�����*�k٣�[K���dEF�aCʨʲ'd6��$�@���
������{�'x�&{at-�	�e�����>�0���n"S�^��*�Թ{
ڎgR؊�B��I+R 4���O�~�vhLI��;�� ل0yٞM��;ҥOme�����X����o���#��`�n�dʌ���
������qU׵�w��`�j @��� O��U�����m2ӌ�3b�|���Pb���X�,�e7��(�]�'b!r�ʹ��>ο�a�1�8V2�;�2g�P���0wa=ki��@Q~�y"8�.nC�9��WI2P�O,��V/�?��1�A��4g�Y�0+��V�5��Nڽ����>i9����G�*Ѩ���5E��������VBþ��������^|	Po������;h���;��0F\�o�4Y�x�/�%d����Jfw(
cw�Bp�i<��������l�H��H\lG0W�}+�/Q��mʓ&G��S���|���M����h�g1qj�����-�����,�ߘ'͑dk��ט͸�`cX�{˵a��l����eT&��Ѥ'��ʌi�U����:�^r�"D'�u§Y��V���
E�C�� -#i�/<�?� �Z3���Es667mv;ږ�PWq�/Vqp���/�4?�KFlX�6_>��2�ګ����֝��O��J�j5Ƙ2�&^��$h�+{eY4Mک�ˋ��˫�!�&�2��K5C����͕�=��U�xr���HpeHBb����fȺgt�
6�m`���7�h�x�km�;�{��0@���HSd���
2%��䶪��k�?�dL�;��a���Ө������[�oӜ�GM⢐<kV���'U�#��Z��'�D��˚�x���ވ��ʅ�Y�M��}�\X5�a�͸9
C�;�5��q�Y�_�5�	�{ڈ6�qQ�4>�ɟ�v�<�����#���D���4��o��f��=�@�m�5&;l-���D��tz���J���hU����O���R�-��������믿���      �      x�u}[r���3�
o��x�e��n]|$�=v|�_ǟY�����33'�e@�*+�"3����azx��qz�_��y���q��M�?���;;�Ϸ��|~�����|}�N���Ulɏ��ƅ�vn8N��eҿ���7����i:L"� F��[�x�v~��i���ۉ/����Cc���)�]N�u�������|�R���|S�o�.��pY���|x8�v~8M��r���������u)c�6��r�/����s9������Lz,���QW�vy�=_·���w�~=�׷��|>��OX��?�Bޏ~W���8L'��i�<��Ӻ�O�����<�;3��t��.�W??]d���[2U1����)f��;c���eYw��|��p��q�~�ؙ�w��-T���]�2'��x��ǈ��|��qlթ��*�|L��I�o�/ʐ���^���t:U�9./����?ƈ�_T�ۙ��i��/\y�ȾkXzʏ��IT ������|z���~�~BX5aU6��B����
���3ix�p~?ϗ��iz??�y�\�|��`	�@K�z�PC}X���ꅛ.����lK6?<���+�a��.�ӯ���u�������?�Q�u�o��p�ʜ��ͤ]d't'<:[5ι�w��kWg*v@w��gܝ4��ig���,���ί�Ϧa�l����<�P��Zl��B&�������E/g��C�����e)��0;�_�rx�[�O���IE2��4A�P|�� ۱�������WcmM�E���=��[g��댳|�6ȁa�w0�G�q����EL�|�������O8�=�uak��Q��.���6ݠ���
.��Ta��s��c
1�l.����c9̇͋���mZ�*��c����	1��8<ϟ��
]�|�M6�?b�-��X�3ï����mx�LG��<}~���N����yy��6_�r>��'��=��o�����:�.S�q<c�������8R����v���a���
��:�Ƌ��tb�G����9]��;�x�p�`�����Y�f���ϧ����O�~$l��!��������t~��<��N�N��n��@�ܝ��ʑ��t�	��-IЌ�V�U�w8Kj��'��ͨ�Go���/	;��N����ÝW�Dztо(�2���<�G�l�������"��M�Z6����%��W�9>����-�.#�a�Á���y���n�[���LrM��k�q�_ϰ-p全�<6g9�)XN�f:ow>0�'z����JI��|VY:+�.gL
��@�rZ`�q���Z��R�F,���X�v?P�����ڏ7>�,M���L�����0}u�ۅ�=�-�7��t��@��i�7��䀝�6S��a��e��L� ��e�\_ '�t��p�_��+�5_o*`#.0w*QAݘw0+���=�B/������9��Q��;8����k֛�?�j���.��遚s����KȄ(�� `�ŕ]tx�����pY��\w�%A7�c�FY1���a�v�V��M*���FuG��]�58�qw~��9e�Ԑ�f�	�ͩ\�o�y ��B���؁L8'�d�w��a�޷{cmh��`���V�naӯ���+p#n��t���fA0��>������{|��y�V;^	@�����y[���0_(����2R��ɷo
	�n���r�}1̓<����5�v�]���Pm��M���/%F.0�y���v��i�7p�����[	b`ҁ�qȟ�a�Ux�����3qc��e$�Z��v��1d����wd��=��Bϱ\��[Q,~��.� ���Dp]wk�>3����5|w�oӑ��M!�j,�n���OD=4s�	%Z�l` ���ߖ끻�Fgp���@nϲ��tc�0ڌ����&�
C��2F�}��۔��0+�����V��F�r�����a��՚�Ko���aZ��VH�՘�Ȩ1r����;`���$@��}=@g�)FR�e��zĝp���r�! �%�R,���3��aڂ�vz�'FA[��HdD|�w�M�_��ֹB*�Q�d.<�������=M�w�P��<A�.��wyĝ��_N�{�B	�+��Xو��f�wf��H-�jxFD���ꆠx�T���n�z���0��2�M����U����`��a�=V[�\�D���"̆Bȝ�R���5�{�4��I�ð�^.�3��*��؇���� C�J�����`�Jd%`�����(5K�긮4�<��Ŋ	������0�ay���n��M�~O�O^�{�[�awPسy��R����U?�#AI�sߕ Ova;����# =g�}+�Z�e?�g�V4]ީRTA\%\�N	�v����{�t����v����yZ�+fy�M��0,�J(�G�;��I0�)� ؜���L��"�'d�Qb��+a�p�s� ���Q.�| Tw%b�y�JO ���׵��נTE�@���^�ohfZ�EŠ�֑�N���v�6�����9hX�ԓ���>o]�j^D�a�k;M0; #��N����[.��"���;A��1t? �����PV����i�|���ܰ9윃@#z�B���q��KM3p��d�� iSxP��W���B�HC����i�}�O��K��&��wzR!@6B��r��JX�F�W-<���X�TꞱ�X�;���Q�>q���}Y<����S 1�0qB��G8���D;�7Q
�2��xA��� �	7�Y$��[�D&R�MCC�b�����$���|��~_4�19�(������U��V��d4F	@�Q�^.q���Y������~�{�2�23�,Ǣ���j��4�op�ez�I`O�,��k���۫J@�������4	PR� �z���3AH�%24�4ՂFF�x2Y��#Y���p�ݢ�~��7�+��4BYƑk*����܌����JNrG%p���5����%�*̝���m�E�(�#E����̀��ܵ^#
��_gGa����!ƀ]?|�d*ӿ*5*}[v�P)[6Ϻ�����U���6�FY�,ØT|3d}���&�X�E3/̢��8q�E+����m�py��"�]�hkT���ͨ�\y����ᄓ*ʓ��ˇ�^`7v�O�,���F"@��Wx�D�[�YÖ���a�a�,��i9�u� ��?�����$}Ӽ���	2��jR��En3׸O]�K jL��^V��A�&�ڐ�l���{a��|��`�c�g�y�xq�,	��IP�q��W���x�/e,	}F�)���=[��"���G�[�0@[-�4��|ڠ��!�P�"�*.<a��_:껅{�R�"o2�%��
������&�R�����6�78J�<p�f	�@(��;W��"��x͊��PQ��������\K�׋�x5�� �[���yU���+�TF,�wz+����{>����e73P���db�]M �n����7'�O�W��H����N�T���a������ ��8���'@42�g�`�
j�q�//���\����m#�+���в��]���W�N��I	��S�`PaߠNgE܄�*�A6[�|n^k�dQ���I܃���ΔA|�Ju�-���s==�1�
����g�!��ʹ1����Pc��K~Q2�Br�n�?� �~�6�1`�w}o�A�5�����@��oZ�*Eb����q$�L/$�B[��׶7JB-%�	��Wq�.¨Τ�z�p��"�U�%h��]�U~��/X�N�L�3�a�!�W�L��%kz�%b9$���޺�Z����E���q��� [��<�$���ڏN����~ݿI��z��gZѵP���֜>��;�qT�������K���{� {ǚ#�������t�P���maF�iB��_C�Ⲿ_��nY���0�>�z��p�u$&;PA^�P�8م��+    d%�3$��S�n�Q"�QFj�v�\T���E�P�	�EX�G�È��3���`'a�\	Br	����iP=X6nW�HX�5���y���1�ʞ����{�bit{S�a<й��������tzya#�=BUة������/F�W_�8�׹R�=��������KI��`�m@�����:_���J�r�ǖ?2���	Bx}���,�����`Sp��f�:ܻ5���^�`B�̻8n%�-T��������" �b%Ǻ�� ���|W<���Ih���<s�i�%��r�O����j!�@��Y|����מ9	8��
-b�ű��l�5g���(���S��k������rU����hQ�����Y0��F��I�(V�[I&1�R����}��9�Ks*����E�*��N��<7�8@2_�+��2u>@����=L�93�� �^҈�F潿	���}�h-	��Z��p>9¥��.�a)^����^�3��8v���$�O3-�׿̭�R����gp�f#K���|Yi�F��#�&��K0*��H"3��{Z@�p��j(#Ȍ��I!����:֍�����؊������-[�a��׈�:O�v-�8�+JA>�$1DV��������u���jW!�$D��11$��y��j4�q1��c1���`�&���]~?<��t҆5�c#�H>�q���{��7���f�x^�̱���J�H�s��7�t��̅���Slqe�m����(
RCFP�%�ʪc��^5�Ĵ�,o��@��n#�,	f@?�)D�(�a����h�a��7��P	���2j,6(�v�b*�p������Ӈ騊�j�K|��D��r�E皭9���+�"&���E��j���_%Bg	����Ra��L�,xEG��\�δ�8����7L��k~]�*���^i1M��]� ������;�!C8<�%�/Ȱaǥ���֋V���e8�/GI��!����d+��͏ �������uz����[���k��Y���|HI�^D��;W��%�2�mX�gd	�q.�O\�M����[I��n�qkB�������)i!�e`l�2_������`�U���|8����`�Ѱq,�����$՞Z�#=��I0S�W���x��b�8GJ��V*�Ě@�w~��H�/.�F��򯔄gݟ�=P�~M�P$�n���"p�t�OZ�s�*R���(H�T��i�l��ܮ������$A��0�7��V�����=ʷ1�H�8�<KC�qMI�Q)<���1 ���x����Rչ��$�Wk�䋈�X��y����uC�w� ��(��ۺ���qx��N�}�
l��,c�*'?xRSV���U�i�DˣT�$���l'j�~^cE������	�)�E��tx|��n�9ЫJE�&D[8L��gY�������$��bN(�����"�ֶ�%ICAV�v^�Tj��見#��l���ju�d� ��Zv����e�>�q��i���!\.q����ʲ�}V�2Y����;8F����Kvp�q�o���& ��Z�G�H,��s��p%M�Ү�`���Q([���Ph���4���z�֢T˘�y�Q��|O�R_���-��uZ���0�pU|��3��JM��l!Јq��ԧj���-�=dX�j5܂�[_2N��
���ڀ特b���K̒�3:y5��}�&\uǱ؋�A4� �<6�3�?�a�#���|^�Q^�i<I�F��F��7ٌ�H�QO�j��r�q�S.G-��G�>YX4��I��/;�8��ݘ%Y�@��#�����������5� �Z!�ţL�W���0��y?ojF�>��eK7Q �Z��j�����r|�0jR�"�F9� ��J�[=�� A�p���V��_���'���~�5���,�k�*D���A�;{�R�d �_�p F�:#>��n��r�a*R��6�<��l!��'������r!���I�I"�t��p{6x�j�fWSMiSmW��^q�눣�w#��Ţ�c}��Hg�
7���k��^�	]���\����tg�b�p�~�j��iM[��6�"�b=]D]�cΩ��[��bL�;�m��7
��9L}L������28ς,���,�H?�*��KJR��0Q.�����_�u �r��"�J����u'�8>¬���k0�7,�j�@LI��IT��@��dkG�M���݁g�z�m@Ɍ��M��!�ᶕ�h: ��]�X���d��l7o�����d'D|���<�;Ҝ��t}��0��e�ڦ��q䰱�G �ǈ���Ef��]��
#{z�
	/r��F�M���8���ɪߕ%��*WF���f�0)d���Vu_WCjtE�����A\�R�X���ì���@���R�-���$㼶��J���c� �ܳ)IGuz��΀b�w�*4��� E^�T��{�(z#uO�B��I��Z���]�_ߑ�Ɯ~���<�R=M_��ߪh�ua(�����B�s�lpJZj��w
�yҗy���y�X�B����m�p5�/ˇɘ*�a����V$�P
���	8��+'��߀���h�613\.|t�g�UF�8�r�b?!�Z�+�/e7j@͈#�:V~A��ڼE��+ͷ�<��]�5��@O���G/IL�ޓ��37�,UГ.� q5kדe���<��c�(r�8�Y�:��|�X�(�djm188|����֋^q�VxL�b�����5���1E@��>�[����C��,t�;	~��H�Ŷ��R��ޯ,��j�l�F/-v[P�� 6�M��	(��w��`��mڿ�{�2���)�ZbK^���-��&�p(���^�";��P��U���h�<%����na>j�����iՠz��(�뷶\�$��c�P|�(�k~���>PR��7��a��"��n)#�,�$v�5<��P/Ae�{�J�j\��n���_�n�Iݎ��'�V�V���Ɵ�ß�д\ZՀ\V���R]$�/�. +��GN��O�A���XJ-��h�ۺ���j\0!Z��um|�իİ�<�lS8�^�1W�m����* �� ���X��e�1�uDқ"�O]Lk>�1��Y��O*b|�DSq\������2�=J�E^G��]�z�{/���p�.�"��X�5]n_�|��S��6�?��Վ���D :Eb��N��d��OY#��g��+D�D6�S�:�´��&0_�לD(Dᵛ�]��̆��\��j�2�1�,�}L�7b����Ģ������`9SV'��}���U�I{���ų.'�sZj��*�d��'�AO��ϸ�@۬��d����Ӫw|�=�I���I�Q�R��M��W��I�BY?<�U���_`���¨l�X����B�Om^�;>l�%șw"�]p]^·u�]<SFu	�zh	D�g���,`���1��@�1�	��yW]� /E,��3�^��0)����A:������ʕ�&���-�1k�C�T(��yx=i�'�퍜�����Sei�a�Ejq�HMu�5��^����k���EG���>5͋ �� ��o��הL�FDz%KUrn��쬭��i�L�����+}�ֶ#��D�^<'�f��0E�
����z������4�yN8k����s��%Hv������`�t]��KҸA�˔�+Ldѝ�ex�C� M�RZ���G�oئr&��B���p��+WZR������wNXƯYr���Y����,b6�!&�-'�^}
ſ����k�FS�@����i�|�W�ӿ�]Y���W4��d�g�H�^����k
E��ٓڃ���grU���wNU�CZ�uB���h>��SkD��b�`�qe!k����J5���[��z^�;\�}l�OU)W:�o��F��O⋊5PQ��SW���_k
1X���dS���q^�^S��c�5�OZf`�¸Aw����t�NGhޜ�E���hi����9�b�Xk    z�)��������%�؃��%�ʱ{1'�r���۱\�:��}��ꡃԢ�FPk���w��7,:��"�F�JD L2�3zUs������&u8X�i�G<%K'���Jv+�Vj�+А�zu���YSwW��Ȥ��J&��J���ɮ^��!���g6Ի�=o'ҁ��ށ|3]���+6Z	�~I�D�Q����L��-[���f��Ǆ�f���d�U�V�$X�Ͽ�4�R$�����d�te\!�r�B��s�!��>�k���)���"�Ǳ�0 )i���g脃 #I^�c%��q ��=��O�1`�d@C5ep��H0����q�_4d�ߩ�W��%YX�M��1� �����H���n��O��PQ��6��ޤq{�b
:C�sc��"�k@_'E!�O\�Ӕ�'��奚�|�ڈ!5�@���nv��J&�8�2g�qg1�X�x&U;J}��o���h����@"� g���)�_����p{��Ҧ����Mk�9N�-���5	��!�[�D��4w)���Wh�Zش�̧�u>�X����B�itiM���L�r�Rݜ��/�Jǭ�iuȉ@��lMP�+�G�����vm�aD@��O,M%�D�9��a���|[^?���ѝ��dpa�.�&#������O�T������������v����/:��:{)���~�_�9q�b$���ϐ�)~樓��2��G2�r������ө>3�JɬYZ.p���F���뱰^] �jUV%�����w 8Ё\:�D�e�U-�K��Z���{5�!0.2IK
�]:�sR�ʴ�f4$�g���L�x�L7*@���_q��	Ʃp�ʌ���B��vݴgA~��"�	��B�9_�������MDg᲋t^�ؘ�E*����}󩎔�vzj�� 0tkk��^%ɗ,/��pe�5��=5$JA��\�"�`aJ��wW�+��uޫ\�F��zk��'��Z�;�n��l����&l��JƏ�$��{��5@��7[c�w~�V���c���Uwt�����^�'[�z�L�0� L����%R��|���v�����x�P��]ŗ#Л�G�Vo��D���$����)/�0���q�L�8�+�"XB���ax�����gFV�Z�� #^����]Ԇg�{�T���$�5��2(~L ��|Y�֭�IVd�u�q1y{��/�D���<X���.�lo�\�^��2�ơ/�����1M�A����)�^�7��1jB��d�e�7���� ��Zl�O=�9��J��q����Oٶޑ��x`)�@�u�`w�����u�\���̛7�{�:hS���?�+�b�*IcDB�/�ʧ�mӶ������n��D�s4y|�;���|��)'o�B�?��F��9C1Q%��B�*I�>�?��o#���M�'LgVN;1B��_޻q��%�&>��v�x�w.�M��� �(��T����kV��23�mt'�C֋%WUٳ)�[����_i��-�����qM9�cW>ZfO�>ʫ86:����s:Xݴ�Gi�MBk9��!K	p���{mImE� �Oz���ۨn@�&�?�nt�L6�*� ��(��T�Wu蔎�V�˻��ֹxj68��[1m&g����i�����A��F��jn�}���b�����6cӂ��ypn�U)�$�^,������iQ%bᠯ"E<��0����:��J�m���!RJ%U.r��`@;�|٢X�u,��EI|�����J� %a8{�e,_�8���AZG Q�3�C�kԻ(����f�3F�☻��vi���Am�wXD���|9Vr�BX��~k�7~I��4z�Wb �C��c-w\��sy�hUk�=`Q<y+ aތ��F%������9�7���؉�	I��N� Qp-��u'aԶ�[��m���7y�	�j�iO��m���IZX����ã-�1?ͪ���{�[.-Ҩ��c��fp��kSW�e�q�e���4�S(D�RC.>!�������$��^"�[�F�'�Z�m�~�$����p��+���Q���
�����}V��[���alI�K猔cbM5\r�,;ө="�b�����%A[]�w���8�q�M�ه�%)�%yō��#�Ts	f{NW�RT)�-���6t��N����9 hb[�=�Օ��e�Q��M�6�6���[�ٿO�R��~P�
r�>�����Wp���ؗ�~���@>ܠm�%ˌq/��{y�GJ�W�*H`_�ȓi�O���;��� ��#rk�ڇ"�)��&>����B�L�'���I�q��I�:I!$XG=;h�\�`���\��Jgϕ�C��<��W/s䌆��68�)����6ck�fk�X���$*����)	�`0��@�-���l�O���zvS��9�Cf��A۷�F6��u�J6#�Vwj�G�c^fi�7�<�J���gl�Ȋ/7�VK�qzŸz��ɲT���O��aCV���uE)	�*��ex�+��䍳�P��]����4b?�:~uk@q��s��x^�d��s��+Ie�~�X�h8�դ���	a#3B�׳4��C�
v4���X���	)ˇ�&�ݍ(Nآ�R3E I�C��{����Rᨛ����qB�g�p��7l�Q5E9�p5�#������z���S)2⭴�P�.�4'?�̧ͤ�m�E9+��Na�`q8B��:{h#ǜw��_d���;�|a��轰��ɯ�{���� %S���Z��K�r]gk�C������V:f V��t��u^O*KU^�Ѷȫ,t����`+���1B��2'�ȇ��mZ�Yo�K�^
6z����)H�FI��h�����K�V>r�O�g=�a�Jٍ�M�E�5�z?oW��QӨ���lɔ�����i-��[����i�:6�Lug�s��M���җҲ��;��uR�_~��!���"�b&����^ҷ�c.8H�~+��W��)ПZ���ۿ�//x��%��2�񌄑�e�ܗM%�f4��Dv$�%�JX&TF�b�̞s�9ͅ�@;d�:�%GV���8#��ٛ���ͺSN���0���ԅ�e���|��>�9h��B�c Y[�{,9s'6�*'
E�_�Z�J�	F�+A���`K�4p�}M�(��E�to����"��:R�k��̱^'=��,}C��~���l&��jL��el��M����ڐv!e��Ɉ��r��C�����EsR�A9%0��vG�G���L���OTg�"�,���؎r]�Cz�3+��{���c�`0ݧ%9����g,��X{�[��+��%��w�1���b����1<cҖ��� ;%C��Vc �xӛ�d<��d�����X�����L�î���8
�Fj�¬t���~�Ǩ�Q�H5.f�3@��\��y���� �em
��i����������xX�S�C��F2��`̦lH��^�)"���.�`Y�2�J��e���))��BJzì���tBh��4s��*s��n�&fi�k&3���;���%�&�M78%�u0�z��eE	��![�A8�C�����D6�Uu�8|/)���K'����ܷ"d'r����:<� ��&w#���So�fc;��o<s����P�����daB�l���oj�t���Y+:uW�����&�Rd�
���Z�́(���t�&�zY�[������,C�S����i'��a��&����J�[�b
�F,���O�mkֹ����:�)՘[hC�l��)�'}�C�d�e�뀪M�X�nd��X���V�{\��r/�~�q���k_�<��n֙�w��
���]��1�Rk�F�^YN5p���:U�G,Q�>���ͫ K���Y#	��CR��e���5ه�y� �h��/6�U�����]�{�\�e�W4W�rz���ɈxZ8W�2MM4{!���e�n��$BK|��/<��|��8\K��(<�(X��v�_nB�I���[:P"| >h�\|�xQ�����>��*/��b�1���q�\��_�f?g��Bq\#V�u�6�8+��~� �  �(�[_���z���uR�p���ڰ����+\�r����6�8���:�J�ꀰl�+N߯�O�J�\a�Rǻv?�7'Bg:Y��P���Z����ʊg�<_�w���g
��Fhy�pد�n����S�#�ɮ ���<��J�#p���C���~Sf�-�-gJ�;-�]��9�*o(�����g�N�+|����'Ŷ˱����"�I�&h7(�8�d��iR�BZ9�jN:�髱���m����Z�Eᏽ�%Gֳ}:��Z]J����|��+m��-3�槼�P�d$?fr�����7'H�hi����%=�*��M:���T��~��7��߈�ɒ�(\3�����ͤfc�)���*,���X�q��b���:����w�SZ��( T���>=l���Ɯ!:	��j��<4'.Iae�
ۤ�Zg0�ЕP��Iˀգn����s4�s�=��*5{0�O[��4�3$�T���fA���������$${=���Wd;�n��&�ʦV�,4P5�c�'y&���j�'j���l���+c��!���|�MW&gJ�y����Ս <���0����R
A�L�	����pt�a����H~u�6�cyd���☤���}�ݵ�����+*�2^��uZg�>/wb(Q�2��OGY���W�6�{�'��$1�i��s�F��I�Kb�5U����@���;��d��'�����Ԛך�M����mxc�N�#���d�eKd7���G�h�\;���Ҭ�*�b���~��c�F��d���지� ��Л,���w�\�!zbVð|�$�U7mpk|:�\#�Fk�/���XDc������6�����ۻWpW [�!�l�B��X�;�)�b$]+	�[����-� (K��L��u@@6�gl"����=�P"�(עޏ��D>~9�U9�@P� c��s/��3����fΫ9�6�(���J�~m�R�g���dzPrT)���������40�ʬ�=��TΗ�Fx���ṛrW�;q`����ܑ��p_�TJ�޿�l��@��Ys�<m���q's� ř:�?8r� �n�?4Q �36���JH�:���!�s�<(��"ª��_��ơ�7N�a������[��b���2b��{��v�,D)      �   �
  x�}�K�,�E�O��2�E��mx����h�3��?�KEeQ"	���D����O��rέ�����������������k��j������r}�[�_}|QϵVJ����k��R�0R�a�W�R�Rʬ C��Pո5�@T��ց�V�=0�R��
U������z���w.�wT�VK�Z_���*<͊�oQ���N��5�!z`(b4���N"| ���a�Z��6J�s��r����P=0R��m�=u!�*��h�P=0Tt����L1���:��x`��q �$S,�cNg�>0R!H+�x�TX2�sa����Um9����o<���y�JCu�P�׭\�AP!W �p�h#6"P�H��Tm�VN*��h9����j��'��F��A��lq!�HT���0J�l�`��Ok� ��V���xec
Q0T�@T�Uc�f�V
F*�5��T���d�[f*���ʻv��\�7��\�`,ⶎwR(��//��O�PEe	�!�-�}����ETΩ^!��"�#�L�`�B�F���j�Q$���J�P5�������U��zꆱ�:ӢBP�G%�a��ƪI�S	J4�4��/>���P�eG�Q�ы\��H=d*mS[_��W%�w��_<lR�v�+���g�k�d����w��o��V&ן)]�$�5{%���q��Tg[�i�4�<�H��7M���sF�(��1��b#�MXL��yB�$c%J���.�M�X%*�d��&%?ʠn��c��ǂ@�$����^�`h��МW�(M�L�zm���D�X���Ҝ�iWd�F�Ms���)�:V��d�`h��FiI����o|mk�>06ar�Y�i��=2�:�.�aĞ��i�潓���:cN����E�����PB���P����2�06!�:Q�Q�4��M�2�.�M3�k6�ҢmZ���~z`l��>�"i��Se��<�0�L:�A4J�Ŵ�e�57)�V-�i���6�H�v��S��2޲�CG��PZk��7gT04͚ϺH�T��\+J�-=#�*�0Wz*AIJ\<meD�5��П�v�BPI�h�9;岂��U�"I��4?kszꁱh��XV*I��hd�
F���q��BPI��z��$dU
�*�s	�T�(�~��P`�B:8V�
A�[537��P0Tk�O��B*�$��Xo�@G����F����@$���B�d��*�z�GG=$�.y�����"��� A%y뉫0���c�s�E!��Vq��l��C˩R��j[5�b���S0T��tl�)�d
F]&#�SU�g:ҟBPI���>d��#2Ou"�BP�K���VU�!w(��<m�V�L��P���X�j��*�.�v��U�q���Tk��{��`�j���V�B�R��RkkB�X�R�S	��\�9���R0Tu�?�d�Mcz�cr��Aն
#gyx�X�r��JT�-0Ctف�fX�0TQcO�T���	�;�a�ª�i���T8�4�r�5���P5��jg.�`�t��n���c�Y�Td;+9�b_��G`�aJ��
A%���6�F�X5�j]!��V��O���R0Ta���W
�";"xZ��m��**�K	��|Dh!��!�Px&APɉ�D�/�ۚU�<���*9�֔�=u�X�R�S	��oU���M
cOW%*�**��4�↑
_g�ǰ
A5�j���#scU�Αх�ڹb �s77��U<�cX��B��4P�]�(�&��X�#���Uu�io�)�#0@�����*c�o����JY �ʥZ�gn%[cU�硥BPխ�Uv
���X�����@Զ��!��MCQ+F�T}��R��%c�q`����ZS��Z(�f]�JTCT�{v�	U��s�R*�TX�V3W(��'�6�j~�ȹ
�`����	���ڹ��w(�`�Zk�cŨP�%_�)[�v��a�*�c�T;Wp�Ht�*D�XE�8���z��wmM�X5g?������+w�D�PUk9W!
A%ق	�8�[C������.�C��<�9�G�\��X4� T�+�6�t�;
ƪ5�rS!�$W����q����`��Y ��+�Vgg +��W��܏8��Z[��^�Ӣ���[�ǨR(U��<0@�w�Z�X5�\�*U�T�aj.U3c�	TUTCn��P�X�Υ�C j��a�
ƢAǕ ��B�E��.�D�P�r>�X+r� i"� I�XՌm,���BAT���
�*٭
T,*.��jI�X%T�R���eT�W���)���JҾ�Ӽ�Tc�+?(�&�b�<�s��`�B+���BP��*�9;�
�*Ԥ�l�T�[%?���Ur?5@P�K��¢UW(�PM�?�P��U�۝�acyQ!"�D]~Z䉾a,�l�U�ت�/PX���
#��oU�;1^�`��~ֵ
A�\�s�ٝ\������{�2���Q��?�ir��l@c��E�R�#Z<���U�(���ϺB#��V!ʲ���U���AU/U��~���j�wO5��m�®�c��gZ�(�Y�<m��7��*t�Q�jm�"�������S?��i��ܣvf+c�ǖ�FP��|�6RU��ǎ�FP�K�%�׀7U(���ĮT;[��{x�X5��CE�R�|��p�*����7}A��������P%{�N_mU�T��	Vi�`�Z�����-�rq�
��ռ,��+xHIi��
Ƣ�^���K#�-��ꆑf���҅����X���Zc��������z醡��r�K5J�SJ���eE      �      x���ێ�H�.x�|�|�Α!Eĥ�Ve��iײ3��,l`��`s1�ƞ���8H���Bw���d�L���ꥪ���j����������|�|��o���r������������������?鯚��c$��B���8�Wu����p3��5��a7���y ���ש�q������x�χ~�o�!$P�����Λ���'��y1���mv��p=��sA��5��(�y�_|�k����K�U�����t�C���g�������[�4�SP���uj�T7�m�L�O�톏���t|�9���˿��zg+O�h(	��C��>����F������SU��壿/���������s�g�"x6b�ئ}�mf���V��ԟ�?ߎ�?�����I��Ő�@z�E�����;n�a�����~��^����>�-�^ᘰ
���4��Ku��T��ӛ���y�S�|��Ƿ��?j��~^蜝��~�g:J&Q9BCI�޶6<�"Ц/bQ��>���A�?���3�/��c�,�a2���?h�m�$A��m��JG��Uˍ�������&��ؿ���DA0^�=9]�Ԉ^1޿���zw��w=6@�_���y��~>���W�3�<B��D�F&)�O�7����Ux�~?/�O����崮W3��q��u\��S#�mm��m�vǿ�+=�P~q:k<:��r�VBU?5"�ֵ/-)%kv���?� 
��
)Z�H(�D�����}j:~��VQ����^�"���lFޫ*�yo[����TVT�93z&���u��h+���ƪm��64/�nڶ����
�����ߘ��;��i�6�L䷣�.��unGǞg=�H���o�Q��]��f
L �~�<��}�dD|;c_,}���ù��C"�?~t�� ]���!}���LDi�}�Ƅ����9HufG2�>�.���i8��\��d�c�!�F"�@@����`�M�qMˆݟ��=i���u�~^�a�s�}&�x�+[Ǝ�WW�'c��c��;�5g2������~8?x�dJ!X�D*�P���g`�5�x��~�8wY����׾~F+8a:�ᕯ����!+�t���C�lx����g��q!;{�R�4�D�p���R$3�Ɉ>�?������Ŷ|��g�B9g�X�蟌h5o�KM��YR�P�_t�z���&Ä��J��E+��؉��޾4�*�~���w�^���X��ɳ�y��W<iB��8̖�H�$���u��&t��zA��5�Ɋ!��N#=n����wܗ��Ɲ��
Mn�ݍLG.<�&��7D4ɽ �#_/�-~T���@�oD���)�fÙ̎t���_�J����yVY&��+P ����~�V�>���2�����VΙB$��Ҝj&��=Yh	�ML���6��@��?du�Ј\�;�F��'�!�+����m�W�����������8A8�JNœ�µs�T�J��<��t��<�pK������Q?�������Б������㙜Lz���~Q,K�%��~�j��V«	�[�f�v����/���Xn|�LA0>�����a���p��+�?}�dl?K�W��}�#f����j'�l��� d�p���}8_����TJL!X�Z�^��MK�RF��|���or�n�K	��M���ۧ�UN��&�K�K����Pr�������s�}�Ť�R"���PkƦ����Y��ɦ�ǵ�_��7\�S��1:�7�������	�D���P
���4]�>�UKw�KM��<�񔍘������X�ʯ���n��}�;��x~w5Yn2����A�G�l	�X�·�Lۚ�F�YC�V���HrE�z�L>-��w?�?�/80V�cΖ��Fƶj��˩?�>9��Q2T����Ƶd��/蝜�`vg�C؟�N�ƥ��	���.<��F���d�6��.����M����!~��c��
Z/"����H����3��(��h�C-�z�#<�[(�}+�1c�6(� ���t�]�~�����X���PAN�x�~��v�k��֖�_d��������|$�|˲)iLH�9���֝\tws�4��@�H��a9@_����&a��5�Sg�3Y�@V��_�rRBc��k�f	��6��-�T��KU��t:�N���m~�c�};fJA	0~�)�?���;�Uj��n������WNX�*r>�@�O�e��իzw{���|�����i��֞ݦ��H���~�ݸJ� �{l� ��y�DW�0��m�"��1��W8&p��'���$��TON,��zxM���AD�.I2x�*Hμ��"��eh^j2M���K�]^������߫o5A���%��''rٶ-�-�h��D��Q6BQ%&�?�Ţ����M�Cř�G���|��1�K"\!�T�H\2�q���[am�܁|&��Y#?� 	/pA/�&��LI�)���?�p�|��{����2�h'sJ�c]�m_����>��b�ؔ�D��d"�A�Eo�}r"�$m,�t#�a!%{|F
�����]���vg
J x�G��i��K��͋'1%����Hw!���!'W�!��T�z��X�v�z�>GK�5��*9�� ��?�i���#�ْ����2���2�%����5���j�|�#9��{��}fBA(~����|��;�|�
���t��e[�f���ӼYSO^� 	�KM�d���?�a�"p�A�z8��AF+8E.:��B��E��\Қ�?�5�E�{fs���572S`��pEO�2��^]Q|8��ף�h>�8y+�%p�ѓLj�c/��AoZ��iv�a<ف�=0W�&��D�T�jm�t���<�z|߿�p�9>��dV8'*BDi(�à���y�Ｉ94�8���Ѻ�������(��n)�O�O��E�yg9sH�8�ĭ0|P�3X�:���>�p>�3[8 g8.�T6� ׄ�`�κ��vQc�V�/�ގ��d�7�������NW���L� �+X�r���%ⴕq���A~����T���ȱl%0���7OA�Zp�K� <��{�o ��o^�������@A�Z���ү����ԑ��mչ�(��}�8��:I��WCZ޼���C�����L>"rq��ײ�VR:��T"���T�v	N��Imv7��7����G�D*�9�҄�z
^�َc�i=��p;�G�>U%Z���?N�j�m����T#��FA
M���%��bT�6��H|�V�y	P�-���C�._W��JJ
L@��ϔ*TY�ľa�5B���>��Q1-�����PA.D�i2Ϛ?j��1hM�#�̛��wi
S���*#r֑J$o!��l�W%<�#x6>�O�E^�?%_����Ǳ������_���m��PE
p�m�V;aJVc���m�\I0qqݐ����}�Y�Ј$�B"0��Γ臚�[�ș��%ZO��O�b�#��O�@��DJ(	�H�OP����=�O���AJ�S����p���O ��U��&	e�Z]ꦖX|U�^�_\@#�d�W]�	0>µh�>w^��Ys��`;� y�G�u�zD�3�I(�9֑ԢW�9_K�f����D_����r3����PBaRZ��S��iZܶ�X�ry��?�WR<�$vH�֞"�H$�B" �D(|E� ��鬤���v��[L����$"LC�P$0�Ĵ8]� -;~r9����[�����W��qD4μ�8�8��"������]�e�����d<^�Ȼ����^n��JQ�-��p�C,3"_�7��%�5����"�����s,Cɻb���6<�M�y���3�I?2�ג%:���}�㨬#������8z��y�*9��__�qt>���+z�{�L!`<�'���F��Q�F&�����~@�2�sC>]�H�q�� ��Ѫ ���������Cw7b9�K#1�VJ����Ɗ��ΉBA ���׬��N�w�0�׊���Xw��/q�t�'ϱC?��d�:z�Z+��S$[{N��[��    �!�� �
4�R`'y:>â(�ڽ�~�OB|<p)g� fTB�[�LQ	m#��o�}�#�<��RF0M�4�Z��T��A�����;Tl��W4�EL,�|5�"#:��RjQ�ھ�)+"�d[9<�H
n�[q�� &F�R!�z9�KP�F�衡��8��*)ƭ��^8���%Q��Pu��pA/Uw=O����5���o9^��fp��.�Q�"��À�q��'�e�e'���Ԫ{|LQ>H��]v�s�p��񑚛,X����T�AK��ʵo+��=�wE[L��Y���T�KkD+��*E^lI~&�/��׏�r �$�4���e��G@<��Uz����%�gu�����c�"=+�!D�F$�"�����o��(��K��m���u����/R|���wI+�J���l�V�6��'
����.6�%�<�#��@����]���6��v��vy����*t���j8\l8"�u���q�M"e���廢��`M�9���*;a�y���~�|�Oߟ�x檅S���ٽuc+>pN�zzb(�I�˹�&͎k�c�O��q�?h��&�2q�q����<D�c�i>A�p1r}09N�n�mr��O������{�T���H^�Ll�m��Ba�4NТt����@�x|����Z�wi���d�`u��
�9��lv$|��*���C$JL�����Оf�I+ĠZ�O#��dc��o��w��2�a�sD�\YA��ڟHE��:Rd	��Ǣ+)���pa��D7q+J��l�����/q��de�}�E��7A�@�M�38j���5H��?7\�\&�y�v(�V�B?|��uBo��ʛ�@_��Q3�.�`�
T?흝m�@v6�LI@rN�Z~$CiK}e�"�L��\��V4W�4��ӵڌ3�����
�Wt.��$���Y�*��r���^���u��@ƥf�;95�#+�}�t�i0�R��lAY+�)���Dh.�ڜ�m����ɭ��k�c6�%T�r��$(���/�dKV��!���,*�Nt���y��N����`[�$K�+	�Zn��F� 7�HU�k�k��c��u�����I��DbIB�@L��&Id�};} Ϣ޸��w��>��?����`tIA	~�a��NԔ	\O�Omwׯ��?��VK>����iDBA�]
�cA�e��F�D<uRT��>�]`<×��q���t�El#���^�G��	�PA�v^�T���]]!��%r�гT`0"ڵ$$��5c�W-I�)�ƾt��@�#��2��1�	���O4 n�D�Ѯ�I����B��Ė��	��l`s}���Hʜ����t�v�N������W;-~�/�}�,O�(��a`,C�
��d9�-T��hd��Ƌ&�����+���Xy�T��{�������*��/:!���.3�x���X��e��x�)g7Ð���^���*�q�2T�8sK�Y[^D���`r��Ӓ(�I�<�]��w%4!���c�"@���v�_��ĨoS�2����nVl���"@>{�q_��t���+,R��\�PSϔԄ��)T����c�@��r���LF*Pp��Y�z��B�r���5��.�����x��Y�la�y����SW�f���[M;�4Fݤ��}��� ��ڗ�NDD����p�#,N�����xZn�-� 3��9�y��&�wܫA�y�-�x�h��r�y"!"ƫ���h�����P�g:΀IJ����8mL����K�HKn��c��֨�Z|r%��~�.v��/�T"T�	� F��{��q�$0������]�+ؖ���V.���/�8*�����HB���8�+�q�§#�X;\I"��Kq�j�^Dj�嚢��N��Q/��`�th��1t�3.�'�{<� ?^[�c�Vp����m��zf�:._AB�ݍG�*�H.U �
?Tt	�y�rC��w�Uok�R�1j��JĨ�JtH�j�5~w믏^M%�ŋɑ�B���Wtr�>#�ib2���v��ܛq����D*Uw�F}�<��T"�M@�cy&G�z��7���W�)`|�ؑ;b�ԤsfS���0a��ۼ^��o�yJ��%\�NӔnS��1���9L�	����7|�ᯎ\��K��;�;�C绩Z���TA8R�#]����n58Rb#T��f�\���\�4���&}s~&�{�&��ڥU��T�H����`��5\LI��Cۢq�{WbN
5וdwIB(�G�X��	D��Mg5�����MH�o2wV�&��̘U��Z4��|����A'���-����C3�H"Uo� �˛AD�ڐ�����r%�^�T�ƨ�
&o:0Q���I���`N�K_Ɍ^=Z+P�y������Gm3O�i_��J�6����_�]� �#\��ؽ��YFM��$W8w��aK���`��+Rܶ�T���d�����b^Vߵ�V��0�C� �[I�y���˞����SO�_�<SdCmf2JE���s곫=^��oW�%_q9��H��F�"�
���b$´��?5���|AT����W*�DQ�����p���َ(oH{6���9�A�6�	��'C?�9�Z��|M����p�28�5:�f�k�22��e�.7��&�/<9�$�k���N��$�B��X(���4����2y���<�r��PT	Vl����CU���v��s҅xf��G1�(�-�ę�2\	�UÆ�\��;Ck�O��M#:���J�>���kM�3	�	(^�c�ZY���O�x,�[�=h��P�'0Aݏ�������e��ɯ���q��j�LI �F��:�
����A��o��T�3f.-�Ԗ_&�;�(��h�\ف�q�����x9|׆�H*�����8d葖��R���R>S�{6f������hM�o���SD	k:�*#C���/�&�P����;�0�2t0�k�u��:2���7\Y��?��{=WX�
B ��S��d���^��%��Q��s��ڿ��w>>�@:�R4R��tZ�@��LN���j&5���r���V�b,�]L<��?V]�O��������FG��E�mRx�:T;�>��˥�*R����p��K�#�a��'��b{���J
B@,��l�.b�{#�=L�.�������k|"�t�Ӈ�1��t�y���r�ܞ�a!�X�&�LmG%?�*O������?<��7��
d�Ze�E[������?'�Aㄬ~٫,��L���c��7�:!���L�0��zE��fgdI���t��;#�N��m0L��̃6�_7yĐ�jshIC����CBw��U�P���'leY�k/ԃ�ڝ���D��RP����X�KhE��&�l�gI��:��2ޘ�Z"���I���i�6�!���J��%<���ǳfz
�l���t2��������7�0�uo0�q��c�b%Pp�b��&n"ۼ��@m�|6���$ј�Xa�h$�шu:CWF+��tt\�d���e��
\fNo�J
J����݆y�M���,�� ����[|����{.vh��r��d�j�xO���;YWn��k~�c�F� 7�o1���XH�1ΓLq��X���-�"h��T��@,�c�.��?�yԘ�q_d��sS�\r�(��A!hE+$g��b�$|����w'gCא��F<=�4�r�ȹ���O�����RJ��V2���t���~���M�De��bڊ�������gΖ����}d?,��$��YHXR���LKI駙�*MEZ���Ď���J���K=��h���P�jni��	Ɇ�3�9��A�v�\p/;hr�
I��)�%�<�<�-��]n�.H�|��P5r������`��X��y?S��o��2�������IK�7�O�F�T���W�F'���k��.�T>E.��G&-U������*]Jd]0�N�<\]�P��V]���:}C:�g˧!9���=�)D)�9{���P�v�n����u�F�{��,'*J�"r�3jb�t��^���Q��    �J�GKEK�bW���W��{�,��4>nawa\��Z�XL��W�+b�xG^=��"��g�XiZg�xghB*�1�1$�^4W�u�4�n��dTiv�j�,)0��g�\�'�px�\�F���g����H�/�}��x�/���mx, �rt������
��`�*tv䤷0h���9Q�N�K��ѕ�;O��ꨩ��P���:E� V�q���4��CdY�\�\�r�J��"����q����8d����0���pLظA��8����\eG��Y�^2fK�l�d��&tKl������"`K�Kκ���/��xS���&�V�����ES��%�Q�tM_*���ψJ+Yދt��򭪳)��,hfC������a��vtIm-,Id
���["hY��� �m�Q���Q���H���őfuU#����j�!�O�FU�=�D ߹+/��@��`�A4	��v8p\�tޮ�-A���y�5�#$��0��6�T�[z=�P<���:.�?%!�]�DCH�qS?�.��V�����s�O�Zy����~�X#"�qE%���:��:���F��\P	g����A�ˆ���*.�i��#�װlU#�X�*r����&���L���iS\
����8|I��D*9R��oi=��2[��MPJ2�Z4�_�z9�_u(�2�(5�R���h�%��;	�c�_1O�r���Zy�D.QSbJ+N�BǠ��U��:%Ɩ��k�K
9��VM�XG�E�uF�uPQsQ9���;�#8u��m���:2�����N��O���:|�t��#$BLG�0���f�C�ҳ�B�\�� ������Pf�@9[X��`*�@������{��s<��4�6b3%%��Z��v��=�Z��T#�f���	�'|tas�W���V���tb-�	�-ʘ�k�4����Y-Ʀ�u�6�H$�z�4���'�2��%_�N<Lޔ��_���/݆�1�הoC&�4�D�0_�����(�y~�tU�G��{/#����k����3<�Ӗ!�N��%��յ�����_��C��������L���L��
�IW3�Jբ��j����pyt�_	nq��A�Mt�>�,|r�dc�G�Fj�Ep�c6A9i�5���ֽtm��x���A��d���$�h�ZL஧����iD�C[����猦�1k1��`��ܘ������m+��j�-},�"<�!`��,�����k�V�MK�^�@4~@�����v�L��,o)��^ƃt�=�t�(�K��2͛�CJ#W��D�)D��\�8}\��x���R@�v��i�~��3\�V���i-vI��;���8��#^�܋��� yq�+�U��������9c���R���ˏ\k%%��0��ۭ�vX��(t�s�]��73��9���R�X�3���N�Mh����z<鐍T���\Y�?�m8gc�yX����I4�A���,y��V���2�.6��f�/8y~ޯ��DKH	%k�He|�#%dZ}�����������ۗ|��"gwJ�l<��2O$���@���T�@���o))$��Q�wY����eD�mm�w���G),]���(1�>�f��ǘ��HQwy��-����U�#6B�/��L �fE�-:�e��Ϟ7?�%�0V�&�@��M��Zz�V$۶]��Әh��o��Vl���C��mW�G���1>���u��%��f�}�4��-ɍ�{�z�}�O��<O_&r=��-)$�_\}ֵ�Y�h�3k��N��s�A4�=���#R:B��B�4�/�
x�V��p gr�\���_�*����3t"�pm��;z��`�g^3�y�2Pp��U+��%n�S�b�&$�� �%��:;Af p��{y�X�bH)�O^N7�4�En�=�2��y��P|�g��1�ueE���q��Wӡ�p%���֋�qI@��hO���hE��F��^p���Dx�~�Ј���3{V��:s�� ���+:��J5��˵K2L����J�03㩱��E��!�]I��NVJ���38��.7�j�D[Q%]�8��~5�6�{X�,s�`��H����m���GN[��_���i �+7l�����07	�"�ӊ����cw�6�]72�%X�1�:��Dځ���p�+�{���O��m{g�`u������@ZQ ���d�P/�#��dS��+ϴ�D���f^���nE���r#1�>��T��ε�%�=��w���F���ĒN ڽ߆�����K�q�� ��l|�I'��;##&Ꝕ>=:*��*riR:]�Tu'*#�J�k�3�3���VUOIA�9�نt5����ɠ�5��s,5��S����M)��YjL"t&��X�/-�9�HC���M�(���eD%8bu��\!���o�l- �C�>�kڀ���J��F���\�����J��w:jt���D��ASv
��i�=m��j{cdI6Q�Dc�[���D�1��0�^z?���;z���ކ�n�3��W��`�*�ަ��&��/F��!���ף˹�B�t����
T���x*Pz\��y�!b�q�˃YŖ!On�C�F�I�����G����M���hsT�o�"�Y�1���"^�s��9�l���Å����>�/g3����U�%	����y��Lao�@s1'Ё�U5�Ca�*�gԚ[m�)��h�u�`Q	 u*6p�ȟ�VI�����l�d��ŠIt�'
Р��r�(&ſ��K�bU�Ϫ�
�':��
2�%0m�x�����FI!(�@<��D�҉�0��t��Q�y*{~�&"��W�`v�nc:�,QF;)|�1;ɏI�V�&�"qS�r_%�y%�5\�d�I��F�K"��X���
�����yt9��cנ�Ӣk�6-?H&�t�L��ȋИT�7t�ч�}nt���ݖ-]b��A��� (�1^�ښJ
˫��Y�I1�0���fᦒ(>�g�򍁥�E�m'���̣���sV�<C)�����:G�2�/Y�M��W�UoŬ��]%-%)�QUQ/_�w�B��^8�y=�a��L�8[� X�
����3fޓ����nB�k��b�R\���"*�q˒BgDU�L]�;�52+���+"�.D������g�ܡQ~�G	t��f��nė�/�N��t
=��۵���=�mH��^��P��?�3 Ȥ"k)���鉂�A���ux+�Y�UJ&���+l&��o���\�+4;�h�u�Ǐ˚a�a@i�c&�K��-]����v����9d,�7��./�pE�X��?�C]K]�y++�:��S�,rc�J	Vl���m��[��¹�.R�|���_��:�n���lU)g�3��`B9�LMz����&�b3[MBd�:�l��#E����oV6�T��(~�l]c*C�!z�9tu7�j�r��u%������u+Xye+�ΣW��~!yT4�W��PF��������V"���	�"ե]qe�D����f"B#WOıS'�r���D�}g�=C��s����0O`�N*�&P����V�y���썎�{�i߷�W!0O���T��y���W���	+���J�D@����e[�h�Vw;��0����-��n�C�m-��t�Bm0�H�n1���_�LX�ζ�{�=,�ߡ�����e�|���_R���DJ��#z^����<`=_lt��m]u.��B�i�����Er�'��������
N4��8��1��߶�2����\�Lj��.`�2� "�Rh�ُ���������D�U��
��g��;  �`��&������=~v`�׃�E������8�`�f,�@X���j���Ə>�uJFW�-�\̯x��#��D2o�K�iܷ��KA��ȣt���J-9�[�{������n�ZX#]����Ū�<�j����*Tפ̕u���6"ȍ�xD��w2C?w�Ɲc�L3X��-'q
G��gbc�� G�#"s��ƠʒSH�O��-�!���	:}���^�4������׮��hD�4N���7f�O�.��%��I(���*[W8�^�BBj.pD��c��^M}�H,�    a��fCͿZ4��:��_2R�=7�*��8�s���3!SPQ"��D�W����R�2��7���Y�x������X�������xxw�5?�E�#h̟|`:@�Y��O^�&�
�}P�i��E���1Fm��4�s
����D�F$��	��Bt��J���(�bMᶺ�4�D��f�FK�3X}�V��}�>�r袄����j�Ќ�ֻGD�p���p�����ԫ���wU��#EӐ+����a�rJ{��Ð�����ֈ*q���u�N��ʘ���CJ2�	��V�Ft�������0�����|\��]b*��&�J+:�	�!��?�XH������D��	D|+Ԫ��nE}���6_�M��[.3�h��܂����"������]s�'��\;��3:���1��H~��O^���Q�S��jv��X�|���h�~;�k���܊_��i��!���G$~�xzq����U�m�n@!����>�[]�Ո�2ߌfp^���K�1P@XW\�Λc��t<�z�/������%)F� �Ax�J��'����{�U�٪%�4��R�����QS��ͨby�/g�~�ld�<A"P�#\�Ss�fo+93��&������{�,�3V��{��]02��P�Ks�Ӻ�4���Nk�#	�	�cF���oI�Q��h����@����٣#�&�b�,tT3���B��(��T��S:�įS~��.�%���B��
����Q��%��,�6�G���tR'(*{����Tt~BR����H<�N$���l���R�O���������-��k:ӝrZ�=��%��%^���-2c,�}���ogϥ%�
H�vǩ�������5՝኎���`�$�ۑ��D�;4l�"��%u�ӨMIG��<@��D�F�PRk08z�d$`?�zw��'����FX�l+�Pp
c��Ws��A��8Vyfw�?����ʃ��0��q���o��(1�j�����_��쿑�yp�����Sl�!]��A ��5�3Ҕ��ޑb�Ŷ�m��
�����^�h�/�X�z}�S4nmm��0F��*�ڶ�a{�;C�uiK.u��˰�vRSN�T =�=�)@�6�h�u�V�Z��cC�E���|�៺�]nպ5vl�a�찱�	�4̥�Y�qǗ6���8-!6{,��D�F$�"�I�޶�����)��A���)RN^Ƃ����-:�#L�)?�B#%x�7���UAC���{q4- ̢a_R��I��X��:����B]������B�<�<Se�4~����[ylT�{���_v�G8�%����	%�`)���;���&~�]}o��^�=�%�����5��!��ܑI7"��ɂ0? @w�,�*�|��/�% ��l�J��'����_��Z30K���Q�=�֋"i;ǆ"6�OGh��4�VF[a��
�D!Hx��&Q[/*��jY�od]Gh�f]ѫC|������%m�en���L���r�T����Y����%F�5�nj4$���8O\�r���#���Й�~X�`�(.W;�'�<�ō߹�|��X��2�*�pa���:RU^T��}Gf�p��Q�/�#�G� �
?s��,Q�^���r�'c�>Y�H8���~��?�.5"�t2��К�<�)/�$�%_�Z��xTtq���Ό�����7-��'��ƺ!����3xSL�K��b��W҈$"%������C�#�޼4�����k��J|�k��|%����F�#a� ��l�[4b��ڝq�2�L�	h���
��\��f�ͥ��RL}�ܟ����J�!SQ"B#Y�J`�&���>F�64�3t�,h��])d�&͵w�ˍ�c��C`ٴ�$�>8I6n�\�X��=��@Acj20����B�
����{�Tg�p�ň�][Q�U	���8�浪�Yr��
fF�4쁏�\��T[=��H}P)�'%�}�1�
�L.���
ׄU(� 2nb5��A\���1�s�u8J-�H�oNo�8%��
Q�7uCr�V"G�<�g���Y���\곬���("C� {ٵ�]�[�U٣n�M��$$t�H�������aD�Z��k�gKֆ�9y[�f"�����U�d�⍈��>p���Ҽ��f����8����$h�"���8N��/�i{����?t޺HzW���	#s�Y3�+��Kp�u�m-�6�·8V2Gގ?�Z���������Ov��ꖽ��,g{<�t3"�4򄏥�ɜ�A��$7[޳%˔��] m�X~�L@�Z
�b'ݾ�{��HY(ǡ���:)Q���� ������&�>5~��5�q��O�V<�q_��u��
/��g�L+�E�)��4����#to�2w�1�_e��b�Y�FJ�x6:�FhG�l�SU�ࠌ;V����ו�X��1i�&���Hº��S:�c"�Ƥq�\�e�dα��<\0���N��'1+vy�,���$B��R��ze/2=Y��J�b*�N�%�j�RKJX������a	��7���\�~h;�L+?�	<�,�bp��t�?�mhD$O�g�wv��k頣>xL���g��/)�Q�9�� gNN�2������������>�_�W���X�ҷ��j��sߢ:@x���]w����0�T�1�r?By��c����.;w����5%>v�Ʊ�EF�����NW�o�k���/�J`q"0��!X�F$�FyF�#�1�{F1�����.�d��x¨�+;H\[�t����[�AI(щd4�?���R%F$�v�ݼ��㘁G������A+V0}2
��5��*�
 9�q�?���7!c�߅a@�/��ѵ���pN�.ny���E������D��M�U0��N���@��_�}�T�|�x����P*K���Q0��X+��_��;�~�CiD#�
��Jd�R�F4O4hY�S���mt	��*ȹ)���[+��t�"���_�|dH���S�j��[�9���K ��a\�'Sy4��5��L���&�����>��FI���e�ͯ���l��lZ{�H%�4��R�H �'+��Y��?ȑ<~��i�~JxDx�ײ3t��=t�c�=yI���Pl�V��+��q���/��5�4�m�L��Cq�b�ն�g��㺫Y�B��.�3����u�>x��c*?� ! ���XO��u� ��[�)n���xB�,���L$�P:�w�
��֊��YJZ��w�� �j��F�Ưg&L�p�ZQ:�	�g�Ix���B�"y>,'bK	�����筅�Ԋ��􋐪�4��`si����3|��)�:m����ol�Jp�u'`�1ln	WE�5��q�]H��E��0�T���j:��38�R��P�����+�LQ���� �Vt��,������r'uٴ>�-��� �H�hYg��$��3t�:�6
!�_��B�;YB���h#��za�� ���Z�}W.�ċk3�\����бiY̭L�kxSJ�����yWl�"o�j�pF+�ٙ��׶������:N*����F_F���*R5Om'����<.bE��(�YlZ�H(���4ç6���/�Ԋ=S�d��N���8�5[�[#T݉�.�m��IӤ[џ���ꊅ!��� �_�P5�з�D���T���X������V�R���c�u���*\������)޸�K� �:xn�/�ĸt��ݥ�n�R�֜�yk���8�͍���� �lZ���s]���F2��Z��4+6B9�	[/l�L�qf���7��9%R���C~A�I��E�@�oE`Jp¦�xw����7�K��Z��*	���Ah93_RP��{�<�"����[�[�j����ߩ-�	�R;ZW�#��U��6�i�d��M-1��XF�$�I�'+҉�4]�.���]^}��Vl�k�ӈ�58�\�    �l�ڮ�Q=���S����:-�[�Nd�	�cm�惍��p|hb��pE/ͭ���1")H������L�����r�b	V�
сq��z�^�E"�k����_���y�2E�i�6(	�^\.�S$�#�I�B_�9���ғ���kg����FgA	g��{�^ �t��� G�ÏI�tC�fl�j|t�E�ːx�̳a���N_�b�$q}]5�J�3<��R��[dx������{�����ƍE�#�"8���2�W�	-�=d�ʐ@��<l�C�u��&�\��e�Ģ����`��a��%��v������NZm��-�#B�N$�0�k���BtN[Y���\�#���\��,��D���
��!�EՐMD�ޝ-�Æ�)_o�*�ȸ���n�E�f�Vv�Y�D�y�t�yYf�����d��e�����#_�y���d��275���9�$wֳ��6H��4.	���u!��edNr+-�,LG��n4�:nm�]�\�_��m�Ҍ���z6��T���9|�$�AH��{�\��e�?/gjK�x`ǧ�֞��c
#mw\����NV#K%LP��'5!� 2j�T'k�'�|�r�S*�(!�w�|���Hkq�b�R���{���!L.��0��� G��(���k��aP"�m��Er1i�cS�J(#8�q�65q��#������_|Í1!#�"8?�Ҏ&�k�V۲�'׾ƫu�F��XG��P����[OO �t�d)h�NY��) [:�Q*�H2�g�����<jN-[#�Z�x���lV���F$!b������Eˏ���8���5��q�e��HfܴP��c��jeŕ��>߿Q��c	����f�Rj����	g�bM���>}˫ʬDF����Ɓ�W��cu��/���������8k�Fd2�H$�ǹ��D�i�҃>���NtA����e�W�j�؋O$"�D`q��uO]-�͘�/]��4 !���p�	=?��y��ÎD�bP~�������T��Y<H�7]�]-Z��V�.>�j�n�ͳ���$ p3g�2q4��ձv��,-��.�-�
���Zܪ��%ޢ�,Ol���p<`�v�?߾n�/��ӕD����fs�X��mz���~��}%#�t�C�;�#\�K�����բ�,jeuh*x�V4%<�c��L�Lm�!S�����v6���y�[�U�pA?;�(4�S׈8�����������X�V/�
T�]�:���7"Qm������M�?�σ���8\-�������O���d.q���zD��3VϜ�D;zɿ��錮��LE��H"S���uC�a�s�o�R�zhq)Wv%���U(#g6&C�4�r�\`I!U����|��j���9�W�jZ:�M��v<�!����~���1䌵���r��
7v#&\`�`�V~$��+,�z��� 5�L��1,U"��	�l�=N^)/KKy����e���*4"8�����::��۰���a���v2<�U��}L��L��������i�{��$��2�=�����V��?XCx���<���U#
J v�-l�@�3Y%F4Zg,w�W� ���N�7Xok�LAD<�s�eݴ�؋b�蠢!���z(�^B#r)��;�~FTX�Z.s#GW*���3�������8������G]�a�c�U�b�7����	��T��"oC"e|��絧�n�0CFC�ۙ��`���U�#umB��ğ����T��a5�Y�"���f��Uf�֯��u��q��fla�����͒�J�֊Т����w�� ���G�l2N�6s-������������~�-Nv]�0��ر��?��$�N���xn�������v�غ3�^�.�<s6�\dա
��^Z�c#��~9E�X'QBR���j�>�bkx��s�E܂���^�-���Y�d`jXQ����d`.�ޛ߱.dm?ވD�	�~E�	�H,�J�sk����ɷ��R���7�s��XQM:�j珦��.��+'�#:�g�o�"�}*D�+X��bSZ69��Ey�#�؟]�+Є����8�8�.����\I(���L�I0��g�D�Z��F��_�S�T��x���Dj��f
˰���d+�#��E�q	w.���p�24�K�;Jt�Z��4qT���,���_Ǐ���%�q���H�zG� �h��-���?Oy����-�]w�KzB.m���n3:�7֒��u�d�p#G���Rv!mNu)��]Hs3]0ږT	2be�6� 	���ޣ,ؕ�����61Љ�kn/�q�RЉx}��6R�%1�%�J9Kt�L��2�\��q?��	E=:fl�����u�)2<�f,C'_��s�%�	�a��̕�p}��p^��Kt��w_H��pLB���ʝۑ���M%�a@-��CԹ��T��@G�7����M���
T��ޚ��<p���ZIns\e�_?�����X��r�:��NԌ#�@ԙ~i��1�u��JK���a�w5�|�N��0%3�+�8b����(T\���p�,���#�\��'�i���\G����^᫛�*_A�t�J����ȅ*�U�� K��|]���"���[k��.K'"�N}��ȇ�Ĺ�A6Ѯ��)���3r��v"B��<{�7X{�N��~�^��*����H�8����+���5���q2!��J%�{�8��T�x�G�����q�>5� ����䚫1k`�8ޞ� F.nG?JJA	0~�5]\��^,�e��M��������g�����WI#�P
L`6�E6} .�C�]�>i���goK�J��S�=��ު{X�"*���܊�X@r6�k��s/��4S%k(O��m�֌ �ۜJ	5	�o�L�Kt$�L������[7G�8�|yTtɐ�s��I���b��u�%�q�e��D��9�F� �Ӣ�0\���t[��j�2�|c��j�u�H��W���Ʈ���b�G�ђӚ[�������<"���]g�"F�@����}��pE'�l���*�Z<Ǳ+��;=���}���t�W�&p�2T���V�~o����	fw�r������A�PA*/�Ms5d Qa����������/�:�u&6��ȇ���a2JE���*��d=�nAl"����� E��_�7-��@��n�ݧH�5���u!h��{t�6��%X���/���eBWs��H��=o��Kp�J��\�&kw\��y�$/B���oIߧE[^|�/ɵi�H�=7RM�u���%��U�.��_;'͍yr\�T�E�ĞC��5#N�j	R4��ږ����z6l����Z��%��(�U?�$!� �>�>[�y�V��]�c�s��r��ߑo�u�k�"Q�)�-�k��/��:��~��*�;��׾h��8-��urnJ�����|�4=K#���6/�+PE���Mpĳ�t3s���]�l�GҔ%��w]"c�J?��v·#W�7��I�e]�3X�E�c�-���u��>ِ._���=��&��hK���:�j�mM�rF��e��1�ٸ��,s���b))�I 7)�n�'W��A���<�(YO�6n�^(��Z�¸{{���ӛ�k�Z��/�r�j�\�?.�E+�ۏ�I��Fy{�����*ݿ����ekL#PpS�4�A:�6�.�4���9��Xg��.ǰ�]�Р�(��m�ǳ��{pg�U��0N���1EX��4l�!�0�����2��i��\	A�GTS[�V��Þ�|�~]�ԏ��m�>�hGl�Nc���C���"d������M	Mޯ�'Q��Ð/P5�k��8�K9_���G(c3T�w���#��5"��{����\T��e$7{�CZ�����K���EW2���qea�V0c��I��-����|����KTr�M���H$VSΗ�[\x��i9P���d����"M|�@�&`��W���� ��m-�Ӎ������3v<5{�˙߼(�u>H0Z:a\3[�T��c��X���*���*78�.��rg�ftֺ�����셌Pa"��`%0�@��آE0pH��    H�\����ꪕ8�I���|����L�GK�_�$�O�yB��e�)$i<��mK���/Z[q@���t��t���2R��oq��/���h���0��>�圄~̊�4"���^�^;��77��p�nwx'�{���4{R�4���O�Id
L@~?�'1fO�Ԉ6�:�������������鲢�bS�3Ј$r��Lԑ[O!Z�#��-R���rhn�}�Gt
��n߂mD�8L_h8�<�y���D��
+��씏��視�=N�f$����b�R	MH2nZ�O�lDu`�[+{jr�B|���[?5QIDH�Abe:GE�ԊP;�p�#�-h�����.�)�U��t����"T�h}�L��<�ǫKJ8��/�H�n���ʭ����P�8��y'�f��k�}gJ!i��*;OW�i�X�f����D4$F��f.h��-8����s��C��Uj�\�Vb#T��~�Z�RV�7T�s.�MI���D��0F�ӡ���u��Im��a ݭ/&��ƽ��38b�oN`�&+BP���JF�Q�[�S�#z}�!�h�։+Y0��l/!.a�Z�?�-�Z���;d�@˦�1O��J�`Ů��e�k-\���o��L'�az�u�x=C�K�73��\�%v��Z���ߤ�_�\���ᐮ]()�@�G������;2̐��H�J��i���%!PX��9����.�4��Q��I����*�/��X^o�n .9/�N$d��̣�\M�2kG�2.V�ܝer��#wr������������o�%^v^�Y�����|�MmF�	o��>k�"�}�;S�v��.�in�n��(É���g�w�zD�D
Pxdj��;9P9(l�Xy| /�7�IO��N��PF��pn)A�����vN{۝ԁ|�2�GOq�s��O1�sWyq��=nN���Xt��T�*T���~=>�c���d$���s?l�Z(X��ǚ��	{[� {�۰=O�9o~��&��Fh�����V������0��pt��YzF����l�{�Kd
�n�3�d��t�&P<�[��T�7zA�a�?�8`�z�����E9%�DF�D"��$(��j}��A�f���[��'�ɉ�%X��t��T�$I�Q���]��DQ��<�9�G.�L��zi���U��l"�պF�ʍ"k��)��Gd�v��z�M��8��f�*Zh�a^�.�K���Z����� ;�&��f^o����R �x���"=�Du�$��Z�?��m��p��o	��5�{;�k�e2y٤T��ӹkr�`�$|j��mo�	��Lό�V�rV�l�S;�����G��Y4�;���Q/�Xd+��Q4�����K-,#
B���<���;�RA��C��ċ����u]�^��������;�k�o##`�nG� d�bN�����xC�Hެ?����tO�`��~�)����H�i�S]���		�\���8PI�A���y5�۩��� O)�Y<so�g����,����`��C�����d���iU�f������D��W�ڑ�ƭ�{��75��e��Hma���&A"�^˦M'��t�Q[_H4B,;g:����H	"E��%�Wi��^KH�-.U�&���&�*�`�Y�
'W�$�F�'�kmBǈH����u?��x�hQ���2;��-I</ǹ��v��o��LB(D��9\!XR\(O#tб*���q9?��t���VҺA�6�����[������ƍ�q��ڸ��� �Z:��l��B�A�/�o�/R���8���f�X|�� ��N�U,H"��W��g-%>" x������_C���D���i{d��s>^��3Bxu�.�W���x,��z�����Lt�Ly���cУ@��\�hee��+�ir�.���4Bnn�Yk��Oһ�+�0�n�}Eĩ�����H�	�A*�r��Ҹ��� V�v�&��x(S=B
p1O�8�k�_�:ݴ�Z���~�~���?ǓĀ�z�G$�B" ��v|��>s'O@�>o97��U�t�>~�Ǉ�z	��l�P5�8;�,�D�
3,��+޴�J�@9�mi��z��XÛ%j��h�w�\-3�@�Ҝw�&��<��dCã��$�z�u�����N>.kb��.h;�m��m�J�����>֐�{�_��R|`�T��]dFMnd㉟Q~��D���5�c�]\N>�B�C�x�tvX>kY+�hV�9�"��>���N�8a*�i3 ]�iG�s��p� �/^˜�>�nQ����6�Y�_-ڑ*ou!y�� �\�u�;\ׄ3#(���6GG�ǃ�l-]�qZ�m�������@�tDd�J&2;�Mp��j�W$����
���$)ͻ�V�',Cy7�����ӵd1��2	�����A�HB ������Od��K&�4��m��Y�di�F�)-Rt\J��2YH&��H导�MH
nr�����6��-�ԕR��;�*T�s�cm��qkDs�Z2�O ;j����q
���{�?X�pQ	�4�˘��bT��A*�t�q�%�/��{\�(�c4
�씭51���z�1|nJuIB((��Kwk��:y�ƳRhմ�G�Gh�D����u̷��ǋ��t<�R��m}��*Hήm�<����+i�Pi8�m��^C���w,}Sb�I0�N��=\�4�G�J!qn�ZF!f��e���H��������暡�dହ����j
32嚎��X���x%
>�F������L4"�$��"9��j�c��T�#؅���#�jM�f�q\�-�Wⱏ��QID����[bzWkey2��Ȅ=f&H�>O�ǲZ.	���3����r½	B'v#��$m����<G]Wp^x��
�Z��~��F��"�QrDyX��w��/}��h�o}�<��{�b4��������᧸a467B.%��D%py!@7=��v[;΄�"�z诼^���/[�%%!IU%0�E�![���c�'��HC��3�+�>�k�N�iRmV���N:7�����u�����If��0O��ʉ��8f�z+��|�9��Kmr�/������������ϭ��ǚ��7�������M�����O�j.CGZ���h("u������k\B����5�_�����%������o�76����ؘ��w,�ɱ�iE�`�.[m�M�Z{%��V+	^[{<�����Q���+l@B7�p��֔������yƻ/�ZK���=�C<,��iF9\n�-q*���9Y2!׆��u��g�Ӕ=]�2���b*~�H�؊>8�� �VE����Y�/�X\�1���
� �+M��A�Z	����jANȈ�a�n��4H�Y�m���Ϙx��T2�9��\~�L��0����i�d/�A:ytl��V���y��,�%p:�犏�(��$���jx�O��fV��(�?��k��)�ЈpV���ڣf0��f �odQ��ژ�3�*T��vP:�1�@d�j6R?8�ݣb��&�]v�mBG�`tR	��>�*eܲ]Z�kL��s��f�(H?�>;p�q��t��Z�[bٙ��r���2�����'��<Kʤ]f�c%��N�������Ю�ތf0c#�I.<�N�X�	���5�fIm9 %X�:Fj6<�<L�N����J�Ci�	�f?�d����a�$��P�sn�g��_ߵ� �ɱ>"j�v�Fα����5A�">���$���c'��.O�I�g\!�ȿ�x�G����ѝى&i���m�{�ɥfC��oՇ�pE�Ε����sP΁g����Ĺ�G��f�4���o��-t���uF/����#���X�.$4] �T���k����v�_�T�߼|�js�W
�k��܅�����Rǃa��H�^���Zy�L��Z��Μ)�h0��;���H�#�?hf}�5�9r_ѹ�Kt>��z��@���Hd��0�:rbt�q̉��8a����v�3^$��" ;	\�8��8�pw��O��"�pA+x1��I    ��sw�h����EA�\a��
�H��xs.(S�ؑi�AR���5���RI�$�
c'��ދ�Ѕ��OU�;\�ް6]���J�W8�g��*W�k�g��1�&�@�r��V��36Cg�g��:�^�oZ��v����U�l%�K�B97��3�w�(78ᵼ贵�P�m
�B$kE������.@��R톏o�r��t"�He-`ژ�Լ�����v�_���;܆��?�	h,�a��F��y�`�x�g���yme�����[Q����@�<�׌�
-�&�ט^Ya�h	�	(~r�XRm�נ ��ќ'~��s&���t��ɗ���	0���Ok �V�G��nQA��p>�Iy����|�'_~�L&R"i��R����������+.uN�x�����R̒�Hs��Ţ̺���L���l<��5��r��]�r�����P�3�dN4���ô�0$�][���\([�}���)��P*�R2���*8O\�)��12�6;$j�w�A]d��v=pIDi(	�0W�jz�X��QEڃ�e-�}XC�T���X�ҵ�F.�/�6܋鸤o?d8�]-*	0>�}_!dY1sA'�p�Bm|^��fy��|3�/�)lR�WuO��8-�k<w��4�����W�)��^wc;�����Ag}��;��\n�kG�@�3|ftmC�����0.�saEl:�;�Q��w��)i(��+^���OUu�AT������Xxz��(�a�����zX���D���8L �M&=�(G�H"�cEZ"����4#(#c��ޏ&�cq���\7�<���_�OL�B4q�c����8��L-qt���U��9c�ɏE����4"�d��|7� Tx�.U��0�<����!!4b4;@͐wL� *��\��銹��*�~��$�">�'w_g�B-*�w-i1�G/)&�j�����P#*J$ַFsC�|�jz�=��3і��G��<A#R����(@��&�D�/��f���q#"�F���'X�dB-�N�>���Q��{|�舐҉dV�bZǺՇqlLuF�7(�<ot%^�NX�?ɞW�W8�������Ot��fڼDq�I>Dv��)?i�
#���켌�2'It�բt�2%%���8�r�/��=�#V�s�Һ%?Ԣh�:ađ�d�.ׁ�����(1����mO+�Ѹce�,�%���y�:j��e�DGp�*tR�H����}�� !?Lؒ�}_--���q��J�
m��O����H��G�������뚑Pb�HNtt���@�w��[z�߾ҧ�ڔ$�����@��KR��$����YZ�b7�
4"���5x��� �����]�vI�|�LF��&�)�������(�2��c�{ƞr!��(�f�V����-��g�G�Y��5�D�d�	$|<法�M恙[\�7���44���4HI�)D��ύm���(��
��vW��t������8�d� ��-�Y�X-��jUWʠ���މ`|�G��>ttڌ{�=�^���C����S��`�Χ�<���WNy�S
1���F6\\oN獌�Ł#� e�� �I���K1>����G����PE.w�V��D#��&�E��p����?Ǣ�?dO׭�#: �T��ИY�P�-l#�E/��"�F�|#�8Z��'g�gJB)�j����Y�/_[v������	-?�~��PA���dmZ��=���<y��++��a]+R�Ő��m��l�&9)���D����3\�y����6���mE��F,������s�ۯ���ڍ��)@�M�H0��+P�/��@F��w�����/��%�%Z�	��IԌ�r+����a���	8c@y��+���5]��$�D��4�$�\�ڽԵ4�}����d,p;�ZT�36�@��f�.I%��x�Is%4-�������r\Q� �Q����!�k"���Hz:b��%)#�"�[�R��I�2Q�9��Hs���I�Fu�^���*�����E�����vt���,�E�Ԡ�`+|R� %��0=��&W�b�E-��l9(����WUJ	ϣB<{{�
o�g�p_��9g�����؞��D$�Javjy�%c1�B�J $펟�-7�
�U�"��6��h�ȣ �ǏA'wK5�$��^�&ݙH�q�*��%��ｮ��ZZLjx�W�4��|s.��`�.L�755�.gd�T��ޠk_n�����kUKB����[C"���R��ߊ�A޻s<#�ұ�q�_>wX�jk��:Q1!�<��7�q
T/��*HΎK!mNk�H7P�"0we������2b�U7�&9y�\�����b�UE����:\?�d����pEx���j��M�]�hi��d�D�E�-�D2B%� ��Z�zˏ��+ܖK�.�v��Q/�	,3�H2.�&g����(2�Ry�TX���K�oLE����X�*�>�Q!ׇa��<��k����Өei�b��"D�FN��M̩�
\7�H�W\@�[:t2PU�Bn�V�U� ��@qwq�(ٳЄ]@����o�j���wZNk�@����}ۖ�8���W�Ƌ�UUtYn��-�<m����q2"7�퇞��r$(H$���T}3�K�(�gG�W	��H��c�Ve��̄78�,�\lXWK�?����y/���ۄ�L�|�1K�i�<�"6���A�XW��=�2�=VH��=i��D�����%o?[����ώh{��$9f�C��ٹ��FB�ʍv��A0�c�d�Q�5�2�}�lX�.~��dԑ��n�es|E��!��%4���D��[2C�N2����!�Q�t�R�/�2�)I��Wը\'�ǈ�o���u��>�D��܈�ġ翮��N6.r=�萄�㏬���1H��
@�X��Q ��F2��6��8��ڶ���جS��v�&#	�Dי����Gq ��Q���͗��ͱ�H�b�
�v:(Z��T�T�����]������xY�4�opC+x�Ep�C�f�^fD; �=���������k����	nh�h��Yq��$��@���V��g�νJ�#�]S�nS�L<zuQ]��~huu<}^���y�ܜ��s��n��~T_ ~؛�C�`K�Z��-u�opEk�Gm~�6��^�B�������?Y�d��M.W'Z��]�zqi3���e* 0D���2s��w/�̡�$p1�l|+�wT/e�Qۀ[+�0�#�,��w�L�3`t.E�_��6:{��w�����*Ij��Ͷ����� `g5����k��ެ�e^��IX֧��F(�G���ԉ��W@#�U�@7�����/�[�5�#:�;_�Z���ʪ�.\Ne��-�B6l�j�=:M���Z	�C/ퟀN���!ֲf�����N0cV����ƪj���<�^�7ھ�g�p|ړ����̨�%�4���R�S���1tg/!_ί�lu�?�������1�z�БFm�џx]��H8`�h�É9�z�=K�����j����A �%���	��a&ަG�'Q>�|�&G:V�4�������]�-�P����
w�It����q��mF��?ew8R�	��q#�
ȹ-΍�� ^�#	�is�r�o��m���7p��Xy g��Qg�#�~�/rp�+Ԑ�;3	v!�l�2���F�Z1ځ��9�p����1
:��ɱ��%y�<@��Rvc�+��(>�ȼ,�f����#o�̫��sߺ����\������M�2���_dE�I^6�hl����@�k��Å<����;}�^� {���Z;���m��B�~�[�ճ4�!	��X�;���F[G�܆�b���#l;л��N�TX6X99`�?Sw��Zr�z�7p<�M+T>1Ջl�E�܎�n���Z0���_��Կ����|�?��G�����-���Z�k����>t�E}�UR&
�ĬK� 6��k    {1�z�����R( �n��d��^��P":���a�����V��s=7��)N;9�o���+���
�� �Z����䍞7�t ����M�r��׽�v�����
�������#l��j��Gl�A��!�vJ�{TE��yU��+WI����j��z�z��ȶ��ƻ�)����C�X��'4�z�|Q&R��;'��H.F�r���l̞EVcB`����#Υ�<F':�����=8�9��*�/��:��6.#�3ս�i�5�x�0��7��;���\��"�Éj�O4l/,�Ҵ�L�VWq^)��uh���^H�m<A4��ڔn��	jv��rm��_Bdy͟�P�]A�GO����O�:D��..oaF7|9�]���5�it<���^�F}���I͞��bGڊ�fA{���te�hi崬�W(Ez�I��ja"Z��n)Ԫ��2�@�19^��%^6��=㞸>q7��ш٠�̂���Ё���*ԥ-�yS�����p席qP؉fĊQ�b5D��\@u���S
v5���
��6Q����G�,���`B-,P>�0s�#@M�U�܏�����Z7� ]o� ��6T�����O�y��?Qf�{�0s�K�`bJ$���"���E�C8�P'H ��{/;��gzJ=�j���7�تG{+Y�V�1r�ޱg�Ǯ 
"���[ײz`��f�.�0���6���E$�&��bƻp�Y�m���=J���젒IhKe8�?v�0k����[XPEO�%-܆�V���U�\����C�,ڬ!,`�h�~P\	�q��čTc���M�WE����WaB-���Վ�;L�n�m�=e�^�5842��j���]>������K:T��*�c"�ޖmg�
���ym�D��-f8�@��C�*�3؜�=��#X�]�ݮ���ԟ�
tw�=�	��₄�7Ǔ�Ao�J-z�d�)p��y����ל������%P�B���Ѓ�(�rS���u�c��z��J�#nv�!֩W� ���r���ޗ���z��8���%��g���"o�J�*�]B���ܨ@*PqKM�Z���#p������~�������ڗ\s���9
��Bn�]�%�-�a�����H7l�� $?�6�ȴB�����UF��G� �� ��hۂ�b��P���	*R7���8H�l����H����U7��'r�"��9wpR`صP�ԛ�k�I���������pF@�h�N^].�xG�����<!�>Z�)LQ�"g��]*C��}Lq<��(��[�g4���.��iG�B:��,G�C��5A-�D+4�l,�]:�a����A�~7���QT��������\�|n9�d�l�D����vAjl[ޚ5u���f-x��~^�+j!��U��0y� G���(<_\�^/��i���+:��hq�5�C�C#���䆞�g���F<9X���g�/�usX�~�Zs�t��S��ϡ�|[k<�4c
	J(�Cɰ����u�.��%A����+�s$7�z��lo4�\Pk}5bX=Y��`'\$ӈژ_���٪-�c���<�!��GE��9M��;���B�����G9��yq�C;_:�#��B��c� a���`�~����tc׎�;{mr
(�\��,$788���5�����2�Wc����0��:(d7����L�DY�uu���-�z�N:�zZ�o"��V�Ck����'��ԯ��a;f�M���� /I:��#t|�-(�&��Q:d�M��PC.��2��S�m;�-�Sa���a?Xۧ߇�F"c�T(�
���E��	��yg�I����"�}U¬�Ҁ�e���%��-�����'�s?!�jq��%�B�.�Q��%�i)a*��Ic���ߏ,]�ַ�܀�C���Y�b0I��]0��й����N���
��p�,,�j�y����T,t�K��Cnl�N��C&���+�h��A�qgn���~��F�jX���p����'�"p3��[F�f��T��v�^,�M�A0����F�P"U0�ٶH���lPU��?Lw�Z�����[�!�mT��n�Nؠw'��w8�������ݭ��o�^klUԫ�.��F��^�%��FBU�PS-U7`[�g�}�ꞲD�L�K���9���,��̮o�/�,o��@��w���ࣄ	j-�@2����_M�.u�J��W�Á����u� ��X��2��ZQ*����9X�*���-����_U���X  >T>�d���5�[6�V���G�-�mt\9x��9�-�$��o/�'��{��J0m�	�0#��|�=�^�����?�8����4m܀�o�������)����}�ЕQ�8�C�M������3+8!4����\�{P�j�_/�}yVֹ vC�١�8l�k��#�t>��r����OH�XBr�EX�K�t��ǣ�|Ѱ���x;�߷�y0C%М`�_��j�:��;�R���Ŋ�ۼ�PC.��ZP��ZW��m�<|!��Ɂ��V�� 4�,��|G�%
]}����v�,��֒o������2��4�ԅ9��1�WetfS�W@����3o9�	f�3����N���
�CP����L,�2O�nsC��f��F�E�u-�~`�� ����jSno�T�����Ց�k�g�+��]���t���q
�;�	�W���h�on'�$,��M����� n�x��	7t(�{8 �޴��^C�>����,�|���Ǫ�́��P�Ht��LK���zES}	����?ֶr_9��`�*�G� j.�om��]UAR�w����YX9\e�V��R�����K�Z�{D��F�����	l�P���L��bMҥ qs"�R���e٭�ސ�8��^`�x�xk�.�r�ɦ�J���9��ՠB�=�Ӆ�b2�R),k ��/� v��f!r��jit���]���J�w���ړ��*4"8dp�Q����t�q����UO�:PC��9��☍�9��+񅮓t	�p[�0��,������)Γ�N��zAٕ�+��F� �'zq�x�����7���V���}]��L/��*7�z��teB���9�&����f�\�5h@.U͵ B֭��D��5�~?�~L׏���~��{�� �@/���� w�z~�~���j���"�Ǘ۰\�&�Q�eS�&��2�h�)6!���F�����+|^����t��cM{���"�	k�Wn6�,����-�a;]Ǩ[�n��:������C��W���NW�đ?��n)�H�H�*�7���In0!ɕs��\��?q�n�s���\҇d`�,'�:v�������ħ��bԗ�m�87�6�DfA���j�i=	l��5k#�ȿ��	m�L���	Iʚ|C|5�(�Xmb.�k���ڔk�b/�ϭ�Jn+�CKf�K�1+��w=X�5i�b�׸�Ap��`�fSD��a��4�ӏ�up@j�U
M��=� ����t3�Z�=���[X��80�;�2H�ʏ����H��X���]N���@��q7ALe��m>��n�GNTW?�N�0�t�K���隷T%�}�ev5�E��F�M�_W�;���9�'d>,S���+�G��h4O%�� �������'Ki��'���?0E�kV��8�p�`�B�i���D�0K�^/g9W�_M��p�q�-�
��!�����ȳ"��hj�J�.q�4�!�C��c�P"��5�
'D�ءs�ω�^��Vc!	�1p�N��3�,�zg�A�6JS��bzW�~��h`�ކ� �f�gb�fɒ�T������r�::����}}��Ac�2�5�ئ{�eN]����yA�G�h�`�\�X�9�`H�4!g�}��4�TB_H�ɡ�}���+T26��f(����P�\�('���x=!c��7&���6o'��!�:U�"�z�i;vʤ�W�K����OʨP���fذ�M1଒�    ���2�,����v��ړ���cjH�83\'位��J��˙IW�&~�� 7�Iį�t<���6~�����%�� ��E�w#�kPE.Wf���uP��hjVW⤡�'xˮl�v9�@Ž=lv�Ǯ@����ԅ�����t�K�#U��jHI-/zkR��o�a�f~ܡbCձHLR)0u�c'#�A��DU0�g�޼	�U��U���v��XI��=z[ۃsj�,D��W
"x-�z�ܽW(6'���
�BcS�G��w<̀��zT��%��l�aKPO}��ݠsV��`�&���]�2M�L�'��R7&�	ىp��Yc��n��u6V|�����}8M�N��o�4��.S�}jk�pc�Ċ
3������qSO�@��t����0���QcS�	o�k��;|��I��+:�в���)��i`��,����,��m`#[,��{�X�a�*wd52XbyI��{N`�f���<�oy��<�غMն�c��z�X�	��j$��Ńb;:�uٲ���Q#c翼���0���k�jH��0�eʡJx�6�d;��*񽭏�P��Yҍ	�R u	�$KMx��[�Py��>6R^~�}�E��~`*i46��&9xd�z�1|4@���+vV6�=��*��:?'��D����/�ʓ��/����Vn_X����h&X��<���k�6�����L��S�N$O|�dŌ��Бd�T,^�A��/+�%痂B�6cC���.2$��8U��D�4�=��c+n)p�鞱��{7`R䡍0�~�0���v�V`j��0m��E���ٷ�!�x9Bv��f���PY���0���ރ������:?f<q6�ZFrp�(��i���+�JJ�A�R\�끵����:<����c���-	�P�*3�[;r����x���m'��k�Ÿ�A[�u���Th~��֍���H��"E�UhB~>h+7�p�\��E]�8�$�(�ᴬ��x��6pW���%����
0��#�w��%~_!��St��wYB�
����y�$�u20��c�^��L�k9E��5�E@�5�|���P�z�3���}�TY��-�mpr�Cm��X#�S�*�����2��Kv��@����XY ���Y�ʺ;DXLY���5�w����纷ʱE���~^fE.#ħ������6gu\�������0 7A������k������f�ݗ���UbzK���5l�)LS�a���IS[�Z^���oQ+�&���v�� K�!�<U[qؑ�ֲ_��^��~5h�]��f�U�h@5�.D?z˺w->2�L�4{�� ������Xp{�'0��/~�֏��`2��-	���<u~����)7 |_apK��t&�}C��4yAY�8B��#��gC6�B9b&`��v��H'ه��-�\H�ܚ��(��!u!�@9��g5�L���l��96B9��E�i�8(H��JU����[� ذ1:~�h��|�qX�Զ�d*]�eB%�ZA�ݹ,M(�ў�z��G^F����m�����{k9��*QѪ�3_�r��TFO] ����-X�z9�z���q��b3��13�J��b����%6|ըhh��t�#�%���nvn�@*�
}�\j}�ָgl�{r=�)\!����צ촭�V`Ԑ�l�C��vU��o��!���4���(����%�AYRb=}9�Z�s�H��� ���w�8Lۡ_nCMD��, �Z9F╃�<���{��ڈ-e����
�IyWk

�����@P`�^Sj3��t����[��L@��CG ��%^S�m��9񹲱��b��Hh4t�Y{����rS�ǅ�CQQf�=Y�1+�H��Y�Q�?���o�AJ'A7�L�i*[�N/w����Y�dE�LY��@9�)�ۀ ��@8r��"�3����FR�0`�\�]�s*�4Ф�u$"f>^���?rZ�qҠJJ����f�3Bd���|j`�SJLt&���B��p��^���ZmWX���~�� xvu���pr`�����.�Q���BaŌ��-�Gi�|�NsjP�7pdH�^��f�
t (��1�\T7`e��o��4�Ys�2f&d�6ƌ@�"�y.?�p���e�@U^����fm�v�h@���.�sm�U�m�H�9�kM}HvrrT����k����/��B65���,"���wu*�(��2e�~?�#5����T�G��i_
��*R��y����tH�m�vhӚ��V���l� ]�m�����a[�l�×�
�
ƪ��V^`T��8���T� ���Q��ͱD��?@�zc�h@�Rk���R(j:�N=RZ5�H�RE?4c>u�U
R�`�rÜq�d^!T���CK��p�Ф��M8�сZZ��$�M�>�R��S��؎�	�H�'<4b\��H ���!�V5]U�%{���.���@�},m�GRӫ_���'���~�Wc�ma�"��2	փ;������L����,���`Pq�����7��]�{����Q������s�GԐ+�G��c)=4�gі0�(�'m��L_�Sذj��#����	�{�6�_de���Ť��x���=�Kr�mn.Z3cf�L-�aU���=d��
z�IZ@A%O��W�!G8�&U�j:�	��š�[U��M������4�T{vp��T��6��%��|��s��^�S�����r�}���npŧTc��_�V�5�=�>ܦ����Y5z	DQ�W�[RCю�����!�L@�v(�yU(�wW(�=�Rr;f&F�漣W�Y	�^��O����e��i�dr�`���qހ�סq"�:�y��I*�sO98%]j���@\�8l3*�O|b}ϲI}^6+�
d *n^v%L_��/��b݃j�h�`H�h�s�(�0�P�d�|��ۏa��І,]�b[��R�����.�L�YҋW����W6���Hߊ��������JcZ�ce���7F|���F�և*�I������*ԴUMP���`�d��y]n�P�&�Ş�'P� 㺳������*��W8ЋI��I�����*�`�TV����K�u�]{W��J���\Kw���5o9p!,�nr�\%�H㄰���� ��}qu�fS�v��E�<�����9�:��h|oCw���}&>�=�/�{�nS�`��3���Y%9Wh�g���t��}��t:<sV�H&���)��'�ׇ�-�ד�����d��jȕ����m�6(���;iy[$UMۭ�K#�a&�jz�m/S�qe�.�z���g���HR~�UXJv��E�!�Bχ��a�%�b�E�0vݾ}�_�Z��o�4���cllh�(���b�һ���r�����#3��C���,�Q�^��=IO�zCS��l��W�����C"��ld�-��g%.���6;�6�+�E[4EK[�$��^�{��u �-dO��o��U�L�r�f�-Y}�	a�n��h^cK�4�b>5@��Ι<�����<#*h+��a6}@.��7.2Kt��~~���߲�����B��.����iFw	V�:��k{ϸs4��U�%_��;�d�ߓ^r=��)-�v�v�����ɤk+�^��>ЀI��4e�g7�hĚ����|���a>��z�<T%]�6����H���qNa�hvƁ�LME?ܯG=���'���O��~܌P	���C!1�M�T���޿�ғ�h��$����P�V���U�v��̣n�`��7#Z��+<�K�硇�V����
'?������v��$��*vZj+�z`?��r+n���? ^W�QX�`�k�!��B~p$�Z������0�*ɝ�uo��Ԡ��Ŏ�ao��v^s4,臎�@�[�m�GP���A����v!i#5u�l��l�KE�y�Gʶ�����˘;ʹ߲K��t4-�β�]����V�6���{~kx���١�9=9z�4�+$��y��&�9�}�X�-��    ������%ٚ�x�ϙ#��y:�S"�U���g�Ͼ�`A$�
��5�%������z���ڛ�����I򹇖?�|��j_T[�=��G괱�L*��l��H�Rp��p����-~!��˻>��D�(~ii��K4�'�V
�OO���C�_���XJ~����g_9����l��~���\$��d�B2`j�K�L(��x uo���� �-���3
	�PC.��xS̴F]���^ۣ����d�'�t�(��߸�Gݪ�:j�J9��щo��e7]Z�x��TF�ȡ��z4ȃ�4P4����%��LHe�Թ������;�uОh���o�M3vD�[Ǘ
�����a1�<��&`�\�xg���W���o����������l���ɒR;����p�8nꍺ:/AA�꘡5E,yf&D�u�� K� ]��ކ�z�'���w֛to�G���t��{i��tpp��X�Fc&F]����	�Հis.�)��ӘÃb���o������������&v1��ہ��<ݠJ�>�(��B,3�/�=XP�3��E����÷��|�2jMЛ��������vh�{H �����	
۽FzŔZm;��:�B¸xF��e��Mu��"���5!�Gx��~�S2 _�B�R������m���q��۹Lx�Z���D�;�8x��$p��Z�[�f����C�ê��&��[���h���.���8PC��5��W����"qZ�����(����OW�k�.v����k�]J��2�A��x�[_��~}�d$ؘM0�"��!���wx�ܴm����{��_���+i�8�L�J�K|w;<�*\�[n�߷����V{P�y�h��Bm[F���h�U{�@��-x� �DZ^M�j	����hi���G��DG ���8��ࡷ��ӟt����s|�������vA^�����H�-?��)�W��e!T��X����D��e�Z�\�����ڢ\H#��i���� ��j��N�ss����2�;�ݘ��܌X�d����U��;FB�n����9�nJx�&w%�Z0������Bil��2������g����h�G���rD�O(|�f>'HP p���0�����x�n��v|��OR������W�O�P��*~�M�`(|�a�d�p[�Pf���U$��T�����%��]��l��!�W�
e�O�,ECbG�D+jdƶ�Bt*9���J!Pv����V�6'Fn ᳴�ceTǬ��@Kp7h&?���_/�}7
l���<��܂b�#��1]QI�r�G�vdj��#]9�NtP%t�f���3VB�k>���p�v�,��D�����>kA:���D���t@6ۄޮ����|���?yn@�
7���WG�d�:�5k�v��YT�����p}�!Ra&��FO$	h����
�ɸ�-��:{�jV��\,Ts���G˿�C=$F �r�Եv�]@�5��w6Asd��
C��������{��>��5����PC.��wMA�<d�hL�x�K_��t]-�)��D�2\=�,m�4�?�Er��^���cZ]Z\�8
V����~^Y�����y�g����z�_3�)(���z�8��j� '��|Uŉ<�َU�@�,�y!��rL���ukDm9�l��(�3�XȖ���o@pk����W�%ޜǹ�PBG1Y���E�~,$e��?m^�����>�uW�-k�L�jO<��5�vG�9`�Sx�B�2���k�s^$�`l�06�������m��-
mP�����ƠM0��d>p�4_�@{�H�lgThvR�.�/����x�Զష�vl�Vk�Csz;����E5�VG.��\ x��!z�/	����g��~�s>�V_K4�Ĭ`f$�m]��y��"?�C�;���L�T'Z�+���	�.q/�W:�VA2>�>�ߡ���;�3
3�Jfd��+�Q�C�^�شT�G2����n�t�%�V�0�3`��s�7	N*�[�~t_$�O2���k8m	���M�5�f*(�tU|��GT^�%�I%)BR�yc��7���2�� �����,�����>�0Y4��zk`RN�J�-�'�Ȉ�׎Q
�K���7��R0�v�%m����g> ����CO��'_$�ݞ�U�(hd��NP#�T�B�p���JoE$�Ӂ:�&^t��86��`!�
k׵���+�f��I_
���PL���ЙO�Zf�ǞK���Z�y��*s2���:b��-LSX��	���G��t�������$w�U��F��"�!����G_3�U����o��ʝM�Z�
�j�%�_�t�W�W�<�����g&�M"f�`$�@�رfl��R)��?���v��)���l}�Ė�z�z=t�F@\w_$HB�S�wVRn__X�
��ۋ�jP?ێ���A�b�UniH�S�] �\�����w*y-�z�S�Hش<�MH@k��i�Է*V��\8���)�����P��ͣK���sG�h��3�,'�Hq\����(������y��y���Ԑx*�#����_���C�֡Gw�7�pʘ�F���>z۽D
f! ~���E�z�H��72�!�&�O�w.�@��x::h�z�G���v��r�b��@w�gK�Vp�.�l����A��w�*�K���؟kIQX*�D��F!aa^11��N����x������1n&@fys(�8�/���M�� n����U�B�$_7��&�5���.�d�=����B^'Q6�����IOh/��4��8���V<-z��x������&���-��cA`?Ȃpߺ����=��ܟX9�`�]�Ӊ�~g��Qbw�%��4~����=���%>��Y�jå%�L&eSy	'�����T�E�עKY��t l9�x�t�!�?�.Eb����#�g��d�ևNh�= ��f5x�P�~�h]&9Ω�V��is�����C"�B�� 
]UH���)���5�9���ˡ�;`C�w�R�ڍ���&�0�R����8�/��A��f�m�@';�m�m,l�x��=Ћۑ/�� >kg�O	)�rg~��H����#P�De��2��`*��K�7��`cE=�M
��Xq)}�9�{{�Q�ɻ�C�߼/�W���{Y���}�Ay���R]U���v��{E��b���}�W\W��R�sy��u�U���
|���"��NdA9�#�ETw�&��/�;��(���JPEFe�G�8k�]���muV��QE��M�z)�=�����(̘3lDe�����(�=���:�vt�6Oz�n����w;�/Ud���êck]����7Ց4���V ��[ӠK�kԉ��R��Uy�*��~�d{+�HY�d���I�8{��[7m��������Ua�L��Mm��Ϡ����:u�� >v�kCW �3�c:�P��ud-�誜���r�&��fc�h#��ɒ)�s#��M���E! ,�����:�]�zr��b����wn��Ut��oO���z�K�y��i�)��b7������y�Q�7$�ѽ]�n���پ&*��T��rr�v�pHG���nd�z�[�vxa����7ܔ��|y_97�+Z���0��8�E�W����I���\qq	%r��X~��7(Ը�k�NG���tg�F�"���͗�#�8��Υ�so�w��=x<ԩ��zE~��ƛ�R6�A#%����:U�u��fO���7������TVt��=gV��!�И;�DG����u�V}Z�&X��*rN��j{Pd!��^��!�sCS��v����@����<u�R��Z�"dN�U�?��J&���i!Q�,�H��,�>��G��	�p��t��6�{��4g������Y!�݇ޱn�LX�a0`x�KWRC���e͔}Ǧ�)e�cNP��iPX��h��q�в�S�s��#4�=�/�����    ����K�A�J��NαU�A�Qͪ�L��a#:�U�d����O���ՍC�
�՗����Q���;lpC؇����D�SwG=��S��4��5��@A��q�4��3��f^��ý�ߪ�c��ع���C5�J�A�$D`y��o�+�1�gV綞�*̔�;E�[��j�a�/�A<ev���lX&/������]6,S�ع[��pֵ k'U��9��n �D�\>�75� Z+����@���^�O�s�A���j��ɁZ=�z�fqhQ�E�'FM��%ta�ZmmP]������9x�Ј�1�54L҂2M�{�A��W�t�.��y�F����%�����jzvU����~1��2���"4 ��C^�N�c�5���B������~}�N��k�Y冂��ъ}�_3�5R��u�F�.�����������M8���탦q3�����{��yY�:�n�y��>?�����/lЄY0��YVP�x�r$�[�P����fNO�O
�W���R��\_}��_�BDa@�܏��*V���~�Z���*T����B#�`���A��q4ӷ����㫜�?��sJ0�o�(�S+�����ڑ���Q�#aw�#�����i��H ��r��oe�^�4e�ᮁ(X�����Gz/��
���jfNz'Îz�6���o�?��Ӎ����{�֬O������JS��L�L�#��;0�\�}��J,HӲ#��Y�=^�.*���[�<N�^��J��xW�L[�ɍ�%'%�H���PnR�9��9`��Fu�S���X"���cf��t<��@��л���U��5�USQ`�f�����C�#:��W�t���W9��=|�_�Ծ�s�B���);�P頞�6��O/�
]��g�c�"7�x0������P��Z'���._�U�g�����n��3���֐E$N�	�:��YBJ�=�����zjxa6�6`!��y�$�k��܌nq,[9���,���<8}.�\����g$�x�E��nt]��5��-�
.]�y&#�N���R.�7Zn��Z8,o�-Jl��a�A�ѵ��s�uP9������E����y�{!���K��^e8���h�D����H����2Z ^�D/i�6�a&7x�>�<��v>",�� 4#����[;P�4��QVo��p#�����u�z�-��ti����?�M�}�M˫�QQ��|���~�]�6�������M�HP�����c8�b:P�u� [��G��R3�wJ^���qr��c��wR$����θ�0|�/$�F�3']����8�,ey�xj��!71;dThmϫ��GI1�J_��h�5��T�)�Z��=�eDy�������o��x�z|�~?��bK���%3dvl����񆽳���UmK훨{����+�Ƒ�	�­��]���1o�GpE�y���(m[-4��v[�yKK�PFCԗsxh�Ex��J�i��"�K���y����"r���r4�Kk���6� 8���F��	�xw?�����|W766��l�U��Nl��*�Y��>�L�F�u�#���y�Ռ֋rJ`5�Ǒŏ?:���Y�c�3o�e�ޚ�i�����.?v�wu�L:���M�d�y[�x,(>Lb��-OJ#����ste�zr9���=B*P �Oi��`�,ȟ��8@�7���J�'�@n�`���w:�MЂ]�+|Q��5�}�ˡ�nԼ�DhZ,��^�w;ýlE�9>�M�˼���G�k��t��^,sjv*�� 7!Z)����QP}�*�gށ��]��r�(:*AZ�
Ȭ֨�C�;��R�!z5�j(��{D����Ni(���+�kJ�u�x���r�Cdu���e�C����{/X��pE+xv�~��x��b�k?���6���˕C<����O�l��T��e����p=��gВ2�q{�S�� �Q�ۖ6f7Q+�u7T#a@�{YP���.uS"h bn��ЀT漊�~]屲e���Rh���8*8��MTi*Z
�rhg�c[Ak��F}�N�1ǐ��Ul��J�ac�4���׎��N�E��+�lei�Q�����o��(��>c ����j��d��X��ClT֖PE����Z�f���![�?��Oy�:�v��0@�	~H�#T���lԦ�57r��>t���IW� 6�Rʪ:�f��ysp�Α��ZK�����LY�L,��Ɓ�!��C������J|��o_�E��l�up$ZF�j��)�ڽ!(t�\���������t9�k��_�=��������ZB����O$�����B�b鼍�#��VXlfNr�Qc��\�d��s7�XB#CGqE�:]����C/��@Bf'0-���Šm&0nk�*_�z�������C��؍��0�x���A���uqp_��t�����c{t�P��p�w#v����p�64��/��g\/�/�7����l��;N2x�s�QO�9�"�P�,��Q�b���A'�kN�ҮE�f�<�����*�2������a5H.�)S/�ʃ�h���i ��5pp�[�V,�BM��*�	�\h�
^�6�.�
�������cêj��a���D�%��ǖ�ҁ;�H�x'P,���-u����}{Pq�M���q�!?6���P1�]嚗� �v�0w��e�x����.���wz9^�y�lX�.�ߎ��m9.��[=�Z(��m/� +�Ѕ�m?xx������J�%���!ic؈�G�4`�}�_�頭6�ț�^eY�"���d��D�`�~�XX�h��طzANJ�)	%�z]�W)��4��f���sY}H�i��g��F��cŏ}эnh/+����+��h���x����ըI�%.y}Ԅ4���__��뜺�Fb7�]��QZ�˫��|8���%��j��u�-Z	�F�'\�/ӛ���[��%�P��D��{ǟ����	X����PLp�S�����J&��``v�����s��c�^Mzʃ���=1ϰ���5�v☭���e�x/�{m,/�"o�ҝ�5;�7b	�WU,Wo����5����q:��T�*Unؽ����B4�*7=���dS�z}��Q*���;�d��U�l��D�
G����K��J!�J޸�]������V�k�a��r����,7V���~|�y�ۓ*g��Cui��W�����W4��M�P���h�G&l��eN֡�tש��;-�#��T���i[#G��-̰�Kg��w��,����Z��aDk�m���ZK�+2<��A��:�b�P�$��6E��6w�v2cn,��j���S���ԍ�'g�w�����w��9���:g0���;9-]�l<����������/�?�М�vf[��h��Ⱥkj�S�5Ԏ;��q^y���������ߛ�kPE���Յ^�UYk?�ք)J��4�V�L&gEE2zpZ�N}�L�;�V�L�������Q�	�T�Y.���E��>�J�x���զ��qY]���Ėժ��P_�v\� 6��� 8�	&�%�M�&�&l�$��Q�����5�'gަ��~�.��)���B��ʐPq#��^���p�����U��������%0�[(�`g��f��h��zf&ky�Ewڿ���FZ�4�P�*���9�w��詊d�ȬYah����s|9�FNT��b��c��1����!'�)���lwJ��#2��Be��xq!��H	$�^�P��71�٩
��c�%���I��0&Գg��%y��#x!��7� 4�<�j��Q�6�)�i�
�������c-�+,D�����P`ԁl,�L:R7�M!½Щk�%�PCZ���<�b��jj�vz�A����
뉝E�bf��y4��@)D���3]�Ls5�Xw�ʅ�Lmո��|���^_�1�C�;]�N�$��%���z<-���щ%tvpѷ�th߆�M7JlY�ڴsgP@��2���� ���1�    �������M4[?~�;��҆��a�zo�{��gk9 �^lB�VF/��\f�ۚ�[�Z!8��B��^�w���zЭ��0cr4�6e����rbq���o�r�w�?cܕ��埵�^ �v��ڋϐ��gZ�,��c�4�*q�	j�qTSS�3 (��� HJ��G�ү�Y��
#e�C|yjhxO�.�>��ER�St��ktx���͠�-m���Y(��7-Df�[��Sh�1���G�/7f�T�3e���p}�Ovi+�QqO���v��i�z}$9�ɷd��~��d���妡���,LEKI�\���h-��hĴ�r�Hw�ᜃg8�eg��ͷ�η�%����7,x1b6���oۺ���4�#q�s4�������V�7����q����8,`�}t<v٭B�+N�;�%�Q+V�����4�nT�D�~�=�8���Uo�4]�-mևO`��>�2u��rQ(�����~��`i�A��jӣm��}����S�d��!����(?��t*}��0A<	R�p�հ@�����}���>Yz��#�WYT����9��򵁍�r�����W����x��)2�v�
$��Ob�j�Q{��W�(�F׌l�u�^d��.����^�#���,Φ��'҉�<]�k#�� ?�ҭ��mw���F��˶I��z�>��� 6�b��g#Pv=:����j>�#c�_�k�!Ҁ��/��V�}�A���l� ��t���4ۉ�i� V��UT��x��)�^�����R�B���x,骊c6�w�ЖE����c'3�	�˕���{Ё�Gؙ�A����P����Z��5�I�3B�A\%崮FD�tNE��~^O�E ���������^���˘t�=qFo��mm��8�U&Kz�`{��YU�y��Ez��,-(l�yH�XZP��_2�x|��|nC�N�F��҂�ɶ��:o�D7_��Z�|P?lϐ�(n�����@�P|:\��sB2���R�7�7x�/V�Ҕ`�tAvh��� ���Y
����]e����u�V��_ٻ+k&���W8�� �;�d�������z
��g�>�}������ތ�&�K����(L�1�=e�rx���u�R�.YK��M#G8b6���O=XȀz�J�h�C9]��ߜv��h#��x�}��˴�d�f_�ǟ@N�˹𒞺�q�Р�Н=�ܩ��ƹc�P�?�X!�Aϧ@�q�S�� �BI�޲����Y(�S��W��fm^_�ǓDH�*�#��H�AfaI \�z}����ǐ�-���o��hy�������l#?��;^�yԢA��1{�Kn�Lh;M�,��h$�7��pMWi��;��2��9��VS��`�~y�.��0r�i��Ɂ��ty�Y�G�٢&ok�'#E�G�o_�w5^}��G�^U5�������듷T��h%Y��B�uվQW��M�n?��� ���/��|絛�� w~���qpg��"�����1�A#�e���0,�aԘ,��:\�AD�o�6u�7��.����CH�:�d�&��,�`�y�iz{�#������ڧ��GԽ�O�}!�|���I�F��N�UaB�R̀Rx�Ļ�=A��oC���Ů�b��͠7�����ǻ�몎N`�A5^'���y��D[��AQ��.Uz����c�Pl�I�7Q1��1j�Q*�+����d�L^6Р:�������oo��k�U�!�T�q܃�M\�d�:���=��^�.	5��� g{4ud�����͸AzFʴG�j�~���Ά��tM�9�zb}�F8���q���9�?��d{��2�ZH�'a���%�G��(��X�&�U�_*~j��u��Ll�=�?� G,���	4��*>
M���K��'\�������r�8��4��/1���{=P_Ue�"c��íw]X�ŧ���\p��V�j��{�ŏ���	?{g:�V����ʢ)���#���n��������R�{���,=PK�t�Q��U��,�_�w@-�� I���T�G��'�S�e�o�9���-<��`&K����ǨA��A��pղV]L�Tn5P=�����5�bD�=��D��c�����r������r]�K`�*H �z70a�:v=�3��%½e%�;G�1����Q����9��D��1IXS<��?Wo"l��S)���o)�ۃ:`ۅ}�����O��T�k��M���mP��ɕ��뢐�l�ǵ{�/���rQ7H#���:2y�ԫ���O5�*-Ͳ����P{p�)�]�ՇP��c@a���O����0��I�������Я��߭��S���0m8\������Ў�3�(A�sCQ� K�!g�*Mn �mmX��Bs�~�؛x���{�s'�W��wn{��;g�7!���)ow��{(�
O��RKe�8��l�Y�@Ź}�T��^�/*A��SS�R4dv��t�]o���ؘW����G�-|\�]��G�n�6���s՗��w�Q��-�Z�"�Q��������F�*�9�Qoa+�ˁ������k9v��2A�K���tݓ�. D,F����!<s.�����ߏ����Q�B#ц�X�A���E��/L�O��z������Z	�����s5m�22��u#��:��I�M��g0�.���}oN�o�␹�y8���ħ�4��P[��G��渐0���r�b6S��uQP`	��"�o	���|���C5����]�<�3-����W���hsQ Ӫpȏ��Ceoҭq���%iI��t�y%��֒�����|����k��L�]R��^�X]���2���B���k
RZ�F�:� ���ؠ���:&�@V	�@���sl�*������mH�ޭ��~;��I'�O���U�uncc�3�����Pk��������І��bPg���>go��V8�!�P �3؃R����g��o�J/G�l�u��ظh-L������]����{�=�H�C5P�7#Ǣn����PC�o�he{?��h�m�����������,�-Kl�*��Ӻ��xlL4*����3�l���цVԫ�4��_�sY����N��:ГP4Q\���;	���B}�2"��:�V�DTr���Q�r�7��@�	L�G�ʟY�X�^�T�<����9a4t�eV�6��@�f��xؐ)��G�#*�u�>�I*0tM�T�S*�ܚ�vvTf�ի�j��򕨁��:��)�@�z&�K��-�!��x��m�
�W�zm��zv'\V��]�Y*�p���C������dP׎o��3�L��|\��}�d<6����[|0�ۜ�8T݀b��w����2�֯	Y�[�\����=>����QD���kQ����r�s�����픲f2�@�d)���!>r 1e�^*�����֝L�<��/�*����Ƒ�����M�� �,���Afa�Iԩ������<N�Dn�3���v8��,<���`ê�$�٨}�[���AM;&�?&�!"��SH̱�5�	.'�G�~Tg����g��̳�������� h��'?�QR?66�vHF�5Uo��]W��
�ۧ���y�6��sM��G^��teS!;i��_r^e������D+0�l,v��7:{U4*$r�[T\r����h�Vº[)%j!�ُ�=��Շ@��OlF�H��y4\܅|K�ܨ~С�X�b���zj������JV����dhHe*���a���S�W�6@Q݄���=>���M0�����e�zT��Pm�[�w�L',��I��������l&j�� 5۾��e?����Y\��N_/���~����=�(�Sz���P���*4؊m�K����6a#T%��'\�T]M'� ���g�T[�e`l��&�X���~��R��yՊ��~����53;�&�:^<.n��m*gC�m刯e�w�ޒ[���k���    n����O�Nx˙����4|�G��J�i��c�>M|t`���Tj`������%1��"Xt�){����2��+{����UKY6��
`�����yn�%�ZFo��>�L��W����C[���J�F_iw�ȉ��8�)_Xc��/�lh�Z-D��杬G��Z�I/����FE�8�?�eVB�"���lٌo�k{
����3��q�H��hgV��Hŗ�p��Qg�KPPk-��A��u!�߳�lXB���H}jut}W���+�������8h+ra�����ٰͷ�7ҡuR`��8�MnC�
��z 6�:\g�)E����!�:�~К�
T~�C�Z{�|����~�9�yE��Op�W���$=�C0���Ǡ�.uJ�s������Ė����͹����/tX9X��g�sD����ܴ��{n̓�Fk
���	JpO�Ft�sG	�Y�*�Ɯ�ثp{��Q���G��-�x��!�U�6W�=J�t;"_�n���owx���E[��EK���t)�Sc~ď,K@*�(=�E�ݷ�y�)������И#f0 8M��q�v��$N�`!�j�xs#V�n���<`E	��`�cfh%K2/ kWW|��`�k w�}9���L�ӓ_=�Z����B�C3��C8ñ�El�j��X��`�>�Z�X�r����$����8u����e;�V���ȰO=�i�}�!ա���T���=����]�F2@<�Ƒ_�h�	�U�6�5s.��G�D�y����$4@|����L��6� �su����;���=�pIX�r�r�B�`hՕC���t��,,A�B�o�@Z�"heRM��X�+H�3�
�m�+f$�hZ�}�O�.f���R��]Æ
K�60����脍�U��ۚ�������5��}�	��g��W5aC��K�aW�74�������3�S؂.���oX�����f�3f޴Ae?�W��FaŌ���`fW8(9Zu-~Y�7��/�%&���;EX���T�QA�P�uU֫񠼝���ݳ� 쉇�ǆ�C7�;��ƪ�����]�H��c'#��]&J9߼�qp��=�c�`<�f�qxq��lh�-U]�b�����u�v�(U�����pM��y�/{+]�y6��X;�(Q��o���-�ͺ ��b�Ě1�Ǻg�CM_Mzܯ���)Q��ƞ�LЂ���V��h+\�-�/�G��h�T*���
8$Q���Z�q�nn��>Rw�ٵM�n���$�͍ᗨ/,i�l>��:h��2�,����dKW����U	�:�|t��}���Ӷ�Gadv_�]~zP�����d>v�%�tT�9L�]C���/�`���ɀ��`<�2�F[���-m"�o瀜p�){�QY�QUr �|���x��'ڴ�t�����΁�c)��f��|���7x+(����C���ƀɌO�Aao����@:�@�]Ța-�7&�?�trxDx���b�Ά�y��"@�ߗG�����vC�
^��c����m�>Ԥ-����CAqډ�r�b#�1v�l���6nÛc�9�B�ڌ���	,��%5dvV��Y�1�O�+����j�fN��M��z�]ae��(��!�x�}����r</څٹW�������W\���������Nw���
�����w�����00�C�9�=57y1�}�
�r8Ж�Y�༆������G�6�Vd��������*�J�b�'Y���Q={Ӊ?9�=�s�Փ��܆�,�5�$���{�i`}��u�+q~��SUa9H�.�G}����m"~俘(�'=9� \����g=E�=����!D,u����AFU��/̡ܷ�s� *��n��w�nԫ�jё@/x�"���vwLh Dlm��Jlċ�~��{*Q�(�M3Nh������"��ȭ�ؠ	�@�@٩���4�=�gԆ��K��{=g�[Ȥ�r?=k�U�>9���:��������J��8�?C����`�,�!h��0�� -������;��xB �~�X`��08����i�?�M;�19��ߦ��4{p|ɺ~]��4VeJ?���f����>����X���+uz{��w	h���c�h��1CȬ��훺�����!�����E~�F~{bN'��8�����Ա8t_$�O�C�L�LUzc�5�7ˊ��1�7���UlR.gF��wq�s)��l�Df!)z�T
,��Փt���r����"���&3e�p�A�߮�u���5�<��`{�Z/�w�s����Q<�q���WW��q��t��~����1	�'zB�
�Mxh����s�‭�����U�e��'8�v�HM�����ځ��Q�'u޻o��7Z�����4���܄YOxj���_$��Q��5#@��������%0E��"F����q*���cbEEF=6�ݩ�� �H�"��u5����vc���ޜV��9ظ���]�Y�~̏���/�&�v����3e��\��YB�o�)����Xq��uؒ-�MX��-�~	6l���H��=�Le?j*���XuL��~�@��2Ck������L�����a��>6H�~�1=�I������*�)a@)h�N�j�|�V�B��f�[�+���/W���z��?����o.�D#���0e,��i`��z0�����xW>����J��x��
<�c�c7�P��q�{�o��ucȈ"��亊��(�J�x�k�?01O�{��%]�	f�J&_��˶�h}�Q����ym�f�PZ�������q�=��qs�wNw�;߯�-�#�����M5zλQ��Yt@Z�R���I�6;�gi�x�4`��`�yT��X��؛�(ֈo���2��h)�z#C�S��j{��Gf����[�$�_��]+g�ڎ/��ۖK7f��:>AO*�Q���ꄱ����ZxT}��o����I���M�Z�|�l`4�P���4ed�_�M���h`_��:��w�l�(WfbWy����=h�X�� �*���[f`�3�=u�ڔq,�ęÃ�#�D���WCo��0�<7M�G��B	5d >�4��i9�ԇI$�ڏݗ�<+��7Jy9��8�n*M�B4@�R禺u(2��E�iH����*��̂ ��z�X�	�5�츉�_��ƍ��?����<��z�����d�2h�?���{>�:���k���Kѿ�	��l$��طi�w�=?��k������#��
�����}k�W��h���2���u��B�G���^�%t]sc6|��ƾ�t4�ťC�!����� �y�԰儫Pa$�}hx1kj��a��}�&�j֔�	��4�}���-��P����ѯo��V��L����Z�Y*	X8��͍��ד9�ӓt�غ�2�h�"��ݚa˫�q�7�6�c�_�,���\�c������5jH�˹�B=��sݲ�!�}G(��hr~_k}\&8`��uR�o*XUd򥖀v��T���ހ�^�N�O���sPk��w���pAi��ݕ`�t���P�O#Q×}��@ժ���p>�F+�A]�RJ�R�l7���l@������9D����"]��2qhD�d��"�V��)j�6,�I��7����j�鐎����BK��<9O�G�+l2�J[����a'��n����PP�m���S��p�{|�Y��w����] O�|��	��+����
�Q�LSY�� ̪���q�f�5�j��s�	�%4�'�3�U��FZBNO��=�kPC>( ��	��:h��63��48;��V���N�����Dz�0�U�S#����p���Sd)�;J�a��h&��4�_�ب*J1��7&���u���P"e"Zǲ(��ʇ`�L�Pn��ϥX���x
%�̷����U�G�
��a��U~�5����|�Djgc�6ӥ���ח+�[#����^�ar�˹�J~<�_cTV���ԍa��
*h ;/��3iu	ף
͡K�tC����JnDmd&Vu��    ��C{{��6��e1�癬Cn���h6���!|;�A��fW	��M9��O=@����Y�c�+�*�(&D�v'�Wv��[[n͔vhV�Hls�P:�o6���I��r4
6����0-q��@+o�ВP���eʷgi�n$����r��v6ƍ&��d �gaF�E�Z{�!���x��'�G��'�ܒ��������4Ξ��!���J��p3��4����_����f�����>e&�����E����2����x�m`b���۽Sؠ.e(�m���y@k��;��js��@�GxD�X5��z�]��L��t8�G�w؄�=`cB��txUá"]��m�m�~���n=G6��G"�		yug.��r��t����(�^0���)d4��2�B�ߩClő�.j|�8Y�,o*�$x@�=�a�[ߩl[�T����O	Ĺg��d(Ϫ+kۣk�k�S�B:�%m��v��2���x��#���k7~�ˠ�A���g%>�c���5j9������Sb]�P>#E���N4cVV�~W�|�=�c]����6�K�����;��_8v��mt9-��]�v&;7�����z�<^#t��w�e����&���p��ж�L&L��롙�t�:o�[�Tڬ�,���g� �D�@�_�A84:F{��54-�����-���3�9\��|ؓ^�{uI��i�ܴ���?5+��J�"�dB-���&C��~s�����@���v�|�S�Q�EO�_Xɲ�K�eoЇ�Tr3)�v�w	��g��%1o�s8��^���ld��2�@�yb�E�(^j�%���*�����J�Q�TK��^扱�#�:�r���%D@ƥW�GW^U{o<�ˀ ����@��g�tº;��e��C&��t$������չtM���p:>w�J@V
l���^s�������dXL�|��16@�r��)�M4��:����U1��'�x�۪Y$��؂��u`����A�٣up=����r0yY��/MD4�������g�ch�<Bq����g^�%gյ*���#����w� Z]�D&ǻ̕��@��5I4���#�h��"����`P��z(!�z�e��/�.�8$xD�g7hY3�9�A�V����8��/Х�q�ߊ�n���G	�������=�W�%3�*�#��x-dy��1t+6�XF	T��-Pw��SG�����wď�ܚN���old�`���|ӫ�A�Y_�<���Bw;۱C���H&�w�/K+���hO1�]��j%�b����҂0�Q�DF���������;QL޿8C$��s-�h�M�Ik}�:O��tP�Rm��]�@�?�F?B���рѶ�h�g�=��omxO��(��d7�;���uI�ޫ����j��"KY��!��j����v6�v��t�s�'Zq�`]b�.���3C�{�}��<Adt�������O@�"����C?�x=IX֥���|?�X,��,�"��Y�.d��7��R�a�Q>�ig\"��̸v=Y�9s_��%�̚�T�u�����Gu	C�=�2�}���wGM��}���F�\F�ds"�B��%Z�H"/�,����N4�_Z.O`�XPk������!'�^зo�ӛ���e9r�F�Mr�fM`[}�(����['�B��:�	VL�u����뎍#���jhk���ӼO�?V��S�7G`DP1��yT/1/���V�w��G�o�	n��c�_�����GuTX]I�U�.U��}`ׅbKv�P�u��i�65�i�q�ѵ�TR���-���Z�	k�"WQq��<�����֛���m�~8o��D;9�p��c��zё��6���I};^@tښ��p���g���y+ғUv�s���h��R!\���%b��Gj �7ty�Q�0V�]л�償H�;?�IX��3C��ce���Ⱦ�RV~��@(XW���h�&B�S�Ҍ��X���iTZ�=4#4�*B����$��(��噤G<�� P���\�e�Z����@� �b��V9�g0V��L0������a$Of3�CT�m��y:V��2Y���{�.ș}�i��S�����Jz�z�����'��5g�z&�f�c�_z=��8<O�i�	qS��Y���z�ў@E�T�%��x?���s2IXB���PR;&�֠kDs=\e�zl��?w��,��
�|��k�s���V3ʵ?��Zk5�R��ˮ�g76�Hf���*�̲؏gn0<��.�.��r��j��8��eY�T�h�QV2��&�P����z�~�{���D�]���B�L����6����]}��-#�]2ᒭ~"%�0����� �p0�##vi�$��#��'���.�y#��l��`A���g�d<�:�w�:����/�S{�Jܡ�$k�X�������)��-7r���}��/0u2�̅?UUj[n��J�v���\F �ra�;sf<����@`N�A��p׺xY*�s9�~�k�skU'�DL,�K�@�th�rd���/�|�m/y�H���9(M��ō�΁|�H>������ߑ]�g��Zy��m�D6�4���#M�aGr8��'nE����~���&�P"	��}!�Lj�,p���P��SqS���)L)��v��y(��t�ѻ��Ŋ��40َ�Y.%
 b�s\lgF��AW�in�U8�G���>m�ms+4�̃(�_$�9Ր��h���$��p�v�9Pp
#�8}БN=rt� ��σ�C�mosʑ *nU,�9.�t����y:����c�JH��Na�+dq�vF�G�1��/f�~{E<S{���`d6�T�Xu(F8��u�@#p
x��H���v����ɵ �)�~�� Jfc�\�#&c�_�Z�Ji*l	0�O<XY4��Mc��댸��kü�L5c���#�bƺ�A3p؛3�B�Ƙ�oY_T�2>���M��(ů�)�A�t}�.#!n���'(d��zst +v�Ue��ŗ�#h]2�}�I�c�$B*vgątcˡ��`��U?w{��h �T��q��oĥL�K�0��k/Ŗ���|�ol%�f&�QV��e�I?��Jcn��$xQl���S�m\]giz�=p9��~��������-}������.>��RԾ=>�	����z�	� ��4%��GbL������c�6��W�t ��L˸�m`�0��N�V�q��!_7�'n@�$�t�ͨ��q�<�[�p�J������0�~�$���F��X��6Ar?���j��p|@���n���͉�\K\��j;D*0�j��!٢m��%#Z9Wde*���F�`Ź���h���'$�OS9:�#cf��Č�U���[��	5�>X~�F�"	\�|�Pxt��1����(e!˵��c>�:�gU>�^ݘ�y1?��I���_p���;S4!��x���hA�p�x�|G7O��ܪ2t	�	RŮr�~K�G���㔅iP�s�~�}U��d Բ��������^���0�8�t����5��D�����	��� �%�s2m�I�[�T[�ˡaj	���7�u15ՋG��*�)jIB;�pBGp����z�şX+`)��ì�3n3�l]�pư�.7�:ۮe߉$$��[��<����D,��vy��/�a�tPMõD���uWٓ�v�I7o�Q�!+�{&͜�+bD�m�tS�[��Hqz��Ͼ��w�m�x�<��:���L\�I#[�Vy���[O��8�y7����"HF��*�{[e�t�Z�vuw�8/�&���[>��7����pr@:�jV��Odo�J�z�IR���ƻg����H*\� ��<������ <X��o�ɳ<�L!#��LDk����:_�I��
N��W�`9ӭ��V���`����u6������k�����ǯS����y#a�[��]2�Ż����ʯ" {�^t�Ae�TaZP��g(6���(���a�����9V�[���u�t��EfI���    �jq����m��H�O�4 �Y����Q���vҠ�4|6�=�#(�V)�n��J���;"��}�>�+!{��µ�#jCM���$e�/�A�C��6�??�e�j� a#(�LʲA�#>�`��)�i�W��{/�·���OP�*U2�!o��w���"��|ԓ^�#�4�rK��6�����M��L��C �e�l`�vo2t���9�-/�JS��[�Jx^%��
��M'If�2X�Mh���r�jȢ�}/{��D3���yi�Nt�:���i�6���m����TV0&e�:��)Y��c9u5>���8O&�1�v~r�˛Gt�f��{हI����3��V��b�7-���h"MZ0���q?����#��g��Ϸ�w�U�־Z%$A� q�bZG}	7�������/���ӹ�y��F+�؂�TY�3�q���z&�Ҍ<e}�᷿�'����Ue�p9�����"U�*�E�v�|�)
��_ﺎ��I=���4]������dR|SU�_'�2'g��_r;|?�9��=�O:�Z�{��$Yt,-�m�lj�����u*��X��`'�iX��ʔs�ķ������t�w��$�й{ܹ�` x��4p�L���׍Vr�H��F�0��9m��F0f���3" e@�^�%� �둪2�u����g�l�	q��(���Yv;:��d/����'������z�m_�-Ѐ�|ٹ��>��t����'(ow�<s�cە~����:'no��j��s��0�ſO�����sj"���C�ZJ�87�5�?A$8t�Sb�
�ȍT�����1��<"wx-���dCL�Bz�:mcߌ��k��S+9��j:����֗��ÏVj���E�$RE`��^����$p�
tM�`jo��@�����{�8�G�'�����h@���?���^��ݔ�>�
�Ѥ�=��e�%�[i���'�� o{�wu�(��I�fIA�e��a��uC3�vLselhH�#�pj[rͲ�b���	�܂��Tmg�����o�^O�y!���&$@Y%���*�#N`�ɧ���kRȱ�F߷�116�t�E��]���F���1�~T�&�B��EgB��h״���I�XX�h�'-��ť���~-���"��e�J�����C{�Ϗ���iB*��}_��i��-׃��r7�f��w �?���z��zz�t��0�t.�Oq�rpo��W�`�n�Oo��~�q���>��@���KV�B���4>d�nc���z�|F���e#k���
2$#�i`;vK��)�a��N�
�,����n����fn����7�����ؒ5�7s\�_��������TC���db-��0L>��ׁ)h��4�����۽+W�bA�I�aO����ܙ}�Δ3b�tE׺Zh�X�.C���wԯ�s�FsDN�w���!
| �	��R��4�P�q��m��HZyO���>�!3x�q��ȸ��v�L�0�G��oo�;��J�/�5�f
߯��]w9n�тP<���s���W�%��u�����.4�ʺG���u.V�`	���P�/)���!9����&]���_X!�d#�X�=�輑'}
�I��@J��������Q+�Do�Ӏ�M���d9�k�$v>��
^�����@�2>y���nVV�� �DĖ���NX|�ŭ)�������U9�'v�ၽM�%�=��;<��4��Kמzn�9D�L�5,4�\�m�n2D<M���2��{sSE�oӯRP���p�iŅK6�Wv�*Yc=l��
iH/-�@������; �z�J��eRL���W���$����[���DͭM#e�re�Q� f{=�;��{��X��;w��>874��O���l��Z߂���En�K�O\�����3�U�����ڴ���k�)�~�Aq@f/�G���vq���V��nhh�E0����(�v�����<��L��h�R8�e��BD�&��B���ϱ�<��u���E!��J�m:�-����Dj������@.z�C�����ęs{�9"�3疿xp�5��s]���sM��z� �O��5v�����Sn�TK�CM��Ђ�}�J�.J�`�<�4��a�:ZC!����u����@0��x��QCȬC�������L�kq���;�+����|\�j<.��]�1=hŹu���YA��V���;�#�еw{j.+n�36����/X�����������Ɏ���l��� ��Y�ժ��Z�����>il��Ŋ���.۲\�2�vw4Qf��Ķ��>����:���� ���8%��g�uV��j˄ip��FWչ��|�g��'<JB8���"���~]�f�ذr�Z���}�)G�B�g.�1���{�`P�ț�� B���-j�3ǀ&�������W6Z��v&�^��O��
0�+��4-��:�q5��#���5��Cj{���V�|">�z�����՟�|͘eMg� ��:��02W��1��C���e�v��$�Ye������E[I2�������N"q��>	��n8���օ���E�5������#N¥g��Mg9� �kkhD*�ٙ�����5'�'�H�J�rl}��A
t ���)Ŀ-��A����Tzy:�NPAn��8<0I=�t"�_*G_/(ֈF4������Ɵ���� ��39��a�{;[�)LPK���4��s�K#�j@}Ʀ⧃�h@�rB������әք)��x��Ay��|�h��~G��s�X �(�������*��^��VU�·fVa
V��:/G�@!\��ޯ���$S?�*���+��0Ț�5�x(��'N��D~"��9����wZ\Z5����rN����1�r�N�p����T&�S�8ce,r�H�������}<KFB��+��P�<���?�dY�[��1T�E�q����Kh����7��..�[�耢�I��O.)� %r��$��Q?�/��Vh���v��~�1�p�w�H!ף�z��;����8�e�\��)����ﷱ �{��˸��oZ�
4�,ްv�p��KvA�����?pe�n*�Ֆ�O�6��"#�Y�I��C[�>8�\�{Ϝ[��4�	6���v|1#��Q|�e�R��=����cM��q��]`�$��Ʌ	e	em��N���h��ky6��{�Cq��Z�S<�0%�r��z?벞��M�P�ГL��?�t��J�8:*�r	�GW��a�P��$����3��4�;�?*��씜�}��n&8�I��u�9�#Խ����؟k�,,����l����/�o|�5h�_��4�|�9&{��d�x��'_&_|(<��3q�Q7���/;��l!	���8�&8�S�$ެo��o-ѬMU.#�
��bhMljFEdjd��:�'����c���sOدc斢�$�N+��a�o���Ƞ���������N�;��=V,D��ee�5=��k�F~Vd�Y�!�Jf��-���Qa�V���8�'�HfY�7É{�P�Q&�o�˻���
f��o7��\�`������x��f�I�O��-YR�q��gъ�Q=>N'�͙�$&o�4gR����8���8mv�F�F4A���Փ�Ig�2D�!~�_�3�|�}A'~����툙ؽ 6���=�b�]��L2�
�@���Z{�H\�yT���٩{m�,�*��8�%�^�U���t �ګ[��ȡi�ז��G
e���	��Yy@��W8��X��} O�_�窳2$��[�1�kȍ�x3�;��9�7�������z;}��s�xl����
-\\�=�ޠ*�z���&�!t3]0�(��j�FԆ���-纩}ߺ�ݛm%�`Z�|r~�G��VA��_Ya);4�fP�?3g.��8�vr/������I���Hak9vZ���M�I�ى�<��<Q4�F�,    �i�\��38G(�Z�m!��2Y��\����߶�xqz+}��o��ev��cI��D�.d�2�R���9<�5��³8�,��u��Ly�����V͑�О�v	2�<or{�V	�XNZ;�Nr:j��c��	�X�(�2[�Qk~u����	�C�����7N�����wY,��V��8a�6�\ׂ��c��F#��[��o�J��pVl��q Qqj�n�Üm#I(�/�s��|�l�b� �o4H�C�/v�=>�3q9@�EO4uը~P'z��40�)�|��<�X�_y�v��w���-�,X�F�,<���ʢ�$�z4��C?�{�r34�Noo���esXxaJ,C�����2rg���^:ofr!=2tZ\��.<����]�a�Ђ��!�K���
�|M%2TX�m�a���i�� ��ӕ�	��Z��P�,�g�Xy�ީ��P� 4��>��u�|��j:?�w��W�1���k=PX�W�)�B�;�n�8��'ݺ�ua@�����0��k��3���?���q���2I\��/��J4��a�m0�[��G4*�M����xϱ����]�(�T��f�1{��P8Uف���Ϸ��rܸJ���	��V�;|A��Z�3�dv����N}��L�́��F��X�t�`�c" �X�>����F �Z���*=Ƅ���'�~���~%
��Fe<�@��R���hG̈5l��zK�F�C� ����������q�&P"p%(�kz���1��N��1� v��K�F����i�kA��@�Y�(N�O�R�K�����S��n/��V�Dι����e9��u��q�o���!-t4��n>��@�V�T��[p�*�17&�}���)��Ku{�dD}�Z_^�An�����L��y�C��>�u9^�j)NPݡ�)���2�/�4T�6B��X�σ�_�U���J+bDm����{��GaA�z���o~;� �}��W�5`T��Q"$��U�D߅��Y֊�d5�Qb��D�ߐ�� kN�
��<�+�)��v>��F4���V�۬q��Q.��P�}�������N��8��h��<`x˧��$���v���g���M�O3��;]Xe�  �c�k�J���_�s��%<�:k�ٗ�eQ��ب��`n�Ǭ��q�U�ְ��:�Q,���֌��4y	T���*~o�����,�k���Ȇf|����R/�D+AG&�h�c�H���x%N�~�O����j�S�5�'���G0wf���va���7J��\�>d�w��R4Na��j�Z�!`�G�M8M5sa����ӿv�
Ud~|��#��tg85�
�V��.='	~E�|:�責8������ ��$����O:��70ZP����<hC��:]���3u�g��S ����ˉ��>kWljA�p�h�k{�7Pe@+�ʨOκ������o�i�Q��oϙ��(�n�<��C�s��m����ve��E����.�9؛�Y#J�������_S2��m/a��/� ����qK���v��&V�H"go��z�����:�Ab=�>��TI�
ד<���Z%j`%��}-u�~�W1�i7o9� Hɽ<�أ����_�,��J/��C���O_��O���u9�ҌZ���۰V0��^�@_��}?��؟��xK4 |E�����by���`H8�ި�ζO^C4Ó�	6�I���$p�H%h*>��r>�uS滄�1�������� %1��T�h����ȹ@���\��Bh�9:�A���N�j�[� �^<��n��;4�,w�np����P��SEG|����}{��T���XQ#[�D�����z)��u�BRP�����}*�+pE�w��f��o +;٭r�����D��j;�|pn"Z�l ���Q.��x��%�^��`��S�/�z)�2�R��I�F�U��n>4�A�������o4tWV�H*N`��T�NV����n��+.��[BE*U�KiX􏁥׎��9�Tu�HՙI���^r(�A�b�?o��6�q�^��L��	/�C�J�l���ю�.ٳ����0���?�p0�2�~���l�ţ��G�����ﱦ��������-��t�)X��1��Խ����Aa�J*:1�>#��@��ʠ@$}[�����D�$��Ě�fE�*.�*x���WW6��_%����hdƃUi���b��8/�c�
�Q�'��J$�[�X ��1��DmƟOсrβ��q�ߢ�X��g�����W�S�Q:��r�G}�>�ٓEas�V�ԇM�=i�,Ew�"98?�eC�C,��ԏ����]�'e���a� ]�Ip�&��åt,��O��0u��Mnu`N�z)Kl�*r�D��Y�k���U�r7hh<<p�Äu�M�t5Kd���و���_���Ms:p��G�x�1t/*�^��^ɷxo�(d���Vڱ|�v�i�r�L-� ����������I�SK�Q�1՛eRe��$0�V���e�i�E☡�����p�j�υ��B0����Q-FPp�I�wa��O>}�(3F�T�N�C4K���`b�m�D�w-�F�x��4n����K��	0��v\�kT�X�ŀ��R�R���}i@��sQ��kY�w�/@�륓3���!F{�PBG���2Zv��3j��e���ɢ�g� Jx� nHAt�;g8'��J�D���d�Ł��kG>��]��Cq�.?��*�eȿ��T� 7�
_o��� �p�.�x�D���	Y����2�%<��'/5��
�G>ƥ5k�]8�1�V��+����J_��\�ħ�����|b��D�f��F���7�9	tX�'��ǱT����r� C<�(<v��D׈�2V�TP�?.2K2p�s�DL,�k�2c�c�p�O,�B���Еs_jK|��8K�%}�M���L�����(
v��sݛ�V�X�+��@"��M\x�)h�^����xYL1��*ЀпÀ��B1�k���-E���&���8��
k�#����2C/#����O?�C�m�݊x���\{oϴ�P����0�Әp6٘�ڊTum"hi#�H�V��#A���we;$�~���$n)�c�[+6�IY�܄N���t]�1".e�rf���4�6¨�``ހ���,]��*F�	Zd�e�|WyϝW.!�Nm�51.�{��Tt�ѡ(�#�J�[=�����߶eB�Eb�kœ��Ζ�(���\����y(f�Պ���e���?|\�)��q������)@���K�d�]ɚ�L���������&�O&�P!_��o�S+���hЧ��F���iߓ%$���5_�9���V�I߈P��S���l5�Y;�:C��҉�c]+nݲ�7�4S�>N�^Y��N��n��"8;=�H�S�*��a�Oʅ�̐�l��+�,���rX����ta���!�{���{�W)�.�~�PX��`%��#�@�p��L�c��q�K�Y_a �����IWA����h$�P��˵����Q43���t�M�'� ���H/X���+��oa\}lf��#p�C3�Z*������Vz�(T����<Z�l�؈���*Rq��^�òu��An\?�c��r�R�b��j��~'f�ީ'��0V�9�n�̈�E��]F�G��#��&��"]���^d�i�qf�.��{-�9p\C�Ź�!��u�03Q�R�L��Ђw�����r��H�!&h!��Z�w�F�:y��$6���J�÷�*TuTVD7�:��heFU��j����ZB+����;�
����wC���$	Mu��./$�|S�m��x<�]�&��(��g$]K8+�oi��ޠ��3FW8$��<`�ķӯ���4K2$v��`ek�Tk���a�������Z�����w#�	��+O�Y�3�	�<�ul6��擶�s�#ڈ&����P��Ez#{�9���w�|�ޮ��geLF	%�=�f�18���¨    Kʀ���]j��{iJ#k?��
Q���OU���>X����y��rц>{Z�]�ygg+��:��58�@��f�I���X�5��Q���݊����4Y�u��&w����M���7ָ���U�6b@:r�D� �vz�&bA(~%��}�U?�[NH����~����|K����gi(�3���bl���Ǫ��L�C�;��P�9���m-o���QG�]8rZu;��y>��B��L䧞�I6Ԅ���?K���o@u���u�$� ���~�}?]���k���x<� [���tyV���^��]�k��yz}<��E$��[�����ke��w5��kΆ����s+V�Pk�7X�W��Ze6�D�����;z?��Uڊ��%1�v��sἏ���4�S[+5�c��E"}�������ߥ,��s#<p�
>�������R�E#\���#t�iå�όVR� dn���8i��(z�F����Uw�Z��z�.c��[���9�����z��z4 l<�+���ˠA����`�(�2�����"�N,�6B�\���J>�ǂ��q�����~<�I�\=a�(^���%��~d|:z�qz�4L�����4�?��,����I�(�� �P"�n��[���0v��������:�H�q����C}���E��l\}�_2,�è־��=M�Il��3�V~?����O���.H�pE�,����pޢ��2�CI!F�zW�WX���9���8�Z~;�[�6p^3�H=�����)g׵^��Ûv�|�ݿA�.�D���z|�gk�F���)��29����dH�*:����c������,��@��<�<<h��<��)���Oq�Q��"jm�.LDa8���jG.B:��}���F'���ebJx�߅���v،�
�@���"@j������qj���֥B�?R���7���^�#6@�,����������Kw����
�0*��n9�EP�x�����aJ^5��s������;�oR��3�w�}2!�@�ɾ��O��,�r.��#���!v��-�c�ȵE�:��#��#���7f+�E�K|t$
^公�9� ��15U+��r;Q�z����O�����u�C��z��KY�V����z�j�
��4������|���b��
n�Pq+��> ���u�A�l�X{����o��>����b��1�d����`�)��Iә1��VU�b0Ak���j��j5�n�(.ۯ��i��\�#JA�I�#!|j�&*ɓ��XعBe3$�j���3�\�����+T��O�˾��!D��ֆ��{55�F/I��/	�b���D��� ��*TrG���z_�I����)��8�x߯`�*t�Ǳ�F�<��)7�,��X��@\��x�҂�I<~{ƀ@���F�^!7�A!W�RC-�ЊIǹE�v{�'�^Ο�a�������M�A�����L����x��z]�P�.1�(Y-�j��Fb�vt��h@�A]�Dj7�7�\�V�>��ݟ�)���l�]����X���X���~�ϼ�f�����Wx^�sЁvX'�⍍�r��8Tu�����U�ELN3#塠+�]+e+2}�J.� l�g�%�z�Cܩ�H�l{}tj}��2y%�h����(�M};r�.�<�r��(0�B?��/i׺Z��V�hKY��kژ�hһ��ޜ�IK�`b��$��=�gg�jeU�p��E�ǒ�g�=ܶ����N:����41 �ر҈I 'oV�,��u�翶��k��*��g֗?O��c6Ρv�#Z��z3�����c�\V>:U|eh\e�O�W�44�ͦ�/V�F:��/����^ܙې�X}ɋ��+<K9u+ν�R��ޱӜXn��LO�B׮!�6ԄXPE�\lo�e
��[.9����ݒ� �n&�HL#�Cˆ���sQ���l�ƕ``*ȿ�q��F�Y��Lby'݉g#���ZH?��a�ˎ�h����z��>�B&�o��j�waCL�~����N5���v���E̍x��xx���
U����X����]�_��MY�Y���{-�j����}�>�zS�<8�_0
���O�
�b��#3 �jqe]#��$�NU����>���,+fĊI®jaVHj�IO�J�KNU(-�#�q=����'�h�Zf,���_����k��Օ8K,��"����)M��C8AS�>���]��v|�\�Ԏ[釦کiůqc�־�C��P,��	l9<�����n�N������+y!n7;�����]�P6�I�?LW��oјG>��>5ν�9��Z��L+՗Q`���h,��J���M6h"�����\K�jӊ�'V��k��%�_��fD���q�R]؉f������Gc�M��L���I��}};�o��8W��9�H w��]�Oӊ+5���%e�0��ڸT�(� �_v/�с�n�Q���J=�_f��Aɦv����s����Ǜ�tyG"[-��sȜi�qm� H
�\���c�&�9H�7�m%Q��#K`��J��c��:qc�+��!s�������/���s�BZ G���\Eo�^����� ���z8`���F�5��KJۮ�n>�N]�p�rp���C]��D9���L�u#�N�	��e��{)=x�U��M��ڃW���T~��ԇ�����%����2�/X4Aj@񫹢���v�S&CA����%��ߓs��Q	3�s�o��5����S��|�"�v�������Ďv�>0*�z!���
�D��l�s�p��kƵ,t�;�����i_�� G�B�G��-�um�c�j�Q���'�����<B�l�cԽ��g2ٮ"�܌��\v)١��[�{2|�Q'��p8�i؞�l�4���Ȱ]'t*�~�M�i��쐥<jkk�Rƈ��M�/$�d �#L�gzWtE�������F�V��l��$���gϫc�Q�g�+񮍾��F�R�5�����m)��U�ꓙh�#�����!������g�gB8b�Zl�^c�SX�IP݋l�"���شܣ�F��s�~���$��:�
gkmC�1���v���v��`%�Y������m��"l��}�i?�aH���_�0`���@ɇk��!��+�s�l�N�x��;W��g�v�o�ہ���g��࿏��8� S�⇚�q��z��L�D�CΒ��x�Ov��Ȑ����#/�ꥌ�Hf]��ˉl��.a�q�f�g��'-��o����U=������7����vhF�.&ha��O��R��z����_��}�QnCN�bAl�z�,cG��O�N~+��C���>���e��Xk���tOv�K�Y*g�֛N{]R�w/$X�Ffd��u�����O��6�������r�>�8`�ڡ�1��7q�^�ψ��P��~�����Oxl�X���֑�_��o����v�y�'m	�`7�lL����4��w����oxp�g?�s�}���}�W��d�6�D��:D�΋O�6�eÑ�� UP|M�}Jp���;|�u�g��72�u�]^�Z�ڀ	�+���k{����=�?�7��^p�)�w|��_�����&�K�z	S8�}iZ��\�4�>�"	6R��5,�[#�Kw؂�hzq����$I0��z�B�����,�}U��dDl��w��8(~VCeᡟ�*\����됱��xLl��=��Bz������[����ocy��%�B���|�5.3�כ<�o�aP�%J���!s,�*�N�@�4N�zv��i���ة�W��|"��m���Ua`���tL��K�"������s��R�w�AaB,Ѐ�����+8���hn�Y���:}d�N�G^�:�:�<uۡÀboU�&�AU���Q�8��"�3��`��'�q�423�ҎOx�)��o����`۰c���8&�k��
x@G���)��=��F����l&=;�+�A���    ��J �e�z��wࡐ���[)Ե�=�*b��P�5!�_���C��1��<��T�	��'�`��>�)׃��1O���(��N�o_�#G|�B#��Vؤ>��һ�p�n~��7+_��6zr�O�~p�%t����od��ݢ�ĵʚ�y���G�p-V���K��F��Íj0o�����H�޾�d��pE�� ]��D�����Ńh�@���J�f��hd#A:6�KeF��"��>ƹ���=�,�^o8��Ij���jS�#p;&�"���w`PTP�?`J��O*KGh��?܉�\��C3�������t)?��w
xD�Mv1���Ļ��ۃx�d�3�|���y�~:~?_�~l_C2$�G��O_l�1�@1�L�1�]#��ͼ�-�:n����G�:����-r;?p!�d&���VJ.��"�I���ݭ��y+�n�Sv7B��L��,�6*�:�Pv����v5��HC�����	܇7���h����P7J"��o�t�6dW��>����Vp/�jX�!q��L�E[��;������og���?��mgJ8�5�{0�Yn��j.�Z���;��A�=�k�|�G�Zz���;q9�E�B �  ņ?o�QV��H*N`3����:u5��8_��#Z� ؾ�Aa"Z�VE�����;�ѭ� P����7�g�I^����'Y������1/�����=2������K���j��9��L�
���!�Hg���Dع	&(�V�&�\�Rq���[1o�ǖ��^u�(۸��D'��`8N��J��U}�q��=�
^N3Ƴf�ĉW������cZ�Ԗ��w^
3aj��p	6V4^�~��u�e�A��F�.<����<��@ć��D,�U���������Z��Ak��OV� 7����?�Y�y�i�:ٮ�k���L�CE��x��A��x0,�B<�05� ����,Kw/ض[ýKhD(��SO�6]\s�͟�l2��'N9ɄX�d◇$��}�����#�U{T��Bn A<q���`E�V+����hu|��,�.��)���q�m�
��#EZ�e��g ^p۸��ʔ��4�Α/��+4y3ځ?zе-�}�!nп;�D{{b񀗎"�V��\=�#��1����k����wΛ�~��WB'>��Y�L�5H��F����Ԧ#N�r������Ɣ��϶�q�^Nf>���Y��W.e�Bb���,Lђ�v�̂���������:QӿTKCA�G�6�4 �����8�ˏ��@Ʋm��g+󬓜rv�P���&sV<�1|[�@�(�y�W<>�B��'�
	��2�k�P�(H���u����hҗ���8b	]��'Tl��f�Y��J��yN����Z�����ӄ��/۔Ȫ�V]�ԗ�F�<�^��ߧwIpT�afT�Q�$+31PC�l�M��3��Tv�ǻj�9��w�����Vb����9����	��7��8��@&�?���&��h x�����[�|~�����q����} )�q�L���4 �s����7A#BNy����ۅ�%{=����
(�¿tm\���}��]���<Y)������ᷣ�t��:��9��������E��B4�����6]�ӗ/�����9M���,��n*࢑��*����A�m��4$#�������s����Pۉ��l�"��5q��(C�jo_4#V���bav�6���@�G��i�N?������J����7h!�ݤ����s�~gc�a^���sp�\%��C6v�N������Rr3�����f����Ȓk5MqxF?�ad
4VsB�P&��� �	%��@TQX0W����2k���a �%g�O܀.��W^~g�n��G˾l�=��i�}�튉p�U4�cW:��~�><�DFϕR?�o�����Y��}_���m�7P��l��%O5	��&��^A3P��u6`�	3���*ա�4q�	��E�bM���N�@�6J}eO7h2��o�KZ��$CjG^p��&5#�(4=z��7㚆���׋D�o�}�0�7"2�>�f���	6V�ֆ\Hk�^����ڣmǻԅT`K�B���-���MR������`�葖܉+��d! ~1�i/��KHx�d�S(WdЋtJ�B��h'ˣ��������vz5c�v|�7?b+���)�YP;�i��^��"�hy�H���gM �G����ڸv�������|b��=ϨV�P
+��؈Y�E7
���4k{���i>�C\xPݧx�wө�@��ۿ�J5�V<��T}~�綩<�����=���Im�;����Kt�	���qAY�|w�IpE�b�r��Q�A�����ꔬ���au�u�@� G�����o������T�H`3v68�^BH�ؐ�g.J���r@�f��pD���j���:����A2#V���QL� 
�۫��A���e�ל%�ܹ*Y�F2�g��'���{Ɖ��Q��v��㝤h��]A��`K���מ���P�3ɩ���8}��JO	��Z�L���@��`!�m{u;΅��p�����?<B�����<L�w4��N�%�4E�;>P5v�N�W�#����8m��V�jO�H{�����̈�]�0�6Ԅ�#Vh�d�Ozi]~���P9D#����_���ڻy�f�[4>Y��ke��1p��Ѡ��/��S��Yn�{�@-� um�ǧo��x�U���N`3�H��j��Duޘ�qϗ���;=m*��V&�8��T�����ջ��v���y�!#��̠�,� ]�p�<T����[��~�!��7o\?w�r
�D�����4[�t��w)%���о�)G<ӂ����y{l$��Vk� ��jWTM3ќ�����9�[�����A���a~)^�q�Վ�,��k�Z2E��ھ�R��W���Jh��]W²�r�A�U�����C�0ђ��MjQaB-��g��Y��I�A�W���u�G�'x@��`�1ٷ�]z��Y�I���������+s��01H[]{z�v:���_hm� ��X>��Pv�tY�|�8��_�}�=ZZ>j�I�K-���Y{6�Q|[gt�����d����ˇ�;^��a��U���PP6����eU,���y�����p�r'x]Z:l�Z���Jf�Jk�(?+b��a\0�W�@�??���sB�tGk�0!D8G˧K�9�����^��*'�����d>��M[e� �(�?X�C��C6�C�|�:꠨�tQ�U	�}Cտ�=�$��0:1%���j�V֍�p�$��Y3�|���1��]�{ղ��w��l��4��d�j�萾_���]����	�\$���NV��3�w�,�ɘO�={J(:��]j�X�z]�g��z���u*�)ww�Wt�E-��䑊o�m�No�;�g��"�
�X��,��ʑ%\W����_zѪ�(����io�TV���@.'M!����b��?�NF���Pk|R�0@������i�X i�B@}�q$0��![� -mG���*R�k8��Ղ:n��CC�I���r����T�)��T!���Y�� �q;�xԑ��CZ�����EQ]�]���MyI]��sn�- ���]���ㄎ7lvl\��I`0m���
���-�0�)��{iƉ����
�eMv���������0"�Y]��V�t��ݦW�A�UW�#T�Eʇ�\�炔%�u�4���=�R�S�\V.��>��i�f�޶���,�����?��N~���c��V`��Dq��v������X�3�$�KB���څ���R̡%z�2��6�C���2I'��L-�k�숙`�P���h�0w�6FF�M���?����DЕ�LYK�r����Ӄ�݃tl�0�/�oME1Q�����$j��H|��*. ���Mރ��O�U�_��_œ��Z/2�SgQ�v���l���b�����yW����f���ǟl�~+㕰�ˍ��cƣ�ɵFhCLD&Ū�F�b    lO�6���g��J� * ����`��w������K{h���m6�)yz	-�X>�P�-1��b����>�%t�?���R7��=����n��]a2Z�\>�l3VcE��?�I.Їl}��#���>�.4���}�c�烕]\y�~�#���U^@���(��X𸉓��wI�s���M�?l����������`i�X�̚���*����_�S�YGiX����2֡ff�vq��e[����8]�W��ha��𬸍�����gO]�a����qqPe������GbZ���p�Z]{$I�=A�ϩ#
h@�؝�Hm;�\��%CY�0$��aB�tg>Za x�+ze:]�z��a��kbMD��N����Yc�[0$�V}��(g�~׊V�ƕ�&�gѭ��Ѹ�g����R��(2��8:|�No�����d��mbaU���#�{�>��A�?�lqx�;�*t��F4������n���;ujN�C�^O��RmK�.7��yǾS���$W�+��_��k�$n�5�?�N��i�HE�9dd��vE��+ZO/�jU�5����&��m�,9)�|>�>��a�?hީ/.� �*� ��%�Qg�;���a�)�~��w��lҒ
��+�X���u��71��|��v�ǯL*.5z�V�m����Y�;�`�N<��<;�^����ŝ4_���r|�C��F]���h��"�k�6@�\�v��ȧ+.̶m(y@WDXޔ��)�X�
r��:MȊ���+"g2���ұ�����J4l��J)�-��'��2��B���l�	�&�S6�D�Q!8�����h��\�4�i2�l.�?����q"Zp�,��0D����$��B�eW�����齶z2O�&��˙t~m� d!�_��,��}.��~�����M�R<�!��Qh4�~o9�7C����� X�r���9!#Pp�i�8�����2m�C��'�WH!�N�^Q�c��Lq��f�B��8���8��p�(Za(�+:�y��f�����3t6HA�;�x��y<�N{!Ͽ?$S��P�#g�Ք��`Zo�����׀i�Qx��r��.��A��Ê�s�2�[��i^�N�e�3�1!��jF�x@�^б�?	���~�֓�[�z�~#�Y[9`?A�fo��z����d:\C�or	)[e=&~����]��ƌ�Y���!�-�K�$��y�����j�Al*��Ug8�lv�,R�I�t�§Oh3Fh�&T uC���T(5�V��Բ^��ߩ?пW���U���
Fl5�_EɅ'����m�|C"UN����YY<Hx-��l�7|隸��9��;:.|���?+P"7XT��뭸=��1I��^�Ş ���O�U���1�ޥo���!�5��n�2߿��M�R̤��Z{�4���V�f䇳����>^�Ӫ]L����Ibb�>�WЋ��f��y|�P�R�O8���"Wp:�^�Ix�����o'�<�^���SX#j#���N3<��V��%�Ż�PG8��1�9P�0-�g�~�m#ST}�W`I���A�N��83^�Tfh%��X���g��Bzf���0�F��� ��'ɂP�RX��|G���@ (%�]�l[��-���1�H��s�\��F�sMKm��Dr9|n�LMi������з���R������]�;�'+�h#�K��?#����v`��߈���3/��	�Ph�)k<���:��j����(1_M�Q�ovsN�L���hjb-�4�9��MN�[��YJ�ҕ���M�B�`_�ڦ����A}�ԇ����jK�B����W���� ]+M��<�����!�V�k��Fk���-N�P��7�5�����}?ޠ�ٛU�ӈ�P�@Y@0��q��w�F��2��v��|�J��
n���iuA�.a���oP�iH+ȁ�ڒ�a<+���glB��<�WT~�Z��U�f�Z�ga)�r�
��d9��� q��Kh����˯���|�ϳ��dCMA�-�V�d?�F�[	=�?�1�.��'��=p2��@����_�L�qF�}�?]��THh�R|޶E�
h�>'��u��xޏ�.i�g�.����,����	)��t/f����&��+ag����Ns����}bq��+#8`MȂ7�������u�
�K���-�!9��+�@|�X[}
����>��/xb'I&� ~��s���Y��C���Xk�w9�x��'�/���s�㤫��Y���": �ʸ,�D����[r.�h!ݏN/�gQ�I`]\�rC�p��%O�\��+>�*��$����$�&}�t���q7	����E�"��h��6���O��z˫�R��[hY@�o��銎�ѱ_�t���DtXn�&�Y���w��J��TU)E�͏2 u��{��)��duEQ��/�+0>=5� v{Z&�C���z]Vz!k�hl���K"1 ���
#�!&�P�.)�h�'qd��XX�#���]��]o�-�
$n�S� �>�s3�����|
R�a�E�ZQ�#V�X̉p=ߪI���݈�ŷ��Jm�gb�E
��k\�o���)	ϧ{���H�oR��]E���dC#aCL{�wx��·�a��亟�����ͷ�k�Aࡉ�>J��+��/����,L�B0~��6iGe��W��+?��=�N�T�o�8�=��׏�ѵf�8��Cژ�����n�(F85�󉛂 ���Ja{|�^P<��p���>�S��:FI+�$�Z��b�t���ش�dl0�t'�B!HJf�p�z�l�-������#�8���:�c��h*���w���
���W���\\x�L<�=D!����N������LT���Јki�.��ߏ��~�o�ٍ�H׾����d�K�TJ���YE"`������bPa��MH�F�FY��$04�e�ξ��ۿ�?�O�����Y��[`#T�+�y=�Ǫ�_|�Ƭ-[�TO�ܕ��������	a�Ј�i{�'������c(��k'�(f��e���5D;j&Z	FV�eC�`�q;�`�"ei_�(_���BWC�"�A�!�b40{)q0�A�c$�@��΀-�Y�u�ᰰL�B��^k;��Ќz��@�A�vc����(���U�ڙu��:�Q$j�4�!٩5�q䳬��V�Ĕ8'�+e��}܎�ל@a�v�>���[u�������d�IH2R�\Z�n'��V�_�Ɂ|�ǁd��@���=�K'j��
����i�5���O�\�NI�^�d����IW�2�`h�������u+��� ����>�n�J6hB,���b|4~�8��՛"�.�v����D�x΀pٖ7��6���:L��s �a~�a�Ƀ���v�Z�$��|;����MRS���o=�~�������+ЀT�l��� �えM*KH����8���2w<@2�#a���r?l(�9���LkC���(�Wa����k'(�
��O��5{�&�.X�0�H��fva*Wz)e7��,��Oh��G�X��0Ϝ;Tc�:_¡ku�N�6��)-!�x�Ʌd@��ϲqc��z��#�_�Æ�?v~=�bH6�����e����C��o��?ߞ��y�G$��[��=����<���<�/�Q�����)m�J�P��
���8@c[���#x;�>�?N0۹�*H*.�f5�����G��]#�ȱ<.?��3�",@��KTՉ3>.5:�11<3юg"�d��I�cc�|�S�6��B��{�pQ�;����(�S��jYC�~m���t���x����l�����F�����!&1�&.kf2��^���$v��R����ݨ[�ۡ�*����a��Ve���%�m���>(x�Q7纠�����)]�jKWtXZ*
��u�S3�mΐ����'
��M%�k��`Ð�Nr-_�p��F��K��:�(�UT    ���̅HD�LC��|eF��I����7�v��U;A%�`�tgϷ�ۦ��9:��d��j���
y� ��8k�����٦e�կCm����p�a��:�-��_A~��+�����E�q~*nIҀ[E�&Qچo�8:��l�
$ʰ��8Vs2	�H
�Y�(��5'R��W\���'f�x=�q�ѿ��P8s���f�	쐿�)��L��
���*H����U%��W���$|t��~���lV�Aw��,���]��O���{��4��tM�T��
/������ӣ���d��9�'�`�r�|Ԏz�`{]�vx��\�6@��*R��|d,��Zq]��o��X h�%CY�H�W�F�B��x$��@w�ѷ�i�ve�6���}W������w��1|��.����t��#N���:)����O:��˰�q�W%2_���z`�T�������?/�����Ћ'�\�AZ.��G���O�C<�%����A-�N����S����'߮&�Z � ���:�c3#?�9⓼o�/-��F-��_��K� �]�`b���T��^|�?�Bd)���q8�� ��ε�u�� �q�W1�}��G��p���QI�8��}<U���� ��w-�2��!yC/.�wm<��U,�m~�m���G#�!&�=�/�I�_٨W12x��ݻF�5)�B��q.�$����1�$�/ޡ�����F�-(>�q^(`�3t�K�٠��&����t���0Pͅ"*���La߰L���"�τDɌ~�4bb�B\���aw6t�<lh����3�:�+W���΂��No_��0�o�	���5�F��_X	F�F4� �cc&w0z!=kO�B�����I�x$�W����`	%r�baq7�*�8��t!���t0#����D��
�aGx�4�NC��н���|�(�R���k5���)3�+c'� <���h��TD�^�j�?|�h��^�+k&�Ղ�cچa���6�PiL�;��*'ɂ7@�^TN��csP��K��¤鄫,�������}ԲP4����Ӑ�)3�BL,�߉[�����9ژ����O�U7���Ǝ��1UϾ�3�3�rU+���5��fė��F�{h�H��Q�,�r�����X-VD�u��W�7u����;�*%���#�(�0U���:5gC~:�2�����T��V������e�c7�t;S��x{��U�ɝUdhQ]�u���6�Oہ�n9��Q-�2��YN�vH�-u�6vcp/Z9��s��d@
�
?�s��ʪ�(�-|:���x=^�A�c����
R�kr�2�{ş�>���s-��B�B\le�h �3
bg)D�!���֏q6}�!8毄��߽S嬐>�Mp�|�@h&qg#�t$qz�?3R���0Y8���ȈXmG�뷺���56�x��ιg^��OpE�W��q7L�Π$�U��MXI�"-@l_E2�q|����2�yX���xXP��Y�&����=�PZ�	��J.��K�ASm��鬴ے ��F���ᅑ`#g��,��x#�
ǲ��$�HE��"�U'�DH�����XPP���.^)PC��G���|������Սt�ʻ� ln�X�DJ��O:�d�`����xKo���i0�%�J�#&�B�^8��e�,:A�VJ��KZi�`��q�ԞNG�Opa�oh��S��4��U�SEz��ߡKF��]F��f�Z	F�W�}�����^�h��l�tɍ�\H4Q��Ι�e U�e�c�s/�D'������;C������'tJ�x�n��AUz��X`tcP��,����[~;����,du���6?�$��eB�m8�y�Π�o��y}|?����l~.Q
g7���3�J0���_5�i�:�O7��������ǐ/f�}�|������܎��V���F�����1���t�� ���i�K�������2��O���dU��!�y(	��I?+`@���Tcߎ�ߣ#Ƈ�N檩����ٹ�T�\o�A�r�8�R$����D���j�'<8[W>�}?��΁��Ű-iՐ�=��P�������`A(^��;59��G��'���K�4�">G�����U����w��>�[�����fɚ�Zb�)�u��Gp�'w����K��ワ�sQK�N���%J�� �O~�� �hD�<i����W��&B{��	_R葘hp�qxh3A	oT)�Q���?�sz߷���tO���Lv׈@X���Ӌ}�����/LYNn��g����W�H�w��d
<�?��~����m��K4;j&� acV
Ac�FtzDDaHW�i�ɣr���@ܼ9wĢFG��&��bpUl� +6h�m���Dv"'�;"�.�'��q'X*��I��יo��Ah��+||H��y�����=#�@�T�r>��ػ��{��8���W'���f�d6#��J4B�H�2�i����c�'H�[��ɇ��˞}}�aaH�$3��r���@N��I/��f6�G���Ψ}l�v��V����2u�b��^��sg����R�_O���`�neq�
���		^Ib]�����'>��$�,|�5q[���Z]�Pl���/���_X���q5kj�l�ĝ�:]߽X�o�t�8@�;�Ԩ-�H-�Q>��1(t�L\xT�������W��<��o��_{���p��;O�؉�������@� ���8`�ue*���؉����vHD��_�?���W*��=�
"��Ҭ�<��#�zq<��^�)s�����8܊z���H10�)���Z��s\'i?�[!?�Oy��X�a���+�����e'��qY�Q����V&Ă ~C�ֿ���K�deEV�-\kogFfaC���{��2�,�i���A[zOI�<���(�	��$�V�fۍF�\�1K_��$�
���7	5�����f4F�b������ʼ��)�,vn@4��Y��r�I�V��H��|��lV��9s\U�p����U�� 
e���%2M�E1�k�wݯ8:�.{����`DlD�; �đ��~�c�ݤS���cbe�6B#r�܀���׏�Ð)~�������N�*���sf�P������VF���i�g�W	����ˑ2ң�O��d��?���ORhOw��-��F0-�J�7(T�V�t'|tJ��x�9ʜ��9�M',����sJ�?�5o��K�����O
pH7�7�qj@8
��S�ߝʱǏ?7ЩI]��Q�6�D��(KU^�O
|l⧠W���v��z����乔�v���l��������7���7���j�{~=�*���;�0���w�d��e`��dЗ��m�	� �,��$ �� J/2�ѧ�zz&�G����#!���N6�hmA��	^�Z۲AW;�`��N�Z�{���ɒ�^9��_�&!�+F>�<[U��pE+��󜟍�GX���~/
���g�1����B��	_cb�� ;J���`Y7�*�#|{��+6��,�&�YP��;H��C5�m����X���Q~;�rcbK��Kjh95�}�wb�����B~5�����M.���T$%�����(č�מD��{����?_,,���J������#�`as���u<�?x�T1J�e�K6Ą�I?��g� u�qP��U=f�n�is��K�aD�_���NI�BT?��q�)��'Q�.��o0��,�^~����n]\~�o�|��,�_'$�^���"\8�E���n��6���?+r'��ZoHa��r��y����F~�x��t�,���J�'�����X*t�7I������V����y���ι��U�(.LЂ����T�G���}�L� &��,���H3�v��
[є���Ϊf�icGF�&��-�<�霰K�rKQDAt��l�� "�8�wlG#����0�n�CM� %r�b�>�|���p��g��SY0�#JA3b������vj�tS����m�����    �ѫ���������1�P����c�-���ֈ-7���c����t��n�n�H�SJȑ?������+�8�8�;�'���k��#�-|�'�@��^�Ek.@|a׵/>���|<��z��$_�4W.$Z�e�H�"Fʴ�$����p����������QV`�[N���}l|
��:�yep�<��ڟ+���D�Չ-�3Z.Z�Y�G���Eq�7��<��VH��P�e��8�W�z��!W�9�U\LB
0�� 5/ !��.8���S���=���_Pܮ��8RP�8Y��ģuCf%g�B{l{dr�O�Lzl>9�qLN�T:&��桬�A��;��+kG�+�B`�Gr�L�'��h������=R$�0S�[�<�8�{��ь�}�I��G��V�'���>�`@�Is� � s�I\�ie�A|�w�A�u�<׳}Ɏ(��S3Gld��r;g��8��1>J�� 	���A��%����Vŀ[4�,�!���y�fXҘF��I����@����3�)�i�܆��r@�r�]��i�kpdqr���;������~��x8r��='#��r&8H���5��߄�Ѝ��t2��]�����
ǂ��l�M-��Ed˴��X��U&N
�k�g͋{�{�0.L�֮��9)}?j�MP쯗hrl���ܲ@�71t��N��*L�^T�6:�j�f����]��-����A̪��Y��q�lh�e]� W���cc�ߝ��I�ѐQ�����.�1�C�j�D;ZS#�ƚ�%v;|IN���(d�3��ʓ�b;�K��|����C����8�xʖ�xj{��6�e=��f�:�s:�l�MO"2/�p�l�O,'4���FF��m:�j��뷸Ä������Q>��V�mlH����{��Q�P�q��X��k�Et �C֚b@��������7��<;� kE��*#/KQ���g45�b-�&mT��~�},n��~>����	O8Ѻ��d�q���t��4�f�$O��Y��pn%Q�ļL�/Ā�25�=���Ȓ�	j�=	X햓�I�^U�V�I����/��X	1�Y2^%�F�3�ЦF�������ny���PA�k���Nͨk���ǈ���&M�ƽ�1�PH��'Ǖ�q{�t�^�D929���Sn5��*ڏ��_&�f���<�,�=�WV�Ѐ���J��z��S+.��3�(:��Z���X�dg�/��D�7H�P�$�\�{9����g�-z�Y��Ndsv8v�/%%;�|ȼ�v�l_@2�6��4@|Y�[xSһ���3֟��X��Z:G*0:��M;Xx���e��?('�s��'|�����w�K� �[mա^��w۶$�*��im�����S;��x���.��!}V;���G�L�	�W�D�CP��R����;uߪQøIm�����k�%^�D�\��@�v�ŝ��]�-��P[R�E�Į�*j�r��Y��F��9�cO��9�kD�'�1���Y��%�F�FT�`1(�r��LmN���v寣:�4�
?���&�M]��K����Fx�;/f�L��U���ڏ����%����Br~�Ѯ�. Z
��J;�� �3z�LX��:"w���XU�zGt�"	=u�����i(A��ёE����5cC���J3��iD!zf�w�!w�����B�F�4�_|~�+��Q�2�/���1.mSb)0hF��6���ƨ�4�G%���?��Ɂ/��2
l9���S7ɂ>,�c1A4˄�>seшN�24SKd���l��s����{S�ǙG���~J��#^��@X���6�!L���>�g�;V{��-�R�2G%Z����T��!L&����튎�����V�ԗ���oɪ鏁��tiaޏ���Eu���(8�-��iPs���ˡb�4���o��T�+�?9�4Q����Ȱ�W���X�{�4�#6�՗��^^�^��1������,R�c�bxET�4��+K��Ku��AKk2�����8� �]�gn��0� �]g��8ۺuٞ}O�����T1��j��|L
,c��g%3�E�5�Q��������y��rXJhB�d�X�3�q\�vGA�5)��s�)3��Yi"X�L�/>���P�d��s�,t�|����p_\E��5 |y�4��'����8`e�rG���m���%�S�#8��9K�����s��t·�J���X��F4�b�թr���x��1�I6�F�S~ˢ��U��u7SZ��ʤI7:>}����Y	-q^�e�5s4�sEiE��b#�������^�öd�����雕��o�z';���RalI��&�K� TqWڀ	��M�k}$��qԋ��_��1g�hY�ޓN,%;E�{ME�o�,���W���Q�3 ~��J�D
pC0��q���	��Z�f��fw>M��f�@�:��ǂ�ދ��飗ߙT�g�Jl6���D�I�ٔD�ΰ���o]n#G��=�~���w ?)���D/%zƎ���q�Y�[��n���ll&�fw(deq+5# B#rt�B���.���o��w�W���ܕ�N�Z;2��(�g�N�0~�~x͗��kL%2E"�#4A�.�U���2r:��Y�Lϧ�I�$|�\)�Z>�����g���FVK��v#�=��!dX_��,��,s��@#"��� ��~��7%�HV%7�m�y�1!!�u��Yhc��0���ɫ�FFZ�e$�f���p��-4�����&�]�Fd�Gԇ�3z:J �����.��-�x�@��p�1;q�/�枤�B��WM �D£������;���l��D���P��q�����sR����˹H�2"�T�<"��o�9�y�)�\�_�N��%M�T`݊w1�w-��f����AI�?2j�G����v��9�b��(V ؤ������|�r�i/�^2����Gk9����4��H���۩GS��r�SCX�~��O��Yf΀i�ᮘa%���9O�bȕ�US�/�qh��������z��2�1l�"9M΢�3RT|���c&�3�����苅�� vz�t�/��S��[i� K�삘�Whx�N�'�n�Z��r|ҕ "|����©�t2�2��^���|�oU����XNۘA$!�P$�@P:,#���ٲ+2�X��Κ_���x>n5�+AH���?��,�b�����/�����>;�9pA˱���f%�֔������l=C�j�,5.�raQ�rQz^)����3��}F���)��}��!~I�i�v8%��E�+QE�uol̙�3���2?����� i�b#�xhT��@�{y(��_�ރ����9�d�o�FC�$k$7��i�6���F*�
N��ul���m�:��%-u�WlJ���b˙nd�ik�?��@Rq����k�Jt&t 눊\e:;<f�����E(�?��~4��k{��*Q���N��8��/��h�>���^���9�����o�w� BA!����A�i�����&~d���<���D�릘��P�i����v�6g�ӳ��\aK���#��i�}�*�2�D?��l�����ػ=��g�~!a{;RrE(T|Ũ�o)�Nh��R�y��M_����� J�3�d���y:�h7`��>�d�z�F�Y6Ƈ�[kQLh�Ӷ Wa�GC�AyL	z?��w��G�+����	�'<�=�<N�|��+yD�0�5�/��%G�س��$�a]��v�bG���a;�i%X�Zk�G��N� |%�HE�w�>�aX��*�U�*��NC��CѨ6Ҍ�tpJ~���3�<BXI�����e�s1�'�������c���	J@���3���g-ϯi�M�T��ȟH�NEBP=;ޮ:�t��2���ZW�rS���H9ԓLs}��W���Ż9���9΁W�G��o~G��nF�@�-�|�7����@#�[�:;d\_٥�N��\�7J�JA�ZNg#f��3�M���pv�V�f�    ��-�e6�}�8$l��DǱ� N	lwy�vz����A	x�Il4��5�9����H��3�:dg�����Jd����Nu<�ݪ$n�`�9�U M���b�� ��A+�Y��훖����J|���x�+�O@=Z��n��%˥e�w]��o��O&&���q�Q�6��N�
�&��P/��[��8}��?������a��b)D쪱�'���(�hg�;1�gLEB�8�p547qyl�
�hl�Hh�;�uG�����*J}���"<�?њ�Z�`ak�:	~�,�ѱ�Y����+��e��G�����J��
�$���T�ʅW=�⩦�5p +6�ቨ{��?��4�%����/U����:�x�[?�6���пp��p�;#�l�?S�H4[m�aD)�U�������Ȣ�?�hҘh57�	/p�5Ϭr��U�r�1n����Zo����=	�ܴ��j�ž*��x��N�ñ�Wu��i��ڽ+� [�����^�3\�\2�l��z�����6]�׬il�#��%�L���Y:'��Iݩ��%�@�U
:���M�7:�h��A�;��-��7m%�(^�5���#��z�.�0�>���<�n �G4�w׎eHe���_����_Ф�V<���	I��*o��d�:P�d�"E�`s�ثN�����͚�yzk7�vi�&�L�������8^_O�V�b	#J@�ƶs�B#7:��]4�gQH>j V��l�=�#�L	_������cX�45�̬w�y�M2D����o;ç0�T��8e=]~޷iM"0��.?�mDV
lǗMb�dD'ϗ�7�k�PEn�j��Ϛ}�u��i�/OcՅ�췜8�7��h)�h�̈�ZS �2�Jv/�|=E�ý-r��,Ɇ��4��jL�&�¯�ߴS��@�X�crd�C�5��������~8G���O�
�Xe��y�Sy��76���Գ���pbx����7���S�S��l%���6��G5,�vw-��v>Iی�p0�q����u���O[L?��&p�Z=a�������g
wx�~�!�ASP��rqƉ��*����̹�����m��[�U����['y�(���Ez����C�t�-�
z�|����(_-zH͒zT������姎�������k�O��휲(`x\���mWbѻr(E��������N'b�����te��\�M�|h}\	I��Шd}�4�ś�$�3��>�Z_B���˝pA�]�;4S�$;�OWě�K�X��ܫT�)���d�zuj�7M:��e�~��z:�wZܗ������'t�@W�2˿]�E��N�hD�<b��Yҩ;��"$�&V��Y��I�?[���v�K��\[U�Z�&�,v�y��z�`������j`��)	,h�L�e$��*%Z��&��Zef�7!�@��eb�6��I��,y����T�)R޼�$f��GnFtY���⷗~��Y�]�3��ޚI�(V�ήk�?N,���3�ڵ
�t�xl��MnD��-zNŇ���g�2ɏ۟�_�|��v;n�� �HY
=�����7�B�򟏈x>:���e/a[`��Z�)���%���WT�P�Z��¦��d�]�E�O�(܎|�Nj����z�@��^��͝�w�;V����r�ϐ��o뭝q2�<��;�
���鬅�}�ARd6!i�
��s����ڮi�SE��> ��>pE�1���9�Rs�-�9J�����jY�}A��@�w�d~��o�_� M�B���N?�LR�z8o	YK�b��Uz`���*o[`x��x=�G��o�M-g�A��U��*�ʥouS8��s:�z���G�+�Z���۟�K�Ȥ}�H���gn��X��s��Q��|\�]Z
�@Y=&��Wg��G���/��E^���0|-U[A#�É$~w�6�� ���0eJglz�%����ÖSe	?��o'��
��[�i��$��r��=�h���/K�c`Gz��H��txAQ�����t/X�*�jң��[�:B~��OYB�g4Q@S�\u�gnqL�C�l��.0b�Qv`i����t�����F��� ;��澳XW���+�����)� �>o1�פ�t�x�ۗ��C��	�yѝPS�l$�4�(�y��-���1�LN�]5�ba�ȻH�x�W�q�h�� G����Ӂd�PE���	*��!�r�!gr
wx�
��Ģ@�V�>�����=5/̢�;f��|�T�^���	�^��J
aH��į;��'
�F��g����Z��5)���#Cq�gj�f��0k$�\�1�n/~���Km4�i�n9�p��\�"sS�?������p
�+P<���#����JС\�Y	{�
��N�'�;��7�4\>O��DK"�	4�e����P3�l��q!w��t��OX2?V�DC=P0�H���ߌ�~�Y�ꬄD3u|�6٥����!���tWA�iBV»��h&4epv�Lh��"j���kס(����[c�b5�*p�o�\�Y�Mծ^+��*`N�)�/(��_��/����YL��z��)�j8`c,\7���y�����Ul��l��v/�VPeNXɦ6��
�u��j\��ͺ�����0r��O@|��
S��8�RJG44��q��Q���/<��mF�"Q�'˽�w7�{:+�v���u�b��%�1AVk�vҕ�9���9	�v�Y�W��QҤ �Z����4��	�*���Il���t�bI�G��(��lY��(.un����n���̆i��]T�"oM%�(I��°���c�D̬�E��R�W�_�Kh�e�B�4�$B�Eڼ�uS����`�!���۾��؏��s�>��1�c�߰�3�To��*���#4EK�׃P���L�:��1��Z���I��0B)��V��'�j�h<�jJi��͎��@c�K|��D���B=8������.�>�4Wb�d9Z����Ъ�ɿ c�i��m/���=��,�z���^؂�ŀ|�H��������7��/�4�6ZCR�A�s�l5#�h9V��
k�TSy�u:^����c-*|��g�9h�qry��l�QS����6��ЈPqe��1	cj�q#¡��3�n��?jI]������k�qs�w�n�����;J{ yi���Rv��P>8���,:9�Hi�X�E�R�餄+:�j'���/ !�u�z1��DoE��C(���đ(��!���E�8aV�01�������^��p��?��&S̢�%tu0��ű��$�B�G��@�MC`�"��y��N���w��%�����]�>0z�Gx@W�<�u\"��`�@7X72�@�5a�\D=銲Q?蠃.0S��l�.P��k���B���&�D��AB�Ӓ_���<|^��K��#������%���>j�D;����I�1A$��h�%j� -��,�ڵC?�f��1�?��z���Ԏx#�ߛ�J������p��E�H,+�/��g��U_��(q�k����i�������Y�rK��K����!���d���m�vD-��^�v<��XB�Ѽ�g|��h6ъzV^Z[�����*G���=b�8!9��/��){��c^��;�G.{+iN8�0�/���rE����ZV��S��TJ�wO09Y�&�BQm�����sP؎�*�_�׉j��s͓C�6Q����</���9&e����LY�M_�+�,�XZ#���㠓�&��J*�����_Z�Q�F'����ȴ`� ]9��PL���Ϟ���FA8���Ig
�P
2l5��5����i��d{u�}��t/��C��pm��s��@5�p}^sZ�n�Ft穛2G2�c��>�~��J������mg(r���ɭ�)��sp:qG��T���v��7~센J�/pVV0̶�#���(�a�0^?�Xx�4�.XV�[k�ＷY�`;Jl��1\]~������q��n	Wtܶ���;�QbL?IV	m}��(��'�<{�j�M�    B���0,�r+�1��k��]��~Ryw0/�ݲ�$��^k]N��_�".������%J��������Gx�p͈sZ>��ı���֓r���]�W0����/ʃ���wN?�efY�0���|�?�o���Ȱ�ت�c�ff�����J������.��S�G����FX�r@�G�re�����3�]f��.*23���Rΰ��8����4�=��S��[�v��_����U&Q>�,�	�I�|��>�+̤��oFz���3����������O�}l�	_�[��*5��l~rc��,7����~�;[�T���wX}��#�$ ��i� �~���$(Gw�LX��R�2(�zt�A�fM�x|�����飹�%� '��N���u�X3������z�����o���wI7k�
�@�4ޒ�|�/@b�0��XB�5�Ir��������&*n�7;�|��<����&* ;������#�
tM������bڛj�L�Gӏ�e�]����fl�A'`y�]nV�O���g�r��|e��.�2��ebJ � }� -�Mq��Z~�Bp�9�7O���y�������� Z���#\��V���1� �~Zɠ|h�W��{�"�C�����r�=���r(���>�e|><nm'��"	����;�"��d3�`��׾�>����#oXD��Z�b���l�6U��A��ln�V���� ��Y���"��=]�dn�x@�-���� �
/�Rx���@��_�C5 �#��Lmg��,��z�����8�l��r�@s�5��.���-7s�ܵ��/�/���T�Z��n�R����`eF������͸X��S���j���o��GO:�2��aAQ(+�v�~?|�x�� �`��[3bǾH����l4�ccX�Y}��m��\ʁ�jk����5/��O���c�����V�'� R ������8�J3�Z�������r�~>��%�RK�x��=�
~FVgdy���菖�36�����G>S��tfA�^��Xj;v܊K�'I�Fo�����(���kwL���U��HC�Q;߆CK0��۰&l�*�b�09�'LG-� ��jI
Ql��YPjf���*�4Ax���Q|悰�����g4��� ���/S��?�5D����{�L�c���8j b=M�,Ro�8����-7�V�7U��q�s��`�NG�
D�i:���|�,g�Z�@���`�k�<$(N�X.0s�f������o#]�����=�<)[�A�꟟��C���Y��VµMC��UZ����H �| qz��~8�_��d�7� ��g�G����X8��T���j�"ٽK�^���E���7M#�곣� ��~E���4H�V�BW��k��u�i?�߭�S�K.�h���/I�q��4\����1Q��"���'a�S'�z�g���J���P�F�M�3E^n�"���4��6<�a���[	|�?��b3��0������ϱ�o?U�x�2H���^�rV���O����"?���_ �}���	D��(���^~	ts���)Ԛ/�����%dB+8���8�� �[�;~2�쾟���~?�:=�dPD|�WW}	�V�j��1��p�{�����}� �$��ﺰ�~���,�m;n�'؈�=Ӌ =�>pݙH x��.=G#�%'����|�g10��%�����=�H��5���ˍ:�F�~6/���Rv�����y�Ȑ�5|�� �9�����jg�NsFS��-mc�Ȭ�*)���s���G� ����x�O��2���Z��[t�9\8g�9��f�sm��;���M�I �r/5so��K_��rS�^C�k��z�d���՚��y��5����cS,�A��w�󃞩UE�����o��UԴ���78��4��������v�5��ͯ��%:}�L~=�.�j�-�<;�oy��+?�l���:ȡK!(�|�۟��ݍ�k���/H��ʳZ�λ%�R�!����w��栱o�0�R����-\�X*GGp�s�U�u��5��b�0t��Nj�\h���c���ЙȪr!�/����F���������'/6/;ްT�
���Ό@}��	�>��&#&mE-�;P��ɨ�V��6�����c���Q+�_χ�_�����@��+��Vun��A�LA^v�*��8��}>���+�+�J�9���o�Q�v|a��� �Z�z���:����x�k��ٯq}��������Jtj�~S)��,5��T�}�=�'+a��
i �X7/	��\|�iA���C7��E�f��u�=���&6@����஠��{6�X�h�O�X��@�ښD�
�V��f�������bpC�-�_������w'���:^�jB��E��%�X4�ɪ&��1��n2�s���O,D)R����P���bX��кo!�Lˏ��X����n]t�
w|IZ�h@*��uN�?�Dk]0�v�y�Խ\h����-�^��-��C�����_�= _�~��,T�|�q`���*�Fm�"��ϗ�_[��S�\�//Xd	$��zͺ�?�J�]7Э����0��v!�COB뺅� ݫ�u#O�hFޠ.T3�]Ir�F(��+bdr��3L��5r���~;4�[#��H�&o�:~��w�������~*:ޤ��gx5?_v���T��ʱ`�#��DO��}�p.�m���$Qdَ��Y����k��R����(��ʲ�@5ίi�Z�*�v�������ŗlK��V�$�w���Z������+g3)�#?A@�"���п���%̺�����}��?�:��~MnI�C����I�+�����F�Ng��!���X�l��G�)=Y	_���
�	a��T'�c�+;[gVy�#n�)X����~�c�W���MIʇ��K���O�OW���D"K��'G��#�3�J��lVn���pb��" ���
���Β;�OdS��%T)e{g���p�Ok��R)�/�Q�8F+Pٔ0U�wO�x"�������}�`�SPU9ʽ�98��SJ�?`�
\�j1UO�&J������8χ�?S�{k�@�x�}o
�[��^���y
�/��ǳ4�X���A�L��4��0N��t4�͆����9��<}��MMŕ ����ۭ�p�s������I_�S�G6k��%�"[�C�P
a�7����E�Ug���%n�^�b�K��̈́`Y��	�q��6��ܙ�{�TE|@8���K��j1�8�W�Y�6��	��������G��`Iwx[�:�^��Έ�\��d�w�Z�5�@Q��Yo��x��
͝y�F���Yq�^3��#6@u�F\�n�_{�~v��nu)�6/�em�*5�w��Tͻ���N��p�Iu\�<��%4 �z5�g�4
������U��ƽp����@��3��X7#h�ޜ��C�=�ְ9:�z�N@�.���)�T����?�@�	;�9�x:!�l��J�T��p��Y>on��)�Y�a9>�]}��>���;���9���Җ�=��#8<q"˿�M|�<s+	9��SR�b����ЈT�Jf�������9v4k��Y�3�a��C�'yA x��}ז|\��g~�E�8��T���m��s����]9�[\������!$��j��h�N`iMX+긝�b�m�tנKF���8��>�9���! �w���(u����ur\�\�?.��,���G�s�7��<�P\�:Db�wAB]�wL��PF\%-����wg���������r�߄����<�`�G��Я�o�Gs� $N`�*��f($�����N�uʾ\/��B������$���Ƞ�򶠾�_$��?��M�n<�p�	�:���C�l�H�C��,����(�+uY;1 ����C@/[�E�KK������	׳ڽ�����"�p(�0��JC2?��:����;��<~޲�P�6i���|�2��%
(��y bf"��������(�<!��BD�"s��J�ͨ�2��iҤ�m��VN��g���k�^_F�ã]7\�"�/�x�)��    ��0}'ؚ��"-�h\&iՅ��h����~=�h7���:|�ZF�M��7���3�_�^q��Q\I쬓�&�H�#]Iܗ�AA��h�DGE��:�w��_���]AVl��4#�,@2&��2�eyh\U���c�>(K:�C)�U8���H8��O�@g�W&�[�X�Q1ro�=�/��B4�lV6_��?�o�-�*�J��z���V���$Dʳ���=��h<n��U�=EIԮ��aDt_�� �G�ı�TSf���}BG��u�e�Fn��с'��~��>�~�,�C�q�gJ���C.��E�_�y`�OR ����'~`N�0s�X$��@�t�>m��*b�;�Ů�����NG_�9S8��^�{����C�"�!�|�m�g4��s��6.]H� 1��}	�a�ɵ�D�@�.DR�UZ���t.��P9�3�^['��:J�j�H�ގ:�ȝ���~��݇��9A�o����У\����%�:�ۨ�R#������P
\nG^jX�k�G6����z�7?kj%���ښH"G� �}�53M��F��Z�v���|J&t�3>�]���ZV������_�4��*���e ƣN��{��<��6���
I��P-G+X/��;�c̸8;n��02.����p�Uݑ��f��h�%�"P"W�<�z�Ě��C+�WV��:m��
�Z
���]�G�P�C�r1!W6QheO��,Y;�U�ֹ�6:i{��ߏ\_R�$�c@^��~���8��c��vQ��`�Ђ��htE�Әub��C��C��)���G&xM`	$�>�(A�쪦��&��WL_cK��_�~��KB
Pq[i+V��^��k����a=D�����˝>�dt}f@2�ID���p1��G�+�?z�v*g��l	:w��w.N 7�/��n�z�|ò��v���h�Kh��;�����Ȇ��V�� ��'��C��ʵRBTO��4k�����r���`x���E��-6G���M0�(�ǅ�E$uL+˳�ć�o�}NT���%�X�'Nf�d&��q�L�K?�E����/S�	$p�J2Y��3��� m�$Ͷ��w�X��n�?�� �����0��W
�\Bi���>>K�
e��͗��e��U�bU� ��p=��0v��lު���� N]:�8����ou���}���� MBC�f�Ͷ��ѩ-3������ű�%,�/r���/�~�j>��X�
rulv~���'tw�N����yV/����xo��w�-P�O��k4Uˆ���9
φ����0��,�'�edˬ#?t\ �u�-��%���b7;��.�����I�d�:�[��Yc,8%��t�i��/��Sr��ù1zdP�G���y�w�.o�5�,&^�Jk����qB��%�G��B@|����뀊V�/a-���/�u������-h��?�M�`	-���d���l�Dv�3gw�1�����]�p����1��%�C�)�Gi�w��3���F����%�[=��D(�A7]�`����P���:�šR�a��:����+�
aF��֒�ӁG6N���|h��F,x�+�+8$E��#d�v�o�8�^�`�Cu����cpZn(6@s��R��|�0H�������{�):�T,�O�Q#8`m��}}-���0�c4e�*퉳�8)�UdU��1��*n��/lm��Z�=Z�)鵮񁨓_� �-�!��}@�_�Q5�H�T���S�A����E�$�<�t#T}��{@�qlR�����O�"�ؽ}�TpE`P��5�0q?�1�u?s_�}�pE+��FI�a�b&~1�-ĕrgǐ๤\ެ��a�գ'�P�r��]q�t�]�e��i�D�4E�ge g��q%%��N�������i��@�	� P|�3+po�>�z�7v�F��x� ��ԍ�*反	D
eP�?�+|]�ɟc�)�O�_��#��/¤���pA';^��$�(��Y���"�sE���>Z�-#��b�%�9��Y��%����1r�+:~x
-�)���F�v�v�AD?.G�x>_7{W8�	
�U�3��D�t����U�`	���^�@��J�{��ߠཞ:w`�]& ;����_q*����F�&�^G�Wi��&�1k�[� pAcLP���Ca�4f,��R�v0��na�l�'u�Mw݂,B��d���N��ؤ���R��z��9�?K��v^!Q�A	8��=Mq��Z��Tr]y�h�h�Odm���.��IÇa���P�E��O?a=ߔX�I��z������u�vz;��vz˲8�@u���LJ3:Y>��H�a�x��7sЩ�l��0�[,X���Z��!� yG�nd�b`9�����Hg�A6�[�l����N�R؈�oH?�.�x�� VlM���n�:D9�����x����|�ܡ��$0(Aݛx4la0@O<U�b���#Ih���`�w9V��T`Y�2Z��T�7�W��r�z)�(2����{M&���?z��gÔQ�2VU������BS��(A��Ц��/C:<��������e���b'�=��	^XG W\Mz����ț���#�x������0{��gp��=#�o���g�jyS�����cGn8S�Y�P
VѸCUIc�Guh�D9��@��0k�b��)	�g^��Il�����AvaOh?�~�#�n�ϡ�$�����9�c�+�_&�Ķ�{�����Z�
�1�-����ry!B˗�#?s�+Z�/��ϋ����o�������146��Yχ���o>���c91H����	����8���bCw����X�^��hvg�KhlMl�ϪxٗY)�ԧ�1?�]���������waNjYt�%8�闆�uI���4�)�c�\�U�֌�����hN;��:��59�����g</>`(UPE�@�<Uw)����ϰ8���Zkkt�����R�9G�!��	�<0P^�LT��_j����V��D��|�'8���̠��_{Q���tβ��_A�h����3꠆�R��/���^�ۚ�,�Udy�8�~0�я6ԁ$���4t�Gxkt��W�q���J��\][�[D|��T����9n0��O&lx�&-�zS�W��,��"Л��#[�tF�����K�Hi7�E����I�,k�ѯjfy?nx~�/�Ex��E�f����"O��l~�7������D_tM]����w>�H �p�*��޲����`5�̎I�u�3AJ��w?	�)m~�Zf�����������߲eW�A��>R	��i��5����R�j��~MN>ц�s#C P|0c['|:3��j 2��?�ף�z�����Ȣ�c�&���`5�K]�~��b�R�����*� t*��3�黎G��v��M�^�n���Ƹ�8���Y�!�au�a�Y�Ӿ��[eJ�Vж,�$��$���w����x�7�Nj��/o"��[���	����v�yX��,�5��!��΍�#:,8��ǇƼڈ����jR'J��7'��%��B��Hۓ�`b��֎K���6�#C��~��1´5D9K$Q��+�^���� �>h���;2
�||�J7t_����̒�G��k$�/0
�h{��}�h{6~m�q��æ���X�M�ro������a��Z�|y���M��`9�� X��ׄB{��g�$Y~\d��Xr��*t+���Zlm �^���?͒F�����9'H��kޟ�ƙ���e<H���[��VC�����@1ZXk")���bl���kH"e6e]��V�Lr��<y�;9VˁO���5��V��L�\T� w����s����8K�]���M/��_����)+�PFX�V"We�Ȟ�f�s,�z/,[~;����w�n׳���`Ů��#t��Wg���檵�{�WN�zl�]�a���(�[z���O��NzG
_����why0B���?��    ���Gw���lm�v�lJ � �;�]l{�mGH��g�ͼ��/܋?e��R��X����_ �&�k��v���!�E����\$�)��CK�PQ�?b�H��_}��.3vN5܃�X�4�~�<nkQ0E���0�0�!����K���Y��Ot�����N�V�&n��������u���P���L�]{�X�Zm�0�V��y���Ǯ����uK�Q� Ҏq�Ru�H��IdI��ov'��Vk��$0� [�C)8���h�d@LQ�\_��*�J$�u��H����O��g�@������h'p�F��z�7�D2��nϋ�}��o.��˓zYx2�kL!)Oz�b'�X��&~B�I/b%�_�jGmD��K��k�&�7������EBt���z��܇����O� q�":��d5��	o�c���.{���:
?�w�~��>���$
Ë<��}>=�W�OT"��4�EI���B^3�t&�H͡��*9���i�V��I4*hA҆%�� q`������>�[\촱S�Q�D!ю�։�i���C�S�kȫ��X�#�m��F�(�A��ş�;�������/�۟��C�)̣����я�n�-]�@��q���I��Z�q�q_{Hg�z~@�5���z�u���J�v���
\�M�i��Xh��)�E�N�s�H��k�!�$و��Tnyp.!��I+?���ۺVv���	�/�U
;7;���Q�!�7?�߾��]\�b=��4Q�In� ���D?#��$1���MR[�^�����o�_vN�Q������jh���oO�<��iˁ�iP���M����]��a�:�>�9!���9$�C)���{2�m9��[X���9T�4�
s(n���Z��FY�,�k��W��5��?�?��5��ko�\���^}eة]� ��M����o�px��~hĢ�	l]J����~�U*$�,ag)�Y�A7�0~zC=���q��s�H�����H�����T�e���x��W�I�c���GЂ��Dg���v�G�@)wÜ+R�yd?N%��2LI�4��8���to"��-�@�kһz�a�IǗ3��}�����"w��4~[�[p��)*]<�"6I�ff6��A�C�t�>�]<J#,�������ɢdq����Ϥ�+��~��u>�~=�A	�r��cP�$���uІ-�����fX��06�Y�8ϐ!�J�&~9�����"�ʼo.[�/����,J����P1��a*9Ng���	�F��o�6Cߋ��H��eȋ�
\_�,�k�F��^_�M:��M�L@����W$7��#μl�P��|��g����=}j�y}���quȅ���~�~
C��ֈI���|�O³���X@�E����{+@�&=�����ᬃY
h�����d.��:�D��!kB���v��,�d��Z��Z8��Wb7��C)�z�;y�$z��HjV�R��F���� ⵵a���|�4�dX�R1yH����(
����;{��=�ha���^�bS���q:�_q�(����9���|��Qxٓ�~;�σܠ}�g<P޳�XP(	t����8�s��57v���H6�V{���z�n�De(~�E3sX��G����g�����7Z9E`ȷ[
/���?��cU/��Y����!��.]YR��U��9��k+������CM!
 q[� z���>�p��"�����?����l�!#X��,F��"������q�̓�؅����QΤD���"�� .��E�~_�VKߑ)~��k��F�W�bbC���٦��]�V��&�j����m��#��Ke1w��n�#L�l�c���Sl=H���������J,�(�p(���JhCu��ȫE;�[�M0_E� �:즡�r�x{��T��Დe-`Dt�d�B+H�	���c�ݷ����!T_Zu�R������n#d���o�hܥ�!WZ�:��%���D�%*rW�_!?&�B�z�5||�>x�*w�9
xDk�c�N�G'/mthC�h�����Gh�C�z��l�mY�2,�H�T�!?ҥh/�Q�YG��+*�D��Zg`����.�������tA�5�j�_W���+�d+Q�@�-^�s_��oZ�$�("ý�8*��`�P���ӿ�;��>O8���Ox@��gXƭƕ�қʿw���m�C�mk� �%67�)luw��6���-"\�毿��Ot=��tV5�߾<]�7}�[��W�
L~Ҭ��M��|��IV?������8a���H�kB��g���Հ���M�Шg?��
��3�|�5�����%TN�%�>�o�*���=��E�˚8�V��~��jg�Z�C3-����<�Zo���R�f��p!(�w*�
r�a���a���O\��C��9�𢖕��M��Hy�&�����b�ܸ;�{0#�;��>�2g��3�<ںo)x�ƟiI�q�_����]�s�:��ّ
"�㖲�@+8a�.���8�����勚��0!���b7� �$���$����D�Y�����b{8?�Й���1�Ȕ%ܷF��Ξ�j7鄤'�A������
.�vؒB�O������H\�@����Qnp�G��HDt�e��_�2����z��M�hP�Unw��N�"�~�%-�Zٝ����\�f��;���-�X����>��ݸ������@�0]-񍼐,�5���������1c��Գ���N������ �~p3C#��Ʋ9�Z�������x}�c����3(��	�jz:�]� �6V:5JJK?�P}���s�@Y�E�e+F�uԉNb8g�g�єa��
��O���� �<A��xE�����v�l���F�����${<��˘�5?�>�V�&]n�#Z��rdyQ0|�lx����-�dѣ.����H���>;a�7A�`����Y=ॵ�����x@��#�`�Z/:��e�X=�.�w�������#:#ób���0�]����B�I+R���t����K��,�Z��`e5�&�\OL*���N1����}��t�2��J��o�F;�B3��@��~��O2fS�^�-`b�5�~��wZS��Ή�xj� ?L����9C�fSx���}���q�Tl�=��ϗ��5t�)Ě;p(E��%��dt3��>H/M����2�O�_yD�R�e��*�%і�[��E7�*G3�GQ#�׃��)�"(�U�uS/��,�[�(H:��5"ۃ&,��@�����4��1%$��\�˖;4U^ٵ�/}�&���UC�iA �%<���R�%��g�Ug�Po�<��tIO���(��l�ï�����O����K��7[S/�O֤�4�/���}�����o�9)�L�Hy<����g�n��t:��S���K���6ŏ<��%T�K�9X�X���锢})�g��"
���7�߃�-c�!YH8�����l� �����~j�C?^O��'{�ɸ@+8b�M�i��9H����?���A�o&���}{{[��H���=����wY���fǓ�sO�	У�����3S���Ly�8�$>�h�2��9fQw�,�%��%�1J�+�C��4,qFn�!�?B�+T��*b#4	SW'3��4<A�����K�$���S�� x������_�_5�����j�FuO؟^7��|�+:��[�	��ip:�tQ�T���ů�~��RA(`u�m�4J�ُH�[���t6��"���FR�Q�J�i�u��?���(T9�m{۪�@p��[���1��Q�8M_G��8\�?.o��JZ25F�H
N`eȢ��4�:�Csf8��ڱk��v�Q�X���`{��4J�t����;�G���V�q8C7�H2(g�Dʣ4y�����4J���r���_����.yZ��Ɵ�����Un����uF���JڔŃ�񡎅Md	Ǖc�y!.M,É,��"
�η_~�;�����`�*�f    ~�M���a�x���as�f���[�bEbЦ���߇��/����BK�\{���Z�Is_�מ����P��g�{�;��S{�0\Nݙ�CW�� �����A�>�����)xAV-�u �� �'p�3�o�%C,�aEbk���<�Ԇ��V��k��-��`��z�I"l�*�@G0�U��<�p�\_�s�)� �~^��P�%E�D"����kiՏ3�P�[i���1cy��ßt�>�Zi��zte=�i��I�v��W��ۯ�,8�Rρw�r��N�g�
'	~P��)'��:��e6�V<�X������d��nR;*q�J����
g�Z����d��Ѯ֗�����d�d�[7LJ3�M�a��d��dL6DW����޵H� q�2#�4�<��1��q������P��KYk��#B�_a�(�a�A=�4K�����y���w?e�v~�ĕj��R'���6�Og�)-�g������0�Dq�N+���ɒ��Z �M�D-\��!59'�7�j�)A��>�F'����Kudy�0K��$��IT,��+�|1��j�{}���I_Z��7�Ǎ�ȟH���߫w��FZ)����Vs킀��J𺽶?�-L����4�,w���|�~y���G.:
���~����zG�4��;��Ӆ+������� W��ӖK�c._G1��^�]$��3,����5�~�fq����9���'��v(���t�+:�B�*g��	� �}�=�PZ��[�^z��3�F��Jݿ�Z{��7��>S�~������
��)&#�Qgt`��+���>h�D�O۽�
t g�de�*6��Gp@!��6��`P�yy�ɚ�f���@X���;�Y���[����.�᪺�53lY�D9���j�	B+Ζ�ڞ�f,�|���r�b���~�ţ7��㰣](�����Sm���Th&iյ�8�6�d(�=rB�Ji�����x���Po����ޞE�R*$���R� �`9�^���:�G�?E�#n�ӈ� ��4bW<�8��F6�*2 qE�����t%�hmأ��d&y�789ܟ��״�R����[Z�f��D�	�R)��74�R�/���F���gpE+x5:Ï�����_�*�U���=5�	kܞ*B8f��� n��jJ���	=�G��k5]�b��e2V��y�ßV`�]�з�<n���o�p�4.�餽ѷ���	].���� �'�a�By�d5��@=jEc���Y���}痎�TS�INŖ�)F���nr����\/��=����}k\�,B��qg�����ѭleP	��$F�lDt�ƭZ��ٞG�I9��B�)"���IՐ�t&I��g�'Mp����(��w9��S�Ǻ��<��w�sp�!=���<����c�
aH��J���ݘ����w!����%�9�Y��0Eݯjð �Y��g�2Lro(�3��r�Șc�Ȫ�2u��u:��u���/�=g�ZKp^�$�@^���~�0��:���uU��|�rQO��G�A �x&�%��䚝|��r%�����F���d'����&u���F�9�q�Z�I��_>�7%gNaD݋͖	������p:ҵ��ɯ��,�yn� ��<G���x���_ēN\����y�X��R0�22�'�1d��U|����6j��cb��w;�(I��x���Q�)�_�9�C<A��̂��X��"�����sr
aH���-з{��`R�hw�kH���x�4�$�c����"k��=��'�a�쉾Y�y���;����N6&'!�P(ju��l� pw�Wk�Xw���S�ʡm�a$V@�@ŕz��3D����e7��~Y{F�E�4y�/����}���`H_�u�x�3C�N��r��Rةfj�H��5����;�B�`]��cC��^���Q���u{g�}{xK�X����vv�a�$�5I{��,�.���feeA x�+����;,�3��Dϼ����r��,4���w[=o4u�}���(�?���Ο�'r��٩X/�@0���u���ڍ�~ݑj��_�$�wu���S��������S������a�����H�v3��:����3���S������z���x�pmc��!b'6���o��ͥ�~��yzk��
�:"
���`g�2v���5^"��.r�7,k3[�DR�&4��Ò��.�� j�4Q���ܿ�$��Z��s�����@�#���	6�3���p.xo��W��	�k�(8��{�n�*?C��Q~��/=r�7.�n�mY`��ڋ�-�O{��.b���z��N.��n�,��Ҹ\�l,|�g�׉�>�}�,�@����-�����?~��'vU���ZҚ���E�i�j��6q<k��ܬ���5V�Wxjy^3�-N�sou𙅽cl>|��W�Hǒi�jM ph���_I�f~R�Pg�-�&Ɵ:��B*���� 7��۷!WP;{&%
���ʕ�fz�R��H�<���'|�~�-�-8�4YZ%��pa� W�y�$�h�_O��`�����q&(��)���A����8>*/h�yM�+�^��'\�ڿ���-���A�d8�<�!�A5��m�OxP�J���at�6�4?A�$�O�"[5b�T� z�-*��Vj�Ѕw4�~]���Y5��W��Mm{#�S)S 
�`�l��y�р4��1|��F�IkИI����=� G�A� hg2��X���gz)��4�h�~2�M���N�4���,~�!;�y��j\��u�R*�I$��Q6\���*N�J6'5��p~�s���ߪ���/˷�Sc6�1F�D�H���t5�#�SaCx���{<��sIb�.�¦��jq�nv�׵?.��}�'�X\��Rp)�^<��YW�U��1���F#6����Ko�����,���_XA���y�u$K�S���������Q|k�p���鱫�6Zϣ*������?��j��׍�5��'
2D��vt#zU��3�(�ɯμ�ӿ�{|C����abP�^�L�L��VǷ��(y�wѯ�;����R�jK�
:�	Y�J!D���o��͓ĎY;��G�xE|>��L���>2q��.��-ns�I�L3�Vw/�r���ӿ����'�\>?7��D��@񄯋����6�~��ϓi�G^�`�ZE���yu8�*'���Ǽ���Ү6B��e[���g�<I��g�e�M'����E��#X�R�P��[�j�fv`�av���%w����:��C(ʓ�]ʫ��'�A��Y\��Y�	��ym���	LQ�
-��'�8�ԕ�X���p��=�$��s����)�bc�4��!�������K��R� '�B�D"Ro��#w�~�6�����~�h��"�k�!��̳53I;<�`�I�"�C�՜ x��㍋����_s���ه9����MI��ݰP����K�@����[G{?��/�Ï=jg�p2f�s��qŹn�J�@Q�q�/7�w�$�?�×�Ǫ���+�_�c~9��G�(�n^t�,�D8T]����/����P��9���}�EsS;SH�����*�P�������RF���{t���c�7��m}�%��D��$S�Ui4O
��b�v�,��_�Lp�{��jo�*ۜNNU���KL]�����5̳�	��d���'��!m8��o�������>��.V�6�7Ċ � ����$@ǿFo��	D����ߺ�;�91Hώ�A�"���z���}�%�%\���V4ڨ`�[�t2��C�JlB9l��o�	h@J��i�*N����^��l�_?�O�:M�����,� �����e�C?��Y֮!�.�ݙ�����7g-TL�2ʰ��3��Q�D��l4\b#��Z�����oYd�ц����Np|�G{I�lt�6�խ}{Nf�ɸ�]5ᰩ�%r��v{����~�G��"Z��J�J�"�^�����(6ۙ�M�ngJ��L�TK����D:�[R��F3�/����,����m<�� �+<��A/_���IS|t    ;;�A�<y��r	���9�ͬg�	m���m�bZ����%�=x�\��\���cl�f#�mmȒ�J���:�U�X�uuKǤ��g����Z��0Cz@MV>·,?8#���OUO�0?j�ĝ�^	$�#VO�S%�ߪ��O��X�j�W����5r`8�[V��U�ꕮ:�_��>\���� ���Jl�Y�����4_��x 'zq�bQv��Kh���G����F%N������M�9�{藎,�$n�<��o�@<�?�y��ǿfrF����6T;%X���_����:���Ϧô)�$����iÕ��
4�щ[Eqn�l���P�H��{��W�����h�G`y~�Q�3۞��N���^2�J���qt+�o�Ii;p0�I��%^������?X�Z̖XB�fof;43��(�.�VO~R�Ɩ�B�$P��X,�g�U�N2�?`/���I���)���J|�rZo��o��9����ꌷ���ۗ�Lm��9Pp
�_�}d᯺�x��3u�/b_������Q�yW��G6��FF6��xI��XN(��#G�+Ѐ\-��}Y	Lh�ىyv��:��eQI���\M_1.��|6[�P(�X��>�z6f`�MK�`��MA�ǻ�$H̓-��I�T�ަ/gJ���|T-���_�N��2v���'�-���A�54%I�g(E����-��N���^����堇[���ޒ�@�	���r��ܨ��M�C����
J5_>�]�C�D!M�D�E��Z{'Q�o	Y�Fm\�;�o� �9!(8��i��	'q������f�~͂��L� ��u*�L�<��!��(��\������V)~��N�֝�%Q�@Q5�(�q����e�(	=����ֶ�@
0X�����zj�/1`�d�U�=5E���t���b����H�|B�;�<�y'�f����$�#j*���q1| ��Å��������"����u�]�Z���.�Q��9K7�Ѓ�o#�q~>]�o��%3)����u�1��
�ډC���xNF;i��i��<qE`��\�+�#��K7�9L��XχW$�����˙����ï��������3�@�x�&���j�	-��g�U�#��?b&;����R/I��������!!�Ζ���mx=��J��n���ԘD� E�O������Θ�D��8̠O�%�E�g�M�`�'�;8���mO�8�R_���"����jj�J�D�r]ͽ>�H�/�)7td���¾��8�^N��8��?��i����0���{D�ｃ��ƨ$
<�����h!�[z�R8ߛ�{/�W��B�@!^l7,�f&HB�]��iA���#X��!P��]z��ǌ7�Bc%Ρ���,'[�Y�t�������O�yG����Z���!D|�������/q�$YAP�txtB����y�������Y��|�n8�>��RK�Hm�7���,���b��~xR?|E��Sc�x��ӳ�-[7����h�A�8Vo�6K�8����(���R٣�h��W@������u���2t:$Ύj���%���Bs�"Ŕ�&)Z`���m�~1X�P/��{s$���^�:����G�]2��	՗$��r�v�ʿ� 
[�V; �a�A'���Ϻ��:j=�G'��#4K�X��H�AB�8OR�0��C�s�p�|�#��<��H@|�e��M"�?PĖ�"����5��C PI�|aw��[�`t|�>gj�t��~�����{����QE\K��W�`l�2�(�{q7��V�Y�m#�U�A���˙�B����H�����ח]9I�!�eP��}�s��\F	/�(7����cW�B��+:��5���Q��?�����G:��� �j��?��e�XcƑ�؛��%�x��[�u����P
e�{�+Jx�zp7�Y�$-%��-ן�@�*��=D͙w�-���d�yaru�	�����^��
���K%���,^�Q����x���*U�"﹭'c7��9G���7^���	��(;*7�A��6WHd�_}�(���{S�dP�t�zu��8�qn6�]�������L"�%]� Cu��ps,#�����-�?�W�u8��hZ�5|V�vHS`��I�at:�e�n�8E���Η���׏���%^�@��F�'����}���a�pT����C)j�ښN%�2�2�?�trl���y��c�q.I����,����"U`�3�~�4��P	܍���8ЈJw����
$��	l�p���qүQLHdb�˗ >��a�\1,�D8�f특��_���oU�����k꽎�8ۣ'l�������2�"��ke�{P� |���P!���Z�yM8G)G5��d�3��3_ݢ�����c�Ј�����@�/�ħ���&~{���t���� ���q��������1||?��V��i;�<JC��B!�� ap�x�U�@�8�W9n2�qy@TSD���D5O=�D$��`/-��Z�g�=�D~�HTd���⃻�ʷ� ��,��B�)��q���mhU$���<��,�D";�a�����/�}QK��\t܄����Q��m���H�����o���d	$��&yu������`�}�th�8���3+cfQΒ�	D�G+Xr��\�V>|�����;�kt	��16�2��p�����ꆯ�"�.r`�S?SX ����s�@b�՚��F[����o
[b�c�^x�=����ߖ�v��	�/dq�,p���\�s�\��Y+I�1��ږ�ĩ�EX]�4w�k.���#]�쐝3�y�^�L�e{Єg�(���9�Jl���������b�H��f���$�#���[\�^���߼��)���"�}=�ퟰs�f5��@V�5d�	}8��a�W�~��ťL���ا1tdP�L)Ы3��Ȥ{X�t<�(�n���.go˛C�T`�-�Z�����j8H�Zԏ��NH����n6(�
�q�PE�Q�:>l#/"3�PE�܇/������O۝�O�9<�8`�-����� [��TT���: �l�
Y����@���_|y�yQҴ�/�	����K}�96��$�z�.R�n�	1;���2J�@��(����%r/չF$`4���|x���H���LH
N`�gla~�@��qv�6��očg��1E�����H@��_�/ �K�=��D��=�a�̛�ޮ�R���X�
�.��zT.f�������g}�4��o�*X�	 q�Ń��JI��<�9E�ӣ�<>·�y�JBָ� �Y���v�~C'nux-2dyN#�%�I�
aX�s&�'���/�z	~A_�S�ƴSHU�<9�S��'��pԩȿ4����Κ�#	Ԝ\�@h��@�a~w��X���&i��I��dQ���{�����0���������s����PqE%����p� }t�>(���P|�;/zN�t�_:X\-PF�W�����ԍo���N�9�Z�_{�sF�A����ة�Q=�6��. �Z7K9\�R,$���Zi6�/PG:�\��BP[����K��7�Uk�U,J�5E��o��_��q�R��*RG#lu����=̪;>(�)�8�.9������! �W=�1RIh%|�ޡ8n����Y�I�j�B��@�p����{��3x%g��eA-���%��Á:j}Tk���u:�Y��F���)���%�d�:օ�_'��un��
���Q��4��D%�Ј�ZPqԽ��Fn9�;�C�7�k��,KΐԆ�n�4��IX�;:��������.�����H<JC����R���3_	
f�=������NoO�v�bTa�G�r<D�7=�hX�k���ZS�,�F����-�CK�Ĕ�_��z��;[�g׍�NC�C��$�Q�d�����t.�4IB-һ� �X��"���ڞЪ��j�$	JA�HP��iʬ��4I����_"(�o͐��#V/�j�,lnE��z"g�Wo�i������?:a���#    �����������������A̗?��D[SA��U_3t��j\��a�g�N�~*mm/rpĆ2ѻ݅ߊv�p��TB�?�5�Ln�����N�C������5�)�pkܟ�H�<�mum�u���hC��������ݝjl��v��<-V��&�f���� f���9��JP�;���9L�S�9��\�!���6�D������f�o�}�y�ڟ�٫:>���/���g�
U[���?�GwK�����A�m��?��R���K�U� k��i9�U#�h6�9뵜K
t G[�JwɎ���/ٍ&�*�8�XGi�yy���؉�x�+Z�+������	�D��<�kxNg_�yb�j�ތ�9�r(�0�c5��O΍����~�\0C~�[��Ň�-�9��'���wO��j�Q�f(���;��Y�9�T�%�]�����A,��>�h���� ��ϋ�0V��sPݿ�ɟ�D8��Y	�/���+iC������3H�����Q�x�۫f�������f��EƦcq(���)�Eᓖ3>��� �`��i�m�a���y��K����wܮ�W%9���]O���B��P��ΓX�^��?;Z�F@5��`�k�E�Z��j7��P�_�zN����W�NX�1���N[Rg���P<CU�=x��7~̰��6���
^=vZx~��~*���4�H��ݺC��@�@�:t_;�w����v�Y3v�f�桫�:e[s�p7з�z ��A�!�2��kg!-HbW�L�Uu�e��+����<��r;��%E��"C$����$��Z�+ᎥG#��?>NE��Ť 
.v�_/#ӀP��G1ɎM\y!0ln�x=��#��В���iF�mo:�',����%p��)��5'hH����KH���=u���ΥP��������lG��V�0�c�fT/_��:\/�?���x�+��Y��T�=�ۋG���;���rT�^�dʥ�%���_n�|@\
�X\�U���9i�S�}�94 �%�G"q)��,ĩ,5�=V)-}!�{�Hl�}��'��?V>v�������n���b�>�5��ƽ �Gmώ����R4:JS�G���H�>FKJ�ն�D+X�/�J�n��<�c9�j���=��$]+z���}Ud�D�eMkbz>�Y&�,r̖	���N�
2h=�R���E�|���~xEy8��ck�*H*n�=�V��[�N���NH�p��	b�'4�y@E\�I���*����r~6�*lBs �]�$�{�0�!H
Ao%�c�)����pl��?�A�qDK����3�@�
�F!��HF����qҖ���|�M7nɛ>��8��;���/���َl�yե��hO���=U�7?���@/:`61��m;Q��~���@����ևi�ȓ�<݌S(�|��%��[��!(^���:#��C(
�(߫��TO�T6��s! >V�T]e��d�yb~�?����J1>��Oۚ��"0(�^>�	�;f�h7-���r����+b����i*u
eP���ua=��,A�ǭ4�}ނhy���'�b��Q-#7��,b&�}u���Df��]`Pl�7�X�
-�}Ǐ}��By��G��^pb|,Y�v3��R�E�"1fG�|�?�Dr�����&z^�,Q�n���V���(٠<o��
a�����P�e�"��)���<f�eV�j2S5N3h�h���	�5O��,����_o����ZZ=0��H�0�c�nH!�����ūD	��'k�8h���,�'���}7�����j����E�Cj\~9����o�%�~ 	�� I����#�uc6������1R��U%brczp��j�]�V�
�<���p"�yق�W �?#q��O�X����љ.��A������l%�e�Č:�	>sr����焜�{:>��#)"�T���äs�_�>%T�	E�_�?�Wt�`��Ė�p#���E{�;��cl>��vR� �$�*�讷��Dg��������@�<���
����6{�vcc�wc�NĖyq���TͮU4f�ir}�,�(��v*)��˪^�D�H�qn	�`�f��|������ڈ$�e�7�3Pv�S�Ď�>ԞG�s��ߏ/���%�0E������T�Ж}��z��~|P[ 	��¢�./4��٠���
fN��#%�	D*��g�x�� գ��U�?�>j琑��M�U�}�JHa*�S��	�j����b��@��(H��Xm*�f��/����˷�ǫA�.iȒHȱ�tx�Ђbt��һ��-3�FI�H`�F�!�k���։�o`�N,��s�^�*�
T�5}�dP�n ��i��6[�+yh{��|h��Lz�g[d���Ӟ�!��T�Nr�mT7H���vt6N>�	m'_?��x��Y%(�5��Ta'�1-�Z�SǗ�J�Q5>�vᒋTʤD��+m���\�����a*�i�w������������Z�ib�P��G���y�����na��$"OF��3�����k
����pj���կ&�w�U�d�k��\�:�*rma�+�Tw�?n�xDW��W�����U��i7��YJG"�'[�!�f�D�ڿʋ'af�ay���y�q��m�b<�FY�� w���8�b�F�n'1�z�*��'x�4st�:�N"��ϙV�+��&���ԝX�(Da4�Z)��k�?e_��F������+��x��R%J,RC�#���wl �yp�L��f"�G�px�)��D�
��ޥ�|�����O+g�^l�4Bv=��R�Tk4�R�zJ�ڇ��s�p�<��Wuū�,8�	nA�t:~�O��768�N����,�<K$Y,��z(4)��(�jă��,;.��G�!�:�0d�`�7��F7��J�ڛ��m��#P�����AXh(4�<��f��vx��<�".�
�r{8��`~5�qd���(���h���/��;�pL~�tD�{���zA�M��2��Wj��3t�\h�����a�9�3���A�ܐ�2����ꐛY�L�A���%��D[��U�l��j[���c�h{���}=l��x̶����:��m�h��?�:^���y��N�/�}<�6�!2���7�\'Q�]@_ɐܛ̅��rvK���&Sں�,^��?�-kގ�W�7�o1��X�AR��n-R��)�ec�J�|7:^��6��.��E|/ϫ��Gx!�{y��}�e�o����e����������S0W_���k�/�Z����ω'J�2���'����:dP�V-�`9K7�0Є��T��0�vu�^
�� %2?�u����V���X$�$-j�Θx�zk��07&��-��cR]�L���� Gݪ�s��>���%�sk��\xR��M�B�{^i��CƮ�z�`��{3��R���zX�:lY���e"���Y�mC2��u����!pl�K�hئ�c�{'�3����R���Cv��VNT���3����I'���#<��h[<�	����мrs��� ��o7�T�x�S��	��FW�m��߀��	�^Yo�h�S�L��_�a
7)b����^v�0h��?g�z�m�Rp��X�̈́�P�t0X;�8@
q�e�@ᏭQsl��qԦ�Vk��<H6�;0o@֏ ]&��Ta�4�"��?���{Vk2�ƨJZ��rN��7FPC�N�f�/n$kM#� ���ѽ��\��v�ܹujL���n��R7���G:�f���?~�=�7��3$�>�����t�Z�G��u<�N�/_���II����'D@<�	z&��y��,��#�\8�'��^���ê���H"Q����,[���O��T�M����Yt7\��$,�t��p�6�mj�����ߛ�&��L�;�"8ì6�̰�F$�������O�V��6�6=uw��V޹t��2������Ȣ摹������S}��:�˾R$��=�`\    �4��h��L��$�&��Ѷq�./�P�#WBez�Lm������h�~��y��Q߯ӟW�=ߍ%�SB�ُ�m*��MO����I[��ٵ���z�J�TfE���n�}ߵ��?�����D�&��ϊ�BӁjc���LG�8�������f���>��R���Ǩ�/�����=?�,��r�|��Dt��+��7x^͖��ƨ�-i\�C+��Y�lu��`D	4o.��	�-��n�٩ֿܮ����
�X]	bP�)"�2�KL������TZ>��LyHc,F���d��c7[��0㣰�o����Y`�
":��N�,Á���K7�Y�_�\NI����U*�bj7^����R��=�5G9 cKzV:"���4��:h>���8�c�VCw���d&]�b��p��VQ�l6��>�𬊩��,6�NEJ��2���:1�HZ���z��d<�l���b�0����j6�	f��afbϚ������C!�ů�9w�����0�n\A �\��3%5�yH�)����2�� y���\��~Bd�2� �W�E=�Nk��x�RV���/���)���]>� �@]1K�B���{�)Ҁ��^(�p_7�-��[l9ղ��y���o�~���d�g�A��U���(��4>����{��n�p�z��/���/��&v�q�t|��wP�Gm5��ᅀ��/����~lH�Dz��fe�yR�&~TvJ:$'��ޭ�������r�7>���1�O��~|� �ĝ�����ޜ�D|�/��t��Ct]�ZD��dR-���ۍ+� C$�Y�U��,�T��7V�����=0�F@��������܂J�L����Yf	�u�bJAO��g�C���k�i�A�)
&� ���r�ܿNk�U2��jv$���@y��v&Ou��}�簎�AicЀ&XXB���(`<��Z�	B�nZJ��1���V�l�MS[W�du1ŧM���)��'ݨ)&���T`�M�Xo���;6h��k�A�U<�:}�=���Hs;0�|<�.ħ��T�B�Pp�+[�!���F�UA�����,"�jQP�C$n'�1�N���ԗR�~|w��ߣ�R�٭xNԒR�ID�J[*��*�ݙ��C�D�7J8��lG9��	&�Х�<��*�GZԒ�}������ҭۇ�/!�E��<�ˏDP5<�Y�h�l��}�l�R q_��QU��ja��>�'�u��l����S�$��(��c�my�� UÎ`���dIX���Ws�)ذ>*-�,���l�Q(�1�:<�q�@�m��:�C 0����h�H��+���ܯ7�z?�'<�K���^+*���#�Ry�����Y߶�hH�%4��6���_���9���Ҧ�6�O�g��t�?��j��Mrc-�'&����"��W|���a�65# �p�^tM-f#F�i�_�:+;��{)����`��+���i<�'1��gPV=@�N��D�~)Tz��m%'b\Ɲ��k{X��d$����|~?Z�~�0��W7�*r�[������j�����^0=i�=@��5��v�x���.��w�%��7˻qQ�T3���e��������>c1��#�2f;������R�5=����˽:�@�oz��v2��'{�Gǝ�O��\���Y6��i��N�]��>�epC,���5�U�.�2�������hl<Qn�q>�Ñr�~�޽��ܠ<��FyR�=W��a�V�D3����#4�5|
B���t=��hR8@����?�����,l6xG��y�C��� ��6����lZ��U�ie�2U��hgY6?����(��	��,���
^A�����Z�=c^�!��]�@tF�k��ԶU|��6��}�ԖA=�ע?�xZ!�u��T���Ll)SA#��n4C�v!t9�Y�5/�4���ק���E�oT
$�4F@��F(~�@�6au+�eݼ��[`��:j�p	&v��6|�0g_
S����i/�������M��Q�}v(#lq]��^��=�+ʠ^ֶ*l���1B��ǲ���l��taq�[����3+���	p��%�	���ݒ�7�����Mo�Чfm�Q�gY�0B�ܸ�1 �i���M}�����V5�E���J��=�il�x|�������ҡ �j,��{z?����ԙ���z)�Z;�@��C�9|�!en:�F�����B��ǐ�[��e,��s��X����A��k�$q�[���#�C�6���g� ��`a�OiLk47#�M��b�s�(�V��m��_:E0�(i2��z>7�� GIK����6��YS��d�򹺖dTbJ�
$�� �&=w>���qۻ7i��@ * %���׮ �
j��7ߚc���܆z�u����4�8]�I7dF �?�,m�X>;B��B<�vJ-y�f�Sܫgɰe;�e7v:������)&Ep;*��y�4o)K�Z>�q$�x+�s�BS���C�i���ً���7�m8�d�`�{�����%tv	��+yᔦZ�Ө�"~�N�j����ޝj��v��H>��W/�=�tKmmZ�F8�X�K�6+
�<6t;�ԓgP!��ႚ�j��4�B8�}�_U��]<3��'|�����Fl� �mG�T�Ycs���n�L�h�2
1�.��z/4�=����Q���?;�E�ٰ��2x�?шe!U�Ũ_s�T�DXq���uG^5"	�#�&sn�!�eВ�v������X�2�d�}�'��ƴE�[�r8�x����7������ٌɈ�kꧡD�i���ڛV�"w���>�����8`�����4��aI>B�Kd��#Wn䩯�5*�����e*�EUpR�����p�Ҍ�͈��P�5�e����t��U�aG��R^ �.�7,�X=�f@��&e�����u��RܾKz,�[ϛ)���H!~i��z�GH���jkhܩ<ʑlx�=O	�1����jy�����k���W��c��*����\o�G1�3�ȡk���{ǿOo^��*�fi8�9�GL��f���r|\�	�����f� ~��/�L�ް�X��S�!(�L�q�;bt�
bC\3�B��3.ذ�����e2^��a8*��.������ {�!pC���x��R4�m?� ���C�����H���Q#<�	&�Y V#����[:����u�������$��/xa�%���hWR��5�t'iAm��Np"c�$�?�b����2��II��Aʺu���B֥S8��/	c5���#�]�XҶ1r�<5�"v6�C�3B��	���y=^�H���nc� ��I]���h.?B������l[���_�HJ,�FX:�:8�������FG�~�ZG������J�`nx¯lW �EG��e�;�@�&~Ӥ���jHg�R?Y3[������� ���/�O�9Ҁ����`oI��jnJZ]�x�/L�S�kwT>n�2�'��=K���7`JV���4�I��}���3�p��5L�c�8�u�,F[�*��~�A�	K�kuB.���y�NS�8��B�x�{�N�D����r�z�]��O���|WԘT�x9�\�����{co����9�
aŀж�=Zo�P6W�u��J��*����z�"y��2�ȇj\٨�~���J�CK�ʞB���:�����;1���o��2x����J˞�Y������NL�/et�g�.�k�3ė��%4���V����r���a�%.>�z�)P����hV��<Ǥ&���k���j֙1����'�;v�6�i*ȣ;ęUb;��T��h��5:,�Kms A4��m�����X�B��ƠjH+q!,ߏ����Rz�	��� 
u
Ii�t�þj��F����H�4�az8���=z���p��7�|�6����>M�B�l��c���o{LLX���w"�O�iM�C���8=reĦ��2T�Hl����g    /����,AM��u׺��z6��鈈sl��̰��κ�?lo;>Ҏ��iCQZ���[�W<-y�H�!�ճ�|k� ��u���Εu��������ҀL�l�G� :k���	���bS����EH�@�7G�4�����F��;#R�O)�U�75��<q�J�'��VYu����v�<vu��ߦ���rw���ذ*d���Q�=B��A�8�M��mL����)�t_݂�H�vp�Y,;�̀!�V���[�p8��"��<�^t�@!$�n8t]5i��k��.I+�D�w��*�\ޟ�D�&������9�@��X��eu'6Ӆ�P!�s�����P�4w�.�>B���4W��;pۋy�D�D�o�ڰ)�1��H�_�����u	n�o$���A��'N5��%
c�}�@�Sm�+x}#	�{oa�1���Z�]�R�� �ZXX��*b����tOJ����$R�-�q��� �}�}����Ν[�JZ��`��n\L1ON�H�3��|M�^�wC������\ɀ;^���&{]П!4�`�}i�3/l�*��N�t��ŧxk�L�J(��eO8BM����$��U��Y�[RR��6�:�/�)5L"G�;�B�B��w	����#VP�^|Fu7j��1��_���+7�����r(�_��p������t�ے�J�*�jKK���8�4�E$�c�UfYc�����o,����i���s�JG2�aU���*gl�x���=}^yb}P��/��l�T�ɈB�c)��v��!��p�Rkb�t����h޸U�W��) ���1�,���w$�X�M���9E����˱���B뜒����ڎ��2|l��!�/?e�c�c�m�(�^`����wn������,�������m�qk���p*��^�r�-����,C��Y�A���4qj�R�]�/��C���	as6LYI�xSW��i���F\��ű+�2��-��7����O9l)"C����a&���נ�q��#���_�t� �/��޸�@�7�b�}癴���~�E���a4:� ����ھ�q3��P���c���֢��V��׌Rw[�����XM7��5h�������m�h��G����->h���DU$�%?�q�����8F��"��,��53$�zE|����t��MQS���j��r��8 ,>�ɝصLǢg�Cg$~�)���z9���f��^/y�Ķ���P	H^�Q�C���HM���"|ű�c�3�����>�@��{���۠'��AhX�#�'���e��wz�e<6���/4s+Kɷ�ӥ�o�O�|�z<��u�z��*3(�h��UoK>�h�9�B�����o"��������ҷ�y��-F�x�l�;�\��矠��l��A��wj.$�f��m�(�>��$ײ�}Gp�肻T�I�pv�>D-� Q�4���wm��"0���+ᱡ��t_R�4�H�-���/�p��\l�*"	9�lf��KyQᝃ4��e�c)�������U� �Nlfx������f��u�Ǟ�7�����R:��$`�^
�k=L4nY@`m<�>Y��g[-�2��Ʃ���Z�5�9(��m�4m֠3�齁#6@9+{�-3<��m�{c�8^����Ӫ�Q��N"A�R=���$|�}o�kd�=^O�yI�n�2)�p��x4�h�#�pF��G�3��W+�u��]�R���\,m��ZxQ��j��iO�1�Ib]!�a�H��~*$�@B_-�IA��3ū2��P3S.�x���j�UK�ǘs�'�Z�y�0����J|:��;XW�^��^/:��JѤ�i�,���qY�h�iz<�F����.$�޴Q~�)/�|�)ϝ�G,�����g�r�@����?���q#�����G�i�����mR��F��c�4���X�4/x�U5����wJº�?�r�P�bs��������^m(�w�j���1Ķ0�V��Ÿ��1h/jx�?���H�/�&.w�q��7�1S�~�U�gP�pQ�?�u@��7_
�Fj�|?��S�8������!��Z�5c��6��=�Cjw�H�o�ͦ�M����S�@�W���)�5����Q%bE�sL�e��3�L�|��|����u9��cC���h�3��ě�,�1���qFj-�w��2Xi��6���,"�F����BZ]�����O����o}8���PD�A���	���� �w�TZ���pG������4�ߚ�Rq����a2��	�{���<d�L��7��K>n�\9'Q�Z��� &?$�*5Q9�K�c���X/z`B��.��@�`uѰ��=���#�b=�	S#~�XX�0D�}O�͘���&���<��!M`�*W��e<�]AUS�^o+Ej�݈��J\�hP�>�����4'a�9M�zqY��/fp�7&v�&�Z�m��;hSV�\���^�O�f����J�����nnYŐ��D�D�j(�>��W�;�dL�<��l�ڔ�M����v��4��˖�ډ��p���	�ǨO�7ZH�	m��A�&�*/�M�gP"YX�(nm���kH�j+�~������w7�)G� 	+�F}���sx�t˯I������Q4�X�ۗ�K�T�)ޅ@c,�â^ɑW�^	5x*�g�X��~�������T>v���d�O	�h�����O "�R���v;rk�i�s�[z��h�?\�'j�?߾��Rt{,�3��vP�ü�Q�1n�|EL�/'/�Z���-���ms���y� G�{x:K���[V���i�œ�lZ�
xޠ�Wҹ'�X�{4G|�H�����(E{���Ya�S��
���1F�9�-��,ԐJ�6a0�
��~��N)���#ϝ
�򆭍�2� �*8�hC�LAS0�Ǩ�*��띥��.�Z`a}0I�P���`��A����7w���`��H�C�C����) ��W�
�8��`~�ֹ�t1CR�o�a�ٱ�O*x��%A�~�4;�<N�4����{�D3�^��g���mJL�zX���\��w��g���*��Lߜ�S��zi��D����5��ʴ.}
w�
T=iC����-9V�����:^�X4,��&�Э���^'��n�ˍ��/=* D!T� �m�m�D��y��vEà����/�Cq�{�E�}�w"@s�z�k�����ݜq?�끃h8�Uu�¡�z/y-����~��l(��x�3����Z��CZ�j�?F% Q�7���Z��:t[z;�l��������u�Y�kW=����jۚ�20��~NY��ME�%4�*ZNt��P��z����d���'~z{����5F[rر�����܎��$�do'3��,v�ŲA!w-n�Ji@�Y��m�d�n�}o��H�Q�aI�׏�u(Tpm��5�R1��=�����hW��0�X��8h���_�Q��`�6It].i{Hy���,�%4�G���<z*-�cD4^���o��}���f2�am`�/&�<�a1V_����^�,�����Ԑ.=��`@�
۫1
�\�
�[G��� e ���B~��x�E�2�[3u��z�o���?~^�bn�hԖ�D��M�as�6��޼X�k9�\�KQ(y7����W��U��)���
z�E�Q�x��n�d$�#��c+����8��`hإ;�%�ji�ҭw1�H*Ԓ����X��^	H�}�U1ܾON����-�i�,��.�
}[���WO.�+x=�{�]c���(�]�3<�q���|�9�c��|6T�ذq�7S���G�Z�&��!4�Nu�`=d�`\-�΁�y��y�Bw�슊��̗[����ͬF�W����)"C�����;�kP= |Z��Nnfx�>��G7Sd�[�6.#Аœ���1�W�r�C� )*�W=^}0��#O�pm�7օ-�k�3���D� ��{��Dy^��4�ְ롆p�5ų/Q	�    <�jGa������<+����.��n����/kH����`�]�QX�	�<|����rgK�88jٺњ>�=bzM���)Ҁ��hA(���p���������k����;�g���[�kn%:��%
 ����JqS,į![�L!��窖"�}�^���Xtݫ�ؗS^`۶�dS�� "f�y���k,��hk�$�]b|�w�)\��*/n���Ѓ����\��Nl;����.H/(��;5��-sxɉ/��e6�_�fusƓ����wlz,rFB�*@чn����{o�Ue� 5�ܭ���z���t dw'Z��������>��a3$��j��@��������$�]o?����&V+^�"��� ��Z]58	��������/���ޝ�Sr�"��K3w�u�/�j[� �	.�o�#��������h�?R��^���3�����2��XߎȀ������Դ��Z�������k(��u8�����Mi�'�r˖�?_�Z�K�^o+j�^�NW�'������B��ǛP�����&��lX�L�	U=.p�f��(��hw��dR�M׼�rTe(�<�5+ߠ�|��*�#]`���HeL�3�%j��q�O��������v��`D	�hWU%�O���C��I髫�)CY�$�yLy����B'����t-���Љ�epߑ��:��+h��Cg��w���Cg>��>c:�y<l�6�Te�B�m��T��ֆ+ht(�6Ϝ/�'��_��j��W���	� ���e�]��e��"6���Fe�<{�?�1!k_\C�k��{(��F�Ei���R�����I��ݮW��4lnP�Ն?d�s8A'�Dz&�e����J�fZ����eT[_f�n�TH� 1�����d����|>cA#14X.P�0�}�;
ځ���(�v�'%�=�BDa�ik���jP`�S�p�~҅�=~\~cW�^&�A��/�٧247qT�jawiL��(y@3���<���&��ͥ=e`w#�la!��U	@�=�qS�t`��ō�q(�{��H�Q,��#Q���G�R=-�6��3���*���'n&�s�9�����}ͽ��zƈ����D���"�遆�eZ��>�ƨ%<t�^9�P��3mdXB=r�~���aB"���mbsD*9._���6�(����X�
&,��;lW4���>�����K����6K����ᆭ4lS�T��rHb�\�3r��au�F�lZ����J.�� ���n�t2�A=rA�Ӡe��}Wc��c�iO�)�$wҷ�H�$���C��rH�`=�2��'ƌ&�$紕uq����|��(��Ň>���7#z�H��L�ڶ�4$^)��W-���2�XH�96�ᝍ�y�kWε�]�郟��e��]��!�^B�d���}�L����A��Y ��%GE��ը�+�^i�:.���;���}��	�ߺ���rtt-e鮆�;�ۿ��U�^��Y�+lG�D����Qvj�:�B�= dd�+PE7�%"��a�buG4�5���Iuc�jݿ���W���~�5��l��'t�c��p��6�����>j����j�zƓ;�kөM(�l��R:]�t%����C�bqk���#V���x5|%z[�=5@�}����D�;n똖Q	B�S��\\��+p���U1'|�^?��اPCJ9��J�j8��!�b`�?Z��oǓζ�ݲ�/xD/W|U�w(���K����j|���#�ZBu�Nk�Hg�|	�m7bi#���bӗ�I�~�����t�	��K�EY�j�K(��G�R\�:��Ηoi����7;�
���͔�Bo`?��[��W����)��I��pZ|gp�,,��#�Q7^B`>���LO��d��)I^$nM�JX�!+���e�~�y&f�$ڳ�ߘ���Y�E=.��e�?��h�J<��nWXeh�҇
+��*��װ�Vjԛ}G!����u�m<#1/�3�u�}�|
��)��]�����rݬt�l���4�p�B�МX�LR���}:���D���㡟A)��}~[����ĜZ݂�4F? z��w
�����_F@�����Ǟan���#Qb�w����GL��hv?�h/Up*�/G���=�;��N��/�Ǿ2�t��uia�7x@;0����
k��(�C��ЋЗ�����G�w�����輱�45'&7���N/(HK�����&!�Nt(�4?��zgc���B_����5s���e��v2��S�y�o�G3�+�6�2�T�P�Q��5�G워zd~P��ܷl�m;cl��^-���G���@�z�2� ���BM2q,{���m�2�a�۴9���q���P5��4�^�!E�NC�!7kb&��{��^p�\�n��űφRx@o�ܯ���B�-���n�3s������'�
i�%5��*m�{+���,�ַ ��m�R��Cn�L��P�QB�M�B4nY���O�����	'e	$���l�MW#xY6�$0��������g=����' ^�Dlł�m�;�%��	���L��r}_��Srx�p�>_G��W1�*ʢ�>^Et��`v_)	9�5�Y�����ua�<0����\��z�����7�����KPq�H{D��ƛ���NQoy|w[��1��]�uE�$T�@���������|#΍�<��u���%VJH��ö���	e�"�qxu;^��{W���K�4�H�(� ����R4�le>���F��+zJa$ ~yI/���B�R7�_F-:�t�����\�qu���֧���x2A�H�Ir�Z4jr���PC�k�~�����z��ҝ�2���Ǟ)������4_��{���p�Y�y+d������"A�I���"o`ǂoY�XL~��`�
;c!�C-��)vY5ԃ��,G7ϙK�h��r�X{��	<>��ϒ%�T��O�6T5o)d����m�5�:��D�h����|��K����-F�௿"�.];��a�Z(0, ��RC����������!�S����ҝO�G/��e�"����;�uM���w>�ɗl��/8�%���m0|�ᡆjd�5��Px����:m�&+$X�QBg���]%���1���1�Bw�����y�ۓ�.�b��:��hu)�E)��H��$J������!�%Uc�ׯ��n��0���8����eW���+��Ι���^�"���4x�u���;���/��h"�'���ׂ��{P��疓uz�Rx��[�	��-6�)Q�U��F�oWP�	����YGN����C�;m(�`o�����R���+�ի�~>�w������� ���� ��DDϪ]P�Y�ǯ��kJ���>e�~�+Nr8�f�G��<-��wL81ڌ�|�3Z�lhFsa:�>hF�����`�����5�p�����S��=v��gD��*{��Khqό�B�z��Y�!
36�B_��}��A�0ja���9ڼ��qs�sޮ�`n��AU�6�&'&*�	���OzP�<���)|�t>����
sK�֧��-�/y.�9:�=vn��������jucM�r�_�Y���0�_�*�a\�d0n�q�����o
%�e��tk�|��ÔZ�v�X��a�|Hs���ឿ��b��K�Dd�
Y<�8f�/��崪�F����O�K�-��a#����TC淟��j5��hKb~ |rB��x�ƶc9�O�Js7HQ�
S�֬3V]�+Z> ��+�ȱ����F�����7q�(�;��0)���U���G��#�z%AkJ��A��7>
�<k�rG��U��	R+¥�%r�U]��JE�g@�z
6�{�M
�Xs	Z4xF�K۷�D���~!ܶY)�c�0�B}p�0|b5&T��
�-q�K!?�#;�����#|I���3{]sx�\�~'��ݓFo9��[on��e�n5��#�|�!*�1�u]mܕÉ&8`���]��fuǡ�VJ���[���?�ԯ�Q�    ���SOc,F���y�����Tj*�c=�yz4�Q�l\@ �O1��%p���LS���s��zN�$��$�'��v�$D�5��'=j����ٽghĨ�������o�Y]���)4���:*A�o��ݧ��ǟp��|�����`��V�覴��.��^�_����hߥO?y�i�; �k^�ۊ>���4Ŝ���_u�z$��K] :��V�撾+)O��C/qY��H�$���n�7o�?��Z8*��$��F�`a7�J����U�rض.�{������t�� �7�����G�i�(�u��܏Y�qs�H���ťp3�U�s�.Y��H�+̡D��R�!ٴ�s�o��J`z�޿QP���,Fb�X���tpՌ��!�D�a���R��J��d)�1��"L�t�oh1��\��X��7�{��3I)�!���X�U����ڒW����a�)���w��9TH.E�ݯƫ�Vs���4�|�J/�r�9��T�5�l�Q������Cя��X7���J�ҠmY��6ԭ8�q/[�|mf��D�ܚV0g ��^�)�.��}nm��q��k��
<K�l���i<�Cu�cʮ�y�;^��2�$B����?�nٖM�����t7��M{[@�T����e����<�-�g����zv)��t�옅���l>�r���"�Iww�KB���ze�n���m|%���3��Lu�ҟ� �����i�a���7Pi[�8n/2�P����������-� E`0��)�x�R��(�����}K�.����� e�m���)���߮�u��C��gY�����{�O�#�$������T]�k�U��k���f�0��n�r����0�����Tsh�ix�#�qt�'���3Nc�D�P�#�m"z��iA�aj�vu�����|����	~���q��:_�H�rN�	F����h�h��q��^lz�������w����&�#<�����tA]��葂FZE�-=;&�S�� �`m?�5E���;9TH|h��CS��mL������Y����(������
$�`B�4@�;��C6�, �G5��'$�1�q�������'>��_���X��]A��J����W���E([�u
4��f_4S������ټ"3%Wo��X����IY	9�|��C�����w_�:��;n�^���z1�f�
��I�a�У[e1x����>n_떇?h����l4m�7��L ��D�@�x���X�k�Zu�Es7G�|������4����k�t	��ҭ�'����/���W��P���ޝ#O��#�l7烌�ӤB����.t-=�����$2����L���zr"�C5�ʯT��u�2�~�հ�h��{qގ�eÜ�����FT{��tՏa������ȧF��w�dn۶m�rJ%��ˑl��`Y�{u�v^_W��!m�>�S������.W�ڷ%G����
�M�a -E�ǍX5) q��i�����mOwذ1�!��M��� c�5�D/�w�5���=H��E[����[��8�V,�`,�g�p���}_��m��w��s�a=t���دZ�&���m���QU�1^@$]!�H}�W��HT��fU-����4�rMK�{�q���
�d� ���[<[ɰ�і��a�A[�3�&���1�́���܎�FX���iPqz���9�#�뷱�2?r|��:[��9:�; ��7���K�۠a��a��� �<i3N�Q	�D�1ZW�=_�����"�!~�O�OE(3�T&��l!�Ɣ4jJ���*�P�w�O�Jagh����c�z����}��!�l����4�d�0O#!��k��l�_3�{�p���^#�(�J�l��a78���+~7����kxU�e+?.�������]٣��8�=5.l�����'y	sP��X���NY�$�(�`3����_;�Fk;���/����f8z���EyN�s�wsd3"��po�5��y\����A\��ZC�,���/ٛ�����	�@'w�e�a2q��^�0�M�
��깬U
^��̨��z�oB�.��2ަ��HyHc,޾Pf0̞{�'��Rڢ�����f��֨g�
"ܣC�Ӱ������ql���!���ő�k�#LU��Y[W|�=�9l�a [�ԏ&�c���4��hb#��W��*^�dp�o_��І<�'���i]r�a=T$�>9���[�Q�Z���k��ow���Bf��#��l�y\ȭ)5��%U�%���I�B�KZ���Tha]k�%�����Q-S)���^���)����y�o#Ռ+�������߱���\�R����e������K��`��~�]m%�2p����0�� ����!�>��#-R�(}�e��t�`���R������A�C�]��Ɋ�}$��;�7bt�f��VCX^�_��֢_X;�'%�Ԑ+Rf�.`�XCR��%�[f�a��p�
j�|��q����В�`ٸ����XQJX@�)���/��+)���\(��4�|�\����+�p�XX�i�v��#/i��Jؒ�����N�go@�8X���8-�0��u�ݗ�2K��-:~����L
5�>�f�C�����Q䂔���ӛ�����Y��	<~�?��^2�cH ��>�b���g�̚�<�;�y�3��@����&G��S�^�:C{��˒�!��mm�S��O�^�yy�{m�8�oS�=�v��Ύ���^�cK��&{����#9o�W+dF |8nϫ�K6ӭ��ڭ�C�%nG��&�9;�m��������������V�
h��M�?����{Q��!�b,�F��jp{(C�y8�g}�|�'$GܚWc��zq��b_J��`y��Ό��jJeL�tf4�+�.�j�4� �,Q-D�k���D$��.��ٙ��n�^z����^)�
�M��Jl��7���U5S\�O%z^0���ޖ˷%�ᵦ�*�a���vaJ���[I��둆�#P���ϓ`��u���MQ���kj��j��;md	$�U����m�|��qz.�E���uz��ZP���K&�x��㭮5�h������t=9�>��G"�M<�.O��ύf��(X
�z���%1�~�VD��i��э�`���Ƽ�ݙ���
�)�9~���g�A�\���a�F�(Y7��1(:	�N���Kp���N�f����%���t�t�_�o�w>"=�8�f�y���Й#��谁��T/�{�	w�X�r1|>p��y�S�nć��O����i;������Tգ-P�x���F���,Z������+�lB�;��7�M��Z��;�y��%�N�-��1�t���77�q�
���������5�D�bI�5童�A�>\5��p�E��d���:���h�S�E������#)�� ������r��V�Qr�ǚ;_t
6��;�� u�!#�c\�zt�B��律�?��<�l�̸��Iq�,�y	�vM����� o5-ʉ"��^�����X��kI�Qk���Ww�gz���*\d�`Ļ����*�뱲�����S��'��I����#�Ѩ;�����0�y�n<��oGk���'����(���`SϐB����A�X�-kԭ�$��~ζ5�)��Ǌ����H�yH�=V^�b�!��l��I%�%����JS:��]�f:1�<�!�w�nFn�!@�W ��zB�yv��b���=��n�*2"ϳ�R�F^���5�㈵���p�|�l��$"
 a�߼�̺�l8�څ��Q����>��ey����~�b������~�g�>r�<�"k�8�EP����U��ܡ��B=�甪W�;dӰgY�S����ш��� q���vණ��Pk{D/��隗3��)h��T`�ɷ��������7��rٻͅ�;k`J#���8|���F��qw���.�?��Ӛ���b��P��Ï,$��p&s�_�^ׁ����w����@�^/��E���x�P�z[w0L>���<�쵋̙d�I�t    �]���6vP���b��}��_�R�1�/t���uߣ�\m-�)S$"��d,�d���h�w,��؃������{�]�T
'�``��S8x1s ��ö�HkE{�3�X�3����5gN`x~���������U����R�g��{ǔ���Q�H_V̎i����*^P���lRÛ�`=u��D�@55�� ��t�I�x�䤨*F�)���U���(2�`	iw�և�y�K��/L%zQ��Z���a�g��wV�N��)E q��"(�������mr���!�sv�;)�������?Ws�����m���M����n{c���;a���D`���C����if
>0�Z�Ý�u��WY@8�����p+ ���M50�햃��#5W�l�C�|�Y�y??w�*��Cv��X\Hſ}w���o��3��z
{��m��� @ͺ
���z�d�*�����3�xR0ϱ�s�g�R�PC��d���9�F-y�4n�73Obӭ1,9��m�5d��O�2�o�Լ���'����S�sC�h_05�p;�pA����Q�S����QX��6���!����v�����ʽ��ft*� E8��1H� ���v�r}w��b)��"1H��$"�q�����c|!G^DU4�6	7ik������lo�B^�ў:n@�;����kr;��Q	ݗi3��!ȿ?=dt��1A��@"r��� W�@B���-a�N�9���!���q%u3�r3��j�}|o7�~��voۙ�=����ΆJ�Jn(���PbʷߑY��u㕏PC
h�������^�oePC]���<iB��xՅ�l�	�[\5��4���7;�N�d��l~��i����K�zw�B������C|�]OQ��2&#�<	�BQS3|\O���Z�n=�ξ�^��R4dx�'�����a�=;z�6����@r�?����2��D�ڣ�E��fd:�,��s۞��HYb4dk�K@�,> �0ٵ����@c�T���X��t��O���"����k�*�J�WRɪjCN��� ��6��rǃ��M��B�l$3����D�X(�5��;���z�M��׃���}���r{bC���@b��+�\���}�grpgj�OU�d�Bk�?�ءQ�;�C����?_��sH��S�0
ϰ�I�t�l�'C��j�~+U2פo]��{�\��+�h��@��L��IG�p.���[�� ;�!T�=�0�BS�y���܆8[ҥx��G�G���Ko ��M��Rc���x���N�\�09-��Z�N5�懱ncm�9^��3�ps,��\6©���W�񱩼��ǁ��2ݽ�H�\A��^([�RS�85����?�F�7`����/%����c�i������ށ膰?����H��z84���#���E��(�W�nc� 5���kF�S;���p��.�·P6�U�m�xb�����&hѫ�>%��_/��*K;�l��9<�|��Ǯ�MW�vi��R�<�&t����c5�R����p��РYn�����6�{ov��6�K������s�J^*:J� �^ab�����Dwv�<�r�0�wI������3W�&�"q�gZ��n����I4z���Y^�w���;��A���O��P�5�8��@C�߇���5��'�zC 0���� �i�N|�|���[�a��;�6�����PC�����!Nwв(�R��w�ʋ"�(ny�eb A�'>8��mc�_���<��=遪|��̼�+6����jJ!#��g	$(W�J�M9TI-�v���R���6knI�Q��5�H���YLf�{�SJF�6h%Z��gV�*4+ %i]%���r��Gp�&��Y�Z�&�U�pDW$��O�v����ԑ��{�]s��]��{��I���Q#��$��<�۞��р��P+sEֽэ����7�������0-W�L5Ц;H��^<��eW>�a���,�;��cV�QQ{V;�gI�؝n��O3���0�5��V>Mq��p�s��O���+�I���:�� �Bx�������?�w�?��Խ�$� B}�/���Ёoo(�~��$���M�aW�z�Bշ��ԮP}��/��v<�������}��X��P ����6v�hM$C_y;�h��c�=���N�s�������$2��1�@�n��u;��3�Շ�ۉa�n4�����P:ܭ����5�#Y���d[����*�S��-.P�(������)A�ǳ�3�)*[��nkި��9i�g��mr�<=���������%�1�q�q��Ğ���r.�p�	�h\V�5�ၣ�����tm����m5L	T'G��K�j�d�7���;�\���祉���E
5�����|����;�77ӣP��O>��ݸ��v�2�QA����"�T��Dx�^Gy�	�M�ov�5���}��ْ�[whrK��6B��O�g��D��g��3WWaO 9�#zٞ�*������wm��X��'�m�����c܍���j��5l2��"�p���\N"��	�/H��oÆ�J�T�����Z�ǎ��m�Ϳ�j���8�h7�=rxB��oV�d�'܂��*lv�h�֮��:�����)���T���:I|��x{���eQ1��6�}��~0,�өfzؑ���n��օ*�$�ls&�Y��a�+�!�v����i1WF�?v��)>����K� ��.�u�5T��Yi?���������<-k�}���V36�tKa����g0�f��T,a��8�ƛ��Ǥ�����xr�v���c��F
1A�>�#6�@:<���DÁ�k�������&�S���fVǦlhc��͉<��M&j!�P�Pa4P���-p���\c�~�0��{P��l�@�����`�D�N�?x;|��6�.���O�6?4�0GB[o�G(�Bn���Ύ��a�<Y�Zo�N�0M���]�2Xþ���/�S����Ea+,��&���_�W��^�7n@�p����u��F�R๎b6�|9[o|�'\�G��y�y5��i�3GA�{G�鍡:���E{�=�Q�<���Feՠ���yMѨ�%uvo�!��]�"g0�����$=����������sx��O�7ټ��+�f|0c�D���i)FX5�B����|�O��Utghv�����֩u+�?�X�z����!������x9�B�H��g���?�͏~�ގVej+��x�?-bTH�9��L(�r�{8+G�����{���u��Wy$�q, ��PR΋��^������ �Jm�6k�)imr�<A�7��\�FiY;����/�>��on3�����ځw~�xXK+�֖��~n+��}��B�5��8��2_�:�n�K9y���{ȟǯw�vV�m`�]La��@�N��eP��W�����fhk��$�z��b�vRf�*��b%f�;Ɍ��K�G�B]��K�]G�	�χc��%}Ҷ�A�q���aA�n�![wcQ3���'wd~���7���Ó#�|7��`� ���1k7[�����yb�C��֓HY@b!r���<Cz���aTh4K��$����m�y�o�y�W�L]}1S*�D"�ķ�$�@H�xAUe���??�#t狧�7(N��i!e�8��4���AB���Z9�JYZv>�Kh�gY� �rY�|@�v���)C�	�����2&%<�Y-'��٬��,]Iώ���
���S�eF��;����Pt
�9xP-���;
a�-�q��PT�5�z��cC\�{��1��[�oR�}Zo���=<-�>��Y9�%E�P��ت:]�]������KU�����_Z���5M�]�|�{!��v�[�ޓ��������#�<�mF���n��t���~���o,�y��j�x������׌��Un���u��}B�?���b0�+:�4�&��W`Ra>�0(����2�46�$��-    ���*43��l"�����fZ�lUyeD�21����c�WS"����Fd�C,���Q&�v�j����e�@�T����=�Ab����u�y~(�߸��@�g���`�*mQ��=+ţ�^����	agp�h�T�t|4!�c��X�L?�ŵ	6v߀ڃm̊����1�_Ʋ�������}q9R�k9�nh������;}L9�pO*1�����}���o6C�c�֠(�`B��>��qt?Ds���1A�M7�~B;��Hfm��sx
��@�oFt_ia���6'`��I��o��Q2��t\�<g<��\��y�ٱaൌ���T�����;����h��ɥ"�u��f���ըok!i��)�s/~,u������!�s�R�">�ځnd�Φޯ�؎x�ؖ������������PX��!G{��b~T�:�<?�̫�a�B���mS��ˌ�p�4�T��uQ���.��� e�����H&�졔�.����m�/v١�c��Dx@x�t�����[.&N���2
�Ķ &�	4�ž�%5L�� �B$��b���O�?��?:yHO܌@"Y�E#�aڲ��@�Raڣ."k��5���7Ĝ�[�	r,Z�2@-}��fq�պ>d����C�XK̓㠆Ŷ��-<���)&2���E�d�:���-���ܰ�8xG��A��Q��$jZ(�s��L~S�Ĺ?�	q�M穌�H��gX���G~쐦��_G�46��Ca����CE++���[Mx�;`�6W�*{�}N��OG����#�X�$��@1�t���.��(���S�(�.�x�����߉��@W���~ƻB��F����>����a�}95�_����/E�_�����;�8�1��>���m�ɽ�1�Iн~�\��/��i������Zq�A�E��k7��P�4���� m�/��G@�ru+�1�F�����cU�������谴B�HZd��Ղ���Cvr}�� ��CI�ֵ6pW�V-I!�K�OG<R��*d��M˓V�9�u{�R�N��8Y(	�|f$��QF�P!���|+4����Q��-�_�,8\R���8�0
2�����>�9}?�*YV�^t�:wo��)A�G��7ˡ��u``y���C���=׍�#V�h�
\����S�z�}�"�#�zi��q��&kc�����,�!:���B�^Ù��Q�� ��Ɵ}����k�2� ��@<[�pi�b��D�8�g��tr�NoR8�xd$�!
ϰ�t�%�д;��R߿��SǞp*�-6�SX{����ȱ�)Ji]�ݡ�T�_���*dp�ذ͆�wi!q��P��R�H��Ny{�
���-W@aoy;��s����I��&��������hGqE�j����?֌T!�:]�$&�ux&�Ҁ%��c%�V=��@
O
��������T;�p�5�N��f���0r<x���e��_C��O
$Η�>c�l�н妪^�wI�T�#���V����� _JX���;c��m��n!�w]����ЋZ�e��o��tw�II)�a�pW5����Ã`�C܊�-m����u�?���N�!�2SE��֩��,�+�+��6��S��H���e���l�SB�0�����%,U[h���"3ُ����jZK{,�]C�����~�]�K���K���u��g�!p
�Z����"41�#��'�Tߡ�\hǰq�F,�d։!�I�ܢ�����?��gj@�Xq�,��%<��q�h5S����b�� T����t̺��=������#�4�+�����I�����4�@#4�I�����]@#�H��YX<���E�yc�G�S��wpc�&6@=r&�9�&�qT�T�>�sc聲�F�G[+����`��B�]#�.+o�>O�~��͞��|��.!�1�`�lƐ����6����dw .bnVE�T�c�S
1x���
�Z�������������b-�[}2q
1<�"@� ��o����R����:%�蝔p
��pp^J�B�W�����r�;�n��kp\6B���6
'��, )�I��j�Nn���{��o��ˠB
�q�H,�ZH��7iu�p.�z=�����<��7/�����T��'+_?�*�w�ى-c����>�_i�NV�TB�ٸgJ;*o��2|���C��yO���.eӇ���7?�����3��6�+����y�� ����#m�u���٨f��M��|�K���#ou	���l��n���a�gl�JڰPz��9�&���C�U(;��&�xo�j��8�"���H��vIw��� ���q��;�
��0�b��@�u30X9�t�����[���9��p��(ځ!�j�D}��b	�ֹ;㐝�g0��C7�Yp�<c��)��_^�r1���z?�45D���Щ���e�=��G�ԑҢ��0g��Pֱ��jF� Gn�/M;��mPU��ib���|�S2�eT�!1y�\n;^Tǋ��,��J�͔��~�̠�|��W�dH�(0�
54�X����{B�?�\/��^�`��
��V�G��Nnl{���X�Ҁ3M	V��99���ɡC�LPո������4ϱh�5t�  ~vm��4�V6��N�;e7ڃmĥz���?-T΄����9_ᖙ�1�*�^
':3/&4����P3;lWV�j��D��sbz����P"���§�V�i�e&�a�ml�O��Gﹷ�~Q���ת"�̣!��@5ktГ��4�5�%fF�ښ-D������W� �p�3S�_�oǵ����i�D��֑�(��ni�f??t͔j�����[�{x@[���s9��ބNaAө�N�ٗ�=��T�_�D�W��ZZ�}��6xH&ب��L����/ɓYRQLޙIoǴ �`ю� �f��i�r{�k6燺�wh�ׯ%��$����\�z4(��B��P�9X�&H�#�9}��se����y�	����7��O��>�X��w�T)ذ]��Y��j��,^'��_�y�Ѧ�#�5�7����h�K[PT7�=��I:�]t�^p�+�:=�FÏjg��_���@D��aȰ�"‏yD���렙n���Y�����ǫD��{M2t �ԓ#c�A2l�:(�n�+����_�򁝭E��I�J�kjH:H�� �:C��������&�0��1vָ��P�K�*�ڱ����@1#1��P*�e�a�U�w�j�Dy�Шr׍��`��A��� ����e�㾺�+�Z_�����F�A���y��:��I{��7��BP��.��8<�z�²♲�tc͍1�2P
!��&�%��=u5�̸DeyꓴtM��xRW�vM��}w��Ἷ�O��r��sD�����ףɚb��r����%��D`x�x�EJ,t�����Ì~[�|Ҽ2) 0Ϯ��<�Ƴx��(��D㘮��G�Re,$�B�<�vlO��,Dn��o�{�	��]�Pυ-rм�t���洞�ʠ@�`���4�M�&c�+�ͭ#�<�|�x�+X��,�ʱ�je@{����?{�C�Rb�i
/ߞ�&cyD�wpŘH�<(�	��,9O���J��%���i@�[���;o�*��B�P���^Fa;m�W�
�A��4�*@f�v��0�̭�P�����|��=\�:���Q��ǿ�L}o�M�jL��������j������NY3��0n�t5�K? >��V�}��Ǹ��` D�SX�p����@���R�Y�2SK]��6P)��� b��K��D���6ځ���]V����;�~bW�Z@�/���
	 qs(0��t�/�{x�iv�=�P�I%��={�Nu�XQ�t�Q������������u������cG�{�A�_^s�1�În�[ˮ#�"��͞�SF��>v��V�}E�� �zl�e��L�����uwHS�K�wՀ�b    �w������5��Rx���*�C��sf����c8��'�jaW7�WdF���>�#ם�4pd�.�����ݜX�c��Y�������d�)���t9}���	��2�7�Ǹ�ޙSSqx
�:/��Z�j:Ȣ�^��=w�&6-w;������	�$��G/�LjθM��ۡd�&�0�c�������~��`��`���qh�CpE�CC�P�>�����I5��)��t��_����$�hI^�B��/�����L�r��`�t��G>�ZQ�a|�`Fը�c�ɔ÷G��Hh��7�܂;�AШ����z5��H����u��A��ʪ4=#r0�$�1^ ����e����Ć�XY���[jߏ����U�f+�]72x�	7�l�6������/yԄ-��?i�݈Y�5(��=L��&��DjO䶫l�!c0��6��2�Gz��U�r��ܺ���M$�9��v/d{��R��F𶰳rQ\4���ƘY�AHgK�֡(��g�E54�������s�+N"���o���*��(�qU�a.Jw�Tv=�걾OJ���X�b ����C��uk5������:�s����q�ߏ?_~l�|R�؜Π�~<�ؚ��Ѷ	R���.�cz��mV0�|jr�<�1ok�2������ԃ�V[���۬���\��H |�+4�l�+y+0��/�U�69_��>nO�)ذ�P�R�wล��̬-BӃ ��4e�H�(LS�`�q9j?:(�aOQ�Rν+����>�Y�d(��$�̨�������}�2�nAY�-n�3�H��x&�c��k�|y�]���Ea�q����UJ�0y"�y��HB�wRUv�����6.!@Ҁ��纁�iH�ݫZ�X��2�����қ�*���V��A�\�����v��+�m��L3@��� �6�-��l�$���=յ��n*2�k��)����kZ���QCX�(y@�p�6����J�nV ��zl䋪�K�������g����U=O�"ۂ��&5_��C�Eɸ��@ф��'.����t���h�b��Q��-�^���+�u�k}E�j�w�~⥋*��5�^T��h��A�Mx��8��o������SƑ?@�,k�G�,Pn��ۮtn_
E��ף���Y>����:u�m�n�J��;��.��I���.t��t���m����qF��n�t�6e����� �z���W�bO�6���}Qwfx�O&;3�aW��,��}nmؑ��؝�=� �?&�Bwf��$^�=CZ���V<�&3���B�ּ:�V��#PX�V���ۿ�R��{wW��z-w+��Ǜ����P����?��f��u�����Zݶmr��r��Q:��5h�ck�!T�m�n�m�����3��ܖb5�r��2�� v��A3;�df�95ep�ä�����L}�Qѭ��ۜʅ�����8�f��2�/�����J��U.��zo�Ƈ`���w�_���tں��avׅ7�Lǧ�P��rg���*�u+����x��}�c4ƒہ�zܻ�Cð�ne�]�~���p(��Knfx��f;��pྣ���p��'��
�ͤz�b$�#P,�כr�Gх%��b�����v���vF��$NF�[q_	���K��^��F����2ĭ�3��*���̫�1r���m?���<�H�='�
�I�ж�4�LH_bh�ׁ[_�Ξ�؈eJv[aˌD�b����;�v<A��]�H��ǿ/��������v�nD�drZ��d����_r�M�s�mr���Ô.��G��kf2����cm�7|�n�� ϝ�Rp���`�ґn�,�|}�3�5��Y����^��=ػ�9��1[��܁������y��Ē[��yDc����Q�Śi�Q�P�eE]��4wc�
ó��T�h^�(%��������W0�@~�mK��pC/wlhE�ACޢ�\�rѬ�;#���_��Z����(����b8=� @h��ܵ��M�����)����Iz��u0��=�!$'x��|XDy�~͋d7B��(�!��>���-V��r���X#U�ڒ)��=�0�z�h�D��n�k�ࣩ��iR��������<������`�i��ʩ�zw�D
B�lg��sXA�;���r�V���'[�����5��7Ѐ���^�0f�1�7׽f���x��YzbK��=\�=��֬=�� �Y	����0%
��ھ}�M�l��R��F���j��Z��%���A+~�V�\�(3��BS��p���]0�@�78N�N�<���#��i�	�쁗Eϗ�q��_���H�a����X6-T2��&��;��ud�z��@2�6����Q|��LX@�� ��AQ����$?7{����ɭ{
4����H�Rb���]W�n�d�<�)�A��)P�>$(�[�A�������}� �և�ps�}����>T|�nU�Z/>�^�M~�o���r�	҉��L�����൛��Q�!������N�����M�,����Oy԰���I�nT�':�'��!�7�b�|���vpw��'�Hء��Ƕ��)�p�M6���f=���ָG��!l	�J����P!}ߨ�]h���Vr���2��Ӈ����R_�C���AY���Ct��w���	n�tB����rfA9�_/kI�op���YHf��o8x�T��ѳ�������J�lN�)	8��H��Uu�r�!�n�t�e����E�{�:	���՗!����I%�[���k��Jڮ�i�?|��'��љ/Ѽ�=#z�V;lW�4u����D?&���ǍX�z&����X��th>:��ȏ*d�v��n^T�(,[�ޑC�>��Vy��ͪ�m��nY�a�;��Ym]@D�C�nE,�y�;���[[�IL���fm�.���4ߎ��
���b*�S�x���U�I�7�)A�|i�Z�#7ǐ�=҉@�1<���0@xFɔш%��&�bh��_LxP��W�,:S��7�����f{�jH�:�ug{��ːR�I�%�F���)MdI�T����z�d�A%2c�Ot�1׭�`
Xq��FEDuz;HΫF��Wo��X(G�  DB�ר���E�
2C0��Ϭ�)���H���v��+}򃮢�)$f�i�GKlK�`jc� 7��Q��l肝k{�Ё+�I��L.�I e���VPo%!ܬt����v����G�aC�6�����U������$nVq��s ��[��~��1k4�Y����N�=6�.�碇��F5Ҕ�����Ԍ���?eo��6�4�>��
�@��He�R���>fR�ҹ�_�3�@ �~PW�T����nn���a;��������_�C�y��q�Y��sE��Na� ��Pe����z>y�v	#�l�Y)�i?��yN0�����T�5����IȚ M"�Qj)���>��X��b����H��|@HZ�^���h��G���29��Z�o�Cq2{�,6��lEe�jk�)A#w�a�=��p����8����i� �pV<n�
k�A(���Ӊ��gU�QF۔-7�����ن\�tE�"O>Xw��	óXw�wg��bO ���~�J9<�j`}.(�Hb��[2��.tҐiEө�'�h�Zu^�E�Q��0َ�!$n��d���q��E��:>�a	�Z��������X7�#���7��Im��PRr��}e�~X��V����]��9��վ'���ݱ��I�롛Ѳi�q�g�tg�` !&R}�����
>?��w:Ҍ��;u>y��{�'�6KQ2l��.r�R�ZWp��X��[����j�z��N0cVKz�,����;��ڎ;�/8�^]*	��G�����&0{F���է��n�~�����V �$`��p���D��p�_,�i�L�$E�Bf�k�P�Ă$�䅺bQ�B����/�<�>�Y��O��iֽ�aη����q    ���?���VdH�o�=n�
���Q�Z_�ט��|�Q}��qww��D��,Ή��8h�eCT <��?������ԖG�!=P�aK�(x�����R�����J��fP \׸A�$�ͤ�fƮX�ƶI�9�h{h_Z:�����G��idt �o�`��h��L�6�w7�h���t��f|飶�u�*�?���%
����a3�����\�Em*/���ju�܈]��,��*#<R`�sq��o�o�;A� �fO���Ƈ�*������3&�O-w,2�=|��F�o~\Ѝx@�p�~�hv��#�27̬n�����Ku����ӝ���4~=��X۱)�Ǚ� s���v����S�BJu#<w�:��@�~�9E�H�;�z�5b�P���8i@ӗv��X#G�,�=�Uf �!= �*�j���58����O���S� (B2���:��@f�����i@1E�cn3bO̮Ҁ��
�,e�I��HF}���x���5=���ęVX\}��w#������K�I�X��2���!�gV4a�9���u�`U�`U��^�DW^�������������v����"�Q�VҰf0����,���9��������nG(�g�Pa� �À���|mh��Gz���},��y�]��~��Cf)
v�>��[�_\۴;fE�PHVt�R�!�xl�K^���8iCk!��'M�+\/��� �x�"����q�F�X�	}0kC`;���!�R�\�9M�6��J|L���*����/�},�롆̽�
mK�Y{�4��w�l��?1\���hj$rDEP���c����Ԝ��M^��S���r�)�jVf��'�A6��$���=tl2��0!�s��~�e����f��B��YX������o�H��\T*��*�WSZcA3lOz@�VZ��&^�=MZy_#a�ۣG+4��H�1������*(Ҡ!���p��/�<�ް����2����`�T-�_G0��ezɐM�+iO����pCǶdk�15� ����&,���x�]��G�F�L�0�j���um���k��Y;[�q�)�0r�R@�-�:��'�HQ�v໽/���~.`�n/�-�]���~.B.����xVE&��E���3�������,y{@{�N�o���y���U��kIWË�@�6�ا�+�A��ˋ�J<�-p����B�lPjK��|zI�����0l�
ji�-�}m�A{� �gxus䋚t?禤h���rTꊺ�S�=�F�m�&��|��̊�HO�د�������������n�xZ�/3옙�T_Ŕ�T��4),P�O	~�{�z�X�y���5#��6�+0$?>Օ=��S�2����pt{�2�����`C&���>\��֮I�Y���#bҩ�Y��fXA����@�����At�X�F���e�$bj�ekz���Z�P�fM�Յ�{\t�(�$S�B�Vb%X~�TkCg1V� ��Ξ�auF|��V��L|�ژ�~���7Q���y�W/�����T�$Z`�]�8�v�v�}�t\�t�({����z�
<;ڰ������o����>�܂��sMiDҸi�/AYƢR;�Ԅ9�f@�5vC�NS�}�w������s�g{Z+�HT6�uV�n��������}��h��;�mD��|Iox�gF��Vy������s�o��/��S�bd0E,,S�a��]��F;�d�x��6x���̺bIE��Ϻ�z
w�do��@Ca�� ?���u���Ԉ�T2a�ګ�#�B���.3P<`���;%���T)����cC%w�8�	mGќn/�{Ni/�¥<��a�j�	�mk���ţ�&!���\4�	�7R��wdL`p
��G�O�aϡJ�6����b���
����:�b�]���`'_��X��ђ�v|�h$��g�&P���d�ƴ�Y�����#S4 |��lO_�n�ۚR@�C�LpVͣ��ĵ̀���b���n��@�xRUt�s,�cI�����۷���a	�@��4"5�� �Ra�<Y�]�����h6��</&=OS�T�T�[�<�Eh�;�b
%ғW{#������;�YT�8�5�g"R�og`@� �����'(�@����:i��@�vS�|
�Q>��+x��)�jLCގPh$w��L`w;+M;xɸ�sCn���P�:^DDP8t�X�:�/`S���$�?ؙ�������|'i��򖼡LG�1�>T\t�Z��J=�����^��tgH���"�c%(e�'���;/\�������:q�<n��S���i��d'H���Ό����_��u{�p$3�-�B3�Y4�R�{�⧩�?}�����C��nۧK�4�p�-.��uZ��,r0�B�t�L/��p
�;f�[�%i2��z��O��\K����_!9����U
%�����U]�`�L��7N�A��o]J�b�3!�Ԃ�a[u�0��Oz���U5��͹POD?RP ��M�srigA�ky��W�I���c]�<��k��犾m({D'�o�D_vw#�&t'��p�_�=4����=��dB"�*�N�p0��Sx3��	F�Ҧ�|�u��@�F��I2�䄿�n�����"hM�����h�^t�B�Q��c��E�Hu�mN�ԒZ�}h6�C5cq�+=��S�aX+�������O����3�X5���i�9�z�Z��H*��k���Ԯ����J
Ҝ'�ˬ���ѕL�l��3�iE����5�XX]pf~�#����)�9.XW_Y[���`D	���B+_�BM$GO�p;��nW��cɛg������O����F��E�g��5x���<r	_�i��<Ia�`��~D/2��H�v�N2�j���p|�r�n�0�J?������H�Ɨ�y�� <�Έ�i��uV�:�f��='�c��n�'-ۡ�ZD=&�-o���f�������٣=GƆj��HqVS�z�i�|9Z��o�%�q
�w������?!��$�/i�Dkp��шlx^OZ���c2�mg }��i���)6�hXAޞ���`;�I�
/���Nk^��\��ٳy`��qj��u��0�DB7��+_u�^������u��[��2�+ a����3rIj/t7j*��c�=�r��~AᬉD�5���^��� ��|QWí�h�gp���%"^�����]�^y� �{VŖ��&��� ��)�#���"� �~� ��A5�]՘���!)ҀҒ[��tS�$r�§���n'z%�T�9	��#2�	Z��Yk��}������J/��sl��ʠD}�e�	��NCB�P���o�h���7�I�ɣ�l�m�S$r�9"n)��j>�����N�+C|�>z3n�qy�П�V��c���6��2 �[4�C� ���7wRu�_��)�V���`��R	@.���NJJ�9�]�5Nc����(�y��r2�w�ֳ��$d}����yt>�&�/���l����(=����4�>�g��|���������`!�z�����=��5�,�|�e*�RdH�"K1=GĖ�;#<��w_�a��+�-�s_?7�ڃ#������Q1rǑ�v���`���Zo��ԀM2O�v֋h}3�T:����36�����'���o:����p�4`>��G0��D�,5����ϵːntc"�%���zr��;�|G�q��l )ذ>���0�6����*��o(A�Q%�lȄ��Q�nU�p�����Mp��C�#P�ȼ�-l��L쪺�D��	�mm������@�< ����;2����/h>t��%����-���]*x�N��5�8��������GD�O,yC��+�$FrJM�y ]kZ�=��9�=`�:�
�!6���o�l�1dk3�(hs �Wœ��?~� ��I��Mn�m��礡�r��k;>R�&8	���I����h�zygk��� )`���`�G8T    r�ݝ�l��������h�:0@.����@�F�q8�j����誤H��O�F�-����V�黻�{P���dP"Mq�]J߀�1W�U��<�ިێ����;٧�R��d'��I��ƒ�A׆F5��x�XRjlkr��,,;�
� ���_�v�yTkj|;]���b��u��(���T]�	�/�F#bS���'�����a_2$C܆^۵�`e����tq�7�3U5����2�G����~�1tϡ;�5ɯ����m��~� r-�4P~3�I�*��?�=�����U�̺�^��
dFdÛ�q�������#��[.̨I���.6�,D�zqg0����G�����V)�rq�o+j��W��`�.4Z�3:�������ԯ�]�)5�����U���gоGh4���lr�ԁ:;C���n�Uf)�Q3��$��p�e4����:�%!����xqގ�/?��u�xO�/�.�3��ͮ���S�A߃��G�!=���	�a�ݼ�x2"�
�%�`��K>.�Ճn�[췠a��;Z�ʑ�@9-I,k�w��h���Y���������j!�������Bb��"�&mf��|�Z֖TI\-��8d6|������&>���IS\܎J��W[
$��V�׀j�Dltm�b��Ɇ���=f��2)����YX�<<�A�F�?�����8Ė4������^|�-��+���	�YY\%��ΠI�#��� �@���,�$�`�I<����Pf�*/���V��&�:ᛣ�p�M�+���{���q��]}�6)M��ryR'���ۦ���
��R�L>[g�� o��gŖ8�M�FY=�����A+׫��g����"�"jj�)l�Î��0�+\���,�ȭ(��&�@ySH�Ɩ8U�s�'�����@gH�^���!#O�¾}]O�B{0��.���54��y��w�1?̡��/j�����oBd`�==�a8����mU�!S�$,d�?|y��e6�X�ei���d �Q=Ef��G|7d�#��"�!ￆ����L@`z�z�y�Ԏ�g-O��S`�������,js���aZ��O�_K�)���T{?��2�&JU#�6�f3�%���E���}�O����ɴ�b�vm4����ظ�PW��8@_M#�W��+{kl<BfƬ��M,����m?�x���m|�4T�67�������5���l���.F�e������lЄ,kK��Q�1��[C;�ԙm9�"	Q�
��g�6̄Q�*��ڨD�A�~j�Ct7��*5x���_����}�T�z좊�� ���i?����&�϶��D�v��r��d�'�篓H�t���ɉ�V`�.��=:�׏]m�k�~`x�J���� ^�oO �k�w�%34o"/Ih�7�Z���΋�̂'xo���8�z wg5�?\������x߿vf`��.��N	��Q����9 J�*�������c%]�V \��vO�����E���S�b���� �:��N���{O���0ⶏ��L-���G�x�� .c��o�[I�R}���o��j��P!��]à
��@�?��~�o��]���a�v�Gzy��ĹolБ�A��-�ŉ3l��qb�;`A����QΫq��8�o�srwb�0r0��o!� ��{�{�.���d�ty��^����N@%� �s'z5��N�F��� ��['����Q�Q�b{܈$�̕�"������^�W�Td��A���6|�F+��3���e��y�o���6/��5�l��� C��/n��!:�O6��j�0 J]g�ǥ=Ԑ���<{;1F�k�� �]siaĀ0���r@
*q��o|��'��Ԑ�����(�<hS�  8�!�-?�����+\�UPchl䙼N��ul����e;�A�@��i�k�1A־���%$��������M��U�BJ�̃6���}�A�#5�-OR)��gT=*�QT�{��桷�gܑE��Q�n����	1̶_7�3[�-EC[��}��=h�γ��5Y�/��w[��nF�2�� 롋����aC��g�Ё�V�o7��˙	Y0Ύ��t�9!���[��ޝ�77���s�.��'\h=�ڞ��|��冺b��-�$���:�y�n<��%��F0!�r� A�ceO1�*vpϹ^�3&�KR�`ab\��3��q���s�Z��7�J^m̫���Gv4`x�{xM�p��;66z�7������~��ԅ^x�p�6�^��L�Q{��M>�����-kJ��ma��5�oUL\�D8�Fm}C_s���N����f�z2H2 ��n�p�ކlI����YO�n ���ϰ�
��oGf�G�g�hW��;��H���hr�s��Fh�L$M�{�t��Gmm�Բ������ uA�#�X�z)�qd�p�f#�J���ˆJ{;J4l�]�w�zf$qԾ6u#��n_��������J�#d���&���p�=����O�\�U�T�D� ��p��~x9�{fFV�o�1��65��֓tt�/����K���m< �0��=A>�#M�����;֒ˏo��j-B*�-�ȚB��|=����<��ǌH=��EX��-𼧖"��I��I�ѫ���S�G�z���'��S� v�!��������$��M�%Ԑ�왆5�3�� ��h⚠2�u�ږT3f�r�.tn��3��4������O�
S��R0��"�J�h�9�f��FDw���V��L�0X�~�h)1��5�Y���g-�i��O
�nh�B���ͭ���!{�I�x3��Y�tC�Y�}���w�xIO�3o��\��MG8�S��V���?����O�![=��c��B)�!F0T]��/��+����͊��M��-���B~)ذ�&)��P3��@���I:^U�P����Ԁ�G*�Zdy�Ȥh4I[��g|�̹O!��x+)�s�F2T'��'��t���N9��42���l�?��N8pS�0���v�kl�������Y �YP�1�wO�ҩo�__������S�*�׺L�9��,�c۰���-��ι��Qj>JGUu��]lO�]�)ڃ����v�9pÁ!=_7&u�ݫl�5�'ƏF̆V�d V]�f�<Dk����p��!o(�]�aM�I=j�����oF�+�y�SFeY�4�{�x?\�D�2�a=Ԑ9c`8�6�qj�n��b�#�[>vSP��I����%�0�(�'Av����w;��Ԉ�P�=� o%{UՓ^46��[�꛻����D��x�������+��֓��d�f��6e!�f�Ӵ�3&���K�M���S��X�>kG~��π {���*���/x�]^춽9R��:�W��S?��A�v����7��CQ�n�+�(��O�x�t��*����W c���Y�nE��oGT>��t�����CG�!|�^�V�Ps���l��m��_�3�졽��pC��jw����� 9�nJ��������ß���ӗ���͞�_�Z���Ћ���,��wnj_q����/��}�^=��t��⍄�ǃT�6r
��$A��d����3�
��e?̺�k,9�nBW�yQi*��<kdZ��O-C���d#'� ��g��4�9�X���
� p�y�2��7>i<����'�R��&�n+�cf�0'�Z.)_>�l�2R��Q沼�;�]�s�)�@�l�N�[7"X��rk/�u9���F�?�}� N�Ȇ��֮��G����7���rew�8����E�߽����N�@fA�7��Db�r�S}��BG^e�P��ċ�I�,�q��3���D7�Iշ���u'n��#ذ+��v�|1X��v	-��H	s����A��=�>�C3��Koc�fe�w��,{n`�^|}�&ϔ�d��[J�w>p���� �s�g���r=#�X���l�\],���Mo�D�M�    ozV��3����u��Z�|�{�
���	��!�z.��S*I5��y��U[c������"��r\���z)^�$䁩�"��8���d�F�Yb��ےi����*Fx�}/���&uX�`�^��ByݡS����,Ȑ�q�q�a�Z��8p]�ܲu<�k�{|AB�0�R�a=Ԑ�ހy*<�C�H&}�YW��g��դ˛������A�i�����G�ʣ����O��C��2�Vl�O�.��֫H����j�*΀ �0C�?��ْ�����՟�;��n~j�d ��5��y�^G*<D8;.Y�{���bP�~�h�,h�)Ds+:X$��_����5%��9�>����XUg��5p�Y���'t��~.��l�� ??�툅Is 19�����}�D�4|�CJ͘o$đW�B]˙N�̔[��~�����T�G��Eu�̖Ee)j�P�vE�z>R�GB�����b9��x��xfŌx���}?wx�֞c�n�=��0C�g��M�my��Z���n�.�=���U;r���7���� oÛ���R+6��'eꈪ5�͟�__�t׶ߝ"���]��㓢���ʪRP�Nu��儏n���`&X	�'��J�����C־3�9i''��|˱�����}��G/A�;:�}�3ZH%�O�DԴZ��a#�H_a���=b<�6��o<'Ղ�gO%Y.���������b�-�����ݔ�}A�ۚ7����P�n\Y���A���c���WQ�� �`�r�Pc���������f�/���T��"��s�L���Owg>{��34$�C��goޮ����˭�3�x�c�k��\�}g��r�:�#<��yCxe'���6d�[XI���ĉ��n�f�Q����%��(�{�K��䓅�;�sy�A����0��r�8~��3ۃG(�\#G�5�: ����Զ��(�J@}��m�L��j@�a�D���� �;lc��sݩ+jA��������D��G�Ճd��\�t� 6>����_, ����J�t�eV�ڈ�Z�!�v�RE���<��zj`S')}j�o΀�,���7x�gRn\}���Q:w�i[{�> �3���aGõ�?�J�MbTfڍ�dx��(ӺK;2�v>�S��+�ᜁ���U�0v�{���ڂ9I���"��5q޸m�Â�o�������p7K>��+��j��+�qó|�yRT�A/��R��>�#3�m$�<��&�#����X[��)�f�5I	4+�̹��F>��aiƠh�}6^����C���Y0������B<�C�[X���GVeU�kdD$!�>�Zu���N��!���ȮZ��|�dXBC!�Á��]��k���;�p���f̥r�̌~��$���>~�4c�1&�]��w�X��;�ϸ�+�v6-�{�����.
!�_ A���/	PAB�]v�b 	�����=;����p=c�H�f�/�7th����G�FjE�a�+�_�%�%j<��^"xQ��r�ik���[/�vc�!1��'v�O����F��q��Ո��mx=GiG:VN�t;��MA�Re��W�R¬�����k�v�I�H� $Ӌ����n`��-'�d�n8�X}%2��yh��Cj�m�r$������o�d���EQ7�I��ٳJEq�첖6ޮ��	<6^V���m��^�&(;��wO�6l���|n�,��:�?�O	�fo�XBC���	�Q�FA4w@Д��W��0�C#���F�`�U.�����aw�hU�neK�/ߏ/Wc9l��N�������3�q���q�9�w+r:29��5.GK~�����&�������(���%t�=��"����}���1�ߤ6�j�]�dϠX� 
�X���$����|�F�X����3��:��7�D�&|e��F'u]tH2�T��>�p���
O��Fb��@N �F���c�I&}��ٽx+́Q��ʃ	���h���K��O�o�Y��!	�P�P����pl&�0�!�t��X5䦎X��}�|��<�r����U���ۑgO�]����)�F�4��D#�@�j�S�ru�̅��G�{{j�<�+!�v��r�'z(nY�`A��r�^76��W�zH˺{���kP�gdǯ���Ԡ'i<%�<p���~�*�;��-OG�ܡ�Ҷ�������}������V5=��&6�?u��8+�����^�$5b-�d���j��®�yw����<�v�<~�+��Nq���N�� ���`��}Sy���/�@����fƢz5�n$�gv�L�9G���Q�;^/O2r2`D���jP�h�$|��xͽ�~[{��lXk��v=nѻ�;jغ���M�oǛ�Zǋ�N:*3"2,�楺�毟�1frݦζ�_xO����H��]h�1�ڀ	X�_:,�b�S�J�~�o��e�J���湿A"�9�<s��Xt����~�%�8ki6�hijHvd&�C7�����=��N*	V����K:��&-)w%W1L���'|�B���|r� ܙg��p�C4#��^�I���VeJ¯4��}>5��(Ѧ7�Ү�T��آ
p�n\k��ڑ�w$�R�v��H\�n2������p�^�[�����A4:3�-�F����TkC��jjO:��'D-��x�g�af�,����:	�̺�ވx�<-D>P���v2���`Bd`��s����8���Ӧ���������������)h��|7l�
C���%[���^n��t�6p`�>6�v�d$ik���](B�;-u�&>ݵ�����L�)��/�y�B���������'�d7�'"�)��®F�݅����m��s�����,���7���`�;(4v+�گG4�Y6Z���ڑ���7���Sǣt|�i�y�E�+4�r��#B�4�O8� o5:Dqk���}�D����[��v)(-���F�96j�V�n���AE|/�[΃�P!M��!�M�=6���^���DS�C�T[fv�����Rp� \�	7�Y�Y���M�;'K{~;�Ѻ� ���='��~=6w.F�3��x�'Fp�e�?-*VweXB��Z)�j��`���̬������l�¸.���bN"s׺���Жd�����u��U���ބ,�'x�/ҟ(2�A>�'���'�l1ֹ�W�ri�O�.��Kz�]�7�kp�tR��Wr&9�2�5�:l%+�V�ѹ����Q$0z�#HA6��Ia@I(�Q i���A�f�(����v��0�{��MQ:�0Y~L-��F�R���H�^E��ҧ�hER[���B�ʄj�g��U��]�R���O�F���AW�R�]��������u�W���yn����'S���s��kU�Y�p�NX��+��F;��Ԇ���� ���cN�N��]g�TE�v��+����ֲ"pf�v��T��c)�}E5�Ӱ1L��B�j��ls�Y��7����̗�}el:\aG�����v�rg��Rj�{J��i�k���|�-���:�*B�o��S53�7�p�͒��m��Gz`�O($�Y����j�U.f���̣W���t�:�th��4�aI�٬����ny�ȫX�Z��v��f�v&E�.����s��	O^�:w�ee_���fw����c;���n�+��Nɥx�t��RC��ݍWZn�����a�t�ߧ�%�����~�Ȇ}�íU2uІ���8�3��Z��<M�]���{Sȱ��~M�k�}�A���n�'����������;#�_Z`Qiר�(�u�s侚芸�x9��,�4v�]n ��Vcmٵ}�~��n�DB�-�OuX����κ�^z4b6RO2�vݡ�ۏ|����cN��QjXF%��r' �[�D'|-7��?�l��-��������w���9��ؽk��:p��gݷ�'p�)�������s�ǆZ��dX[ѳ*;"��2x��v��vx��U��S��VK;H����T    Sݳ��@-�8�>���:)ܰr��e�ͥ����\ Xc��[���讼P�������.<D �`@������j<pT��z�v�%BQaW6�ɝ�3�5�Mpi�=��q���>tz��f��$�V��۽�;�y�'H4�rD�!�|����juM�2W�D-_C�)�m�D"Q���E5�\T��arM�Ģ�F�p�H�#�(��Wt���}�%�.A�%��-���8�.~+�V�6�i|c���7�v�>�!��D��$�FFim�sձ"
�R� Oe��V�����V9�-��������:)7��t{� �X+�^��Q[��B���w���ۙQ�Ƒ[k���zԎ2����������r���!�>N����}\)�A�q(6��U5�;	}hn�@A>�-'�0�򠕰T��k�Z��*��8��'M��"\��b�.�8h�nf%S�^���� pߕH��ۣl�$p]x�s�	<Ȩ�*�D�@^���p��n�h��_�m��'������}��<+]s�G��su7l.�c���{o�Ȼ6��?wd�6�T��h6쒰���UȢgRV��)vhf�sU�PCZ��җq�;�*��n�!��������v��Z�!��r�f!ݧ�'}���3��q΃�m��\�v�P�&���j?wI#�cj8d���e�����x��H�e*I�7��^���#6Ow���h�pB�vI��\䖬H��4`�6m�O����]���\GS��qѷǏV���`Gf`��8�z>Ǥ�ρ�+}�^;�kj�̀�O���'8Ӡ'��'=ɏ�C�|����=Z��{�<�#�64z(՘�&����v�p�i{ƥ@�3T����^OǛ����c^���	Na ��z���+�'l����8r?M��*�r,�nX�`���5Wt���7�m��y�ؘ�Oa�`��%S���yIUJ��z��aM����Y%)b�y�)�бzm�S sn8t]QM���A6-�L�X͆�T��o��փpC5�:�|��i}��q�?>���K�!b5�.H0d����ܽ�i��5��Ʌ{L��T��۠���#�C	.$�̽=������Ϡ3ȫ#��@�{}�Ww-�����'���W��v:��=15����՘���q�Oz��'��F����9���w�����݋W����g?��h�-�-��x���&#9<���c��H3C���*��|ު_�/^	��؟��˟ �	V���&�葏R�Q���5�ԥ�c��� �=�"��߿i�:8�W�e�O�琶}��[�`��}_�E�̻��6�\��"���+�l�~>�[c�H��N�|���	#v�A?�3��P��T;^���)8b]�䪺���=�f��Imr�MI�����5I������2�*VkQ����̈́C�Gخ���p�HX�s��ƈ�'���c�No����S�s�!�ڂ��vr��0���w�YN�Fgٝ#<���ˮ�z]W����Vr���Q��z%��H�7rnA�O�cw�E�{S�x���R�RwA����ڴ�m����i�w���\a�FC�B�2�&��u���ga��@���ޏ���u�*_�_������������-����`�WD���4�(�ҹn�q����b�}e�J���}3���	VB�
M�����и��m���]��M���j�t���&Ri�&�=:?�zT�6��p3�k)�O��S��g����'|�.^�	��B�!�_��jb�h'�{8�?��6ܤ��8xݎ$;��s7u�#��� �7��� 12-�@~�P�qN),����*���h̸�R��,lP�pA�9,����e�f�tN��"vx���⨛�s����p�.n�>|�pt�W�d�};.�m�|fBZ��L�f�&���i�#���wR��W.;�P82�W�~c�Ӭ�8�d�c���<<���[�u���#Ը�T���?�*��jI{��͘3�����vl8�F>���H�O�!,ƃ������.�/
rQ��4��w'r%��=��B|�b�Ǿ$,��<3'kf�lyB�z�VS��z��a�ߪR&J]��3����՚���}�R��yگU�>W-T�������X�k�~x�5�Ɣ-߇xU_���hZ�M(���X"��r�����D��$�G������n�7����ժ���v���(����Z1#�Q$uΧ��s�?mY��#�co�4"G�'�Ƕ�Qg|��:֗���b�o6���Nt^V��!j{��M��D�_���y�Nn+�<A��f��уv��Ρ��s�R�&���u�DL�7��*_D}�1�mro �Ju��iA�m'(�z��k��5/���1�wS�֏�_��A߾0l@lأG.#D�c��[�FW�P�-(J$�*��-E�A����Zw8Pڸ�*{�����0�9���I�4�0C-#4����9W��.�|G��=��#ܐs�X4�v�؀?E����`�nû;Y�Ժ����(�q��uN�����"�1��saЀ%ԟf�[�&�R�_c/�{��4>���qxw3���x)ͦPC��֞���5�K7�K������'��c=�ȵ����Æ�"сQv�k
���j�%Ԙa�E���ݨ1�s�����*�zQ�p#j�$ۡ�&��V!Ƞ�>�j��DڂD��o�V�ʵy��5u�rfM7�9jyh��/�&���{��k�5��̢~w�Ӹ}G�-��/㒔*�7����
�9\MqM�k~"�
=V���T1y��������o4� m����sڋ	��ŗ�`�5�!�b���Q�5��������b�oW^�O-xI���^S@T�l��|I8C_˗�J-���{�Ћ�*������CK;d>4۬���M��#R@�NT������E�ܾ�fL�u�ͺ�:��QA3�[��x�lk��0l�:4�7��r��*����56Ф�Gx���6�bj��=ۍ�Y=sP4����w:,ڶn���;҆��21�&z=Q�s��/�!�� ЧN؁m�R3�JȚX��'N.��k4�Q�;�:�:;�Sr����ך��}��V���W��q�)�=�������ux�5�Yz
���.�2�(���Rf ���8�y� ���D�H��z�"^�N/���;�bFd#�X����0�a%su��䓷��񱙫˰�H�P(�6�w9�w'.���Y�R�,�
�ޏ	�v��S'j��n�~q�!�Nt�Hj��^x�a&d!�̯0�+z�`x?wJG�T��p��~�t���� Rj@� ߪ��y���?y���l2q�U�ҝ��ނ7�Tx����܌Z�m#n�x����{w�n�m�v���:��� ��w�_>��e�w��G���w�^���ތ]��N/8N� ��l�!h\~�JM����~0�?S�:�f�6Ժ�ڤEc	���c<z�RQ�~f4�4�veRQ+��]���f�ՁH���O������S1���(]	[^�8��'� �+�T�q��4���n�(��y���]��M	b�B=��Tz�5�x���ڠ	_�ѯs�5f��!����K	�kK�pq�\�R4��.�v{�*�>�q	a�>��b��TٖAi��Gᐑ]��I;`�X�Xw^�=�n��1�\M��0JY�&����&PǛI�`� ��M�$�^y��/�ZS�@��_��6��v�~��6�+��O������J��{���������0$�u`���5��@��nu!�J�M��k�����:��-���}?�=:��.U�m&�^HM�Ǒ�>b��xjmG|��q��M÷�}lp��$U��Κ�"RR�0x�no��!As�zSsl�l�X�<ll�:��|<�&����� ���u �o�~6#�'I��7�<������Ό�o�tUV%�z��ofmoP���׫��Cg�I��x��ʢ�s�J8g�{#T�{�N�>�/ Io��-�����!�Udq���ꏦ��>�;R.[a�    ݳ3#����\��H�y��ã��&/��4��@��m��	I��{��'X�Ҁ���SO'��l5{�N(]�G5��ˈ���`h�J�wy0	
�3&�yW���}����n��ؕ�A��m���hs�X�C�&x /�Z�9����t4�-i`�;,�2��-�Q��i�a�_���-8DQ�A���ŧ���(�v�B�ۃFl�i1�����ʂm�{K��x�=,���'���u�
i-��MC���\�y�����N-�@tr�^���ZP������:���z}�ק��o���C�����N�����	o�|���\K-Ȁ�	_���(�m�8o�_�]9S�}� l��"����f#���F�k~@��+�Q���'���"��5ӓ$w�`(_�m-(��V>?�՝��==~�&Dj�D�d%�@�'��i�A��K����"i��5��CV$�&���G5'�	u����D����߲g���V�H���!Bll����(�Ԓ��֧{e/\��_�3�<QP��=<�W��-b�-8��Ar����e���}��!�8��~x��n�=Y��wwL�P����S�Ȍxi��Uy���;-����_�����t{���.x�(��o9�{ҭB�9^����U��2K��̷.G�%� ����qo�模y��I>��޻��̖Ԅ��K H�-��4ӫ�n�����c��Cx����O��[�	���۔�k�qoL�~�S#���@��E�n�9&=B]�$���i��REG�� ]t@�w䶞mܖtzOz�i
�6���v���lJ��FiS&i14��7�`m�YA̺ޙC�N%M�_���ԤI����22@��b���\+<@����w��.������̈`�t}N48�A��ZA3Q4�Q�-��	4$�K�Lj9������h{ۂ��>�v/��t�G���8���5FT�y�5o�۲д��Em����X}#�Nt��]������m��z�����y
I���d���.�Vɱ�����Q��L���AQm��ӸQ���d�9��/����o���m�D�@�&"�؂���s�����9�����3$��R�_Ws��<qD�Wjt�`3�y^���`��L�%S�];����}�R���xc��;OI���!�jH ?,B�Sff�Á�7��[p�tH��@_��w��|�|ө��G�	������31�Ca+���������P��-��U��3Qˏ���Ll8Yk�;}�PX�vR5z�Ye�HdV��6S�A;��=�}����#�i��H���V��5H4���;T76���������݃�[��13 ����X�8�l��܁�N�3���!���-�c������/����vj�s��q��=����	b��4�ˡ��h��&r٠�m��:wabe��_�e�)ƨ��KO�Ɯ�^�ꢆ��ۡ���k�n5���
:HFl*e(��d�eAp���E�m�K������}�o�4��w��E��M�HY#���	���i4�V�T��-����)��=Y� tp���e�b/�I�^�����%)-H֘�;�(f9b��t9��z��>q���
��g�t���Si�5A�y?���.�jUP�H���`�����$��о��S����B���l�����kA=vh��'kfnl>9�9��x�T�An�%�m)�3W�V���$z��������c+З�P�*-x�xO'�[<t��
n��`����N\秗�*i���T�X���S�|�yI�u�K"×\�<������[�ht݂#�vֳ�Fi��J�RR��R�!�
�\�*~��C���U���@t���a����ڃ�o9#7 	;��R��"o:������c�">�
���,�bLwp��|I�(|�������Ȥً�Y��[�PY���kA���ue⣼���>��߿]7��Nt ���}��ú%O�\��VS�Q���lAĨ+�C,ơ�R0!�,n9k}����
	�j�	6hb�Y�H/���v� ���>���7�kO-��K����&;$��*�E���'t2�a
:CM��d ���<��@���j)�R�I p�=�����-����>N������w˘3<��V1�#��i=	����	���5��Wj��=�p#������3����f���z��?���"5�-����G]�n����8�Z�=�b@��[Z�����n赬���(����FE-��M��㖂�5��>�=��?;$�^k�e�P������P�(��Sǘ
���f��ѳk�o����#J}�����|�b�dh��%���^�[ ��-�3��BȱJ�!�ڷ��6d����064�Z0����$������}�.#���G�G��1�����b� :�h�^�-�^�w)�qu/=Mp�I�eFh&�ǚ�^]�vvP������g��&C'��E@/�e��ǐ�/�32x���f7q�_t���8LMi��o@���2�, ;;�0N�o���D��#������5�	բ2�-���j�{/�ΰ0լ"h��2i���M��vO+'|ϸ=�����;��qｩ�M`�+j��`b׻��#� �cE�zT����.����%.Dmi��G2�-��|����qW}m*�/�Ԟ=����%�d1,�a��!��L���s���C�͋F��Q֠Ys��O߹נ����~�W碿�y�fgFd�L(�u50
�3�BK�n���gO��:"H���:����z�]k����{������z~»�Lx��Vr_���;�mڝ���.�+������Y�%u���?��-L�vW͖B|�]a7�E����Yf��	��Q���\����]_��"o��|���^me%R�ҍ����-��hR=�ԜKn/�^�~ϰ�{go�}q�6�!5e�h�v�Yy��F>�[=Okσ�[ҙ�������ﬁ��^�E�_�(j+��ilĕ�o:����Y7v���:P�gvdFOB#��NY ^*�󥉚?\����멾N���s���vߊ�f�̐�3f�]A��EԘ�Spi�e�[�y�{�.�zf �[Ns5�ޡ���Y=��:�
�������]f�[	2����s�`� ӄJx��?ɀe�{�d�%�
��8�8�@
&pb�O���G���B��=pM�r�h��ãO�!ʎ(�ho>�3�"��D{��<s���76��4��Zψ�?#��=a�M���q����Sוׂy;�^Lj��K<�-���Ά��ys���i��ڈ��j"ẫ��t�dg�MN��G�N�#P8*��Б�*m"�P� ��(,KU�[j��դ.7R��0���iT�_]���Hߎ�������/��k�eӻJ��<��C��j���lA��=x����<z�km�<��63C��������y�m�12,�D&�e�VX�C��Vl�@�6�A�ޟ�9ʌoZ�d��u�	�x;��F���d��&y[�HRfxq�UMJ-1�w~�$��ٔu���{o��F���ѢN�u�Cmq�)T����� uf�U����	�L]�&��m����fh��I�z���0�{���9x��m�����J\hvo]��o���G�u#[w���<4?I�lЄ���
붟9�&>�4��孄�TB�zasM����Q�I�a��d��T���6���+o�����o�=|���������9���͡�E���$�k1�vD�Y*-�`�w������ֳϤ�3;�Lbe3y�6 ]w ��p�c`�_�M�=�!�bq0��	�}�s�6G~-t�t��B�=���DGxh���i��Wf�[0įu�� ��Mƹ�cKO!�d���uY�/C����v�
2����k-p�]U��o��ߙR�0�B���D�5���W�+�����遧h�Y N����>�N�m�m�lc�8i�Q�ݘ�P�--�:�5�c[�w���>w�    ��^��b�����3�ʸ��ZV�I )Mc&������~X� ��_�_��2�Z��J���|�͜~���D�9P�ϔ��y^`mePC��|A�B8d;pj�ASc��oY#��Q�"ܨ�v��F����p2V���B�.���=6��vI7���+ZùӿS��'����ÚA�������x�V�|��n��=Ũ�{��Ģ���+B�-"�4���k���]FQ�>�N���')����*��충�Q�-/<�v��1&VRpJ��+(:��0N�XX��_��"-<~��Y� 5pC���x������-�S�ܔ�~�.�l˥)X� ])F�.�����N}�Q��&4������T#�Ep�A.������<E� w�G.r"FX�
�&YP�<I��p����~�_;I�FY3��ƚ>&B�x���z�^bw�ƕ�,���N�=�Jg&h!0��x�}��Dim�t`Y��^I���n�pYK_6��@\�&0�#�2}?}~ef�fc]9�g7���v�s�ɞ��|g5
L��x)��D,��e`b�ۻە��_���:�C�8��vm�-V:4���C˥��Yu�(=�|o,׽����%ȵj$�`���l@�<UB �ߟ�1�H =.�c�ռ��2�:
܋��(E1m�+^W�Ci@����8<��6ऒ�����d��H�f�Ɔ�8cC����,�����3���"�*$�W����q�[u{X�>��x�;��Z����VPC��ը,�@�&�c�7���9,��/x[[.o7tJ�t��8sG�*<9�G󴳢�������Z0I��G�?���K|�h���M`�pٝW)Z��]�G��7HӀ⢠_�/�Bv�
�����u|ݍ�dVh�lD��#C��L�Bאu���s򫽨ua� %��2��CY�W����D~����j�Z��o����n�`Gf|�8�X<Z�t`T���Deϖ�j�\G���+#��x3�nB����L� V5l�-���Cc+����4���� �!x�,uf!N��d�)�r�@i8�G,���� ���=��_1�������N0�_W����-�:ЮyN�h*�h{���v�a/I}gp�&�c�Ծ�,��k�W�UEn�N�n(=�~nҝ3�A��P���o��0(����RH7����{0�1={�8��-%��*�_㏧[��'����OU%�n߀#ln�o/��H�a&���2�Q+�
~5-�ʜ�D�lkT���N^��^� �u WC��?���ol���f��&A�,���xkc�J:��툂���BƹLa�L���ԪznS�	:={	y��@Gi;K�N_�r;s[�)���(�n *���m�<O�l����<s���:�C2��m�;�Ngk�ʹ�#�L�R0���
�����f���� �u�^�-�2
o~3�Y����'�?Ts������u��R�9~y�^�.���4���;�E�O�7~|��_�\�q*�6%{2��֠�펱𧁝[����꣰ݾ��|�@y����K_:T��1h������f������ͼ�Rp�_<	�<��<�x����@-6</T�dPC�^������v�6ps�W_�`+�f�O�Ĳ�~ksw?w	���"���Vx<_O�w�쎚��&X�»��M�o@�������sW�Au?�ya �m,w��x���~��晑&з�%�I!eJ��D}�}.of!��e�ыu�tn���7.�q}����R��M��Χ�f��L�.XX�M�KL|�$�&2LX�ˏ��W�`�}�f����sb	,�~ �2��B�H�촸�R�V$�s��޺v�萑�����dȿH��C����KeC�0���e���c���膴!��_�Uۋ��H�[��5�HPȡT��2����[�R͑����T���M�9ZYK�'9̠�o�R�҉Y-d��<dS�{�A���P�v�Us�<XZ�P)Tȩd0C��R�k���nd��Y�;7�T
��C��Nz�=܎�v��6vnA�-�q�Ae�����UfABNA�e檙ۡ�Z�p:��ԯ�&\l�Z��͌4a�VW�sGv>롖�C;qba>�����{�O�����5�z�;���Bځާs ^����[�)>�m�Յ�sk���
������R&�q�H��P"W[��h9փM��B��:X��.��q�{��9�S��B��=��={�y�����5�72���nC5���� N׵O�?Q��r<��_S���\���3ZE��I����ۭ��׿&��?�ʬx#�태�ȷ>�s���9^�ao(�~����7U���g9�\g���c8���B������Gڽ	�h��� =H�=w3�Cy'0O�JcIo;�[�����D[�i����f��E
1��it<G��UJK0/�+\�S�G�epKFJ7����M\F^~I%D}����퉘���%H��X\��E�`Q������D,R����XB#a����3�����n5"��V�w֐d�i������v̆=*�ыo�L���]�)(OX��I�P��A�B?�y�|��S7PxM	n���~���_��m_"S0�jȅO;�C�=a��V��<hQ���7���챾n�:�$g�lۖ����gwNa򧬰�Ϟ�"+l�s���y@iGah��ᚹ3�rĩ�N7�ِ̈	�ޫ�xܜ���ܖ:� ��$'��u0E��ِ̈	��qxP_gBO��)�P�O��q#9p����r8E�2+4�m؞+jV�� ;;���r���W��N�+Ll���'�F���[�� �)>�iA\)K��&̂�9�A+b�3���e��P���d������ �=@ˋ�
���+����` �?twnƖ�~���1���	���剟���^(�^X�!Nك�`�k�wrw~����zz�pe)��Y��_�6|#�F�=���E�R5�R� t~��Af�6��R�f��U4�n�����|�D�i߂������+�G.� P�z�:K�8�'��STH�3�"� ������ҭ6��������:֖�p�ow�}l~�Ԛ���Pc�g������`�w�e�p��i@�������,M�C��o�N5k�*�0'��gV^j��N:���n-�l=h�����F!������k^�����q�=ܱ�j��&6`�(���.zq5�}��҆��E��2SfI�������j�@ʆ��������;�6�d�?w�jB�u�\M^�Ѓ���=fQ��:�����������Q�n�2��l�퇎�TT|��+k�}���y[�;]!U݃����\�cpG��Ik�'�2f!6�تtcaB�Ã���ҿ����$�&�Z��t�N��:�`������ޓ�>�՛U��Ӟ35*�wg����td��犥3��K��\q��D�*9�E/�cᶑ�=�C��	d���6�yjH�v��4^����T�B��f^8�!���Qx��]fBDn6�0�F]��o$�i��� A �ĳ���
�Ȇ7�H���o,mg�=y��p��\'^
X�x��w�ְ�H��� e-#�5(B�_j��$�Woc�?�&Ѓ��e�@� ��4�w)y�)���W��y{�y5h��|���-����߱5h
6�u�6��Q�a;[�6��6�L}���55 ����ցG+��]
����0g����#�C�)nq���B���ɘ�T/�P'���.2^�Ox�W�#�h��u{�Y���/?ݥ���g�ܯ)��/���Ȝ\f�!p�YZ���r(~_~�)VPDq \y����	����>�{�Z��P3���}�3x@[jl�gz����`p��suq:�Κ���&X:��US��ȅ뎊�Dn@�j�����Az�>ᵥp����0��n�6����2Vy>�:�i�!v�q�V�@�d�y�Z_��'d�2    �13cV�H���q���4e{HOz����i���{�D�v���@.�aк�R�V��-)N0C��dP�߃�T;�ba��IU!�z��w
谦�]󉹪A���CGͭi)1�b��I�0z�U�6m��\h�0�ALF�s�C�n����V<�L�ªF儆�=H�}��	)�P�Ǌ���O�,�j-JǝTmB%�!:���mф�8�S�Go�?�v¼ ��
��޸�J���Z��eTIvk��ع�]��9܃���q�u�HM5�G������H���e��)oI��ηeC"z+X�`n�ǆ�PT��[� Q	�a��q����+���ifQ#��Z��ά�\��(a�Z\�4�z���ɤ���	�%�Z��P��x$���hƠ��#�|�?����S�G���f:�``;*-�~����~礨l�r��=�XJ�2��5�S�3���`e�7��\�3����w�O�G{���⁀=P��չf$�����ue�ؐ�Z)&��4�`_9H����)W��o{)�� _� �G���]�X�+T_�7wG9?7M���I؍�5�{p���E�4D��I����",C8R>�`6���<pJ�iJ�E4.GOR��:qߔ���X���N����G9�BҀ�rj*�^ЪpB�q^/"D��*ذ���>u���/�>Ԭ�vg��-��SB�e�Ô���oň���D�㢄h�K�� S� TX!4r9�>�9);��&ذCW-�0�����ʽ���<�8�6���N�z��ܱ�;.:�|�r�@ї� Kn~�L,�D
�XEd\����r�����"�_��r=;'R��`��YS��y ���-����JLY���p��^����p�W"k*D��*�M��F����Vͺ#?�nI��5y#�Rw���Vv���U�[0i���[�_x%�7�Ys�gF@ZB�*��t�W�kk�Y01���Մ�NHY�3-�[�劌������L�ǟ�����Ѻ��sL����t����M#C�a�d��wNy�;�&{��?���v{܈%�Hd�[��rЙ�R:Vi������K��ϬhC&������ 4���N7�?U$�9iwsyR�"�
Zҫhџj�j�vU�j7��n��?w����(f`�5�(a]��h����ڤ"A��sw~lk�� �p4Y�3��;�Q#J�gF��v���+��f6��M¯��_�� Z�XS?����x���O���p��q���k��6ZH(efe�5�2{5���Mt��Q�"�bE�������_�[)�eH=n�q����;\�)�Nء�z�׳�@Y�,�x����\���#�9�^��՚� 6T��fH%5��mj�ep�G�E��[@�>�}��lX��j�������y�,��������c͉��o����������,�m ܞ��j=[��&`���s��3ԃwX(�@7������	F��Xu�@�e |D��c�;�ߎ�$ծ���F����̊�Ȇ�X�C�S����P��FRj����wGĔC�y��P��0�������<�##M�j�wZ�?���\b	e̀)�	�X������6t�{U7��N)� �7�3т�� �|����H'\;n����O��b�Ҁ�[��Zq��6b��%�͡YV8�F�h΋sg���'x`-��_w�8]�>�� ��)�g
�~��hƬ�%� #�T��ģ}��{�*�g�nu�����}��^�<ַ��A��#�s���r��Ṵ{a�L����ves�hn��>�V�x��ځ���XSf��
N�c�	�'l��6��m�D���`g-��.���NZe�;�=����[�7$�H�VqB$����	/m�]��`�m��0����|x�����1�(%B�Y�f�cm0=����7c�Kc	�� 5��+����=�ц콞y��b�-����5�N\_��m�D&0�d���*�����|�[&Hd0�^݅��
/���*bh��Lp�S��ן���=T�%�Yb��+�P�G���3c��M�i�>���L�J�z5�E��ǎ�z�W%�_�(������v:��}lk�a�/om���8`QN�w8����d�)e�����V̈���E8��7h��D��G-� ���yhNS$�gh�����݈2�DrB�9�pZ��(��ߓ��2m�g����Exj~���&���x�AȯX˘�#�R|kU�]WH�;l۪͂z��)���>��C�\k>�-���Q�ې����F�����\�M}�O8ж��/����q��Z5�s�1^�o^c?��k���w�z$��������
B����?GT[]���qf��x+�PE�@ :m5��N*��A)�ݹ�����T$�C`m�=��8o`K�#���/���5^_���O;������zg�R@����v�Bi������8$ò�w A��a?��a%r�$�k�.@�v�����6��&|�D0��vp����ь�xnH���|�>V�எ3E��I�Zu���/�)����� �+�Ϫ�3�|��V���"4~O�F�M���p�����g�`0\�FN�"�>�qx����p�ȁ]~|���<��x���ȕG�?�J|^Mak���	���aY��pBq��"0Tg_7��2�`^g�uQ�6u�R�=B)t`�bh�r|��e��N�r�^/�]�����l�W�E�۳�����Ǵ�΋� �zMڤixL�m�a��<�0�^\+E{�D�WZm��� .���K���D�ʾi���"�Mp��gY�>W|㓆U�J͞Ifg��ZOg�JP�l�|����"~';�[�n�{;�[8Z0q�
�E31ɄKi���� ����X��WIB7E��
> �Ȁ� �mZk��}e|s�'�2K4��.'[e�-��kR�* ([	-����e/`�A�4�
3�m�� ���x�~��cC����H����~��G
r�3�V���f�ҚI3��s2�J����^�MͨteC��d{�3��XB��g�	�*�Mv7=Et�{P
+����	[(`��-ܷ�� ��ƛ,������q�!Ό[	;�3���Ejz�|��TS_Sٱ������Vʴw}P�\���0����)�
J3 ��8�%�M���m�e�P�e˷��~��4�g���i�72���/�_����l����;kY�v� �vC��ڤv����ܻ�e��=X�Wyv�K� .��$g-�/��%/Dw��e#� ��FТ�� j�&�3�`��|BN����
VP+v[鬀�}�A!�P��[�/��*S1 �L��o�pv��Tw�R+HU���o�5��w�Ԅ�çy�o7l0�ԌT��
:ܮߎ�IDJ�����A�d�B��|�ف���/
4B��ҭ;��wW~�u�C��3kL��`���%TU��/��h�0�WB4p>��_�f�G��
�0��Y(�6���f?@lv8h��J���������-�Ǯߊ�7��Q@Nj4�o����q�mJ����4��3��3Oʘ4����Ms�L(ʐ4�Jjg��4"ĵ'}��Px��yz���^JjA"~S��)mh6O�Utr��j=���)1���y��8jn�z��+�IF�ܼ��cv�� 7�z������ɝ������[ V�"�� b����3I�����Ss9�z��l�󋂹lf�zi3�����C`�]�6�f�����	ZX���2Apv&��nRw2���,.�q�h���Z`�e�� ���6s��S�mˍ�H���?E?AI��K����-���V�~��+�
'�5;�;�	��B!+���������e߲��MH��ŭ/� j� A���{�VϏ�X�rŹ�b&�f���������ӵV�`�~=�q4s�h���]c1��ʕ��q7�p;�`�d�9����B?��o/{��
|�G�Zs�a���    fA����n�n���ϷGNX�� Iq���J?��g���{��7[����E'����q���`ƐZ�\��mM|�g��&S�(E}}g�rIk�κ��#:,�+�'&��&H��� [�Ecַ����0�r�HB���s��	jg0�A����?`TR ��0)A'�	*g��ն	���LFNZ�oB@�y���9H��\��D����Ӈ��dÿY�h5�S�X��<����γ�/�Ex��_��iQ֦�U�iA�Y��w*S�?���2�S;\k+�����_�Q@I�zT�w��}�1Ϳ�1��gyݽ��*�&��u�<b���^�и��@����f�l�"3�^z]���+�׭�Шf����S�i�P�n+k=̱���J�l��/�Ae��b,A�%8c;��9�Yǧ��ɂ#PC4�'蘅b�������m,n?�ۧvQ #�����B�	J��^v�V�s!+�ͬn%8C�u�/��m�GE.��џ�k��{�{ȷĻDKϳG�߃���j���$��EưL��u|�ρ�+z���0kס�k��Yy��c4�Y9Ţ�q�U�p�6�զO�#=�QQ�*�@�]�����EO�1l�`���?S�������Hn���9�F��'�J���O楻wS�(���RI��E�0�C��)�Xi��?�_��.��ۮ�'���'��Y�XD��f����A#�����59����<׷�[	4�L�CT��!XVb�xo2�6Pۊ<�x���?P4�_F�:�v���>���`V���j
�W�=���B�	4ʒ�`X�0z�d���8;��ځ]�Zaz,k�Yy��h[C�Rd���{�.�� T��1h���6��X���W�0%xֶ#�4օN�y�i��dH�Ύ��9$V֠3Ⱦ�UĄ�.|Dfmܫ=IydWa@�$j3�`0��װbeEכ���x�`i���]��rVB�_y�,re5��M�P��Vlx��M����6j*�2���#h@h��Z�s�1�٫R��o��bev���D'9C 0|(�YD)m7�أ�)>���8��$I����}T���T�鄉*���ݡ��xD�Mm���D>��s���$8��a���,,�:]�}ӳF�k�V��U��sh@���{�f��c�s>CD�p/5Y����֦��̱
M76�F����g`*o�,��bY��g��&g�H�6�ư8_q�� �c���Sľ�;k\���vͲnD��	�t�"�d-�.�t��fg��kv����G⌔�13#�t绚?�����>��q�]P�<+v����y+O�m�UA�NЪ˩�
E�c=2�|ko��
]+��N��R��L(�n0F�Q'"����*pEx#�Ԏ�3A�.X䙽D~�ԼV)�gb�� MZ����o`��8�4�H��#�� ��7)P��Ӥ�FO\�=�2F^a�J��܏\rx�z�w���,��)������KL���G,FbicXyԢ@�:A��n��g����i~��ĭg���m�@���v��N\��m�������y���!R�xe�6,�D~��}�d���M�mQ{���v������U����2���	y`�7k]�z�����@6BC����
�6z4��A!�ֳ��3.�񲞥�[�DAYBm���P��h87A8�f��k�`�*<Oݿ���d0�+�m��f�g�V��E��`ݵ7r�HX�d���uxH��ѩ��L�X�|>�ժ$�@�U{�!<�D/�.�va:�+�1����*(6I�VB@�vWKG^�@=O��Ɇ��ҹ������6�A�>�ޡ�	=�W�.��c�Qo���æ8��
�@����fh	=Ҡ�e��Fd[�u7��h�Pm�|��}��X~���>�c�#
n���"�!M�`o��&�!O��G����6��AmҢa���	�вQU�:�'~Q�:ƚ�`H���k
�+/*�G#��1Ba$(#ǁK��`����5%������<�Ӣ���dh�����j�(����;�Iy�:=bo��8�Q#R�:�/��L�B�/�~�vʌ�W�F��P� ެ�@Az�M��t�����_%�\ٕ�j�h@K\�W�3~_H��$g������Ȼ�>�'��$X�;�*�	2~����w��!���rP/�D�Gu� vԥMP�n,�q��������wAbJQ����_]�:���78%�̰�@����|k�"0(�����7�%����Nι����k�"P���F�)��4��+W��!3����t�TY;"�vl�D.�O��wGn灦F���OH����j�yQTs�K$!G2���F�[i�V�>�h�����Wc� :ʓ��J�"��*�ɐU`Z�sy���w�9�`��S^lnZ���H`�Z̀�����D������u��I�:ʄ/���/H`x�0V��������	w�,ь�~�C]��i*�"O�!�F$��� Am/,c�b��K*A�ӢH!Z~�.��T����{^"��>�%p>�7Up��a�9�6�L,��U�	R��O����"~kev#V�IW)4{�Z^�+ϩ�Nݏ���9t�Y�"��.e�.~��My�R,q0cۍ�r|�z5 jޙA	�Օc�Ô�l����,�����i���$�#R���2�0���01{蓖[�#k=n
��S�ȵ�B�f���t�
\&��|+��j4���B��^�Xn����7P���eW�"��+m���@��a	]�?�-���+3WI�A�v�zH�ʂ������bVP�Q�أ�j�+�p������l�A-U���z���lq���>�D`���-����g3�R��@�[�b�ر_��>�à�U�P��y���H���g~Z�x~��*P���'�T�3l��`î�ܷ��zY5�c�(�%��6p lpJ"�L(LPTOP�{��MD�g������tU}JMR`	��Gm1�8� +��u�Oǿ�k�Zj��
 q�p,��q��B"�!�n9��dy��F[�C&�b�I�24��9���zV�tn3Km� ��v)x2�1+�!ǚ��J�u��.զg9>k)f�lu7x��"�Qe�W׻H�fe��ݣۚc�Y���۹,y�I|ę��i_TpE���|��4*w�Ǚ/���~�b%X�?*j�jH>ݫ!���)����7jS�|bk.�*G|�;Gs.�..����k����3�Vk��WfR·_�.�K���gr�1��w�V��V�3��&_E����E���D�	4�u�&�Z�qM4C���S�m�N�H=D�!��zj1�fH�������Go��׹}�Y�Z���)�IG��(����s�Ŀ��'@#U��{�Q����2�9^��L�u�3$������YbYs�-��ؽ�l�8��Q������WKY?e���0*�
$.���~#N:�ذ�$���7�Wg0hW�J9��@}�ɠ� @f݅��<u����I�LS侓F�)t�� F�km���4�'p��.ʬ�9\����$O� M7%�o�!��!q��/4�oqR�&X��{4x�_U�$صތ����;���Ac!��,[�r;2i��7���i�e�[�s�7���L��C7Hn�?��ϟ�%
�ڠt�E�V�V��Q7rYfL��{?<���)C0�X��6��x]�жeD��p��|�E��jAQA����|WR�v�5s�+��<S�0V?�n>3���>����5���V��q�Dʲۤg%������/OrxB�;BB���
ҹ��fF��l?n_,m7�@�ȗX-�)�����rX���[���Xa���`���k�(�
v�L\�$�P���S|q�hg�u@>	�xv�R�4[���Gۅ�D�+�&>��;� ,�;]g��kի"�����K��z�&��,��d�+�X�[P�ړh�]����d���h[�4s����v�����v�t�{�D�sTw�����	,#���r6%\Ŕ ѝU��^s�K�<tL�`GF��K�A΄���疵dA��#$��� C�2w�$��ʰ_�    �ṇ�a�� G,���Ȉ�P�?w��)ީb+Ǡ�ZUצA�P�T�8g��G3���v0�(�}DQR�3���+#c�����
`-��0�Q�競{���N(�C���8�ɹc���|_�K��e���Ԑq� 4}�?�sH���0e�-�KAP��5�aN�L�(��d�S!��U��s�=�z���3,������^�]�*e
����l� �4"�*]�t9RYU��6�r�м]���M�8՚m�s�Xiq=�U:�K�����=V�6p�K��3T�z��y�IT��#�ۗ�9ذj�E�7��gH�=z&�,N�6����X=�����q�)����\
q��AeN��B�x�y��P܎蓙��Fx�-�9bO��G|x���`�}����,���\kcG�6�X�-�y���L��Ď]C	s�=�[,�;��Z���Y�ϰy��5��3��� =�U�PE�^A��(9?T��vҎ/l*uw������W>��8���2u���AG�ʙSFB.�}5a�l(�C���ޓ�(YԨ�8V������܍��aZj�xb��sp�`�<!��e��f�cͽ.s�f�Y �?_˖����~��T~�f�1�c!Pg`����%�h�CS.�0���o�S=�4��HB���\����ĳKv�s����R��"��kOh�%��
�aq��#B?��YkPAK�j�]6?���g��3q=W�~�m�Q]-þ����sQ	5�Vk��ek���mH��Ja3P_�3�[6�h�g�����<�da�!��B{ֆB�tcEgwfZB*�b���f�C�;�j�&sEVY�n��������d��ѶӤ����s�+��>_al��*�F(�exW����r�������������%/a�h�)���R^%@^�F~����1n�U趓y�L3ߩ.[0�tj������Ҫ���%Ԑ���~��ys�u�D3]X�ܟO�/�UY��1�F�/�^�l]��I�8@p����K�v����m��RS7q�z�{9�낌=�t\܈UR%%<��*��m\�3N�.�r�0o��.���zV+��
���m&�̃簭o��6C�_S)�臗����"(#a�3:e�d������9Yp[����kʏ��׽�U�'�h�y�MCʱձ瑂}m��h�����#8`��"���.X��qؾ����|c=��.���+8�o�I%���h��|�G0:�?H����-�|�0o�5J�!̓Aq��!����i�ܙ��P}˳H~��N4��#I��W���ڜǁO���s���Ml����X��)0[]�� �Y>ڠ]�^x;=��g�'J_��W�
/[~�%��(G��m��2t��8�s8�q�/�����VƏh/����wLύsx�niASy���~z�5�"W�zo)F]�|ۆ4,�C�	큿6�#���?w��N���N[#�b8�p�����3-dx�7����R�N���t�X9�פ��d�K
e��v-��.>d�������*������@�P�!xD-�<ɢ�r��K�����h?���*�
$n�l�f,���D�f�{0>�.���Nf/�Y���������c�pl���<|�i� �C��oO�!)�y<�6�+)�	�_m��'�hO0�҂7LI ���*�4;������N��\��6q��'�q<�T_�hה]��g�6���Y kq}{;^�*��wmIbF����k�cm��>������.���#ԐH\��5�M��c���h6�(D����%Ai�ow+
z��W�uQ����ṋ�-��c���`�|���`��/�i�k󬋚ovPQ��2��A覽���X��cXܺp#��9*��b�aCƽr��q���T=A���"��!� ˡy��<���H�(��j�VI����V��F�98r��ǚy�i#7S�����P���!MtVǶގ���<��'GÛOg=I�qw�ɱJ�Z���o�9�k�Bv����v��~���>�r�"sb��6���B�y�������z���S��N�b�T��VjہJ|e�AiS��\�ޕ�!V�A蠸�8��k�-E�ݪ����rc-ڻv���}ذ]u]訬���-�=O�>_����V[ޖ``�2��n���Y`���cm鿷8h�v,�К?k�t-��i"��hs�C`(쉲R?�Ip�������53�.���tNc,�D��o؄O�X�Q���C8{B+�.�o��u[�T`��{eK8���OqB��`m��h"�3�r(��@jm�5�-,(r�o��Q�(=^��'����6vΑ(l���+zƞ/���IM���p-32쒱=rB*08����$��M��{��	=�ôJB?���$g���O��Wo�ᶁ��oZ>^߷��#s ������ݼ\.������e��0lg�z�z��o
(��%� ݪ��c�o�E�6��L���8�ϖ���@?|�?����n����<��\�ǥZ�C��I�厃sr�!�������^��؞������f(��U�3F9��Co����#�"Y�-]��jzK�H�n�*��������l�g�=�ܶ�x%ϴ�.7r�!C���n�g��7X��YN��Z<k6��[#�J�:�����#'��`ŭl���RZ_Js���`t�hJ��o\El/b���Cwm���ܘ�����꠲ތS�_�_��C���A#6@�\�鸀��:��D������O$n#��*_��p�xf�Ӷ
%��ɫ���Aך<N�N��:� ��0�ć��ഏ~3��S��^9��x��c_��H�7��ڑ���ͬ��M�aٓ/P�,�w�9X��b���l�`��a��c
V�5.�a�qJ�y��q/̙�.בe����͍ouIA�;7���o)�۹����еK<�8�t%�3���q�Y�9��km	KH`�FL�a����`�-��������tg���L�&{���w���0���z|��+��Uj�K"�4��ZQw�ߌ�����à>gn�����lM�p�w|��$|��E�M�4����3���l��y�����h�ӽ��y��{<�3{ �M������f���h����K��r�W�V��E�ޛ���`}��m�*xq�ո�D�!MdyVa�JO�f�&>:&O���]yi�������s$����+��s�����g�6��3
�P�/?��^N����Ο�磜�8HA(~��h�]ç��>�#ԉ)�0mF��9	����[���i�aQ��;�N�މʮ�r���Q���׬�g(>��ttxYj4�,�~�=e��]�w$rE*2�&b�9�?���n�;�'�)����&Ώ�x�@ŝ�/;Л���N�����F#��r���Lm �������8ܠ��$���>>Y�o�е*.$��}�\���9�J��?�p%��p�#%�B����4�&f�\/
CӻG�e9:���eez�}�������q�"U��z��S���� #W�
�:�Ҿ;�%�w��Ի.�g���|N������� *����w#a$���z�*}��Ԓ�{��BeĈT� �ؼ���thz:��L���u>dV �� +6��,V�<#`�����+�~���T8�W}oJc1�̇di��H�d1v۲�è�����p{Aێ�-QJ�G���`��!�n�fJ�'�������Z���98`�V`�D̦+�k"�_@�+|�d'S^R�Ѐ��~-��M�����nO�z�������o�
ë�k�r���/�9�<R��Y��??ڽ��'��uĤ�Ʊ�@<2���ա�xu��R�T`�U�-������C�-07�ԋӦ�f-��jՋ�D8ا���;�-�m�C��-6H�B����	�?Ra��5��g��kA�S�{7�l.�d����	Nt�Yľ����b�0�xO�R�?�c�N�8 �|^l��v9�o���FYBѽR,Ҙ3�ׇ��՟[��1�
�%܃a����\�d�F��c4ʲ�e��Q�߆�x�!�_I�q]xN��)    �!�[�Y�q5�!�nѰ~��ϰ���X����{]�H���絝M�I�CN��\B���V1:�=�s5�!�Z�R���4qY�|�-�5�,���ЏH���6�o�H�x����$�CڌB�A=�������d��������v�m�ǟ���؞َX~�v�Ⱦ��9�^�n���_�f��>�����{�0��1�jN����f��`)�D'�n�,����S9�_�̜��3�� �VQ3�Sp7����.Z�����ذ�<����C���`�ϼ�Mok��I��Uƍh6BK����=ő�*��3H�᫏EW5Z����[�ս�unщ�C�,h�;͏�JP|~�X�'Y�(���ө���qP�zfu�CB�U��5l++<�V��9�=+b�%(�µǶ�J	�&
6��ʌzr!s5��G�[��s�`�^��K�Ȣ$ʱ�Kn�x��3�0�����?�,�\���;�i���]s����wy@�H��b/���d��`i�	����H����vTGzDB%�S��ڃ��O';8��R62��;��w�
5k\)�.�������-�l
f"=����})�N��^�X�h6�X+Y���C�,خ�is]1���Y�� �ԯ�y��/�l��Q-�����֘W�����9�1���6j�ـ��x��uٵ~#�����JOm�J�Kh@��5����`?O,_�_��H_�νXIr������WoHv�UvJ��g�	q�_	��]�^Σ犯{<O3��ǉ��Vj�?pBG�b׺)iCB}p;}o&큀[<�_��pgR�@�Ԓp��g`�z`�f�+��R�,���>�b���J�x�Mp�.�\� �DF��m@x9ˢw�s��w�4zeJ����hֱ�v%�o�3s�A[��n*#G��6��,nFG�ў�]G�U2�|�Bp�@����J`x�W��P10}�'.~����[S���;��!�D�H}�^�`�e�`!���zN����h����o'�_P*c$T��,��0���CG�*������x��7��y�$1����Z�*9Q�Q���E�E�j�<��B2MZ�$� ���?���]�r��[�n�[�%�(��쳻}��A���CG-�
J��7zy�p���ө���';��-ZK�!���ZM�B@�5�y�Y�����-ݛǟ�N�`w�~���nKzb���=k�N���������;�o��"�(K ���Ȱ(Wr���D�]+�Vk9�Ps��~����x�Uˑx�m�]���gY$e�c�^K,�?j�9���&
xD�����`��b���S���p����w��7}C��As��FԢn1^��dE�g��v>��S�Gl��
ؐ�(O���e`�4:���ZqdY�����[��α5�z�u��9j''�V{��i�4��z���=q���\X���W>qvM�c��������>��Լ��[�����Ag*Ky�GQw�Α:���4�u�t]_:�W�N:�wq�iSV�Y�W;�����|f����H��FF��}4�(�f;�h��O������m����PC�m�`RCM�l�m�,&���EC�?��������ѫ_T����'.�p���]K�T���-�	�'������к��}�yء���_�)��<�S|W��,X"�q�z8�-֕��:����m�|ʼ���?6̭��N&:���I��Ȭ	�Y��U�Ԑ
\5����1'��v��M�E}l
�\�_O[U	>��.�5�_�`QA1�Fw8�T��hh�5nܟ������w�9�������
��e���֫o{�R��G��I�i����帞-Z�����_LV&�?�r*�� ��$��y�v��� ��anX�5xY�U����B���� ֠�V^�j��:GY�l��ԛu�ΡD��گ=˼�C��-γ5�BΧP�V�F��LAz�8r��ˠ=�^˙#�!�½�_��%��!:��P'�X1��Cɉ<�Q�K�^=�*+���!pCR֡:U�������Y5�eo=�,�K
c0����˩Z��%������e�����'
��~k��@�T��*D��YG�uW�_�Y��zГ#��"�͌�;oz�S�.�ީ�*�߫՟J���8�W���S�_Aw#/�1�^���V�Eo�4���[����T��G*��W|>ప�v޴�mfVa/��y�9���N�FE&-6���h�V-�6��z.��ݳ*С���Ǻ�����XD�������n�9��E���	����+��<�9��5�������ۙ�	n�xn�:]�ZV'�Q�h���O���'λ��ʱ�$��p�x��㈥2]�ÒeTC���r{�AR�VO�h+�����G�t����U�۹��?P�O�H�� ��bt��nF�I.���3����2[����le��$P'���d`;`@�c��U�䊨�I�v��I~{ЄN�
Ud9��2�w�j��f6�4�a�`�2*�5�kS�G�Vm��Y͆T͆V�����ZeT�����6�
^��1���uh��S��"B\$���c7�[ 	$n=��:f�����i�L���L��||�<>0CD�b�h�����V��_�'�?Xi�p�mAB��W�32�߂�t�1��[6�SJ�VO��p�-˸�t�8��~t�����_�S�-{=�-`@����}c(oC��y�<<}<긖C�ue��m���-p}�̈́�⯵����;�qNd����+�7#1� ���ـ�P���q�4E�w�/�D����>��N�H�!��kW��{�kЈ��I��wHp�C��YI�*#�����m��_	Z����m���Z����rƴ��*�_���[�ʐk������5�u|�����V
)mY�9�DCk�����+��r~��| ��ߙͷ��v����s�C����A�����.�$��d�k7u��>��7�j�h0�+��N�J\�)]`KѡJ.Ӣ�*�I�]�&�sϿ�������M�����:��K���sPB�$��L�����)x�F�q�k���Z�v�^�dP�g5j���ɚ��m��S�8a�,s�n�7���|���Ci�[_|s�������%���^@��>����[��������r�S�!�$�� ��J_�C�3� x���C��:�l����	��BɺS_lЭG���0��w[���m`�n����PF�4�B��6�vǤ"�ߡ�AM�\����`E�옙���Э��7� �<�C��k�`�t����@H|�T-!�':2�\C�`�s� �0E-n�,�P��Ov�r��S6	�C�E��-("C���53BW�mQ2�p�h�zק��·,Q�gߜA����u�XҘR��V��WO�5�����>�^��K���I⼖"�����#\!q����QT��)����9yH��lp����a5���A�������v�L�AUH�9�"�Ʒ����֍th��]���_�h-�_|~�����:8�;&^���¾s��-#k����6�N#��=�hl5+���
�7���q�2��߷��{|�Pآ+F�)����Y�gd ��{N�x5�蕨}j0����m)zW�+���>��z�)D_�v�%�RC�{��o5_��C�Y�l#���9�F����/O����L����Q���m�i���eY�����/��&��l��,���7��r�FL9�n������o�����y�jZ���-\Loj9K$!�QD���`�L� 4��o^"�*�3/��m%�x��Y�y�Âa,��%�%lQ����ݹ�*�
5��唓��:*�iu��r��J����/r̂-���~G�ٲ#�<���Bbz����n��M���h&�Gt�2[u�e�
�,�Z֍��h�ѥ#ܞ�XA8rk�5'1���@,��r����gf_-�w�%����}��&s�0A�<{��D�ΜO�L�7r0�A���}�27�� g4���p�ϋ�Y�ǋY�����#h�Y*j��}%    ̫+Z\.��tF�k�
�a�h�"]B_);pX)�.}��-�ٙ�9A��z��J��!���]�Q_�}yM�������i+[R`���w�-+n�eCn����1m+χ���W!+z<���j-�
Wt�\v��[��=<����mF�R��� )�b�`���7<1��W�I+ɵ����,t�/�?��B>�G�?�C��q=�B���Rf�>jBVSiI���R�������〭�v,����U�ɽa#^�yfr�u
#e������>��?|U��E���+BA�<Fc���m�q�Bf,]�3��.j2����~�7"-����Hc�4�<��*d!�P1�#��OO9 ����tV������ �o=����\�[�<C|Sz��o0�Е-��`��=�ރ�ѿq�	-�v�vV��\-��!h�B�A�suY%��tE�g˂&�I�X{�yn����$s�j,��3I��z�	����p����?;@��i��&��o����QQd4�b$Ʊ�LR' 4ˤ�xh�	�
���-��e ,�r�-$�@��=-� �ȍ7�}i
�"3���5M�vz2fgcά���w�f&�T��5B-��1��P٪1|��!|�Kg��m��x�5'd *nE�� 2��%J`� ��E"��w9�FNKjv����O�j�9�sZȓ>�"���J�����Ԑ��䦛=g��1��w��A2��^���N��U�ZxB[1ˉ��i{�`y���Z��L%�Q�E.�
L�s�+m[>��Cu�z�2�J�.�j�Q�C%DT��X~�h�(�Gñ$Ü]������_�+����(����p��B��~F�T��0~��*�����Br�}�e�0j�QG��|�Ю����\(�(�@񀯛�ɁS�e�;U	��KK�c����7�(�������*ȕZ(��y8�U	���o�,M~����$��;�m�3�fq��������ν�?�<�X��MP�B��cOB�+��������^�߄�ۧm'�<F�,�. )qVǯo��5p�
��1k��Ș�\z��o8$V@�!��/�,��s��\=���
�SΑ��`���@ϱ�^v�1+��L�[�Jh�,������!�`�Ƞ@d�B��8���zY�樱�^�ƠM�Mj�V�#��Bw,p/G�F3��c0�����l����V\��N�&�r�e���y�p͎���e/G��+��e_-$���}���N7YI��kN����w�V<5�n���@K[���U��L�P��s�aS�~��ˊ��Jgv̉Y}�-7�RF�����;���|�v�;d�Z�9N��"�#O�`��f����Q-gH��}�^"+<���^�[�'�"M�T~pIG�w4 �?(�p�#xq7�z�^��%�ztt�?z��A�b$�H?�Z�7������W�T��C��O�`|B��!{��%�$��'��A:>�#�x�tvq!.�� +�]܃Z�3T���D��_�few�'��^+z�[p"X��;����O?�~�Yw��/2����>�^�s&%����͝$w_d�<g��Ǚ}ǻ^	�����U$3��s|�GU���H�r�2�#[��2t9}hSۢ���6�+zr��c�Y]`{>$.���s����N�t�i���OU�Lgo���z���t��En�t-�̀v]Hdh
����T6l�Zʍ�aCጮi��1�'�����X��@���	�;l6�a�a3��#��"���Y���<־Ϩ7݈� �fb���r`YN_�����j�$����w��+����V��(�X��A��Kޠl��@N9Ha�`�NAL�s�~6���	�q؃�4c7���K�z���c��Y�~�&�p'��÷��z�'5�<Q�D,��8�F}��o��r>xW'�������r����jdiei󀊥N����|!#ҋ���yOh��?s9�s��v�v=�K �������NⲠ1��]F)ֲ�( G�=3Lm&��MM�JU�C7�y�f��k|��5@�,�Lc��<h�>�
��#s���N�`ŮvK���,y�3y�4�au�VqGS`�kbK	���vU�/z˫�}���/��zlhvC���W����p�/̂%Dy�ʆ�14-8��q�5SS7�����z`CdN].�*��XS�E��[�w��pz`�5�ص�=�$@��W.���.��I�=p�߂2��8�B�BB-��s�p'ڋF��9� ������=q����N�����j֪@H`w�*9Y�n��xZ`S70�#˺���_z{�83$ʱ0�\��K<$�B�G�T�o��E���V�O�5$��˞P���/
�v�v�׷�V��8}����Ϳ9G,��XP�>�z[�h��L<��x{>��{� E��/� x
,k��:<�yL�xi\7t�:N~n
��v\���:�ɾ3���aP!l��������?v��MM�}ʚ���r�pSoNX�#�.b�{�������-w;6=�����l��P��#P��u�i$������F.�ފ�i'}R�g�j3Ԇw�Ӭ����|,Hj���lX����~��[;y�r�s��w��-O�~�n�}�Y@�@Õ�P3�j�șX����,���&H������Gx�7]K=#Uh�<Y�b2��NɈ���Q ��;������8`r�jM2��"�,RqKwⲜ)zq����=o�!����f������Ku͑�~/+���O
�Ƀ�<w�i�/D0��|��_��r�o�~�G��0��ɬ1�v'�2auc�l�PYw���T�Q;d&�?��N�>�@*Pq+��tb�A=ȴ�p���%Rذ�)�Q@�� G��W����_^ �17wW�J���>�ϠrF�@���k�6GZ��֬�3�G�sX�V��M�z�Zg�G3wj�s*ܯ�"�yJX�v]��,����T���S���i禺`�qSZwĚ{�� !g���%�S�`9lv�)��]|�#��QG��v�|>|}�|���բ�@�@� �" s&F+���M�8m&�
�aC݀5�LA�<HH������헃a���\�k���������9\�����w>����5p��\B��f��0HW�������������0�����ֲgHt����OG"���PN��"0�"EUy���i�k畧�۩�p5���8��?G�v�4�!>M��y���]��*Ҁ+5j���u�q��g�&��Q��Z�Q�U[@(Vr�t�� U���t6�aO��ҩ(��]� �5a�_��b`Y�F��4l,a��W�b�o���}mO�b$�C)�M�=����@��NM�cO��q�|���!X�:�=sTZ�L�b_�N�>��6�U���]����J�gV�x�%@��PՅ�rcA�1 *aku�.�V���a��g{��(�!ua��[>�Ù��'Y�*�I�|�C7��RF�����F3n`�(*G��k�#��B;Y^�J�Z������M��2����$ְ��>��S4[�[Q��3D�#:���HM57?ޯ/�����<Բ��.�:=_���Y����O�/6jJ������Ѵ�hLx �о�~��x�yn�޷^�\qYu�,�)���ΡI�����8���s�ء������<l}���}^�Nx�k���!@����{�����CI<�ld1�+K)��6�� �5-ǖ�c�a$�,.��2+Bm��5p��J�W�.�2h���s�_ԲT��3.�ϯ��icvK����;�J}���߂�KlRQ��s��Jx
-�W��{���A��ٶYE`?nO���n�2h�LQ��Q�y�\vP������o�{3�/�ЙĊ�J��Gŝdy>�#�E�5(���}�P0yхGy�J��XTak7_˰;HxG9 ���9�'M)�}H=�X@����|y��1gӚ��|~��"P�o�U
5��~=����]�B_�>�ٝ���n��c'R#���    )������雠�h����Ci��X¯��EI�C�Ƞ�kx���X:	�Zw�>D�$UXX]�U��?~����u|!5�	���W��g����?���;d�3�;aJd����:Hz�D�sM�Q��;�b�Tbrcs�ȱ%2�h��ˋ&�z������71_�G�?{N9�B���_�6���G{
m��ỜȰ�=��^D|՟�up��`b������1�ƅ-�X?\��#�j�tO9����#DƐD9��K�j��տ��z2�`�$���k�cÈ:�b�ݓ��d���;o<��1��ڙ>�Py��ި~b0��8�aD�W��6�;��Jd�ξ�7��C����I%�/Gݞ,�P�*p�,�J�1���6����t�:
�����[F�нMYd��5��>6~��1ﻡ]���1�Cx�<���P�f�/�Ǳ����(��p2[/��h-���c��[1C�̏�h����y����Br�������܎���ǀ@���3��d����N�F��g;�ͩ2&#�o�XJ��mB9�-P�9J�X�JH�^~�X�
M��5b��j�QNA.6!��|=�>��n��VU���w���'*��6�Owa=�9�"����xy��.91�m�B`����y{�	��ן�,Ix���X�&f�7��n�^��rNET?��n�ds%�Fʏ�M|�BNp+������$���9q�k�z��pE��ry����A^,`9��j�Cj���fA�kg˂A	t�/o����l$t�@Ϩ��y�w����ϱ6l�0E��6M�;����+�oV�;�l��@�� K���s��J��/lht�ShlASM�Hܽ���9i1>�IK,dE�L@YDn\*
�����CÁ=f�#�9��<����T���q{-�p�\�5��f��'ȕ�v4��tdOQ-��k#
�A�&�p(����
pP��$c>�¯!l[C�HNa�Eu�����f��������m�O�q
j���i=0@�a���Eh��r.�� 6��\jQZ�A<AW:�e�kS*]j�N�Vp.t��z|��j\@�6Ț>na0s�/Cs��٤�	4��8�T���S�,8�&�ϱR�>jwX���y�	,X@��k��7�_wШN�}�.K�E�& �k%�VPXI7�=�!�]�M�8��Ui���9H���~�[��r��=����S�ݡ�3��m����r,�D��{ݑ.#��N�V�hE-K翇�3d����]}�/���A��;X<�-�O\wԲqE���I��(R(z��I0���UY;ܽh8�I#�p,�ګ�)�L�z���2��*���a��ms�o[�U}rd�p+n%����Q��]��U5]lЈv;'�"||�.O�qH�P"p��0�	�*v��'h��O����:��u�>���ތ���U��hF�������vP�����α�����o�Q�ߦm&�;����,�G�`�3���s� ��p��� �n�*&��~��i���d�?^7/�l�f��m�pK�`j���43k�B|~~�?7�hV+;
8��ֹRݡ�'d��z��~>�x�^3�!���/�9�Q"5��_�q���B�i��t�6Vn��`ic^�Ex��.�k��'^A*+`tᚵ�ҏ�u�5�yR0a������XA��`�X�9�>�y0����tGˑř�Ǚ5s`x�ఉ�"VQDS�J��È2C��j��1��-;��{:=i������n��cH.SS���$����L�ц�j�[�E/������Y���b��&�؁	]��/\�cBd'�̡D�Z�y��!� TZ��k���>��K���	�8�)��?]���s��o�er�`<Ϫ�q�P"W������lg�2V\���G��xDW��e��� 
ώ�N4��q|��A4�5hTa�Zdx��A�+0�L�h�:��8b��_c�3�Z�~��O��$=�BǗ~�*������Q+s������J	d�t��
~��RpyF������u�O�X���/Nt�kvhu��Á'�n��.���e��t��ĮhG�8�bdǑ�:ar��#��HX���߶�.���:����n:hW�|��u|�?�?��i���ނ�x�+����q��a��=󳲦�B��C����c$���gl���h�2<<rp;����z^�V���l�ˋ�o[�;�S˩"ˁ�=Ɏ2���o��(XI�ʰЙ"�� c�Y�� ��#����d���>*"^�m����9{~p�F�y�W�< ď��Nm�&X��r?坆��U���k5>�No��s�}�Ǆ�#P�$���L6�]45�=��t�i�0
��i[�l:Xf!�l�y��(����Ʀ��	
(~[N0x�~D��77��d�NWӗ�I+؃l] W0��
vM!ǜ�����S����K e%�TD-K$G��mf��0؃L����%�ډp��Q&V������ۙ��И]f�?p_M��w��� ��_���0�xUWr�c����vb˂A	,g	������9~?Ă�dcIڧ�v�؝��A	��	(G��{�c�"��5�o�����ry�����xL��.�J`b!M�B>f�B��=���:ՠ��2*c2��sy}7A���92���,j�2�:�7s�g*�A%�ʬ�K��y��{p��
4���QϞ�&�u����S�Y�@�"����:T�+A^�">������`D��)������G/�����`��!�h0�s�:P	�h׺��=v�+���>��Ƀ�N6,
�����N[|)s�� ��[��42��4�I��$N�-Ⅻ�a�.;98`�Z��9Nu�a�1�[�9Sf���[̖��F��OL$
<F�|ܚr���A/X$b4�E���\N�;wV���FY��$Yw������0^��'@h�m]���y���F�X����%��-�$�0�t����Ƅ���w�D�R-�W� �9�k����ڵA	�z���{�i@��^i�;0�r�8�O���A4i������,��S���*��m�I���$
A��l��Y��v	}ɺ�x���߬���q\�l��'��쫽fq�'�����wPr~ޮ)�_��[@i����@a�f�3�D�=~�
��i�A3��?9�0�x]���7>���A"L���0#�ɴ_ϻ�G���s����(�Y��ᔩ]Od`;�J@
5O�hPM����AO��&�^H�g�	��黆+*+��B}�i�kOAެ����vp��>�|��V¢��Wҩ�L�JdP����:��:�u����j�E�ӡ�׏��g�Q��C�����:�8�t��S�橚�S�C�wȭo��1C�+8?����/.L��O�>� G�B��c�|���[Bg�L0�~�z!L���-�G�jOW�È�����(L��C���\v�96By���f�G�-\�ۖ����_s{k�[=�P��e��5�O���-���17R�%�r�B3�̄Sz[��{��ak��m1����ͷÏ�����fj2�!M`ѫ p�rQo[����#��	%��tq7!G�)"C�B	<�^��<_F���Q�=��fh�r>��UH�Q����J������-�����U���ᵶ��X�FW׻]�O��Q���dȖp�J��h�����#�2XN޼ ��;�Ϟ�	���0�	�kI|�Q\+Y���}`��%w�t�0�+���jys�v�7:�����f�׹7�44#��� 9���H9�`�^�\QF���n�eG����O�����%o�԰�+<�wkՆ8�0M5��3�6t}�?��E����&�E��5��wQP�ΐ�����U����
v1����W��}T߶|��6��T�n�Q����-8���`M\��}�Y�e�|zy�ZS�4*#G$��ş�̋u���w�8o�+�G��}�2�Z�k�����Gi�%��Q�2�n~v�e���i��̙��    �a�ơ�����N][/[�`����؉G�X��:K令r0�_�g�Z	�9�簰Ә�VmT�E�z�9�?{b0��z�>�{�j��@�R��8���Z��Pqv���}��Z�w��Ð���N�ںx�`	$������st|?[�J$*nAKk���C[Oh�^D�!�<~o�L�K�N���1uL�U��Bb㤻��F�,34A�kAԈVh�xmG�w�#H�ʝ{�<J��Mq�i�~�d��k�X(m]�0˱�q4����z@�$�NZ�|PMK��j�PE����r�F�塀���	mk��m�>xٹ=lB+ذ�����e�A*-PT津s��P�y�$�7<P�[p��L¤D���f��������Z��V�_�3��W�)����ÉN���/0��0�:�*�Z��/l|Slg���Ɖ��^:��|W#�-%�Xq�7��B�{�yp����kʊ�#���]k��x��1V)9������_hQk-��MPE���u�3@�;èr��;$`����*��*4 �T�M�n�}g����c��N-zhF���9NazJ&h�e��8�h��*�zC��� ��k�X��ߕ;́w��(ѵut����#��<���<�T���_#O;�-�#T��a1�\��s�H�aFp�"q�;h�I��{ 8&�{d�3,ҧJ��Ƞ��i�]&����䭰�U�j*ܽi2���I/������N�"�a@��ԫB=B�^��e�s|�[ز�s�:FNP'���5�%���h��6&�ƸԐ\�����v�
mb�`�y������rC��g�h!�=z"Q��H��y��3��cX3Rۙ�>9TC����`��w:��ۗ�E�o7s�g4�9�O��D���v����9pCc����p0�c�0��vp?2��"%k������|����܈�[ߍ�����gj��5��h��e���\�	Vl��N��z���^b�Ѐ;�%5��[p0��^݋��`AN�3�a�m�K��#רA�+|����>�C����S�z5�O�4 m��En���k50�/"k6-�h�$l�M��V���汢��:1Q�򃃜߿�9�A�#�I�`b7.��r|�3Ǖ�3�($`�g���ގϧ�ɬ��/(� Z^�������c7�R��#�Ç� q[6���ƹ=��������N����N�����uDg=Ծ���۵&���kP���V��x���Ȱ��E�x�;���P-n-�v��wN�E����>�nP {x���-˚.����;�wTz�PC�\�][��wr���i"\��Og�qc�\muS�K�k��Z˛��)䷾�.[	6l�<���_Yh[k�Z�#ذ+MXۮE��Cwl�p}0�H\w���	V�e�^�Dx�n�mH{�^������(�dV�V`%���a�C%Y���Z?3�����W�X����}ږ�&=��=�|v������A1D���±�k�Y��g�����y��A�#���q󺢀*2�+���#=Ԭ~�r��W�,Lɋy4���]��"2�ҝ�a�&u=䬆7�O��!ك�+���B�:2Z+p��F��k������a(<��?t6,cP Wt	����&�� ڞ����½lՔ��0
��v1����=��π&s�/J���bm�hӴ�:�`	�q�0��j�~|,,p�pqa���A��|gM�	�u=_Y�[9�Ⓝ���>\Y����ɧ����@ŭ�u�^V��1kdcc���,�h%�}��a@d�E���=���p���{	3���G��
|�W���sǀDU���Zɖ#YB����
P���ik�)����HeZh��C�꡷ohݨ�,k�͖���^��q
cXm�:7|+#c�Y���κ#�M��ZXo?@���V���+���z�_s�z� ��S��G��$�������3���o$�u^��t|��Ȅ|=^�'�}d�ӇD#�P��i�Wr(E`0×�_��ʾo���B�fx�-��oX�=P�R�L��LR����cӱU N�p�r�����c;Pb#��5o+9�p�;ť=CY�^��\S�\��%�H����y7Ck�K��(?Q���W�;�`��R�;k�A
e�'؈Y��~�g�h��E��ɇz���K�a	]�VqϦ��a=�=@2�x6U��*�Jl�n�� ��N2hǪy��W�7�-���:�s�8����r��U�3�3���_߯���E�%0����nf�eh8ތ>������1Hg6���[��-�G�D�z�����Cb�g[-�O�D7�X���;�~mj�\�w��J�"	\-xs#���q�q�y�"�e���M����2��ɐD�x��O��euR~�{�������������(���bs(���%��f��o|����r����G������<)�;w\��=�~ګ�+��FK�!�����F�ŧ<L��;�n�����'[�<�|()̒P����۞� ��.���sq!U/�.��ں�V��ʻA�i�T�:&��9KVޣzg�z�m�E�Ј�\t3�b��pT/g�QSN0����"��	�c����� #�/���~,?�PT���M�f
��:�٪{��k���o?v��u����=|�Z��z~�����������5�GE��h�u>ܮ�{;61���$�Y�͋W;��<j�X���r0
�&T}T�Ϗ�����&x���g���Cw���x'_q���.rl��^ =�km�1Tq�Z�2O�6;���Ɉ�d5�ֳ<2G��>�kC���G�!wMp*O�
]4�)e:]Ƿ0ۨC���8����t9�5��틯J$�ĭ8����=���:h"̄�L޾JI`x��m9��������l�8�e�т���������E��?�|k�I{�ɬ���8aM�r�2�~�#��*��73�z+.r,�/�.I�(?jWl�eKX�]l��)P��2�iŃ�\e�Ud!�[��^���pz�7��͐9����6�ڙg�\g��C�n�U)��nz��+{R%�����2&EIQb�i�[�s���@��ʇ��3?���Qy����Ӡ�t.���I>}�#�IȦ����O��S��̣d�
�Hc,$IV%���'s�ςB�V;���$�����
�7`�Ŧ�Kɹ堭���,��!��Y"k��4Ʋ���~��id!�������ؐ�ܕZ��,�&�t��<we9��3�8;}�i�2X���(�#����k�tͽ&�-\˰��!� �z���)>��>�s3�o8���^A3�VWk�k�RP�$_���{�:ꨰ�Ӭ�^���5�^a�W�{	O�����Є�L2��w�#�0���{�X7��U���'H$�#h�؄W	�|��el%Z��������dh`J0�Mݒ�����sTx��� v�G�\ń�7����l[i�63��-G��?I�s�����-e�;q~Ad<���U�U7P`�;>�0hy�쉘=��l3D�=|B*0n~��1G�£޻8�ho^c��eWM�j��EIb���{_��'x?�9F��D$��*���pIr=��Rx�qم'�����E�'3@-�=�:&#���Z����%dW��9�#�v�W@i@�-�����:�uzڻ�E��܄����؂&���8��M�?�瓴��Tc~VA�<���@�[Հ�P�ˇ��7~�jq8iI��o	n�ڷAm �k9�����b~�J���fbK��+�חV�0���{�x��k���{?r�X�0į�G���ф�#���mZ(��X&OFV��kА�\��C?x����A�nk=�.<Nǟ�Q���	jH�������f���h���q8<�.�|J9������<��S�s7���1N;��O�6B�\;4w#g6V��{#!ޤ=`�Y"Z���}o������V"�w�����=����]�_8���m{�4a�Z��� m���2��*��ল��,�J�_��q]5�-G������oO��r%    o<W��r�0��{n�a����N"zC�:	��]��𖴾��L��x,S��t���ǁ�Y����X�Z�ի_w�ح�E��X��T[3Y�����:��yk�lX�J�
�������ot�����Σ�,S��'#I)h=�*�b+C&|hG}�1f��~ݞ�)����W#��ӖRĉh���#K�ħ��`��_�>������Ct{�W4�T�F�"3��̑g7wS��M9^Y)D�I���ۃ'%��Z~�C�Y�9�$���C�I��C�e|��f	%���$�1��w�6a�%fĺ�a�;vs�
V�VօpCW5!���p�Zݏl���
�W�.�I�5!�p�*��%vC�q�}KU��LCkyWׅ�s{�DH�+>�G�1���{?�S#t�~:2��Si�Vp0AY�|��tX�f^\uZ��c�o6H-���ί�E�%H"Gz�JP~�ӄկ�9:ǚ��%yCE>������sDu��F�Ϲ0�A�N� �j�����!	��rS9)"CѶ��Q�
m�&{����E}-=�J���d����E�v�f�O!�<�~Y�rz�.�)	��#����\��qb�Ѧ��ϯ������tF�_�d�K��D�����!QVTk�i1�uJ���{���.)
�o��P�:���O�k6>��v!**
�F;�S�;�����V'z@J<�g�I먙�P���m��kr�AS׶��O݄6�r����6��IKz�>!��K�xA��A 0���������03�b5�
��=���!Z��^�Q����f�'�d'G\��Zl_�:��5x��3���> :D��/������E�O�Qo�H�8�����^/��,���M�r��a�g��&8�6���m��d��dz��e�O�~;~Z���*_@�4�/4��$��y��5	�c|��Ϸ�͝���P 	,��E�؏f��1Hx����cԶo���6��1@���=O;v%g�c�K���w[�+��C$"]�H��u�Ea�H�T�-TamG,���_8�nlx����Y���n�$U��kDVQ��e.����~��$Pqp��-5M�q4d�	�z*q���0�����?�Vn.9X���9F��V��HHQ�[��5=}KL�[���� �]�(�������웆~}���v=A�I���N�D�c��?�t�B�*�%�q�>���d�lY�T���VnV����9��s�5��M�UޡŜ�+vbȂT{k9��{�v�\�V�K�MmD�翚�>��e�=�l�x�����ǟu����<=L��Q�g���6r�Ԑ\
aa� U���v���&!�������@ذkG�904�E��b��^̄=d+S���؉ �<���+�5!O����.s��w�8���Z����%�ֵFP.�vhU���՛�n����UAQ�Vp:0����,�k܀���<Z��/]�Cnf�^�	�Y���zߣ�� �*��Ǖ�uI�I߾.��T����0
e+��r�����ХO7�8@=�C�MJ���lj�/�N����A��ŇR�8�����qq�8@���p�1������8T:PI�5s��̧��7������x�֩�j͍��_��A�-?����P�BkC$��[i��;���
ll<�bg�B��m|�ǁ���+g�̅<x&�7��6�T��,Q
�޺��]{�t$Y��z�o��/��~���#���=vym]��I�3t��Zh����tF���|�3��L��ms�C x.��Z�a�eM���)+��#YNY�z稛3(��~�mdIñ`�\u2_��.��W�}�2�R�3�Y�$rD���%��8l,��
C'a����I��0wN��_�1�m%c
c0��]~�iP�
|�g
���1Å����|B�����	W�b`6
]��*�٪���p��[��@�b$1V �)||������?A�C-J���$
74�ˋh��P�
���:n|��>~	��}&֠��ht��m��ގ?�s�6�ITƌH��C�B�'��I;f`��9Z'Js����~�/p�	�e�^ �Q�;@m+��w�p ���#W�xP�;���-5d3r���U�s�1}$1t��9D!�'�j���J;�5� �+��] �q;k�$�E�C^ື�������,r�Č��'>���H��7�oS����T�jXV~g(+0 >��3��X�=�}�ƎUc�J��_����7��C:��odq�s
k����!8C� �c>��n�Ң�,7�tJ�m��x���rCB)�(Y��@ޣk��9\G+�낂�����A�G�O���<��Q����{~PK�j�'� l>�S��n��v�=�9��OV�����1��H�9�"$��P�z�������G>
���)�|��e�GlX��u�)	�����>@U���ʩ��7�~/�h7��s(�1�jZ]%���
~t����8�2��y�����h��`���V��kx��O �τbٟ�������T`Y�2O�ceAs��;�0�	7��7����s�z��+<C���E�c���i�����֖+xH�U/�
p�t���zm��V����c�{��h��m��&����w��gD5���Έ?�^���Ġϛ���7#T��u�<�*UU���Q�����9>�m~�V+�M��{�5�5-����[���s�U�!�-<��!�����Ův<�C��n�P`Z4%Z��ѵb��V�r*�p�u��6��~�iVNr��&��	&֠��ȡg�{����ki]a���Z꿛;y�a! '����z�3`M�h�<i$q�=��׺(�̭�s�Ai�r�F��G�m�n��m���^-<m�n��4<-���������GG���tX��zx�7�=x�Y���J��>�u�����v�D��a��N-�*��@��S�!��tԙ���:�FZ��Ad�"���(��g<�>��h�X-/���x���T�w#��Ghm�2;
���>��P;��}�9R�ĭk�����3}���Q��/z0G�g�����kЈ$p!�n��G���fҬ�ֻ��-�����&
2�.����<�c����u�^�3N���[��^���o4���E-bۡemٷ�OǗ�GL(���R9b��X�cvS˚���Ʉ�T q�~? !�%��ͦY���2\���a���7z�n��{[�����Y����������o�gVn���Y]^��F�8!q6BN�~,��M�c��J��-�f7:��E8>��EZ��g���
�v*p������G�L5Hh	����[G�R]�Q�#:��V����Y`�)x�3PK*�	�ڤ�$ ^���5�hh�;B*+`Y�a#�CH�k�d��8e��?aW��&	5��	��?���oX3�T�Q+ _,B��oޜ@�f�2oF�⺠��D���}2v��n��cu-�i4vކ����U�K!gY·췇���DX�.�jΏN�����q��=J͆��Y�PE*p�эR�ѵ6d� C�����o-U�p�?��ʠ�_=��+I/�c�ׅ����ʩ��~w}96@��w�(��YG(_(G^T�6�G�����w{�����F���a���i� j�zK���e�V�z"W�f���89�vD)��r��d���9�E�2��Lp�b�ږ��a����2��-k��q8\�*���$ơ�V����3��0�W�?�?aB�bN]B�2I+�YH�[�Vu�@�=�+G�na`ը�Ov�p�lM"Hx�y�N[�ㆽ�FHod-j���<ƨ؄(�8l�
9���h�s7�����a�^3�2�?V7(�}ۃ'��L,��E��7����d�^}~���i���o��1$��,q�@h�^ ��/�k��`@d�E�����9�$�h>),@��1�׶��,�D9�Ƕ���Q�3Bv�:u5��9/�8GM����O+�W�Ј\�    t ��0&t�f��
�L���7'$���Yۣ:\����
�i�w�%����ě�z��lX��5y�g�r�/.]{�ݩ�Ihܴ�W�6��qSY���Xc��� e7���,K�Y�_"��o�#�)~�-�x8���?e��6�,�>ˣ���n<�-�3E��${�q�?�S�U���{E�e�g5 �u��
�R-U�̶+�n>�PC*pi�A:�N��B��dOa���)5�O��n=�)�8U4����L�V`|���\)����Y�tH �Pj�Y��O�h��Ҙ���S����ρw&+���*Հ~�ZA���
\��KE�gM�[�1�˼0��i�K�Jk�M�����Y�Un���J�����Kj���@�<5Mv/�ՄZJj9�:�J����z�'��ȳ����j[���i��=������?cu�g+1;O��K{V��0��VA�4cyߜ�P�5�:�|=�t�A%��D{��~ET��{�f���+��
�nx�*���
���:`q�����l�>>O��\'��U��`�W8	�GOZh� �=tL�a�$�o�$�wO������H�.�������a�}m����7`ަ�$S��F*qZ�O;Kj(�I2Tj�Je��:�W�j�l����2�P4�\[��e�s��˸uPjԡ٠2������ۂk�0E-d�[K�%m�P5�͐����͹h��5�2;f&��,���@�N
���v�(j�/����t﯇�_��s�3�x�/�oBio �T�]_1�(�K<v�H���y�+A�(䊓�P��dx���FE�.G_��-��H��h�ޛ  �T0G�c��扜�/�G�|Ҡ6g��ן������4�mubӱ�6i�� �D� ���w?K燎"�Guz>��6�J2�l�	�0�m���)&$�Lc�;�$,������g5>��� 0964��
�Z#>�sV�5U����FP*_�y�FԆJ7QՁ��N�g�;a���6����m)6l�.I��{P;:�6�r<<}����ۥ���~�pu`��H g�ĬARU��p��>��̢\�e,�q�h�� ��ٙ^�{�Ljd]T�^/l$p[M�m��2�s�� �o���}��%��ɼr�kͦ]i|�i6��7�UCè�R"���ğ8����;����r^��pҩ�^o*RZ��aRbȌKH௯7a3�ؖ��KLXdR ��y6����c�l�銙��E36C�㊸Yd��{ȝD{�"����A��t:dm�Ii}��
�$&Q���f'��<aa̴���Nv���eq�$�1��A�PH�,��;rc@�<�?+}���o���nʔ?�o�>�ؒ���zͲ=����g˹�X���ݪ��uM�J�Z��`R������yF6K�{0���N�@ݫ�{�}b�g�JA� q�9<��
*���2m�I��j�LU���<�$Ҿ����:zo?�	n�^z�S8������
�3���S&T� ��w`�4#gq��J��zF�8�/_���͔vn,9�F��j5G����D{��ߏ��,)�9��!�pף�!�v\1��*]L�at����9�譏��DCjf&�x�s���5�h�:��a���_lԿ����	M�s.�(�o��Tv��Sң1O������O���,[�'�h'쬕
�I �ReeY	�_�K�n����	���-����;.�hS+�[��"f����C���Y����7�L�!Eѥ������7��n�ܩ��I˙��f �R��|*FqK����T��Җ�_�13�3�l̩���As�Ӿ���
L*z�?�!`v��/�(kAMԀG���=��(�Z�!XPuk��CO�B�.��Z��Ǯ��)p�|v/�E��K��a�*w_���@�� !��8��cA�vv�a�ȥ�︷�a�A��f+��V�!U�F��_�"_9�+<�,�2�����E��aзrL/�� Կ��VpY�r�`E�M ���sԚ8+yQA���'�O|��U�8��Ǌ�%��ij��$����Z@w�<2���uD�6����%�$�OR��=��'��mg��@0plT�?��m���a�[�"�#<	p
	�NUN���C�v�kڞ��H쐈e�w�rw�s� ���ܘY�,��?��K֡�+4J��Z���I��@����?�m��%��k��KV�9��X���G�?����a���U��7�lө�2Z������6sV%:��yt�I+PV��h+�Ҝ߱T��Jhz�xm�	��> �8��on�<���'��3x��7 9@����=�d�pC�S�f9�[W0YQ#�����(G�(|��-m�G&noq�Ҁ��^�U� ��
���m0iK��'��6A݁�X�K�F�hh�b$��%�S���s��?�d�ם�N��9��|��C�]H��#݆��}����p��*�����=�A� �B�Q�~:���YK����%;ٌ]���
j�,H1�-YÒ�5J���C��4�����%Z�T�a�rN�~���s�_�_�bg�Lqg%Qj�yo��ޢ��*_G���څ���X���O6�D>������b4ڥ�B-U���\?-��߇�����F̆f��DS ����Q^òb��hBy=�\R;�5����qV"m�؀�	CKD���#���@���^+�	��	;˸�c�:��E��SMe�\����6�M8+f$��&fMtu�C�y!h o�b�zfcԅ�)RQ�?��/���"E�����j��P��&j%��S���wX��*�Wc�h�16I�.�L���9x�xv&���&���s�y�k
֘�I�/H��.ۋ�!�O����@�YH��Q:����*��m�lT"�pW����'�*N82ӝ�L�p-Td��?��K���_��F&#�@�Ě����{���_���N�)�޾�l�L$�Ӻx܂AV|�)���wU��T��9�9��Y0*���6���V����R�G�׬B����x��1�¾�A�"��
p�HiױHP���6E��"i +�w�����q�Z;���}p>�E���OX��*��f��h�VB���Nf���-E$on}�EL���������_h���W����-��}��9NO�P3�ڸ�l)Jv��2��8�qE�����c��/��ldfrZ�	������J2Bfb�0s�$��P�W����U4�Y����,����r��ZY _E���<�I'��x�XUb3Ԑ����5Wm�|�X݉�i��뮯:a����+�D0r19���=IY|�	���di�l�ĴA\��m;��+<~�钮 )����h
�*���W��AU��}�4]�B�l����|yK�p�;�v��Zg�v�1;�\��U�����ԥ6Os(У�^��݈^K4��9Y0��$���0��#/xH���N��G�^~��_I�f�}��$+j$��&|���A�Ǿ��j�,�hOw��� 5:�A3���؅��F.
�ys;��p�����x��S�{�a}�	����٫��+�:�=[r/��f]m&�o��OЄ4 q3�.�^�!��-���u��/�}�oS�	���XN�|�����Bh�yP���|�!�'���U6�fge2Ey�:>�B W,t�n��٤�r�G-�GN�W��f���f�
�<�Ky=�6��F_k���8��0q�w �F�l�&<�~�OX$Pf,��ܳ�=�63��j_�1�78f�Ґȕ	|-{��.����Q$8���i��GHa^�k~g��$+i���L�X�6e�{0��C����<'��|	5d9Aė�k�*��1�\�mL��cH�ö8�C�pW����k3���.kٲmb�����S���x��+:���b㡁�F [��n����<��/�_˩�-\������lU�,)�hӛ������"��;#�1�ߓ��nٱ���r�o�ѱ���4�"+w�9���ٸe��Pa�qY�1ބ��=q�?����������;Sf��hg��Ԉ?k!�    4� �('���ۡ�� �[[�*.����(>3��5f��/���'p��>��@n��Ā��/��Y�Y0�Ay�4��aM*�H�w����*59	?��xW�k����}�}@~e,���w6���eK���"���m�r#�]��ܭ8
�)�y3�t`�*t%�lZ�d�h(f��*x'�kA�@��]<��;��5����1��M����Q�pXB�$'�=�<j4��m�U�(�??/&�}l��7��ݵ��A�&�&�I#U�(���/y[r�Y*�fq����c������O�q��r�)g6��8�]�3u�#�m�FV㱛P#�={�G���?L4���ss�d�v�L�b�%��j��^���9G���~>�ܭs��<�m��6�h���߻�K�$���_`����J3j�E���S9�w����R��D�,Z��%&�e���Y�MC�,��W-�c�}s<�|`����Q�uYqH�i.3���w��A����U\�-������L�� �Xqٚˎ8��$�9e]�淾�6l�*r�t�yA�C�Sy�����ͅ�q��:�� 3Ԍ�.}˜�����Jڸ�;��e.-B��W[�'+4b6�����,q!/�F�Hɯ������X�p��qpCg�b?�X��\���_�!��s��7Z�T`�u5���r���2:���9AkLv֫#��C̓�q���>Д�FD���%4!��гc����%pԐ��Q�*k��JV��΂�h@�@S˜�����cxT�5u��Ѵ���l�����d+f$�ja@:,�].&:�6���k
P�TS�<��×f�
�$+{9��L@-��Y�e��J�|��v�CPq�j��b�B�|@�@�ؾE\�d���irXo��;<�Dx��\V���\{4�93�1�@�T`:1�x�#�`"4k�\�b���l�r��ڲ%��DY�f+�=�k����.o�;!��^0�a�SqF
�@�fX�S��*�]E?�k�4�a�E��]��J��R���e~�`�s1,珍_��f�W���+����F0�	��.���_nS�	>~(3c�·�E�������h5F� {���nYFû�<eC��t���������Јd2���U4�G�a!�C¤�#IRiHЖ�耊��@�qm@�3��MT`��Ƒ��<��*i�y;���҈��&̂�7��������������w��i��u�?�����s_6zD�f~�4U���swz��� rv�L���$��[|��x�Y��Q~n1�C>���.��V"h8����w?�mLs�/���'OHs�
g'�IV6r�c!�A
�D�U������uڟ�ֿ*���V���W��������\�Q%������C�SW|���;��=`
n�
1u"��F.�z�Kt+v�Z7�S�'A��!)�����	�_ɍ�t�KhB��I��A ���W�I���W��n��8�-e�X2�m�뉋ߛ�*��y��X��aU`xEн(q=�>x�oL�Z}����y�V�
MH��}�@�2�ԫ��� ���=7$vcՌM�r6���-'��-� �S��xL�5���j��YP	?��f�
&�#8݀���>Q�m��v[��I6&=�5��8�R�uCM��)�3Io�ƃ�p#jᩓ����m�8��)�p�k=�v�5k�
��J�{e��+tU� ��?�����lCM$j`v!. Sz�dO�Z��P~�$�}�7h�����MЄ��������Ш�,6ٻ���؞_>��wMrh+v%�Pi�i����`r��H��|z=o,9�(�f�쁯��#A��8�k)��%Lr��5��m�����M���>�>g��'�F��h�X�﬑�q :�!�*�5ѣ�i�-�f�F�)4��ʉ�7֜�
��ԗ�f��`��`&���Nلq��� �h�X������V6���>�����	L��WY����Ce���\��?��_M�`��p`b3t�T��9�e;.;H\0��	)�I��*73�Ά��Zg�&r����`=c���ui��M<b��yFe[�9+Ɉ�(9m3R[+>�����|��L����P|>2��Y�Bt	�3'"����lcL�˄����K(����W9�gi(�GЛdkz�`6�t�ۜ��1/�0�'����6�wa��}=r�F��A�ji��Fo���R�5�8@�eZ�fXh,]��Gy6��)��@�l�:���������ƙV�9�&K�
�r�/�4[@�q�]5�TM�h$g������q� �+���vhf���u�ڻn����\X�Lշ��_�b�q�v[2�Έ�H������Ѣ�a'΂�;���7�t�Ҝ�-'ҡ'�M+Z`��h1�`3j���( M�� ��ъ	[����d�h�T#W*�U����`��u@$erȨ����GW�Ӕ���S�����u{*��x��{}����?ǿ�/t��"�CDd���\�"w��RwH������T��0$q:��T\y�pu��O�D*0e�>ٶF�j+�~H��I����%�Ά����Kl7����x�^@�^�jx�Ax
�����>>�hbw���_ld�c�YYp��;�U�_�:3rbr��4�t�����/`C�U^�Tnì��bV̍��1j�FŬ̀e��_�P�M��ϟFa*��{�!���(��i�O?�%`�dm�k�0�QGIm��q�)JA�}@��/P�8���K�Q�����\YVCB%���y��S��/��$G�>%J��v1��bnp���3Pٟ}zO~HO��x�6A�=B
EDЎ��+��Z������m�_n�i�5A��r�_1.	9��_N���ү�I"�B"~�#/�����1xdf|cL�Cs����+M�J�:(��Y�����`͹��X�>�'VQ��U��P� .�na&Lb cG��ZFV��$פ�>��YH���*�����U�Zq�Z�������u?���|��1V<:�+�2h�����8��d�%ɮ��3��<����l(�K�{SK����z��Q+�f/�3�� ���,�����������{����_w�O��6:�^�z犽�[T��\��*�4��ވyR��{K-�
5�b򶣣�3�mE�]~}��sasg��d����_g��W��g	r�� >Z�*R�k'T�n7_��@1Q(��׺�MO&(�a�^K��H�Eo�@��F��D*�p
+V�����瀈\�s�T4A�;��ذ�ɡaz	�fԎ�]=��I����S���ɠ��^�J��r1��U�_��i*�P�ϭu�P 	\�$� �Ee+�5+���o�'�����b��V��	�\��%T^ΗGm�I�~֓E�BI��0G�A&��^Ҍ8�@
k ���jHmw]P�o#t�GP�#r:��3�>^��`��{���!h��h�i�-�`�F�t�7�1�[T��~���ܬ����v����JW��ۼ~�a��
j1���mO���c9�o������`1w���4�N�|ʭ�$��s���eL�h)B%3I|�i������?�L��>���z��[P�������7����~��9�ߙ��g�ܮ�8���-2���=r�
�k,�������ɀ����v�������f��������{��X8cj�E�]��
c]s�
�mIS0�|����i�9�YP����0u5����P�J/�2����������x���5x� �
n���m;�r�u+�����Ԑ��u�b̲-6�F���{�����5Iڡ���nA���y�~P�����>��U3T�4���9pM�bo��w겱��ۻy���i4��f^��7�:+��v����D�آ�g�K�O2>;A�Uv*����G�\2��4��r�ʙ5��_�d�,�!��Zgfd���y�V+c�B�<��O&��aQ;��������PgƐ H^�ִ�Y'��8�~�6�l74�������F�u9� rN 2G��9J���=������^�1+��    �&fM�Ki���+��LNw����f�\%u�g�����;�����阠�H�[������+8�#(�����N�o�uT*����E6���襉5��7pu��F��?�ͻ�#��k�p��K.�1i���anK��$N��(�*M��PɂH�Y 6�'Ǧ�:9�Z�z�b��aY%Ҁ�b�u2��n��tTt^�K�K�K.l�r&�B2����T-�#���y�U��֎d�?��8V��\���]xz���&��4��(d�\~�b,��j�K�� ��
/zq+��Zd��SB>8��S/x�BJ;z!{)�zjav�������T-;����Rw�s�K8�
^s��FW�m�9o�ԏ���]���U�uԀ���_h<dfm�VС�t���� �0�v*z�&ׯ`��Bu�>;o�遇|h)/D��z��ݷ���]'�5<h�5���H:(��o��sk�kPE..:�d�5"?�y�����~���֗��oF�1�ΐ����#t�Գ0��qwҏ.�ܼ��Fi"{pK�}�Gpp��0��)��4T3 D����+(-Ѐ�n;М���$؈��5v��4��O^���[�L@�6���p��~�쓤����6��t�&���7g@�*:������B���6,�-�>d[�ec���fDX�X�T8f@E��6�̍k��G�߅���ή��v3�����k��I���X`�6b�A6:�X�5:��f��@����
2��yP��������M���䌘�lb��$�~ppba �~��Q�C�K)0�]}vv��0���*�M`.��I��� ��χ7|a�i�t氳�n2��<�g�,J�c�;L��_���O6%���ZB������t���8ʞ4$?f�i�S~8yvk˕�2̼���7p�z��o���A�N�v+.�	����q@���� �c�sϒ'Ɠ<�0������\ZP�O�ϚG���T�]զ^����m�����LQ���PnA(T�W[.&-�h�����{^�c���h"PH���67�R��-J�[�=�ѱ�D���Za�1��ݠ�8��S�ޢ�@�1���X1LC�SN#f��Q��$M�5�����r|ask��*8������5�W��YIF�Ɔ,g]U#���1֑"���{�A���|^��h�`��QL�4��G�����T�tP ��6����x�%���S*�ÅD%|{�����}5S�nG:A ��`�G�0��(%�2a�N���5�!8��$�� �d�<�����3�[j����&b�J�&+@�N:D��B�|�d�u:Ά��l$��ɹr=���ֱaSG"9��b�J|��`V��)���e�V`�l$�@����H�b��Ff�A��W=l�/�/&G�u�*&f"Y�sg/<�z�\1+����$�R���OP�"f�i���@pA�S�M�A�fv�:� ����z�S�oF0ZG4!f����������N&JS�.���tD��K�g����u��G��s�̚��$Wt�(�3�u*�d�S�PK��d�it�:&t����r�&��֩@1� #5/Ŀ�Ss��|�<�Fz��vφ����^��S�.r��M�Q�fq�p��C�4A��<�k�����9�s:�߫qd�=��:{�p�oci`�o��M����*NKU?��_/��O�e[��V�șH��_�ښy%0R�wCZ�( ���'�U���bF��s)}2ӟmZr/@R5�~���#��N����M�r"�j@�}%j'��V]UM̒/�������*�I��H.��Oُ[~n�U��=��XW| ؗ��=��]����=�]�7��k�9w]��LS�-��	�FuuWp�?�������	/f��K+j$Ѣia20/cbs_sD�4\��||� YA��oͬw6�D��f�g��U�*6X�c`^<���������v��iN"}�Z������R����C�|�v���^��-�ʫ�	��[��H(��a�Y��ӳG�bH;�'<������0� �P�=��|� �'������캳��L�
?O�BGzĠ����Z�:~�dY�n4�9���Ԁ*�N�-T ������e�:t��e��X����Ij�ntG_w/LJ<xZKe;A�2c�Vjt��#X�y��1�kt�,��S��$)�ܱ^���k���$���鍳�Dg�aΌ��%+w\9��SU�Z|�g��;aj����1��[B����얇'����2#ބY��_�����݊/��RCJ	]>Y{��T=T�
\�{u(��\�}
�ME��"��4��y-B�����2Y#�[�]�6��xK��ڪIx�6�BM��v
[��ޢ������	��?�����[���L��}��6�%k�W��������0�a��B�0���z�����%����[���`�H �������^5"�ŬϬ$PlN�f��14a�s]2��ԋ����\U/g��5��t���g��*�	��f魱�&GlCd�fҧ�K�Y�i�.M��T]49�뗺d�[�����ݎ��m�wF_ކ�P��$��N��u f��z!n��|�?��gM�{Hͯ_�d�&�3`���%Z�E���"H(��t��X���6�mY�Ԁ���I[�T�M5|�F��GL9����R;������믕Q��@v�%�<�,��M��-�O-Q6���S/��<X�7�r��l`1�å��u+�0�d��iKf�Ie��Q�z��I��V/[A���$z���*�Kjh����m�	Z0K]\>��M�Bl@�2�.�>��LHoE��-,�!������ġ�a����~��Pƣ��@ӲFY��#�/��9�J�jU��7`�T��<�B=v�:�4��i��}"ɭ�.�Є4^�հ��m�1pŦ؀ӑ�F�@��?���2ގ��j��:�T}SE^
�� ��2%0]��{)�Y���a{�K��Ե.�e��hrf������96�6ބZP�*7�E� �!0������y��GC�{�H<8cW�H�Ko��+]d��$���6�xK��#���rq}�N��C���/�)[�T`�U_��Ni�p��z6�ޣ��f�m�پ��Nh �	O�+�
����u�Q}�h�Ңd�l3�=R��-�Q��;�C�|�=	ɲ�~����HZ�����=w��պ��HMIl~`nS��E�\�lx�aG�!f�d�7ЊG��JD=���v�䆛�ޭ$�7�"�وj����A_n34z!��"F=ɉ�[~e�6p�.6�5�<��� �|n��#��Naڦ/Y�?����)w�˪��(!Q��gc�f��H�֠�B�}�ʪ=W��Nd������g�1�����wB������|���oP������&(���Rzkg#���A��j����lJQ�,L��kRC�����jA��F�X���\�'6�8��du��L8XbW�5���{D5E��&��MЂpb1��"u'o�X��&¨�}���n�G:�p��ʆ�L�����A-��V�[[���NS�F�H��Z��{�Mnkyf�,(mrA)�nC�kk���	i::F�1kn�N�;L�4��#�V��,8�]�i��~*^??����:�K�!��[�kDbB�,]�l##'T����Vک�*�O��mg]-kb;C7{��G�3�-����D	Ud�ޮ��	Ɋ�+6����1`V�e�3�So���V���vT�U�֍r����"0�J���,x�xrH�����W�{l��¦[g�cl�3��J-Xꓒ��Ȋ������I-|ؿ�?Ŏw��}����6��,fZ�}ÕQ> -@^�������$~r+�-��$PC_����.�@)����$`
�Dg��	�o�Zt���e�!�Q�B=���˓ly��c�����	���	�YX�{k^@�4:&���׼���'�B=�f�ƪ+YSo��oS���ᗸ�e�u��,�����̈�8    [72�5&�|g���U?�De�a�λ<�QW���/y�So5�x�1��J�!p!���V	�$�����D9����{��l$DX(&�^��}�%����_����@��b�ލ�hi�L�B����!�#���K��WC-����<-�X���PCf�u���`ɞI�
Ӕ����ƒ�nη�%�H�`ϋ	î��Z��)F�){e��z���W�kХ���j�oφ��z�4����t���d���'	5uv�]ǕA@N��o�.���0uF�NA��Lv�Z���db�n��!ޯ+TOx��D,���ct�}��o]�kv���b��(��p�n�V�md�nexH-W׏���`�5!wΒi�Q��%>.���Ζ���M?F�2;�[�"����b	��51}u�c�.k���wgU��q C���`ldwj���WQM�M�T~�����n˘ySf)�v�]�z��C
�e��e�^���$FJ��j��L����|փ�^�(��Z�M���`�ԯ��{��������׭���1f�	�����vY�Z��6Ai���r�H]רbVڽ�Y�㮬mn%ذ�J���hA��!#�8V�
���G�X]TԚ�o'R��?�Y�z_!��^N�ae�B���(�Y��<��.}y^s框T��f�0Ȓ�.�K4�n�^<��zP6?����=rz���܁��Z6Jvه������VqO����'+j$ύU�������#�+:�hj����2�,�7J���Lػv-RRW�����"��P�7�,��N~��[1���`�.#���sk�7�N�o��\HH���w^ >�U ���C���I����pz��U_�Hh� ��j��}iI�����d�o4u%?@��j�*��y��8�%��lJbytvI�m��G}��t�U���BP(%���%JA�2{�c�E��E+%�,�o��s&v�v���וatގ�Q+�'�L�﷑Kx)�Fp("D���-]Ny����Ro�3^��z=ƴC+*j��0�*�/��;����yz����H���HI�F;y-����42�Vɬ�c�����&���dP;Af[����/�r�խ}�41Yȃ�V$���� R�RB�JK�r4���y@��{�$n�w:T��l��(�#�9-���E6�aV5d^�JL�>���1i�u����o�'��|�*T߆^�,�9;�Id�����8����rMh�"'��K%Y]E�Z+��*d=�ݛ�vh���JHc 8����Iv��mk'n9��a=������VR&�p��n�@���괃:k�M>��%Lx�t��;�|P<@8=*�;�'}�M2�7�Ll�.*�՘�j8bSCFx�I��r~��	ࡊT�R3@�c�X[u`���=0�yҒ�?�5��RD!¨K���Z��l��2�`���U�����7`Bֹ�eC�%���Y�p�����|�p����Ԋ⪱��d�������p<~����۸��dF�F]��yE���3�C�=�N�t��v��P�[|�t�a���bD)���!�f�I��a(p�q.
��X}�7%gWi��T�bG9�ΘN�-p��Qi-�ȭ����Y���uC������pm_�}��&P
��d��=�4t�i�/<�<ߪ��q[�q1��}��|{L@�M(�!w�Ɠ�dƬ������yD���T�eGW��f]�#�z��J�0.��z\'�p)7���J`y��n;�����������:U|kr�70K/����*Բz��ї�rt���:��/��n�*2��6����m���7��go�l/��g�]㷀F��g7a���|;�ѧQu�U5�6�b�f2�o��7���2#Geཁ���N�f���\_{����n�e�*��C��c����m~=g����{g+��QZ�Yp��Jv����x=���{������#�X����(�eف˂�5��{�,����F��7Af@;��]�v#K ��*�VvM	����S	�<�N�UϙHh o�@��>��f�Z�R4�r>@���c̑��e�[������F��/Ǎ�Z�"|�Fn r��F��Õ�,��9g��S�\l��W=��ڀ�?�^5��'�$����Y}��\;_����]�-6�x�l��`x�_�/9��"�0�R}Ѽ[,�L���Z�Kg-�kk�8��i�[��&o��%�E�y�\��ܷ_��@�'��+%QV/���u�S�Z<����}�������//o�ϴUOTb�/A-�1n��M��ȼ����sb�����w��@9z�RfF�F��i"�1�����������Ķzx���������q�� .���#�~��Vy����r2�<���2Pq#�oʑB:M����$�r<n��R���˒�x1�'���8&��Rd�v~ЙP���j1��=�ކ����3�n���S�����J��$�¾���X�Aw��E���	�Ar��s�q�P"Ӕ��郲�a�`���R��	5��}Q]�����
�W�\b��z+������<��f58=�Gsm��pElX�>�܇�E�t@�N<Q�8��lWY4#�.�p�F���}U=�����ۦ~�G\`�$L[	��A��� �)����4�s�Cj���Z��٠	��H��gT�o�*�������>�Gm�|<�� D�v⡆T�Ҝ�6��7��7�y~���.{�>�|����Cn	${#f�&��f`A##��o#σ�=$���������Z���y�h@�y���ky졶�5&�*�1�Y:7���N��W��� ;O�@-O�{['�ߐ�����	��N+V6��Ӽ��Kd�: 9��g�dAx�W���m�4�Vrc-M���� o"TylU��B��y�D�2����Md��(��vm��(����! ��E��W1�C'��s��v�L��F�T��N6�QF�z6��F����~CA��0z��>�+5�$�C�!��D?E�|�@-��[&`�HSa9���p���x�:����Ʉy������ �#�A�_'� aD�.��ǅt�#;����<Ug)2;�x�yWh�ip=�]��\~���rٿ�9�o{th'���׷�����a2j��4��� �r���d �s``��҃.=��3�Mb��9<��I�o�J��p[}>"��q�̀��la�9iz�g_�ǯ��g��e���k�wg�l$�0�u|}��*Mk����v9�Tɹ��'�!5�T�<<ʒ`/��E|Q�C�ߡ|7kg�c�sh����U�`�Rڪ�K��A#��C����@S%/����Rg#���.!~ƝkZ\Dϋh�!ek~�K�v�,p����ЄL�V�bl6B�G����^��@}�:�u���b�A�Y-�8f�C`	��yEE��)*��E�10΄��>�

���6A�L����X��E5��@��7�~=�ֹ���̨�dd��#�.��ؓ�+W�/I�u�gOk������7�Nŉ���
����y�P����=lAػ�[,�����+p!�Χ<Me��v@�����D^��Gٵ�H
�����4����3EK�д����š����֦�z�S�� �O��'0!h8��
��t:JS"�����Q�����;|��16� k9(j4{��;]����I��&,���/�?���.�I�^�+g茌���A�5Z&�^����Dh��vy!{H��\me��T�d�# ��Bx��'��p��e����z�/��th�����,lة9�:�R�(���!:�`H�I�%uv�v��*�ȕ�}����p{��1'�+)o��81J>�� �V�E#�@��O��YݐG��y�p�J���V����x��Hi��4�(�K"�U���6�V��^L���Z�w�wC��C?��%��ԯ�����L�_VO��H��L��A����_��{���QUs�ȗ}��0y#�)��ƴ,���^%Oj��G��� m��?��n��8P�.��@�H���Ӗ)�ݬr�Og(ޠ�9l���q�    Z����z��a�F���.f�֠+�(V���{�:Jn���dz�nO����B��3nj	���Tg�]��'t�@d������w��	�@�_s⚺��2�v���0����;lq@eT�f���Q���I���"<����P��6R3΀᭫N��3��c�ZW]��r۩���X���a:��E�n��&~tفp�#�S`z��.Q)&]b��"-i"��v`�@�5��򡽶K:(�N8�7�5���N��>����nw�����	�^o�[��������Q#�{�tx�@[�9ꆚ�\�N����F�3j&>�56C��R��
��ܐhÁR3Ѻ�������iNۄIT����5%�z�IQ�C#�M��y���=�PgCM$0��y:v�54�c�½�ۗs&$̜��3Aj ����	C�+�S��[�w:F�?�S/�(i8(��pᬞ���B}u��Ǫb�9F���6�~�h _}�h�'%T���]���S(n"�i�k��e�=���sopC/���/�ʞXA�k�~F��=c��>�n���(��I�|�x�!�6��J��>�gm�q�I�n���B2Pt&zv�]�O[. �?X��b"ic�qc��<#b�W�_4M�*���Dhl��j�;�8�e|':����]m��tx���;B�Z�	��ь{��ű{�T��l#�Ɩ�Tp�Bm�;�C�w�$����$��Ut�Mȅ� F�H|_=P}���,O}��v8�py΃v�7���,���m1u�y�v�̵���#�c��]y�j��F�$5�)��H�=���):���'l�9{�؛Й^��*�-����mϪ�M��7��	��߯�o��蓯���1L�
򉟳՟��ȫ�9��Q^�^|��U/޶�w?��.�n�˼�lH�d3+ٺ��ZB��� (7�{F�d���	jH�ۈ��x �,*�C4��&��Z>^XY֡	���7�z�y��|��p��*�n	<Ԑ^����r9z�Hj�(S��iV%��B6`ݲDϲ`�Rz]^�zD��f&}�{�r��C%�"up÷:T5W��3�t��AmK��
��	k��nX�����!�vXkF?ќ�*�����+V�K'Oh�F�г���B�˻ϗ�w�����uԀ�7�^4��#�WyV=�E��	G�\C���Co��(�W�I3�t�ק*`������9�����}��(�P�B�����ewx�T��әsn=���
]y���%A�X���O���<�t8�$c��d�Ȉ҄Z(�6�F�����0�\+�3�[����iuS��[�����ԁ9[��N<�אF5r8�GY�<�(-DDq�u�Z[vu
7��'.��z����s����QN���g�6M��?���|�@<��[_|�nh�m�\�+���t���w�5�-`*���Ɩ��-�Σ�LYB�y|qD�jg��4�[;����DS7�V��-Ѐ�S'���x����N�G�t��i,@z�{��Zbee��/0V�cԑ�'���Ŵ�M�6��u%|���+vUM�?�
.GF��↟��	=�'.������u�0���)+۟Q	���r�qɨKH��h��A���N��������D�@�_��(��K��V�3z��%�W��m��=��{Ϳn����u+��C���1�8�7�ox����4tj�����UiK��/v�S�a���Ox[*�-vhuu9S0o��O����<�Sl
D{�1o��*�M�5��``F�er9U	��Tt>���=��Ħ�3�.V! /�?4�1u���C�&MΏ~M��$e%��^�	4o�F�3!h�m�5�����Z����D��E_u���@��	7��K:y��6 ��a����*��nv�y��sHz�O'����pÅ�J��P�v<rH2e������\ѹys���.�*�۸j�{��χ7ȷ�b&aD����_7ue���V�������{#��]�K�3���u_�jJJ옔�����N�*��d��⽝�Z����[�G+xc'�������k�?΅^ߺ䡆L��kwW���񏩡l�r����E^��53�p�lؙ��y��{�w��u�ͼ��;���`��ʣ��Dp~�c� ��\+�C���]�A��x�g�=
�u��`T�W]�>�����Gt�6�d<��e�<�nk]zX�����&M�ӷJ�Kg�+<ݮb}ʧ�5&u-�[����q�������㏶����`��v	j,�s�N¡F=�)�iG���m�U�N6�V��<���]x|榈��d�����}"��dC߶VO�NX��v�Q>0����k"������Λ	{6l４�o�JoM]���O�y<�;<k?Ķ;ఄ&�"�&DL�j��� �����,��ԃ;�qs���)q*Q�Aj�U٩�y����w�7�0�=`�,</�a�]�U�%_W��Z�WȀ�d#D���">��ϵ�G�T��6��T�J���oE�ܨ<�Op����]�5%>���s��I��?�L�wL���""7�����HMo�L����	�4�c��1<@t�����洱�:\L��&[���VԈ�X&,�u�yT�^I�Ҙ�UH׀`�������%^36@+x��n����-d�it·�7���9��݆卨5aV�6�({� A��� >@;<����xp�=H�Hn�3��P��h(Uʷ�}�gtz�vC~��m���S����$#+�&J��[�F@���ؚ�m�����\躮�0`a��	�է���pf�4��[�QU��EQ9Q��۠K�3�mC�����7&���}��ꡆ�Y����� av�����4������x@�o�&�$��HQ����^��+��j��k?λ?�����<�����q���r��$��;�P*�H��Ѣ�a@�6��ęR�u��Սix�hp�L7�(��*�o�
�y)���7C�ndnd�!q���f6dˑpv�aB��SA��<t��6��x)����*��wB��i�	L@�(�?�3_c�`��R�ĠAN2�yQ�9��Kz,�)"0�lˆn� �v�u�S�E��z�!W�[T	{�9ƺ�=�A�A}$�U����g�j�
w*'��M�ʖ)Wx�ٱ�x�#ho�<Ā�j�`�����%Cy�3�����gZW�ю]�墊�1ӝIWڧ�5��C3������]�*}e�O{�~���k��Eso@��,yG{�ה84�7�2�0���I�ʯ�(��#ƣ�,A,�D�/t���qx�Z�SF�69���j��#�W�uX�ɤq޵1@M.:6�`!;���'�|"����7
)�Da!X��ȍ�.!���g�b�Ԙ���>�v�+Ȓ
Ř��,�7�m���4#�J�'��z}��F���P+�c7Ҁ�@���z�͈QzU7p�*mb8�䍝ˁ�����p=��j�U忣��P�mB�����u�F��H*�`s��Ǌ+�#�aF������<LP�2f���j��jht�G�S�뺑�@�ޗ�]�����,�J_ �z�B!B�S�&�[�f����<쁹.�7����u���w*;nO�7�7Lm���3�3Vu&�ν�)��+��p��]��{c�c}�ɀ�n�����f��sG2=���]�%Ԑө;���V�$����\8��e�8�V�"pq�D#[)&�v\3�llJSUDv�Z�(uP�K$�X��MMR(��]�Q�5T.:�)�$������ ֪�H�!�n�:&xB���w�5�,��t�ы�T��� u=����x?����V�.\7��i0�X�������!YyV��\�JB�*�A�U�c �>k'az�Y�kݝ��̐�IOی\�g�������W@��|��D��~�&�Q�gKʆ:���a�6�rx�ni)y�Ч�&��'~ᶊ�\�%"���&�*��1G�ǍE���
WtϏ0�4�r*v���g,�}f�o\C�bF_i��A��5    t6|����46�ҕ���V+W�U�pR�G�G9���B��ϕ{�&�XB%�Ϫ��u{�;����Lb���ZG�x}�	
d��جMG���l�>j����� �o'�����L���o���@�m{<n@
tU���Gx�͆��D\��� ���e\�S��ώ�z�ʋ���pC'�roe����7HUᒵ� �� y��p�=��[0�|q�ܶ8�]���tJ}=�~���frC7�/g���s0ƒ�C+��g���5�7C��ؠ�S����H#��W=��ׂ&8cg�w7�}G9u;�������z��*�nsA�R��^N,�R.�W�����wq�����9S꿩����W7��
zA�UR
��q�����������T��^+!�K*�9
kݦb��ݦ}���ʢ��������ˢ��/�Qz�\*���c�v�ŗn�Ϸm�����*�ߧ?����۬�x�aS��B����V��C��J��|�'Ѣ���7`�_#O��W���N��3��<ĭ��4��ZB%!@��*֐;�J�;����WI6�ќ��y�X��=\�
֠�3���uť�8r�9c�i�N���D��!�:�x�p�-%C�����lS��<��&����������Y/���(�@X�P�E/�����d醳����/^
iC��C�:4f��}��=��l�!�-ń��<�q�������
7���z�+�BZ,�q�.Vl-�8lr��{�csf��p�]�@�SNk��9�R.WW�6A�1;�HE[������JA*�:;�K (�"oy_��f��`R�x�!!z�e�Єp9�Ǝ��M�X��gO�����zp���tMCm�A�CL�k��*�#����hn�PJU���KS�Ҽ*[�U��A�O^Qd0٠���=u��t���l��F�5aU��a�g����EDVQ*=õ]�<+Wn�_�^*�^���c)q�i����$������_x#fCM��ȻQ%������}�]�����e��V��7��C���sr=#�7H�?�#?PE���ey�8./��
�V̈�(2���T����� �q�:~���Ҍ?hU��ҽ��3��:׆>��o�.�V�~�@Є�������`�tq���0�\6J ����.��?��l��Vh$�Xo钽���T�$��i��E��:Ny��M���6�
<6Cy-TPG��!�\�3�eA�3���փ36A��Z2�����&�ڡ�0Ԏ ���|T>����N�9$Z�������l+�2K���_�FT�yN���d��郞���?�Z�L�5��d#B,J�M� o9�x��6� &v���dzeIY��\v@˥6?.z"��/~���ԉ7C+jd
-V(�����L�56X:lh-t;��ѕ7`x�}a��P����,ˣ���I"��P����.�q
3��+��N<{Y�nCn�
�����ι.wt�{<�^��x�^6�:��
de��N\��S�꽗������grY�x	L�Rf�YO����r�ƍ��a	��_�0J�1V���%v����G����]�7���7�X����%!}�g*���7����DF�׾l�SVv>�Q�1v���g�@�)�b[�N���x�k�}ZN4	>6ن�ym'b�����g�F����x�_y.^V62����5�Y��7������4	!�Lj^�x9����+;����-��Q�id�k-�fO��?�N�80�Fc_��v]�o]U�&.� rY����jr�JF�+�:p¦���x�M+��o���X|�7��Xʞ�'�<6C���4ˢ�|���5��^=����"t<�9�vu����p��^�G��('l����E�r{�pPC�7��Q�K�\��ئQI�:�(e~� �m,:����������e�V۪�"p���M:��Q �@;�u�U#W��B�",��,Wp��;���d�����l�]��gԑ�!��r��;k��	$���ə��d@��7���VC�m�U�} �sh2Im���k��6��Fܵ�`=�UC�fn?�U�oWf�����gu O?�ߺ������u�}~#��������t��|���&�Ba`e�l".a|�,��[Z;���R������LJ+�~�	�Z&~�����U��I�t��ٝ��+lo�l$I��x���|�M����@��iyk���I�������W�X6�aY�ۡ��
)e��ǘ2t����/���l#%�h`��ru�}ĳ�T�h�,a�ܕ���[P�e��ޠ^|5��^. *�u"kXJ�Hh�����fo����(��,%"B�唕���0���4�>��[K�:[����+�Dߍ���`�^NG}`R����h��zӆ�&h�L����ʞ�ʉ> u=�$vP�h.:1=�[[���B}"?���AN ��N�@�򠕬N��wEBz�x���_1��r�pk�(Y��p���KU�"fɉ�"���4�y����i�Y���՟=Ԑ�:-�ܡox࿧�<��ɓwx�$�pE'�p���d���7	P�~rh���'U�k��X��ҌY��d41��B�Ky)Mղ& ��d�/�����fE��
ހ�����zW�� ���$>����^���qk�r��NΥf�!��F����=*��	:Ǩ�x�����n~R�N2S:2�����Ƀ�k��\K�0F��2a_��ځ9��y5od�!/�YXI�!��uc�e���P��Ӹ�[?�����i��ov�Uc�%C(�X�ORJ[G�'l�Q�١�Q~��E�!�h5l���4���y[[�+v������m��rj�I�~�t��Q+�>I���dA�Vv�9�|l}/�tj��䍗����N"��ӵ�K�Au�^q�W���1��Ϡ���É9�߸���/�o�|U��ݨ���'��Bbp= o{��(���!]��^�|������ۺ��8�-�&�F�U����FTtZ��}�?}�B�|*���y��꥙�ʔ�}O�`f��V~�	��Q¼�؍H8�r\�=��cjȅ��U;q���.zdB}G�j��/����VË+6Ay�� �Հ�(�(��S^�v����\�^�����k�d��1�x-t��#Q������a&�����@G@g,����=�O��I]fS��c���*U8���������R
�8&�>z��(?$B/^��0m�h�A���OL��&���͘�d$U߮�C����01�_���>�>�\-��.喿�,��6�IW��3��ŕ��p��-�4��N��=�,�|Z��]���+qVb%���CȐ�,���W)�'Q�l8�p5��%;Y��0�|�ߖ�^��iy5c�cWs��y?�qo�3΂1��D�bu�a@P遲��	�D�g2�����y��5�5nD�w����Q�y2�������1���5Qz�W�M�����\�x-t���Z����ւ�XB���E�臀}�eWf��7�"�:�Y�7k����k��3&2+�Wd� }�űrBx"���q_���	��@����wD�%�gj9BZ>�_�G%Wj�o��Z���@���n��	x�r�*{L;�R��5��;��� �/9vŏ�w2��-ҍ���`�lvx�!��9�սl*#�Ȉ�d�V�*���O�3vM��W��XqY8�h"�����˃�!������ɓu��u����9��?,��ןni�L_ZYc20�pl��� �-q� ̪��'��,�A���j��tfmγ/m��ҲW+O��)I� ],T��ƽ�:��H��L�o�Wu�(W+^E{w�~x7�џ��H����~���L6�-,�+q�.C��5���	ƈ]nn/΂i���"��7�^ĿD"�ml2�m�-I\��K�O�jk������t$s����r�H�����v�le�pE+�ثVf���J��2T�M{|�87�\n<8a�<�44��8 �-�pV���Ͻ�����X���E�|���/I�bH�.0��.�
�����Zu�,,OV�6    ��*�Y�e����B60ᗓ;���#/#^nK�ܹx�G���\�k�X��zJ~]��T����8*��g�$m���;�nm�����ܝ|��_'t�Y��+���2���<R�k�"H����V� ��~co���3�0Y�~3��	���Z��V^ltMCȴ�!M
�����7x�Mp�.��6�����N�fR��DNpq��+���η���xG\Z^�&"x��O'�)F��������&Ԃ�n/d�e����x��Fأ����<@�-L �ڡ�������E��ZY�������I�a�1�h �Â��8��~���煠Id�bݿ�9����/>gY�����QgV��LK-7�/;�]h�*t����=�/K7 ���������g����{�r0C�q�6��w�On�&��eK����eH�7�T� A��6t(����Kfb*�Cz֒�B2�/��	��xl��*��4YK�`d۔Vq~���I]����>��ޙPـM��_��r�JM+e�679o�Q���u�[�@�Oa�Rn��:��P�����R^$�ť�ؠ;/o����̨32�H&f��F"��ť�M�}��#o$vLD��C(�U�����0TXt�E�F�|v���^h�:}l���x�0����w����!��\@8���P��7_��Ϋ��ES���. +>:�j��-���݈S���)���P/�[�O�RIvR3feI�kl*�F����t=��j\�/���=K��l�+B�jH��(n�bB*f��s.h��x/h�o�C*p�F�� �5V��8E��&�w���8��������Q�V���?5�k��=�&�'�m&j�Ҿcf����-��c.-��G-�h$�CVEK۟v��`K��#h�s�N������7R�	l�:�^.�g���V�@����D��zqBh9%�h��;�3$�TB��m�	U35�����*���k��mt&�ʹ�����S��?�W���:k"k"֖�$`��Ȕ��=��y���}�]@i�l�Ua`��]�K@�����v�7�K�m���KO��5�!�D9^�^��0pRg����Ǘ�T�o6U�6�xf@�l4Q"������U���H��D��\[��Oh'���G�D�xD����>�������%ۦ�� ��C+δ�T�M79k��ֲ���Lf\��23�|�p���Q�Qq��~���qx�@�	�W�^>��J��[���7���?	-�> 	1��CZ����܇<�?�;�,�M�ʙ�V�m,sGGf�|����`仃$���.�J���z㸷�M�à����J -.��%�n�m��/���~����eo�]#��#�=��P�r٣���*�\>�iZ�{m�<6A�\*UmeÉ�{���U�\�����$}w81n�K���g��_���d� Ir�� %D�d�>>,�mg��3<���}G9�0o5�V�渶�¹E+�~��PC���9���5���-As�v�zRm�TY[��j䣄��/r�Q�*ŧ_�i��)wc�?s��&h!�W�ܙ2��!��&�t�������O����Y�6ԄY���um��?w�d�
VcP�׺���٬km�Ƚ�0��b���k9|��}Y��0��#� �'u�c���䒵�(�$+�kT� ߰�G�pǀ�10�
��2�V���rr�3QSVD��F� �
��/w|ڑ���;l��A���w�Z�xȼP�OsW�K-�ŃG���t��%3dG�ZQ#������6T�|��#�/��Ox%��y�MtH ����(+֭��K�۫:���ף�[}�#xz�8��-X�3����?������|��̉�)Ԉ�YQr�`�F�F�$�'󣽮�j����C�#�t8��{��N�fZ�cjN�B*b$|�����P2�4]��)�I��ٟ�Ѷ�9��p}ϯޭz�|�=�hK:4L&?~�߾����p1o|d΀�	W��L�xϰ�`P-�A��Ώ[6��g�7��7��׶Yx����R5��~��?���ފI5�pݰ�>�>�uHL�HvM�/������l����7����[H���:��d��6���A؆n�
RO��{�9<8e)W�9�f���NVE�J�� �/�y�;�@��p�7�^@���$��え'��G��7�(���{)r�C݉��A����׉R�p���*g���w�%��keW����9@h�	ڦ�{��9B�u���Z��\�N\��/���f!�`�v��N���H|�!���D+xM8��+˦�:�%�jjŜM�w��� �8zò��(�8a��L	)
/P ]��<�'�b���mhj9Dds����L�?J6J�ކ;a�8L�������yd:���4PzDC���
������7@��`��j<�V�$��0ѫKe7���$Ͷ<g#��)�]����q�
`�[��Z��&�io��z�����2ܰ	Q>�f��D�������I>�cq�OgN/_Y١8��!r W��!���В�mV�Ԯ�m�}�XB$��.~�a�]�5���=��/��wz���Ť���'j��@�u5���r|6����[�d�<W�_n�G�3`\W%`.��0�;��IWv�ݫ���	��ާ�����`�k%/O�Ӧ�;�x	OS����k��-��q'P��l ��T�dAk[�c��eAqjd�F��Wt$�� �K󮜚z�!;�B����E��ņ/A%qP�����ZS���N�Ԛ�$���V$Xm��R���,t��=2Y�K��\ыSK��H��7�1� ����.�P�'q�V�H�a&�iw��m�o+j���*�iO⻨08$����ư"o2��őEm�]�K���S@������ !�	lm�z�S���nQH�(DPC�s�������/�A||E�`}�ɂP&�zv��Q[$\Fكp�y��";uz��X �[[�a��X8���]]�[���x_�%�'���CPqK�B#��F�wK�Re�v�FZ*�nv z0a��p݇��̠�Lӈ�W�T��r�ϳ�Zvh'l�^�*G�GmTj�L�����h���e��M��������Q充� �w/}1���kӈ<ذ�A8_������s�v�E�p3�u`æ2�uT[u`Y��Ƒ;���B!
<��pђ��mm�vx��`�:#=5���5�'ף�:�a����0�|��˃�dI�Eֈ��{�BH8���u�x��lv�{8� v��鑠��W���i�U��h�Zr��#h��P;��W�@?�X��EG�mc5�ia�
6��߻���%K�ߩ�B�O�Q6�N\ʱ�6r���:��$�ӧ���a�+"yp�N�+Y�P�����+��!���<2�N~Čo�ܔ(�v��duJ��-�I�:y�ŉ�+��#UPR���ڝNK���?������vi�!�s�(��̩V�&��(���?������a����I��" E��4#����f�GS���$I�|{Λ�������,�{��m��3A|�L�sB�z�<��)�_�A����>Ř:��_�P5NZ?�6�������F̆����c�Gd!�}7�r�r"!zO�˃3v�J�65������i���^����o\��}�pE��T��Z�c�����$�f��OӒ��(:zKJ�4;�T�A�a��(�W��f]�Hf_�8�(FYi�J��36A�qB���$�l�UK���'����>j��>H�<p#^~�~��Nv��G���+��V�u�S���u�j�E�m'EG'�e�/>�Lǭd��+:�WxFh̑�;.݌�4F�D�����IS�`��_n�G��s}���ڻ�.�!��#�x݌S��lƬ�m,���g�.��DN��WyA��mW�	1��H�zf �}�T�cX�E��Fu������*P�˯�v-��If�
���r]���K���Ѫ~�]�ئ�)����fhŌ�pa�H�r%��BLb�*�'=����&��۝=��{��|��H��JY��C��x�x� �  �ܝ��s�o��$3�cW��8����2�lKGº���b!U������I�[���[��F��LO�n����|��k�X�f���땔NY96�T�T�R��A8��e�7�p�[ա\I!�8�ET ���=L��`(���򍚵K��5�٠��(աK���뒎]Q��|!�c��ńv�Zz��=k����-ް!̐��'��v�x�_��J}FND�h�#I䘗���BBq�˲�	��!�v~*e�s)U`��	��Zغ�#��q3����<���\�
���z/�N����6��Z2v-^��j`�m�n_N�pu�����3w�$0F������Y������ei˕�v=<��j���P&@1+B ��ZF?m7��	�AG�e
�?e���� }\Y[���eQ9����!�?�y�6D����ʰ����?�ŌfK�ڹb:����?�u�W�ϯ(s�!KB��]1���eG�j�Gvz��~a�Q��y.A���+Dm�Ƈ0,�olTC~���H�1
65�ڃC&���ye�,�9���=� ���(Y���Z��
���_ވŐ���îjǧ�S��R�mS
2D�(�4c���Ʀ�ض�`�f�z�i�R񌒡=8'->��T<����'��v7Uc9����GX؛'�T�o�:�V��A2YhȰ?.����L�
.ir�q��eW�\��B���'p\;��S�Ͱ�N���46U�A�m��Upݬ�<���X땃�Y,��_��+�c�����G ����C��)&@ǹ�>��H���?�5���}��l���4��~Y�}�/mT��rO\��'�L�
ȱ��b[���eӿ�^���N?�HhT�&.tcv�Z��s<^��2C����C��xa��(G|m�jKʙ��d5C�ȓp�V������r��Yh��8>�`�Y&*0)Q��
�H2�ȵ?�&�r��[��L[A���9��I'ђ��8�bbX�r3V��@\p�I�~�`�j��ũ/Q6=)�@z˅�b�]/����ju+Ej�_�\���aD}o��4s��Gw(Gֈ�8����ھs�Q����O8�+E�r�����N΋-�{��I;O� Ҙ�J_��Vm+^�Ù����R�G�x���'�O-~ơ�P2�F>����x��O�ɼ����0=_�Z��>�S�B��՛��㱽�Ѭ����p����Z}� ���V����l6����      �   &   x�3�t�q�u��Wpq�� �`G�? ����� ��z      �   �   x���͑�@��t�����b#���XPg[^��
|��CF*j���.���?SRxT�4J�@�)�2�E+��:�����;Z�o��=D�'m�/�?d=i�b�N���wT�4wۍ����L�j�Y.5��`JC��4CĦ1�6���1�I����*����z7�����.���T�Z���pͻ�/QΏ_n�zi�y�F-����F��gpѧ��}r�"����Z��=���6����1�/�:v�      �   #   x�3�ru
�W�����"�=... n��      �   i   x�3�t�,NN�Qp�M�L�+I��4�4202�5 !C3+Cs+Sclb\Ɯ��)�%�E
PCRRB���JR9��4Y61.#N�%x0DwP�Ԍ+F��� j�0�      �   2   x�3���)I�,���".#N����ט3,��|�DM�H� �K      �   �  x�m�ݎ� F���Ya�y��,��.RZ�ݙ�_�&@дR{s�>\8A�8���f�U��
����t|�I8�N������:VΔ�$q$�r�ى�NSZ��8�.y��MT+��⫬�P���'�J�_���"�� ��ĊĆd.i�]Y�_N/f��8�8S:(H)�c��YP��=!�PQ��)�ɾ&1m� o��\��1�N:�g�j��j��yn����`g2�'rY�-(3��%�E�LIL�ɘ�ANy()g�~F��k���lR��������2���YӸ���h5��hN�
�-.�U��n�Y����moo��܈�,�*�Y�h�-d�p�c�@��s�1�F�� gT�����G�s|���Խ�*�{z7>ɣD������y�����J�hB?i��̧��#�3����Q�wR4(��i�0!�k�h�������<v=���+q�T7v���"���O�n��h��_�J�r{m����u��c�0      �      x������ � �      �   &   x�3�t,(��	-N-�4��2F�Zr!q��b���� gu0      �      x�3��;�8�3����8�3s��=... �[J      �   ;   x�3�v�u�t�4202�5 !C3+Cs+cKlb\F@�~nA�:�,����q��qqq /��      �   )   x�3��wt��".#�`� g�,�����qqq 'B
�      �   P   x�3�t,.N�M�I�LT�IM�,�I,�,K��".#΀�Դ�̒ҢD�Ҽ��̂���T���|��ļ�|��=... $:
      �      x������ � �      �      x������ � �          t   x�3�,��I���,.�,OM�4202�50�52R00�2��26�&�eї\��X�J�Nc��ԔL�l4��KI�I%�FSβ�"��? �2�L.�LD1�9EȂ3�"9�4Y,F��� I            x�3�ts�RUp����"�=... <L�            x������ � �         =   x�3�tLJ-*�W���".#N�\��������Ë�3�Ɯn�y�9�U�)�P�=... ���         �   x�m�A�0���}�̽kvR�0L-� R��`�r�~�<�<���a0�<U�J���n�zo�H�H��*�ݱ��}�>Њ4�'n\����b��4:, kk���	[jog	�,��R�SvD��C����1���D�}/�?�S.X6Ɓ.5t5B?��<�      	      x�3�4202�,��"�=... '��         v   x�3��J�K�,��,��".#N�Բ�"1cN�Ģ��&��IE�9p�)PA&Bڌӫ4/�7�s�������%K��Ԓ��$$;8�KKJQ�9���Дq��V����qqq ��;0            x������ � �         S  x����n�0���S�2���?�m^�X��^��^��	g{��F�,2�
p.��-�#e�~��xS����p>F��B�JbL�AG�� 	�kgf�A$��|d��GFb��u"1@�O�N%�A��q"�R�ޢS$1@�7���O��R��O�ꭕ`���hU��/sJ;D�؏cs��� ��9�GK(��ԧVb@��&���'��YŏĀ�Ǳ��Kb�]�{��~�x��)���Л��M��!�0J�Ͽ�C|W���a&��J(������K�}�~ډ}�RN�h�����$������~�z�����@\T��$�E'�+ݏ����z5�0�6��E;~S�u3�1��0`<�ʹ͹*����?�վ����:nڸؿ�}��Y�Lb�-V�v[m�M��+���c�/�m��[1[�g6�M��ɐ6�_U#������Phz��;Hb�Y�7�x�$1��@�ϜV.�o���$b|~s\���Ā�R}V�GFzsy_���EK�s�\b����(��Z�O��K1֫X���W����Pb`���B��<hxF%o��g��	 � �R}         �   x������0��s�)��t��fnA{��VX��%���-�z������^?�ɄHձ;�Fmj�)�D#�G�c6a�d@���ɀ�ڥm�"C�d@N���Ĳs�M�%9�L2�����5)�_�4�Bͯ��i��ڄ���w�4 ��Z�jY}��g�Y�a�QV� ^�^F��9<�*�	�cJm�uL��y�t-���n��(�ek/��ꯜ���`�?�1 �,`��           x��U͎�0>O� �0憲�*jC���T��G��@d}�� �b�I�@��ڪ�[$����7�F!��(�UN�-���aE��X}����!h���܏c`JI�1�@��|:j�#�1��|3��u����!�J��㏼z�d�L����ĉR�(�U�y�M�k���X�G{�;yo���{E��ޖ�ik�Z�I������9��C�r��ħ��$�2ż�b��l���=D�/�	iJ�d�*�|Y&X�O{)I}�p�o����4�R�L�ֹ��W���t{���m�SF'cȖ�m+���'ck�*����n�EC�Op^�sZ���:w�o�_��A��-�j@pD���Z4�XO���j����9Tuk��9�$'p�-�}����:h�{ɥ��:L/=����������p�D�"԰�皸����n���M�nɘA��>*���@"��9���g�l��_��~B�^�&�t�ɮד���@�dt
�M:�A��C���V>>�D�)� X���:�<�'a���         .   x�3�4�2�4�2bc 6bS 6bs � �|# ߈+F��� ��Y         Q   x�3�tL����,OM�4202�50�52R00�2��21�&�e��������E�����961.cN��b�����q��qqq �"�         �  x���[o�0��ͯ� ���ou6k�+�FӴ��R�HM�����li�t����������(U������,]��ħ�	���ʙȁ �:ք&��,��,	�y�0�v���ݗ�q�y�һ5�ۗo��`r�y����Bi�Q��y�$�tU��j���+K��_9?$�Z� x�!��;G�z7>M#���es7���i�������_Z�����F��1i8�JR+��m���.&zۅ�wȮD4���Ρ*�,�J�t�B�|>_�k
� ̜gbi�A�4�d9ؾ�W����$;�l�>����<��*ơ������[�{L�<Ki\H�]��ut�4'$s�Ss���\Lz4�UI�1a7���"����&�h�r�J�v���	.-�9�S�>������w?�69�[��{^=�J��`�ql��"�N��"���؋���u}tg����ۓ��97�x\���0���s�e�w��<�         &   x�3��M,N.������".#N����<�@� �
�            x�3�tL.J��"�=... )�           x����N�0���)��HQ7IQGQ)O��M�Tb�q���0 ����7�p�$��J�<�t��������I�G�q���*��L�8��I�7��ތ���@V���Q+PY�����n׽+��0��p׳�׍o\E���`�q�cs�䂸oZ�ii�݁��EQ�����N!_�('%�נ���y��K��	����~������y�쿌^&�S�c�hQJ��攨6�^4m?���D�ٓT?����vn��2
�����G      !      x�3�t���K��"�=... 0p<      #      x������ � �      %   $   x�3�JM/�I,�,��".#NϢ"4�=... �w      '      x������ � �      )      x������ � �      +      x������ � �      -      x������ � �      /      x������ � �      1   J   x�3�40V�Up,�/N�+IL�Wps���2�40Dr�2�40���g��e�$B%L8L�%@��qqq ���      2   %   x�3�t,�,���".#N���D�@b
L(F��� ��
      4   6  x���Ko�@��ïp�q �U)�*��`4nF (�0�¯��E51�9����|�� V���Ղ�{����+�0�.p��v���c�/:�VV)[�v�j�3E���q��3��[�$p�޷���=��'�a��RM��T}Ȅ�u`%Ǽ�k���� �5x�'v����F�0�-���0����>dK{t�/��|4Yw::g�$1V���a*�!A`�U�:Y�D����'v��f~�)/�Q{̵�5f$��Ʒ���6�[C���e�g�����zzS�h�JoL����#�T�y}���P��9��      6   /   x�3��OI-R�IM�,�I,�,���".#��kEjr)�x� �Uq     