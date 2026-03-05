<!--
    Dear user using my README as a base
    to create your own, I’m happy to authorize its use 
    and I’m glad you liked it! I just kindly ask for one thing:

    Please, leave a star on my README it would truly make my day :)
    GitHub: https://github.com/fqrqh
-->

<!-- Banner  -->
<a href="https://github.com/fqrqh">
  <img src="https://raw.githubusercontent.com/fqrqh/fqrqh/refs/heads/main/d5aae1396caca37c2db61280a4244431.jpg" alt="Banner" style="width:100%; height:auto"/>
</a>

<div align="center">

  <a href="https://api.github-star-counter.workers.dev/user/fqrqh">
    <img width="120px" 
        alt="Stars" 
        title="Stars Profile" 
        src="https://custom-icon-badges.herokuapp.com/badge/dynamic/json?logo=star&color=000000&labelColor=FF1001&logoColor=ffffff&label=Stars&style=for-the-badge&query=%24.stars&url=https://api.github-star-counter.workers.dev/user/fqrqh" /> 
  </a>

  <a href="https://api.github-star-counter.workers.dev/user/fqrqh">
    <img width="111px" 
        alt="forks" 
        title="Forks Repository" 
        src="https://custom-icon-badges.demolab.com/github/forks/fqrqh/fqrqh?color=000000&logo=fork&style=for-the-badge&logoColor=white&labelColor=FF1001" /> 
  </a>

  <a href="https://github.com/fqrqh?tab=followers">
    <img width="150px" 
        alt="Followers" 
        title="Github Followers" 
        src="https://custom-icon-badges.herokuapp.com/github/followers/fqrqh?color=000000&labelColor=FF1001&style=for-the-badge&logo=person-add&label=Followers&logoColor=ffffff" />
  </a>

</div>

</br>

<!-- Who am i? -->
<img src="https://media.tenor.com/36y7ERdf9rsAAAAj/persona-5.gif" width=390 align="left">
<div align="center">

**Who is He??**

</div>

<div align="justify">

I am a Student currently in a **CyberSecurity** HighSchool located in `France`, currently working as a **freelancer** and **Indie developer**, My professional journey is driven by **continuous learning** On my free time.

Over time, I have developed **solid experience** across the **Game Development**, with a strong passion for `Indie Games And Coding`, where **logic meets creativity and visual design**. Alongside web technologies, I have expanded my skills into some **Languages**, focusing on coding modern system for games using `Unreal Engine "BLUEPRINTS", Unity "C#"` and `Roblox Studio`, I commonly use a rich text editor such as `Visual Studio Code` > [!WARNING]
> `You can check out my portfolio on my discord!!!`

At the moment, I am working as a **freelancer**, developing **complete systems** for a video game im working on, from **planning and coding interface design** to **implementation and delivery**. This hands-on experience has strengthened my **problem-solving skills**, while constantly pushing me to grow as a **developer and professional**.  


**My Skills**

</div>

<div align="justify">

I've been manipulating `luau` since 2023 now , making project and improving my code skills here a lil sneakpeek so you can imagine my level in lua '' to see my other portfolio you can come on `Twitter` "Fqrqhhh" or `Discord` "fqrqhhh"

<details>
  <summary>💻 Click me to see the code!!</summary>

```lua
local uis = game:GetService("UserInputService")
local Players = game:GetService("Players")
local Player = Players.LocalPlayer
local PlayerGui = Player:WaitForChild("PlayerGui")
local ScreenGui = PlayerGui:WaitForChild("ScreenGui")
local TextLabel = ScreenGui:WaitForChild("TextLabel")
local character = Player.Character or Player.CharacterAdded:Wait()
local hrp = character:WaitForChild("HumanoidRootPart")
local tw = game:GetService("TweenService")
local v = Vector3.new(6.062, 5.198, 5.907)
local rs = game:GetService("RunService")
local Debris = game:GetService("Debris")

local TweenInfo = TweenInfo.new(0.10,Enum.EasingStyle.Linear,Enum.EasingDirection.InOut)

local transparency1 = {
    Transparency = 0.5
}

local transparency2 = {
    Transparency = 1
}

local p = Instance.new("Part")
p.Anchored = false
p.CanCollide = false
p.CanQuery = false
p.CanTouch = false
p.Massless = true

p.Size = v
p.Transparency = 1
p.Parent = character

local weld = Instance.new("Weld")  
weld.Part0 = p                 
weld.Part1 = hrp             
weld.C0 = CFrame.new(0, -2, 5)      
weld.C1 = CFrame.new(0, 0, 0)      
weld.Parent = p 

local t = tw:Create(p,TweenInfo,transparency1)
local t1 = tw:Create(p,TweenInfo,transparency2)

local function partadded()
    t:Play()
    wait(0.3)
    t1:Play()
end

local cf = hrp.CFrame
local parts = workspace:GetPartBoundsInBox(cf, v)
local hitcharacters = {}

for i, part in pairs(parts) do
    uis.InputBegan:Connect(function(Input,gp)
        if gp then return end
        if Input.UserInputType == Enum.UserInputType.MouseButton1 then
            partadded()
            if hitcharacters:FindFirstChildOfClass("Humanoid") and not table.find(hitcharacters,part.Parent) then
                hitcharacters:FindFirstChildOfClass("Humanoid"):TakeDamage(0.1)
            end
        end
    end)
    wait(0.1)
    print(parts) 
end
```

</div>

</br>
</br>

<!-- badges -->
<div align="center">
  <strong>You can Click here</strong>
  </br>

  <a href="https://br.pinterest.com/fqrqh/" target="_blank">
    <img width="130px" 
          src="https://img.shields.io/badge/Pinterest-FF0000?style=for-the-badge&logo=Pinterest&logoColor=white" 
          alt="Pinterest"
          title="My Pinterest"/>
  </a>

  <a href="https://www.linkedin.com/in/fqrqh/" target="_blank">
    <img width="100px" 
          src="https://img.shields.io/badge/Linkedin-FF0000?style=for-the-badge&logo=linkedin&logoColor=white" 
          alt="Linkedin"
          title="My Linkedin"/>
  </a>

  <a href="https://mail.google.com/mail/?view=cm&to=fqrqh@gmail.com" target="_blank">
    <img width="97px" 
          src="https://img.shields.io/badge/Gmail-FF0000?style=for-the-badge&logo=gmail&logoColor=white" 
          alt="E-mail"
          title="My E-mail"/>
  </a>

</div>

</br>

<img src="./assets/icons/knife.png" width=106px align="right">

> [!Caution]
>
> Code is never finished, it only gets **better**.
>
> What you see here is built with **practice**, **curiosity**, and **persistence**.

</br>


    </td>
  </tr>
</table>
