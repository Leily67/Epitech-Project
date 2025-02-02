import { StatusBar } from 'expo-status-bar';
import { StyleSheet, View, Text } from 'react-native';


export default function Footer() {
  return (
    <View style={styles.container}>
      <Text style={styles.copyright}>
        © 2023 MeatFit All rights reserved. 
      </Text>
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 0.2,
    backgroundColor: '#FCF0D1',
    shadowColor: 'black',
    elevation: 10,
  },
  copyright: {
    fontSize: 10,
    textAlign: 'center',
    marginTop: 50
  },
});
