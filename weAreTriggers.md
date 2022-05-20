# Triggers : 

[Users Triggers](#users-triger-)<br>


#### Users triger : 
```sql
create trigger TRIGGER_USER
    after insert or update or delete
                    on USERS
                        for each row
begin
        if inserting then
            insert into ELEVES (ID, CODE, NOM, PRENOM, NIVEAU, CODE_FIL, LOGIN, CREATED_AT, UPDATED_AT)
            values (:NEW.ID , dbms_random.string('U', 8) , :NEW.NAME , :NEW.NAME , 'GINF1' , '1' , :NEW.login , :NEW.CREATED_AT , :NEW.UPDATED_AT ) ;
else
            raise_application_error(-20000,'erreur') ;
end if ;
end;    
    /
```

```html
<form action="{{url('Eleves/'.$item->id)}}" method="POST">
                            <a href="{{url('Eleves/'.$item->id.'/edit')}}" class="btn btn-success" style="margin-left: 5px;" type="submit"><i
                                    class="fa fa-pencil-square-o" style="font-size: 15px;"></i></a>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-success" style="margin-left: 5px;background: rgb(218,13,50);" type="submit">
                                <i class="fa fa-close" style="font-size: 20px;"></i></button>
                        </form>
```
