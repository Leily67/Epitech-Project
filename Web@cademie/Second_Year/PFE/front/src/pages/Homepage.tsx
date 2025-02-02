import { StatusBar } from 'expo-status-bar';
import { StyleSheet, View, Text, TextInput, TouchableOpacity, ImageBackground } from 'react-native';
import AuthScreen from './AuthScreen';
import Footer from './Footer';
import Header from './Header';


export default function Homepage() {
  return (
    <ImageBackground source={require('../img/calorimage.jpg')} style={styles.backgroundImage}>
    <View style={styles.container}>
      <Header />
      <AuthScreen />
      <Footer />
    </View>
    </ImageBackground>
  );
}

const styles = StyleSheet.create({
container: {
  flex: 1,
},
backgroundImage: {
    flex: 1,
},

});
