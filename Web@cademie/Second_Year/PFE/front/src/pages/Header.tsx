import { StatusBar } from 'expo-status-bar';
import { StyleSheet, View, Text } from 'react-native';


export default function Header() {
  return (
    <View style={styles.container}>
        <Text style={styles.logoText}>
            meatFit
        </Text>
    </View>
  );
}

const styles = StyleSheet.create({
container: {
    flex: 0.4,
    backgroundColor: '#FCF0D1',
    shadowColor: 'black',
    elevation: 10,
},
logoText: {
    fontSize: 30,
    textAlign: 'center',
    marginTop: 25,
    color: '#5C0B41',
    fontWeight: '300'
},
});
