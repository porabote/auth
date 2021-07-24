create table users
(
    id          int unsigned auto_increment
        primary key,
    username    varchar(50)            not null,
    person_id   int                    null,
    password    varchar(255)           null,
    allowed_schemas     varchar(255)           null,
    created     datetime               null,
    name        varchar(30)            null,
    last_name   varchar(30)            not null,
    middle_name varchar(30)            null,
    role_id     int                    null,
    updated_at  timestamp              null,
    created_at  timestamp              null,
    token       varchar(100)           null
)
    charset = UTF8MB4;
create index id
    on users (id);

