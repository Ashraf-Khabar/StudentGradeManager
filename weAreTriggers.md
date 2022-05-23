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
            delete from RESPONSABLE_FILIERES(ID, NOM, PRENOM, DEPARTEMENT, LOGIN, CREATED_AT, UPDATED_AT)
        end if ;
    else
        raise_application_error(-2202020 , 'EROOR MESSAGE') ;
    end if ;
end; 
    /
```
