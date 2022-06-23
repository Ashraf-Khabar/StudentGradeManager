# Triggers : 

[Users Triggers](#users-triger-)<br>


#### Users triger : 
```sql
create or replace trigger TRIGGER_USER
    after insert or delete
    on USERS
    for each row
begin
    if inserting then
        if :NEW.ROLE = 'eleve' then
            insert into ELEVES (ID, CODE, NOM, PRENOM, NIVEAU, CODE_FIL, LOGIN, CREATED_AT, UPDATED_AT)
            values (:NEW.ID , dbms_random.string('U', 8) , :NEW.NAME , :NEW.NAME , 'GINF1' , '1' , :NEW.login , :NEW.CREATED_AT , :NEW.UPDATED_AT ) ;
        elsif :NEW.ROLE = 'resp' then
            insert into RESPONSABLE_FILIERES(ID, NOM, PRENOM, DEPARTEMENT, LOGIN, CREATED_AT, UPDATED_AT)
            VALUES (:NEW.ID , :NEW.NAME , :NEW.NAME , '----' , :NEW.LOGIN , :NEW.CREATED_AT , :NEW.UPDATED_AT) ;
        end if ;
    elsif deleting then
        if :NEW.ROLE = 'eleve' then
            delete from ELEVES where ID = :OLD.ID ;
        elsif :NEW.ROLE = 'resp' then
            delete from RESPONSABLE_FILIERES where ID = :OLD.ID ;
        else
            raise_application_error(-2202020 , 'EROOR MESSAGE') ;
        end if ;
    end if ;
end;
```

#### Moy Trigger : 
```sql
create trigger MOY_INSERT_TRIGGER
    after insert
    on NOTES
    for each row
declare
    Moy float ;
    Code_filiere varchar(255) ;
    Level_etu varchar(255) ;
    Num_matiere number ;
    Num_note number ;
begin
    select AVG(NOTE) into Moy from NOTES where CODE_ELEVE = :NEW.CODE_ELEVE ;
    select NIVEAU into Level_etu from ELEVES where ELEVES.CODE = new.CODE_ELEVE;
    select FIL.CODE into Code_filiere from FILIERES FIL , ELEVES ELE where ELE.CODE_FIL = FIL.CODE and ELE.CODE = :NEW.CODE_ELEVE;

    select count(*) into Num_matiere from FILIERES FIL , MODULES MODU , ELEMENT__MODULES ELEM_MOD where FIL.CODE = MODU.CODE_FIL
                                                                                                    and MODU.CODE = ELEM_MOD.CODE_MOD and FIL.CODE = Code_filiere and MODU.NIVEAU = Level_etu ;

    select count(*) into Num_note from NOTES where CODE_ELEVE = :NEW.CODE_ELEVE ;

    if Num_matiere = Num_note then
        insert into MOYENNES (ID , CODE_ELEVE , CODE_FIL, NIVEAU, NOTE, CREATED_AT, UPDATED_AT)
        values (:NEW.ID , :NEW.CODE_ELEVE , Code_filiere, Level_etu , Moy , :NEW.CREATED_AT , :NEW.UPDATED_AT ) ;
    end if ;
end ;
/
```

```sql
create or replace trigger MOY_DELETE_TRIGGER
    after
    delete on NOTES
    for each row
begin
    delete from MOYENNES where MOYENNES.CODE_ELEVE = :OLD.CODE_ELEVE ;
end ;
```
```sql
create or replace trigger MOY_UPDATE_TRIGGER
    after
    update on NOTES
    for each row
declare
    moy float ;
begin
    select AVG(NOTE) into moy
                     from NOTES
                     where CODE_ELEVE = :NEW.CODE_ELEVE ;
    UPDATE MOYENNES
        SET MOYENNES.NOTE = moy where CODE_ELEVE = :NEW.CODE_ELEVE ;
end ;

```
trigger auto increment : 

```sql
create trigger USERS_ID_TRG
    before insert
    on USERS
    for each row
begin
    if :new.ID is null then
        select users_id_seq.nextval into :new.ID from dual;
    end if;
end;
/
```

```sql
create trigger RESPONSABLE_FILIERES_ID_TRG
    before insert
    on RESPONSABLE_FILIERES
    for each row
begin
            if :new.ID is null then
                select responsable_filieres_id_seq.nextval into :new.ID from dual;
            end if;
            end;
/
```

```sql
create trigger PERSONAL_ACCESS_TOKENS_ID_TRG
    before insert
    on PERSONAL_ACCESS_TOKENS
    for each row
begin
            if :new.ID is null then
                select personal_access_tokens_id_seq.nextval into :new.ID from dual;
            end if;
            end;
```
```sql
create trigger MOYENNES_ID_TRG
    before insert
    on MOYENNES
    for each row
begin
            if :new.ID is null then
                select moyennes_id_seq.nextval into :new.ID from dual;
            end if;
            end;
```

```sql
create trigger MODULES_ID_TRG
    before insert
    on MODULES
    for each row
begin
            if :new.ID is null then
                select modules_id_seq.nextval into :new.ID from dual;
            end if;
            end;
```
```sql

create trigger MIGRATIONS_ID_TRG
    before insert
    on MIGRATIONS
    for each row
begin
            if :new.ID is null then
                select migrations_id_seq.nextval into :new.ID from dual;
            end if;
            end;
```
```sql
create trigger FILIERES_ID_TRG
    before insert
    on FILIERES
    for each row
begin
            if :new.ID is null then
                select filieres_id_seq.nextval into :new.ID from dual;
            end if;
            end;
```
```sql
create trigger FAILED_JOBS_ID_TRG
    before insert
    on FAILED_JOBS
    for each row
begin
            if :new.ID is null then
                select failed_jobs_id_seq.nextval into :new.ID from dual;
            end if;
            end;
```
```sql
create trigger ELEVES_ID_TRG
    before insert
    on ELEVES
    for each row
begin
            if :new.ID is null then
                select eleves_id_seq.nextval into :new.ID from dual;
            end if;
            end;
```
```sql
create trigger ELEMENT__MODULES_ID_TRG
    before insert
    on ELEMENT__MODULES
    for each row
begin
            if :new.ID is null then
                select element__modules_id_seq.nextval into :new.ID from dual;
            end if;
            end;
```
```sql


```





































