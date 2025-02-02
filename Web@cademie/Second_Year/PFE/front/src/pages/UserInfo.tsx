import React from 'react';
import { View, Text, Image, StyleSheet } from 'react-native';

type Props = {
  imageUrl: string;
  name: string;
};

const UserInfo: React.FC<Props> = ({ imageUrl, name }) => {
  return (
    <View style={styles.container}>
      <Image style={styles.image} source={{ uri: imageUrl }} />
      <Text style={styles.name}>{name}</Text>
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    alignItems: 'center',
    justifyContent: 'center',
    backgroundColor: '#FFFAED',
  },
  image: {
    width: 100,
    height: 100,
    backgroundColor: '#FF8B8B21',
    justifyContent: 'center',
    alignItems: 'center',
    borderRadius: 10,
    
  
  },
  name: {
    fontSize: 16,
    fontWeight: 'bold',
  },
});


export default UserInfo;
