import React,{Component} from 'react';
import {View, Text, TextInput} from 'react-native';

export default class App extends Component
{
  render()
  {
    return(
      <View>
        <Text style={{fontSize:20}}>Fleren Picestelia</Text>
        <TextInput placeholder="hai"></TextInput>
      </View>
    );
  }
}