# Object Serialization and Deserialization
![Object Serialization and Deserialization](https://miro.medium.com/max/781/0*MmmFxL-hkPh_t6Xg.jpg)

# Object Serialization

 - Store data in a persistence storage.
 - Transfer Data.
 - Store data to files

# Object Unserialization

- Opposite to serialize

# Security issues with unserialize()
- Never pass user’s inputs to unserialize() function.
- Deserialization of user’s input is the major security problem.

# PHP Magic Methods
- **__destruct()** => allows you to perform some operations before destroying an object.
- **__wakeup()** => it is called when we unserialize().
- **__sleep()** => it is called when we serialize().