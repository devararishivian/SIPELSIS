/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     1/12/2018 10:01:47 PM                        */
/*==============================================================*/


drop table if exists TB_ADMIN;

drop table if exists TB_CAPELSIS;

drop table if exists TB_PELANGGARAN;

drop table if exists TB_SISWA;

/*==============================================================*/
/* Table: TB_ADMIN                                              */
/*==============================================================*/
create table TB_ADMIN
(
   IDADMIN              varchar(255) not null,
   NIP                  varchar(32),
   NAMA_ADMIN           varchar(255),
   EMAIL_ADMIN          varchar(255),
   JK_ADMIN             varchar(20),
   FOTO_ADMIN           text,
   UNAME_ADMIN          varchar(32),
   PASS_ADMIN           varchar(32),
   ROLE                 varchar(10),
   primary key (IDADMIN)
);

/*==============================================================*/
/* Table: TB_CAPELSIS                                           */
/*==============================================================*/
create table TB_CAPELSIS
(
   IDCAPELSIS           varchar(12) not null,
   IDADMIN              varchar(255),
   IDPELANGGARAN        varchar(12),
   IDSISWA              varchar(255),
   primary key (IDCAPELSIS)
);

/*==============================================================*/
/* Table: TB_PELANGGARAN                                        */
/*==============================================================*/
create table TB_PELANGGARAN
(
   IDPELANGGARAN        varchar(12) not null,
   NAMA_PELANGGARAN     varchar(50),
   POINT_PELANGGARAN    int,
   KATEGORI_PELANGGARAN varchar(12),
   primary key (IDPELANGGARAN)
);

/*==============================================================*/
/* Table: TB_SISWA                                              */
/*==============================================================*/
create table TB_SISWA
(
   IDSISWA              varchar(255) not null,
   OAUTH_PROVIDER       varchar(255),
   OAUTH_UID            varchar(255),
   NIS                  varchar(32),
   NAMA_SISWA           varchar(255),
   EMAIL_SISWA          varchar(255),
   JK_SISWA             varchar(255),
   JURUSAN              varchar(255),
   ANGKATAN             varchar(10),
   KELAS_SISWA          varchar(10),
   NOABSEN_SISWA        int,
   URL_FOTO_SISWA       varchar(255),
   URL_PROFIL_SISWA     varchar(255),
   UNAME_SISWA          varchar(32),
   PASS_SISWA           varchar(32),
   primary key (IDSISWA)
);

alter table TB_CAPELSIS add constraint FK_RELATIONSHIP_3 foreign key (IDSISWA)
      references TB_SISWA (IDSISWA) on delete restrict on update restrict;

alter table TB_CAPELSIS add constraint FK_RELATIONSHIP_4 foreign key (IDPELANGGARAN)
      references TB_PELANGGARAN (IDPELANGGARAN) on delete restrict on update restrict;

alter table TB_CAPELSIS add constraint FK_RELATIONSHIP_5 foreign key (IDADMIN)
      references TB_ADMIN (IDADMIN) on delete restrict on update restrict;

